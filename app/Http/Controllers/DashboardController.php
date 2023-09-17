<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Movements;
use App\Models\User;
use App\Models\ProfileModules;
use App\Models\Products;
use App\Models\Modules;
use App\Models\Maintenances;
use App\Models\ModuleDepartament ;

use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    
    public function index( Request $request ) {

        return view('sign-up');
    } 

    public function dashboardNovo( Request $request ) {

        return view('index-novo');
    } 

    public function dashboardBase( Request $request ) {

        return view('dashboard-base');
    } 


    public function listagemNovo( Request $request ) {

        return view('novo-painel/listagem');
    } 

    
    public function signUp( Request $request ) {
        return view('sign-up-user');
    } 

    public function login( Request $request ) {
        return view('welcome');
    } 

    public function logout( Request $request ) {
        $request->session()->put('userIdSession', '');
        $request->session()->put('nameSession', '');
        return redirect('login');
    }

    public function dashboard( Request $request ) {

        $situations = ['0' => 'Recebido' , '1' => 'Em Execução' , '2' => 'Concluído'] ;

        $maintenances = Maintenances::all() ;
        if( ! empty($maintenances) ) {
            foreach( $maintenances as $maintenance ){
                $maintenanceName[$maintenance->id_maintenance] = $maintenance->name ;
            }
        }

        $productName = [];
        $products = Products::all() ;
        if( ! empty($products) ) {
            foreach( $products as $product ){
                $productName[$product->id_products] = $product->name ;
            }
        }

        $productSerie = [];
        $products = Products::all() ;
        if( ! empty($products) ) {
            foreach( $products as $product ){
                $productSerie[$product->id_products] = $product->serie ;
            }
        }

        $movements = Movements::orderBy('date','desc')->limit(10)->get() ;
        $maintenances = Maintenances::all() ;
        $dash = 'dashboard' ;

        if( $request->session()->get('id_module_departament')  == 2 ){
            $dash = 'dashboard_rh' ;
        } else if( $request->session()->get('id_module_departament')  == 4 ){
            $dash = 'dashboard_help' ;
        } else if( $request->session()->get('id_module_departament')  == 3 ){
            $dash = 'dashboard_fin' ;
        } else if( $request->session()->get('id_module_departament')  == 5 ){
            if( ! empty($request->origin) )
                return redirect('new-accountability');
            else 
                $dash = 'dashboard_accountability_start' ;
        }

        return view($dash, ['productSerie' => $productSerie, 'maintenances' => $maintenances, 'movements' => $movements, 'productName' => $productName, 'situations'=>$situations]);
    } 


    public function importMotions( Request $request ) {

        $handle = fopen(public_path("importa/Movimentos_Ativo_20230222.csv"), "r");
        
        $row = 0;

        while ($line = fgetcsv($handle, 10000, ",")) {

            if ($row++ == 0) {
                continue;
            }

            $data = explode(';',$line[0]) ;

            if( $data[0] == 'Item' )
                continue ;
            
                print_r($data) ;

                $date = explode('/',$data['2']) ;

                $dateok = $date[2]."-".$date[1]."-".$date[0] . " " . $data[9].":00" ;
                $type = 'T' ;
                $location = explode('-',$data[4]) ;

                if( $data['3'] == 'Transferencia De' ){
                    $type = 'F' ;
                }

                $sql = "select * from products where name = '".$data[1]."' and cod_do_item = '".$data[0]."' ";
                $resultsProduct = DB::connection('mysql')->select($sql) ; 

                if( empty($resultsProduct) ){
                    continue ;
                }

                #MODELO
                if( $data[6] != '' ){

                    $sql = "select * from product_models where name = '".$data[6]."' ";
                    
                    $resultsProd = DB::connection('mysql')->select($sql) ; 
                    if( empty($resultsProd) ){
                        $sql = "insert into product_models(name, description) values('".$data[6]."','".$data[6]."') ";
                        DB::connection('mysql')->insert($sql) ; 

                        $sql = "update products set id_product_models = '".$resultsProd[0]->id_product_models."' 
                                    where id_products = ".$resultsProduct[0]->id_products." ";
                        DB::connection('mysql')->insert($sql) ; 
                    }

                }

                #SERIES
                if( $data[7] != '' ){

                    $sql = "select * from product_series where name = '".$data[7]."' ";
                    
                    $resultsSeries = DB::connection('mysql')->select($sql) ; 

                    if( empty($resultsSeries) ){

                        $sql = "insert into product_series(name, description) values('".$data[7]."','".$data[7]."') ";
                        DB::connection('mysql')->insert($sql) ; 
                        $id_product_serie = DB::getPdo()->lastInsertId();

                        $sql = "update products set id_product_serie = '".$id_product_serie."' 
                                    where id_products = ".$resultsProduct[0]->id_products." ";

                                    DB::connection('mysql')->insert($sql) ; 

                    }

                }

                #ETIQUETAS - 8
                if( $data[8] != '' ){

                    $sql = "select * from labels where name = '".$data[8]."' ";
                    
                    $resultsLabels = DB::connection('mysql')->select($sql) ; 
                    
                    if( empty($resultsLabels) ){

                        $sql = "insert into labels(name, used,id_user) values('".$data[8]."',1,21) ";
                        DB::connection('mysql')->insert($sql) ; 
                        $id_labels = DB::getPdo()->lastInsertId();

                    }

                }

                $sql = [
                        'cod_do_item'   => $data[0] ,
                        'date'          => $dateok ,
                        'type'          => $type,
                        'id_stock_locations'              =>  "select id_stock_locations from stock_locations where name = '".trim($location[1])."'" ,
                    ] ;

                print_r($sql) ; exit ;
            
            $sqlFields = ['cod_do_item','description','id_products','id_stock_locations','type','id_user','status'] ;

            /*
            $data = explode(';',$line[0]) ;
            $sqlVal = [] ;

            foreach($data as $d) {
                $sqlVal[] = "'".str_replace("'","",$d)."'" ;
            }

            if( count($sqlVal) < 9 ){
                $falta = 9 - count($sqlVal) ;
                for($a = 0; $a < $falta; $a++){
                    $sqlVal[] = "''" ;
                }
            }

            if( ! empty( $sqlVal[1] ) ) {
                $id = str_replace("'",'',$sqlVal[1]) ;
                echo "REPLACE INTO labels( id_labels, name, status, used, id_user ) values( ".intval($id).", ".$sqlVal[1].",1,1,21 ); <br> " ;
            }

            array_push($sqlFields,'description','id_user','status','id_labels') ;
            array_push($sqlVal,$sqlVal[0],21,1,intval(str_replace("'",'',$sqlVal[1]))) ;
            #print_r($sqlFields);
            #print_r($sqlVal) ; 
            #exit ;
        
            $sql = " insert into products( ".implode(',',$sqlFields)." ) values(".implode(',',$sqlVal)."); <br>" ;
            echo $sql ; 
            */
        }


        fclose($handle);

    }

    public function validateUser( Request $request ) {

        $user = User::where('email',$request->email)->where('password',$request->password)->first() ;

        if( ! empty($user) ) {

            $profile_modules = ProfileModules::where('id_profile',$user->id_profile)->get() ;
            if( ! empty( $profile_modules ) )  {
                foreach( $profile_modules as $module ) {
                    $modules[] = $module->id_modules ;
                }
            }

            $modulesMain = Modules::whereRaw("main_module is null and show_panel = '1' and module_departament in (".$user->id_module_departament.") ")->orderBy('name')->get() ;

            if( $user->is_admin == '1' ){
                $modulesUser = Modules::whereRaw(" main_module is not null  and show_panel = '1'  ")->orderBy('name')->get() ;
            } else {
                $modulesUser = Modules::whereRaw(" main_module is not null  and show_panel = '1'  and id_module in( ".implode(",",$modules)." ) ")->orderBy('name')->get() ;

            }

            if( ! empty($modulesMain) ) {
                foreach($modulesMain as $moduleMain){
                    $menu[$moduleMain->id_module] = [] ;
                    $menuMain[$moduleMain->id_module] = [ 'slug' => $moduleMain->slug, 'name' => $moduleMain->name ];
                }
            }

            if( ! empty($modulesUser) ) {
                foreach($modulesUser as $moduleUser ){
                    $menu[$moduleUser->main_module][] = [ 'slug' => $moduleUser->slug, 'name' => $moduleUser->name ];
                }
            }

            foreach( $menu as $key => $m ) {
                if( empty($m) ){
                    unset($menu[$key]) ;
                    unset($menuMain[$key]) ;
                    
                }
            }

            $menuDepto = [] ;
            $moduleDepartament = ModuleDepartament::whereRaw('id_module_departament in('.$user->id_module_departament.')')->get();
            if( ! empty($moduleDepartament) ) {
                foreach($moduleDepartament as $moduleDepart ){
                    $menuDepto[] = [ 'slug' => $moduleDepart->slug, 'name' => $moduleDepart->name ];
                }
            }

            $request->session()->forget('menuMainSession');
            $request->session()->forget('menuSession');
            $request->session()->forget('menuDepto');
            
            $request->session()->put('userIdSession', $user->id_user);
            $request->session()->put('nameSession', $user->name);
            $request->session()->put('isAdminSession', $user->is_admin);
            $request->session()->put('idModuleDepartamentSession', $user->id_module_departament);

            $request->session()->put('menuMainSession', $menuMain);
            $request->session()->put('menuSession', $menu);

            $request->session()->put('menuDepto', $menuDepto);
            $id_module_departament = explode(',',$user->id_module_departament) ;

            $request->session()->put('id_module_departament',$id_module_departament[0]) ;
            
            
            return  response()->json( [ 'success' => true , 'response' => 'Bem vindo'] , 200 ) ;
        } else {
            return  response()->json( [ 'false' => true , 'response' => 'Usuário ou senha inválidos'] , 200 ) ;
        }

    }

    public function authUser( Request $request ) {

        $user = User::where('email',$request->email)->where('password',$request->password)->first() ;

        if( ! empty($user) ) {

            $profile_modules = ProfileModules::where('id_profile',$user->id_profile)->get() ;
            if( ! empty( $profile_modules ) )  {
                foreach( $profile_modules as $module ) {
                    $modules[] = $module->id_modules ;
                }
            }

            $modulesMain = Modules::whereRaw("main_module is null and module_departament in (".$user->id_module_departament.") ")->get() ;

            if( $user->is_admin == '1' ){
                $modulesUser = Modules::whereRaw(" main_module is not null ")->orderBy('order')->get() ;
            } else {
                $modulesUser = Modules::whereRaw(" main_module is not null and id_module in( ".implode(",",$modules)." ) ")->orderBy('order')->get() ;

            }

            if( ! empty($modulesMain) ) {
                foreach($modulesMain as $moduleMain){
                    $menu[$moduleMain->id_module] = [] ;
                    $menuMain[$moduleMain->id_module] = [ 'slug' => $moduleMain->slug, 'name' => $moduleMain->name ];
                }
            }

            if( ! empty($modulesUser) ) {
                foreach($modulesUser as $moduleUser ){
                    $menu[$moduleUser->main_module][] = [ 'slug' => $moduleUser->slug, 'name' => $moduleUser->name ];
                }
            }

            foreach( $menu as $key => $m ) {
                if( empty($m) ){
                    unset($menu[$key]) ;
                    unset($menuMain[$key]) ;
                    
                }
            }

            $menuDepto = [] ;
            $moduleDepartament = ModuleDepartament::whereRaw('id_module_departament in('.$user->id_module_departament.')')->get();
            if( ! empty($moduleDepartament) ) {
                foreach($moduleDepartament as $moduleDepart ){
                    $menuDepto[] = [ 'slug' => $moduleDepart->slug, 'name' => $moduleDepart->name ];
                }
            }
            
            $request->session()->put('userIdSession', $user->id_user);
            $request->session()->put('nameSession', $user->name);
            $request->session()->put('isAdminSession', $user->is_admin);
            $request->session()->put('idModuleDepartamentSession', $user->id_module_departament);
 
            $request->session()->put('menuMainSession', $menuMain);
            $request->session()->put('menuSession', $menu);
            $request->session()->put('menuDepto', $menuDepto);

            $request->session()->put('id_module_departament',$user->id_module_departament) ;
            
        }

    }

    public function changeDeptoMenu( Request $request ) {

        $user = User::where('id_user',$request->session()->get('userIdSession'))->first() ;
        $menuMain = [] ;

        if( ! empty($user) ) {

            $profile_modules = ProfileModules::where('id_profile',$user->id_profile)->get() ;
            if( ! empty( $profile_modules ) )  {
                foreach( $profile_modules as $module ) {
                    $modules[] = $module->id_modules ;
                }
            }

            $depto = $user->id_module_departament ;
            if( ! empty( $request->session()->get('id_module_departament') ) ) {
                $depto = $request->session()->get('id_module_departament') ;
            }

            $modulesMain = Modules::whereRaw("main_module is null and module_departament in (".$depto.") ")->get() ;
            if( $user->is_admin == '1' ){
                $modulesUser = Modules::whereRaw(" main_module is not null ")->orderBy('order')->get() ;
            } else {
                $modulesUser = Modules::whereRaw(" main_module is not null and id_module in( ".implode(",",$modules)." ) ")->orderBy('order')->get() ;

            }

            if( ! empty($modulesMain) ) {
                foreach($modulesMain as $moduleMain){
                    $menu[$moduleMain->id_module] = [] ;
                    $menuMain[$moduleMain->id_module] = [ 'slug' => $moduleMain->slug, 'name' => $moduleMain->name ];
                }
            }

            if( ! empty($modulesUser) ) {
                foreach($modulesUser as $moduleUser ){
                    $menu[$moduleUser->main_module][] = [ 'slug' => $moduleUser->slug, 'name' => $moduleUser->name ];
                }
            }

            foreach( $menu as $key => $m ) {
                if( empty($m) ){
                    unset($menu[$key]) ;
                    unset($menuMain[$key]) ;
                    
                }
            }

            $menuDepto = [] ;
            $moduleDepartament = ModuleDepartament::whereRaw('id_module_departament in('.$user->id_module_departament.')')->get();
            if( ! empty($moduleDepartament) ) {
                foreach($moduleDepartament as $moduleDepart ){
                    $menuDepto[] = [ 'slug' => $moduleDepart->slug, 'name' => $moduleDepart->name ];
                }
            }
            
            $request->session()->put('userIdSession', $user->id_user);
            $request->session()->put('nameSession', $user->name);
            $request->session()->put('isAdminSession', $user->is_admin);
            $request->session()->put('idModuleDepartamentSession', $user->id_module_departament);
 
            $request->session()->put('menuMainSession', $menuMain);
            $request->session()->put('menuSession', $menu);
            $request->session()->put('menuDepto', $menuDepto);

            $request->session()->put('firstLetter', strtoupper(@$request->depto[0]));
            
            
            return redirect('painel');
        }

    }

    public function changeDepto( Request $request ) {
        
        $moduleDepartament = ModuleDepartament::where('slug',$request->depto)->first() ;
        if( ! empty($moduleDepartament) ){
            $request->session()->put('id_module_departament', $moduleDepartament->id_module_departament);
        }

        return $this->changeDeptoMenu($request) ;

    }

    public function createUser( Request $request ) {

        if(  ! empty( $request->name ) &&! empty( $request->senha ) && ! empty( $request->email ) ) {
            return  response()->json( [ 'success' => true , 'response' => 'Criado com sucesso'] , 200 ) ;
        } else {
            return  response()->json( ['success' => false ,'response' => 'Erro ao criar, dados incompletos'] , 201 ) ;
        }

    } 

    public function importData( Request $request ) {

        return view('import');

    }

    public function uploadImport( Request $request ) {
        $csv = array();

        $handle = fopen($_FILES['csv']['tmp_name'], "r");

        $row = 0;
        $return = '' ;

        while ($line = fgetcsv($handle, 100000, ";")) {

            $data = $line ;
            if( empty($data['0']) ){
                $row++ ;
                continue ;
            }
            
            if( ! empty( $data['0'] ) ) {

                $produto = trim(utf8_encode(@$data['0'])) ;
                $modelo = trim(utf8_encode(@$data['1'])) ;
                $serie = trim(utf8_encode(@$data['2'])) ;
                $labels = trim(@$data['3']) ;
                $origem = trim(utf8_encode(@$data['4'])) ;
                $destino = trim(utf8_encode(@$data['5'])) ;
                $dateArr = explode('/' , @$data['6']) ;
                $obs = trim(utf8_encode(@$data['7'])) . " - " . trim(utf8_encode(@$data['8'])) . " - " . trim(utf8_encode(@$data['9'])) ;

                $return .= 'Produto: '.str_replace("'"," ",$produto).' <br> ';
                $return .= 'modelo: '.$modelo.' <br> ';
                $return .= 'serie: '.$serie.' <br> ';
                $return .= 'labels: '.$labels.' <br> ';
                $return .= 'origem: '.$origem.' <br> ';
                $return .= 'destino: '.$destino.' <br> ';
                $return .= 'obs: '.$obs.' <br><hr><br> ';

                if( empty($labels)) {
                    $return .= 'Etiqueta para produto '.$produto.' não está cadastrada. <br><hr><br> ';
                }

                $id_manufacturer = '0' ;

                if( array_key_exists(2,$dateArr) ){
                    $date = $dateArr[2] . "-" . $dateArr[1] . "-" . $dateArr[0] ;  
                } else {
                    $date = date('Y-m-d') ;
                }

                // salvar fabricante1
                /*
                    $sql = " select * from manufacturer where name = '".$fabricante."' " ;
                    $results = DB::connection('data_reports')->select($sql);
                    if( empty( $results) ) {
                        $sql = "insert into manufacturer( name , id_user ) values( '".$fabricante."' , 27 ) " ;
                        DB::connection('data_reports')->select($sql);
                        $sql = " select max(id_manufacturer) as id_manufacturer from manufacturer where name = '".$fabricante."' " ;
                        $results2 = DB::connection('data_reports')->select($sql);
                        $id_manufacturer = $results2[0]->id_manufacturer ;
                    } else {
                        $id_manufacturer = $results[0]->id_manufacturer ;
                    }
                */   
                
                // salvar modelo
                    $sql = " select * from product_models where name = '".$modelo."' " ;
                    $results = DB::connection('data_reports')->select($sql);
                    if( empty( $results) ) {
                        $sql = "insert into product_models( name, id_user ) values( '".$modelo."' , 27 ) " ;
                        DB::connection('data_reports')->select($sql);
                        $sql = " select max(id_product_models) as id_product_models from product_models where name = '".$modelo."' " ;
                        $results2 = DB::connection('data_reports')->select($sql);
                        $id_product_models = $results2[0]->id_product_models ;
                    } else {
                        $return .= "Modelo ".$results[0]->name." já existe " ;
                        $id_product_models = $results[0]->id_product_models ;
                    }

                // salvar origem
                    $sql = " select * from stock_locations where name = '".$origem."' " ;
                    $results = DB::connection('data_reports')->select($sql);
                    if( empty( $results) ) {
                        $sql = "insert into stock_locations( name, id_user ) values( '".$origem."' , 27 ) " ;
                        DB::connection('data_reports')->select($sql);
                        $sql = " select max(id_stock_locations) as id_stock_locations from stock_locations where name = '".$origem."' " ;
                        $results2 = DB::connection('data_reports')->select($sql);
                        $id_stock_locations = $results2[0]->id_stock_locations ;
                    } else {
                        $return .= "Local de origem ".$results[0]->name." já existe " ;
                        $id_stock_locations = $results[0]->id_stock_locations ;
                    }

                // salvar destino
                $sql = " select * from stock_locations where name = '".$destino."' " ;
                $results = DB::connection('data_reports')->select($sql);
                if( empty( $results) ) {
                    $sql = "insert into stock_locations( name, id_user ) values( '".$destino."' , 27 ) " ;
                    DB::connection('data_reports')->select($sql);
                    $sql = " select max(id_stock_locations) as id_stock_locations from stock_locations where name = '".$destino."' " ;
                    $results2 = DB::connection('data_reports')->select($sql);
                    $id_stock_locations2 = $results2[0]->id_stock_locations ;
                } else {
                    $return .= "Local de destino ".$results[0]->name." já existe " ;
                    $id_stock_locations2 = $results[0]->id_stock_locations ;
                }

                // salvar label
                if( $labels != 'n/c' ){

                    $sql = " select * from labels where name = '".$labels."' " ;
                    $results = DB::connection('data_reports')->select($sql);
                    if( empty( $results) ) {
                        $sql = "insert into labels( name, id_user ) values( '".$labels."' , 27 ) " ;
                        DB::connection('data_reports')->select($sql);
                        $sql = " select max(id_labels) as id_labels from labels where name = '".$labels."' " ;
                        $results2 = DB::connection('data_reports')->select($sql);
                        $id_labels = $results2[0]->id_labels ;
                    } else {
                        $return .= "Etiqueta ".$results[0]->name." já cadastrada " ;
                        $id_labels = $results[0]->id_labels ;
                    }

                } else {
                    $id_labels = 'NULL' ;
                }

                // checa se etiqueta esta sendo usada por outro equipamento

                // salvar produto
                $sql = "select * from products where name = '".str_replace("'"," ",$produto)."' and serie = '".str_replace("'"," ",$serie)."' ";
                $results = DB::connection('data_reports')->select($sql);

                if( empty( $results) ) {
                    $sql = "insert into products( name, id_user, serie , id_labels , id_product_models, id_manufacturer ) 
                    values( '".str_replace("'"," ",$produto)."' , 27 , '".str_replace("'"," ",$serie)."', ".$id_labels.", '".$id_product_models."', '".$id_manufacturer."' ) " ;
                    DB::connection('data_reports')->select($sql);
                    $sql = " select max(id_products) as id_products from products where name = '".str_replace("'"," ",$produto)."' and serie = '".str_replace("'"," ",$serie)."' " ;
                    $results2 = DB::connection('data_reports')->select($sql);
                    $id_products = $results2[0]->id_products ;
                } else {
                    $return .= "Produto ".$results[0]->name." já cadastrada " ;
                    $id_products = $results[0]->id_products ;
                }

                // salvar mvimentação
                $sql = "insert into movements(
                    description,
                    id_user,
                    id_products,
                    id_stock_locations_from,
                    id_stock_locations_to,
                    date
                ) values(
                    '".$obs."',
                    27,
                    ".$id_products.",
                    ".$id_stock_locations.",
                    ".$id_stock_locations2.",
                    '".$date."'  
                )" ;

                DB::connection('data_reports')->select($sql);

                $row++;
            }

        }

        fclose($handle);
        
        return view('import',['dataimimport'=>' Registros importados com sucesso.']);

    }  
    
    public function uploadImportOld( Request $request ) {
        $csv = array();

        $handle = fopen($_FILES['csv']['tmp_name'], "r");

        $row = 0;
        while ($line = fgetcsv($handle, 100000, ";")) {

            $data = $line ;
            print_r( $data ) ; exit ;

            // travar para não repetir registros

            
            /*
            $data = explode(';',$line[0]) ;

            if( $row == '0' ){
                $row++ ;
                print_r($data) ;
            }

            print_r($data) ;
            exit ;
            /*
                1 -> etiqueta
                2 -> nome prod
                3 -> fabricante
                4 -> modelo
                5 -> série
                6 -> localizacao
                7 -> status
                8 -> origem
                9 -> destino 
                10 -> data
                11 -> observacao 
            */

            if( $row == '0' || empty($data['2']) ){
                $row++ ;
                continue ;
            }
            
            if( ! empty( $data['0'] ) ) {

                $fabricante = trim(utf8_encode(@$data['3'])) ;
                $modelo = trim(utf8_encode(@$data['4'])) ;
                $origem = trim(utf8_encode(@$data['8'])) ;
                $destino = trim(utf8_encode(@$data['9'])) ;

                $produto = trim(utf8_encode(@$data['2'])) ;
                $serie = trim(utf8_encode(@$data['5'])) ;
                $labels = trim(@$data['1']) ;
                $obs = trim(utf8_encode(@$data['11'])) ;
                $dateArr = explode('/' , @$data['10']) ;

                if( array_key_exists(2,$dateArr) ){
                    $date = $dateArr[2] . "-" . $dateArr[1] . "-" . $dateArr[0] ;  
                } else {
                    $date = date('Y-m-d') ;
                }
                
                
                // salvar fabricante
                    $sql = " select * from manufacturer where name = '".$fabricante."' " ;
                    $results = DB::connection('data_reports')->select($sql);
                    if( empty( $results) ) {
                        $sql = "insert into manufacturer( name , id_user ) values( '".$fabricante."' , 27 ) " ;
                        DB::connection('data_reports')->select($sql);
                        $sql = " select max(id_manufacturer) as id_manufacturer from manufacturer where name = '".$fabricante."' " ;
                        $results2 = DB::connection('data_reports')->select($sql);
                        $id_manufacturer = $results2[0]->id_manufacturer ;
                    } else {
                        $id_manufacturer = $results[0]->id_manufacturer ;
                    }

                
                // salvar modelo
                    $sql = " select * from product_models where name = '".$modelo."' " ;
                    $results = DB::connection('data_reports')->select($sql);
                    if( empty( $results) ) {
                        $sql = "insert into product_models( name, id_user ) values( '".$modelo."' , 27 ) " ;
                        DB::connection('data_reports')->select($sql);
                        $sql = " select max(id_product_models) as id_product_models from product_models where name = '".$modelo."' " ;
                        $results2 = DB::connection('data_reports')->select($sql);
                        $id_product_models = $results2[0]->id_product_models ;
                    } else {
                        $id_product_models = $results[0]->id_product_models ;
                    }

                // salvar origem
                    $sql = " select * from stock_locations where name = '".$origem."' " ;
                    $results = DB::connection('data_reports')->select($sql);
                    if( empty( $results) ) {
                        $sql = "insert into stock_locations( name, id_user ) values( '".$origem."' , 27 ) " ;
                        DB::connection('data_reports')->select($sql);
                        $sql = " select max(id_stock_locations) as id_stock_locations from stock_locations where name = '".$origem."' " ;
                        $results2 = DB::connection('data_reports')->select($sql);
                        $id_stock_locations = $results2[0]->id_stock_locations ;
                    } else {
                        $id_stock_locations = $results[0]->id_stock_locations ;
                    }

                // salvar destino
                $sql = " select * from stock_locations where name = '".$destino."' " ;
                $results = DB::connection('data_reports')->select($sql);
                if( empty( $results) ) {
                    $sql = "insert into stock_locations( name, id_user ) values( '".$destino."' , 27 ) " ;
                    DB::connection('data_reports')->select($sql);
                    $sql = " select max(id_stock_locations) as id_stock_locations from stock_locations where name = '".$destino."' " ;
                    $results2 = DB::connection('data_reports')->select($sql);
                    $id_stock_locations2 = $results2[0]->id_stock_locations ;
                } else {
                    $id_stock_locations2 = $results[0]->id_stock_locations ;
                }

                // salvar label
                if( $labels != 'n/c' ){

                    $sql = " select * from labels where name = '".$labels."' " ;
                    $results = DB::connection('data_reports')->select($sql);
                    if( empty( $results) ) {
                        $sql = "insert into labels( name, id_user ) values( '".$labels."' , 27 ) " ;
                        DB::connection('data_reports')->select($sql);
                        $sql = " select max(id_labels) as id_labels from labels where name = '".$labels."' " ;
                        $results2 = DB::connection('data_reports')->select($sql);
                        $id_labels = $results2[0]->id_labels ;
                    } else {
                        $id_labels = $results[0]->id_labels ;
                    }

                } else {
                    $id_labels = 'NULL' ;
                }

                // salvar produto
                $sql = "select * from products where name = '".str_replace("'"," ",$produto)."' and serie = '".str_replace("'"," ",$serie)."' ";
                $results = DB::connection('data_reports')->select($sql);

                if( empty( $results) ) {
                    $sql = "insert into products( name, id_user, serie , id_labels , id_product_models, id_manufacturer ) 
                    values( '".str_replace("'"," ",$produto)."' , 27 , '".str_replace("'"," ",$serie)."', ".$id_labels.", '".$id_product_models."', '".$id_manufacturer."' ) " ;
                    DB::connection('data_reports')->select($sql);
                    $sql = " select max(id_products) as id_products from products where name = '".str_replace("'"," ",$produto)."' and serie = '".str_replace("'"," ",$serie)."' " ;
                    $results2 = DB::connection('data_reports')->select($sql);
                    $id_products = $results2[0]->id_products ;
                } else {
                    $id_products = $results[0]->id_products ;
                }

                // salvar mvimentação
                $sql = "insert into movements(
                    description,
                    id_user,
                    id_products,
                    id_stock_locations_from,
                    id_stock_locations_to,
                    date
                ) values(
                    '".$obs."',
                    27,
                    ".$id_products.",
                    ".$id_stock_locations.",
                    ".$id_stock_locations2.",
                    '".$date."'  
                )" ;

                DB::connection('data_reports')->select($sql);

            }

        }

        fclose($handle);

    }  

}