<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Profiles;
use App\Models\User;
use App\Models\Positions;
use App\Models\TypeOfEmployment;
use App\Models\Permissions;
use App\Models\Modules;
use App\Models\ModuleDepartament ;

use Illuminate\Support\Facades\DB;

class PermitionsController extends BaseController
{

    /** 
    * Neste construtor editarmos a variáve classe que é usada no BaseController
    * @access public 
    * @return void
    */
    public function __construct( Request $request ) {
        
        $this->classe = Permissions::class ;

        $this->key = 'id_permissions';
        $this->tituloPagina = 'Pedido de Permissões' ;
        $this->pageAction  = 'permitions' ;
        $this->uri = env('API_URL') . "/api/example" ;

        $this->tableData( $request ) ;

    }

    /* Método que especifica quais campos serão exibidos na listagem
    * @access public 
    */
    private function tableData( Request $request ) {

        $modules = Modules::all() ;
        $users = User::all() ;

    	$this->tableFilds =
    	[
    		'date' 			    => 	'Data',
            'id_user'             =>  'Usuário',
            'id_modules'               => 'Módulo'
    	] ;

    	$this->camposForm =
    	[
    		'date'  => [
                    'name' => 'Data',
                    'type' => 'date'
            ] 	,
            
            'id_user'  => [
                'name' => 'Usuário',
                'type' => 'select',
                'values' => $users->toArray(),
                'id_values' => 'id_user',
                'name_values' => 'name'
            ] ,

            'id_modules'  => [
                'name' => 'Produto',
                'type' => 'select',
                'values' => $modules->toArray(),
                'id_values' => 'id_module',
                'name_values' => 'name'
            ]  	,

        
            ] ;
        

    }

    public function list( Request $request ) {

        return parent::list($request) ;

    }

    /** 
    * Prepara variáveis e exibe o formulário de criação
    * @access public 
    * @param Request $request 
    * @return view 
    */
    public function new( Request $request ) {

        $modules = $this->getMenu() ;
        $return[] = [] ;

        return view('exampleex/form',['return' => $return , 'menu' => $modules,'data' => array()]);

    }

}