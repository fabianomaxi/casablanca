<?php
/**
* Classe base para o CRUD do Sistema
* Aqui encontramos os médotos que chamam as APIs para o CRUD de qualquer parte do sistema
* Os métodos aqui podem ser sobrescritos nos Controllers de cada um dos módulos
* @author Fabiano Gomes <fabiano.gomes@replikante.com>
* @version 0.1
*/


namespace App\Http\Controllers;

use App\Token ;

use Illuminate\Http\Request ;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class BaseController extends Controller
{

    protected $classe, $uri, $buttons, $modals, $extra, $tableFildsData, $tableFilds, $tableFildsSerach, $tituloPagina, $pageAction , $folder , $idSaved , $reload , $prefix ;
    protected $key = 'id' , $camposForm ;

    public function getDataUsers(){
        $users = User::where('status','1')->get() ;
        foreach($users as $user){
            $userReturn[$user->id_user] = $user->name ;
        }

        return $userReturn ;
    }


    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     */
    public function getAPi(Request $request , $url , $debug = '', $dataLog = [true], $checkSession = true) {

        if( ! empty($debug) ) {
            print_r(json_encode($request->all())) ;
            echo $url ;
            echo  $request->session()->get('token') ;
            exit ;
        }

        $client = new Client();

        $response = $client->request('GET', $url , [
            'headers' => ['token' => $request->session()->get('token')]
        ] );

        $codReturn =  $response->getStatusCode() ;
        return json_decode( $response->getBody()->getContents() );

    }

    /**
    * Lista os registros
    * @access public
    * @param Request $request
    * @return json
    */
	public function index( Request $request )
	{

        if( $request->offset == "" )
            $request->merge(['offset' => 0]) ;

        if( $request->limit == "" )
            $request->merge(['limit' => 10000000]) ;

        $request->merge(['order' => base64_decode($request->order)]) ;
        if( $request->order == "" )
            $request->merge(['order' => $this->key] , 'DESC') ;

        $where = array() ;

        $fildsSerach = $this->tableFilds ;
        if( $this->tableFildsSerach != '' ) {
            $fildsSerach = $this->tableFildsSerach ;
        }

        if( $request->search != "" && $request->search != 'list' ){
            foreach ( $fildsSerach as $key => $value ) {
                $where[] = $key . " like '%" . $request->search . "%'" ;
            }

            $where = "status = 1 AND (" . implode( " OR " , $where) . ")" ;
        } else {
            $where = "status = 1 " ;
        }


        $recurso = $this->classe::whereRaw($where)
        ->offset($request->offset)
        ->limit($request->limit)
        ->orderBy($request->order)
        ->get() ;

        $return['titulo']      = $this->tituloPagina ;
        $return['campos']      = $this->tableFilds ;
        $return['valores_campos']      = @$this->tableFildsData ;
        
        $return['pageAction'] = $this->pageAction ;
        $return['dados']       = $recurso ;
        $return['reload']       = $this->reload ;
        $return['extra']       = $this->extra ;
        $return['buttons']       = $this->buttons ;

        return view($this->folder . 'listagem' , ['data' => $recurso, 'return' => $return, 'id' => $this->key]);

	}


    /**
    * Função que salva uma empresa cadastradas
    *
    * @param Reuest        $request Dados que são passados via GET e POST
    *
    * @return json         Company
    */
	public function store( Request $request )
    {

        $return['titulo']      = $this->tituloPagina ;
        $return['campos']      = $this->tableFilds ;
        $return['valores_campos']      = @$this->tableFildsData ;
        $return['pageAction'] = $this->pageAction ;
        $return['dados']       = [] ;
        $return['reload']       = $this->reload ;
        $return['extra']       = $this->extra ;
        $return['modals']       = $this->modals ;
        $return['buttons']       = $this->buttons ;
        
        @$this->camposForm['id_accountability']['values'] = $request->session()->get('nameSession');
        $return['camposForm']  = $this->camposForm ;

        return view($this->folder . 'formulario' , ['order' => $request->order , 'limit' => $request->limit  , 'offset' => $request->offset, 'return' => $return , 'id' => $this->key]);


    }

    
    
     /**
     * Função que edita uma empresa cadastrada, através do seu ID
     *
     * @param Reuest        $request Dados que são passados via GET e POST
     *
     * @return json         Company
    */
    public function update( int $id, Request $request )
    {

        return view('sign-up');
        $request->token = $this->getLocalToken( $request ) ;

        if( ! $this->validaToken( $request ) )
            return response()->json( [ 'erro' => 'Token inválido ou expirado' ] , 204 ) ;

        $recurso = $this->classe::find($id) ;
        if ( is_null( $recurso ) ){
            return  response()->json( ['erro' => 'Registro não encontrado'] , 204 ) ;
        }

        $recurso->fill( $request->all() ) ;
        $recurso->save() ;

        return  response()
            ->json( ['recurso' => $recurso] , 200 ) ;
    }

    /**
     * Função que valida o token passado
     *
     * @param Reuest        $request Dados que são passados via GET e POST
     *
     * @return boolean
    */
    public function validaToken( $request ) {

        $token = new TokenController() ;
        $existToken = $token->validateToken( $request->token ) ;

        if( ! $existToken )
            return  false ;

        $user = User::where('id_users',$existToken->id_users)->first() ;

        $request->merge(['id_profiles' => $user->id_profiles])  ;
        $validAccessApi = $this->validAccessApi( $request ) ;

        if( $validAccessApi === false ) {
            return  ['erro' => 'Acesso negado à API.'] ;
        }


        return true ;

    }

    /**
     * Função que valida o token passado
     *
     * @param Reuest        $request Dados que são passados via GET e POST
     *
     * @return boolean
    */
    public function validaTokenSite( $request ) {

        $token = new TokenController() ;

        if( ! $token->validateToken( $request->token ) )
            return  false ;

        return true ;

    }

    /*
    * métodos usados para o site
    */

    /**
    * Lista os registros chamando a API
    * @access public
    * @param Request $request
    * @return view
    */
    public function     list( Request $request ) {

        $client = new Client();
        $modules = array() ;

        if( $request->limit == "" ) {
            $request->merge(['limit' => 50]) ;
        }

        if( $request->offset == "" ) {
            $request->merge(['offset' => 0]) ;
        }

        if( $request->search == "" ){
            $request->merge(['search' => 'list']) ;
        }

        if( $request->order == "" ){
            $request->merge(['order' => '0']) ;
        }
        
        $response = $client->request('GET', $this->uri . "/" . $request->limit . "/" . $request->offset . "/". $request->order . "/" . $request->search , [
                'headers' => ['token' => $request->token]
            ] );

        $responseAll = $client->request('GET', $this->uri . "/10000000" . "/0"  . "/". $request->order . "/" . $request->search , [
                'headers' => ['token' => $request->token]
            ] );

        $codReturn =  $response->getStatusCode() ;

        if( $codReturn == "204" ){

            $mesage = $request->session()->flash('mesage',"Erro ao listar.");

            return view('login',['listagem]' => $mesage]);

        } else if( $codReturn == "401" ){

            $mesage = $request->session()->flash('mesage',"Sessão expirada.");

            return view('login',['listagem' => $mesage]);

        } else {

            $data = json_decode( $response->getBody()->getContents() );
            $AllData = json_decode( $responseAll->getBody()->getContents() );

            $numberPages = ceil(count( $AllData ) / $request->limit ) ;

            $return['titulo']      = $this->tituloPagina ;
            $return['campos']      = $this->tableFilds ;
            $return['valores_campos']      = @$this->tableFildsData ;
            $return['pageAction'] = $this->pageAction ;
            $return['dados']       = $data ;
            $return['reload']       = $this->reload ;
            $return['extra']       = $this->extra ;

            $modules = $this->getMenu( $request ) ;

            if( $request->perPage == "" )
                $perPage = "10" ;

                return view($this->folder . 'listagem' , ['order' => $request->order , 'limit' => $request->limit , 'perPage' => $perPage , 'offset' => $request->offset,'numberPages' => $numberPages , 'return' => $return , 'menu' => $modules , 'id' => $this->key]);

        }

    }

    public function show( int $id , Request $request )
    {

        $recurso = $this->classe::where('status',1)->where($this->key , $id)->get() ;
        $return['titulo']      = $this->tituloPagina ;
        $return['campos']      = $this->tableFilds ;
        $return['valores_campos']      = @$this->tableFildsData ;
        $return['pageAction'] = $this->pageAction ;
        $return['dados']       = $recurso ;
        $return['reload']       = $this->reload ;
        $return['extra']       = $this->extra ;
        $return['modals']       = $this->modals ;
        $return['buttons']       = $this->buttons ;

        @$this->camposForm['id_accountability']['value'] = $request->session()->get('nameSession');

        $return['camposForm']  = $this->camposForm ;

        return view($this->folder . 'formulario' , ['order' => $request->order , 'limit' => $request->limit  , 'offset' => $request->offset, 'return' => $return , 'id' => $this->key]);
        
    }


    /**
    * Deleta um registro chamando a API
    * @access public
    * @param Request $request
    * @return view/redirect
    */
    public function delete( Request $request ) {

        $client = new Client();
        $request->token = $this->getLocalToken( $request ) ;

        $response = $client->delete( $this->uri. '/'.$request->id . "?token=" . $request->token, [
                'headers' => ['token' => $request->token]
            ] ) ;


        $codReturn =  $response->getStatusCode() ;

        if( $codReturn == "201" ){

            $mesage_error = $request->session()->flash('mesage_error',"Erro ao deletar registro.");


        } else {

            $data = json_decode( $response->getBody()->getContents() );

            $return['titulo']  = $this->tituloPagina ;
            $return['campos']  = $this->tableFilds ;
            $return['pageAction'] = $this->pageAction ;
            $return['dados']   = $data ;


        }

    }

    /**
    * Salva um registro chamando a API
    * @access public
    * @param Request $request
    * @return view/redirect
    */
    public function save( Request $request ) {

        if( $request->id != "" ){

            $recurso = $this->classe::find($request->id) ;
            $recurso->fill( $request->all() ) ;
            $recurso->save() ;
    
            return $this->index( $request ) ;

        } else {

            $this->classe::create($request->all()) ;
            return $this->index( $request ) ;

        }

    }

    
    public function getMenu( Request $request ) {

        $modules =  DB::table('portal.tbl_modules')
                    ->select('tbl_modules.*','tbl_modules.id_modules as module_id')
                    ->join('portal.rel_module_profiles', 'rel_module_profiles.id_modules', '=', 'tbl_modules.id_modules')
                    ->where('tbl_modules.system_id',1)
                    ->where('rel_module_profiles.id_profiles',$request->profiles_id)
                    ->where('id_modules_parent','0')->where('tbl_modules.status','1')
                    ->orderBy('tbl_modules.order')->get();

        if( $request->user_admin == "1" ) {
            $modules =  DB::table('portal.tbl_modules')
                    ->select('tbl_modules.*','tbl_modules.id_modules as module_id')
                    ->where('tbl_modules.status','1')
                    ->where('id_modules_parent','0')
                    ->where('tbl_modules.system_id',1)
                    ->orderBy('tbl_modules.order')
                    ->get();
        }


        foreach( $modules as $module ) {

            $module->children = DB::table('portal.tbl_modules')
                    ->select('tbl_modules.*','tbl_modules.id_modules as module_id')
                    ->join('portal.rel_module_profiles', 'rel_module_profiles.id_modules', '=', 'tbl_modules.id_modules')
                    ->where('rel_module_profiles.id_profiles',$request->profiles_id)
                    ->where('id_modules_parent',$module->module_id)
                    ->where('tbl_modules.status','1')->orderBy('tbl_modules.order')->get();

           if( $request->user_admin == "1" ) {

                $module->children = DB::table('portal.tbl_modules')
                    ->select('tbl_modules.*','tbl_modules.id_modules as module_id')
                    ->where('id_modules_parent',$module->module_id)
                    ->where('tbl_modules.status','1')->orderBy('tbl_modules.order')->get();
           }

        }

        return $modules ;

    }

    
}
