<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Vacation;
use App\Models\User;

class VacationController extends BaseController
{

    /** 
    * Neste construtor editarmos a variáve classe que é usada no BaseController
    * @access public 
    * @return void
    */
    public function __construct( Request $request ) {
        
        $this->classe = Vacation::class ;

        $this->key = 'id_vacation';
        $this->tituloPagina = 'Gestão de Férias' ;
        $this->pageAction  = 'vacation' ;
        $this->uri = env('API_URL') . "/api/vacation" ;

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
            'id_user'             =>  'Solicitante',
            'date_vacation_start'             =>  'Início das Férias',    
    	] ;

    	$this->tableFildsData =
    	[
            'Solicitante'   =>  $this->getDataUsers(),
    	] ;

        $this->camposForm =
    	[
    		'id_user'  => [
                    'name' => 'Usuário Solicitante',
                    'type' => 'select',
                    'values' => $user->toArray(),
                    'id_values' => 'id_user',
                    'name_values' => 'name'
            ] 	,
    		'id_user_manager_aprouve'  => [
                'name' => 'Gestor Aprovação',
                'type' => 'select',
                'values' => $user->toArray(),
                'id_values' => 'id_user',
                'name_values' => 'name'
            ] 	,
            
            'id_user_rh_aprouve'  => [
                'name' => 'RH Aprovação',
                'type' => 'select',
                'values' => $user->toArray(),
                'id_values' => 'id_user',
                'name_values' => 'name'
            ] 	,
            'date'  => [
                'name' => 'Data da Solicitação',
                'type' => 'date'
            ] 	,
            'date_vacation_start'  => [
                'name' => 'Início das Férias',
                'type' => 'date'
            ] 	,
            'date_vacation_finisch'  => [
                'name' => 'Final das Férias',
                'type' => 'date'
            ] 	,
            'cash_allowance'  => [
                'name' => 'Abono Pecuniário( dias )',
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