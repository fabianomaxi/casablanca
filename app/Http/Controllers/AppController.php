<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Movements;
use App\Models\User;
use App\Models\Occurrence;
use App\Models\Products;
use App\Models\Modules;
use App\Models\Labels;
use App\Models\StockLocations;
use App\Models\Permissions ;
use App\Models\Lots ;
use Session;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class AppController extends Controller
{
    
    public function index( Request $request ) {

        $movements = Movements::orderBy('date','DESC')->limit('20')->get();


        if( ! empty( $request->busca ) ) {
            $where = " name like '%".$request->busca."%' or serie = '".$request->busca."' " ;
            $prodBUsca = Products::whereRaw($where)->get() ;
            if(! $prodBUsca->isEmpty()) {
                foreach($prodBUsca as $p){
                    $ids[] = $p->id_products ;
                }

                $movements = Movements::whereRaw('id_products in('.implode(',',$ids).') ')->orderBy('date','DESC')->limit('20')->get();

            }

        }

        $users = User::all() ;
        if( ! empty($users) ) {
            foreach( $users as $user ){
                $userData[$user->id_user] = $user->name ;
            }
        }


        $products = Products::all() ;
        if( ! empty($products) ) {
            foreach( $products as $product ){
                $productData[$product->id_products] = $product->name ;
            }
        }

        $stocksLocations = StockLocations::all() ;
        if( ! empty($stocksLocations) ) {
            foreach( $stocksLocations as $stocksLocation ){
                $stockData[$stocksLocation->id_stock_locations] = $stocksLocation->name ;
            }
        }

        $stockLocations = StockLocations::all() ;


        return view('app/index' , ['movements' => $movements, 'users' => $userData, 'products' => $productData, 'stocksLocation' => $stockData, 'stockLocations' => $stockLocations ] );
    } 

    public function consultaEquip( Request $request ) {

        $movements = Movements::orderBy('date','DESC')->limit('20')->get();


        if( ! empty( $request->busca ) ) {
            $where = " name like '%".$request->busca."%' or serie = '".$request->busca."' " ;
            $prodBUsca = Products::whereRaw($where)->get() ;
            if(! $prodBUsca->isEmpty()) {
                foreach($prodBUsca as $p){
                    $ids[] = $p->id_products ;
                }

                $movements = Movements::whereRaw('id_products in('.implode(',',$ids).') ')->orderBy('date','DESC')->limit('20')->get();

            }

        }

        $users = User::all() ;
        if( ! empty($users) ) {
            foreach( $users as $user ){
                $userData[$user->id_user] = $user->name ;
            }
        }


        $products = Products::all() ;
        if( ! empty($products) ) {
            foreach( $products as $product ){
                $productData[$product->id_products] = $product->name ;
            }
        }

        $stocksLocations = StockLocations::all() ;
        if( ! empty($stocksLocations) ) {
            foreach( $stocksLocations as $stocksLocation ){
                $stockData[$stocksLocation->id_stock_locations] = $stocksLocation->name ;
            }
        }

        $stockLocations = StockLocations::all() ;


        return view('app/consulta_equipamentos' , ['movements' => $movements, 'users' => $userData, 'products' => $productData, 'stocksLocation' => $stockData, 'stockLocations' => $stockLocations ] );
    } 

    public function solicPermissoes( Request $request ) {

        $users = User::all() ;
        if( ! empty($users) ) {
            foreach( $users as $user ){
                $userData[$user->id_user] = $user->name ;
            }
        }


        $products = Products::all() ;
        if( ! empty($products) ) {
            foreach( $products as $product ){
                $productData[$product->id_products] = $product->name ;
            }
        }

        $stocksLocations = StockLocations::all() ;
        if( ! empty($stocksLocations) ) {
            foreach( $stocksLocations as $stocksLocation ){
                $stockData[$stocksLocation->id_stock_locations] = $stocksLocation->name ;
            }
        }

        $stockLocations = StockLocations::all() ;

        $permissions = Permissions::all();
        
        return view('app/permissoes' , ['permissions' => $permissions, 'users' => $userData, 'products' => $productData, 'stocksLocation' => $stockData, 'stockLocations' => $stockLocations ] );

    }

    public function ocorrencias( Request $request ) {

        
        $users = User::all() ;
        if( ! empty($users) ) {
            foreach( $users as $user ){
                $userData[$user->id_user] = $user->name ;
            }
        }


        $products = Products::all() ;
        if( ! empty($products) ) {
            foreach( $products as $product ){
                $productData[$product->id_products] = $product->name ;
            }
        }

        $stocksLocations = StockLocations::all() ;
        if( ! empty($stocksLocations) ) {
            foreach( $stocksLocations as $stocksLocation ){
                $stockData[$stocksLocation->id_stock_locations] = $stocksLocation->name ;
            }
        }

        $stockLocations = StockLocations::all() ;

        $occurrences = Occurrence::all();
        
        return view('app/ocorrencias' , ['occurrences' => $occurrences, 'users' => $userData, 'products' => $productData, 'stocksLocation' => $stockData, 'stockLocations' => $stockLocations ] );
    } 

    public function discartLot( Request $request ) {
        $request->session()->forget('nr_lote');
        $request->session()->forget('movement');
        return redirect('/mov_lote?s=2');
    }

    public function getProdutoApp( Request $request ) {

        $labels = Labels::where('name',$request->etiqueta)->get() ;
        if( ! $labels->isEmpty() ){
            $products = Products::where('id_labels',$labels[0]->id_labels)->get() ;

            if( empty($products) ){
                echo "0" ;
            } else {
                $img = '' ;
                if( ! empty($products[0]->image) ) {
                    //$img = 'Foto: <img src="'.$products[0]->image.'" style="width:100px">' ;
                } else {
                   // $img = 'Cadastre uma Foto: <br><input style="width: 260px; height: 32px;" type="file" name="image" id="image">' ;
                }

                $estoque =  $this->getEstoqueProdutoApp( $products[0]->id_products ) ;
                echo "<input type='hidden' name='id_product' id='id_product' value='".$products[0]->id_products . "'><br>".$products[0]->name . "<br><b>Estoque Atual:<br> </b>" . $estoque . "<br><br>" . $img ;
            }
        } else {
            echo "0" ;
        }

    }

    public function getEstoqueProdutoApp( $id_products ) {

        $movements = Movements::where('id_products',$id_products)->orderBy('id_movements','desc')->first() ;
        if( ! empty($movements) ){
            $stockLocations = StockLocations::where('id_stock_locations',$movements->id_stock_locations_to)->first() ;
            return $stockLocations->name ;
        }

        return 'Estoque não localizado' ;

    }

    public function saveOccurrence( Request $request ) {

        $request->merge(['id_user' => $request->session()->get('userIdSession')]) ;
        Occurrence::create(['label_number' => $request->label_number , 'id_user'=>$request->id_user,'id_product'=>$request->id_product,'obs'=>$request->obs]) ;
        return redirect('/consulta_equipamentos?s=1');

    }


    public function saveExitApp( Request $request ) {
        
        $id_products = 0 ;

        $products = Products::where('name',$request->product_name)->get() ;
        if( !$products->isEmpty() ) {
            $id_products = $products[0]->id_products ;
        }
        
        $id_stock_locations_from = $request->id_stock_locations_to ;

        $movements = Movements::where('id_products',$id_products)->orderBy('date','DESC')->first() ;
        if( !empty($movements) ) {
            $id_stock_locations_from = $movements->id_stock_locations_to ;
        }

        $movements = new Movements() ;
        $movements->description = $request->observacao;
        // $request->session()->get('userIdSession') ;
        $movements->id_user = 1 ;
        $movements->id_products = $id_products ;
        $movements->id_stock_locations_from = $id_stock_locations_from ;
        $movements->id_stock_locations_to = $request->id_stock_locations_to ;
        $movements->save() ;

        return redirect('/aplicativo?s=1');

    }

    public function finishLote( Request $request ){
        
        echo $request->session()->get('nr_lote') ;
        exit ;
    }

    public function addLote( Request $request ) {

        if( ! empty($_FILES) ){
            $image_file = $_FILES["image"];

            $target_dir = "";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);

            // Move the temp image file to the images/ directory
            //move_uploaded_file(
                // Temp image location
             //   $_FILES["image"]["tmp_name"],
                // New image location, __DIR__ is the location of the current PHP file
             //   "uploads/" . $target_file
           // );
            #echo $request->id_product; exit ;
            //Products::where('id_products',$request->id_product)->update(['image'=>$target_file]) ;

        }

        if( empty( $request->session()->get('nr_lote') ) ){
            $lots = new Lots() ;
            $lots->id_user = $request->session()->get('userIdSession') ;
            $lots->save() ;
            $request->session()->put('nr_lote',$lots->id_lot);
        }

        $id_products = 0 ;

        $id_products = $request->id_product ;

        $id_stock_locations_from = $request->id_stock_locations_to ;

        $movements = Movements::where('id_products',$id_products)->orderBy('date','DESC')->first() ;
        if( !empty($movements) ) {
            $id_stock_locations_from = $movements->id_stock_locations_to ;
        }

        $movements = new Movements() ;
        $movements->description = $request->observacao;
        // $request->session()->get('userIdSession') ;
        $movements->id_user = 1 ;
        $movements->id_products = $id_products ;
        $movements->date = date('Y-m-d H:i:s') ;
        $movements->id_stock_locations_from = $id_stock_locations_from ;
        $movements->id_stock_locations_to = $request->id_stock_locations_to ;
        $movementsSerialize = serialize($movements) ;
        $request->session()->put('id_stock_locations', $request->id_stock_locations_to);

        if( empty($request->session()->get('movement')) ){
            Session::put('movement', []);
        }
        
        Session::push('movement', $movementsSerialize);


        if( empty($request->session()->get('nr_lote')) ){
            $request->session()->put('nr_lote', date('dmHs'));
        }

        $movements->save() ;

        return redirect('/mov_lote?s=1');

    }
    
    public function login( Request $request ) {

        return view('app/login');
    }

    public function validateUser( Request $request ) {

        $user = User::where('email',$request->email)->where('password',$request->password)->first() ;

        if( ! empty($user) ) {
            return  response()->json( [ 'success' => true , 'response' => 'Bem vindo'] , 200 ) ;
        } else {
            return  response()->json( ['success' => false ,'response' => 'Login ou senha invalidos'] , 201 ) ;
        }

        $request->session()->put('nameSession', $user->name);
        
    }



    public function logout( Request $request ) {
        $request->session()->put('userIdSession', '');
        $request->session()->put('nameSession', '');
        return redirect('aplicativo/login');
    }


}