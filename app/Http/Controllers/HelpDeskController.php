<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\HelpDesk;
use App\Models\User;

class HelpDeskController extends BaseController
{

    /** 
    * Neste construtor editarmos a variáve classe que é usada no BaseController
    * @access public 
    * @return void
    */
    public function __construct( Request $request ) {
        
        $this->classe = HelpDesk::class ;

        $this->key = 'id_help_desk';
        $this->tituloPagina = 'Gestão de Chamados' ;
        $this->pageAction  = 'open_help' ;
        $this->uri = env('API_URL') . "/api/open_help" ;

        $this->tableData( $request ) ;

    }

    /* Método que especifica quais campos serão exibidos na listagem
    * @access public 
    */
    private function tableData( Request $request ) {

        $user = User::where('status','1')->get() ;

    	$this->tableFilds =
    	[
            'date'             =>  'Data Solicitação',
            'id_user_open'             =>  'Solicitante',
            'title'             =>  'Título',    
    	] ;

    	$this->tableFildsData =
    	[
            'Solicitante'   =>  $this->getDataUsers(),
    	] ;

        $this->camposForm =
    	[
    		'id_user_open'  => [
                    'name' => 'Usuário Solicitante',
                    'type' => 'select',
                    'values' => $user->toArray(),
                    'id_values' => 'id_user',
                    'name_values' => 'name'
            ] 	,
    		'id_user_close'  => [
                'name' => 'Atendido por',
                'type' => 'select',
                'values' => $user->toArray(),
                'id_values' => 'id_user',
                'name_values' => 'name'
            ] 	,
            
            'date'  => [
                'name' => 'Aberto em',
                'type' => 'date'
            ] 	,
            'date_close'  => [
                'name' => 'Fechado em',
                'type' => 'date'
            ] 	,
            'status'  => [
                'name' => 'Status',
                'type' => 'select',
                'values' => [[ 'id'=>'0' , 'name' => 'Pendente' ],[ 'id'=>'1' , 'name' => 'Em Atendimento' ],[ 'id'=>'2' , 'name' => 'Finalizado' ]],
                'id_values' => 'id',
                'name_values' => 'name'

            ] 	,
            'description'  => [
                'name' => 'Descrição',
                'type' => 'textarea'
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