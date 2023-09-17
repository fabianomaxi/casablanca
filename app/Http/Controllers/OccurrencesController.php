<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Profiles;
use App\Models\User;
use App\Models\Positions;
use App\Models\TypeOfEmployment;
use App\Models\Occurrence;
use App\Models\Products;
use App\Models\ModuleDepartament ;

use Illuminate\Support\Facades\DB;

class OccurrencesController extends BaseController
{

    /** 
    * Neste construtor editarmos a variáve classe que é usada no BaseController
    * @access public 
    * @return void
    */
    public function __construct( Request $request ) {
        
        $this->classe = Occurrence::class ;

        $this->key = 'id_occurrence';
        $this->tituloPagina = 'Ocorrências' ;
        $this->pageAction  = 'occurrences' ;
        $this->uri = env('API_URL') . "/api/example" ;

        $this->tableData( $request ) ;

    }

    /* Método que especifica quais campos serão exibidos na listagem
    * @access public 
    */
    private function tableData( Request $request ) {

        $products = Products::all() ;
        $users = User::all() ;

    	$this->tableFilds =
    	[
    		'date' 			    => 	'Data',
            'id_user'             =>  'Usuário',
            'obs'               => 'Observação'
    	] ;

    	$this->camposForm =
    	[
    		'date'  => [
                    'name' => 'Data',
                    'type' => 'date'
            ] 	,
            
            'id_product'  => [
                'name' => 'Produto',
                'type' => 'select',
                'values' => $products->toArray(),
                'id_values' => 'id_products',
                'name_values' => 'name'
            ]  	,

            'id_user'  => [
                'name' => 'Usuário',
                'type' => 'select',
                'values' => $users->toArray(),
                'id_values' => 'id_user',
                'name_values' => 'name'
            ] 

        
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