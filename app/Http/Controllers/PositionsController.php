<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Positions;

class PositionsController extends BaseController
{

    /** 
    * Neste construtor editarmos a variáve classe que é usada no BaseController
    * @access public 
    * @return void
    */
    public function __construct( Request $request ) {
        
        $this->classe = Positions::class ;

        $this->key = 'id_positions';
        $this->tituloPagina = 'Gestão de Cargos' ;
        $this->pageAction  = 'positions' ;
        $this->uri = env('API_URL') . "/api/positions" ;

        $this->tableData( $request ) ;

    }

    /* Método que especifica quais campos serão exibidos na listagem
    * @access public 
    */
    private function tableData( Request $request ) {

    	$this->tableFilds =
    	[
    		'name' 			    => 	'Nome'     
    	] ;

    	$this->camposForm =
    	[
    		'name'  => [
                    'name' => 'Nome do cargo',
                    'type' => 'text'
            ] 	,
    		
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