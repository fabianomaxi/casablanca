<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Ferias;

use Illuminate\Support\Facades\DB;

class FeriasController extends BaseController
{

    /** 
    * Neste construtor editarmos a variáve classe que é usada no BaseController
    * @access public 
    * @return void
    */
    public function __construct( Request $request ) {
        
        $this->classe = Ferias::class ;

        $this->key = 'id_ferias';
        $this->tituloPagina = 'Solicitação de Férias' ;
        $this->pageAction  = 'ferias' ;
        $this->uri = env('API_URL') . "/api/ferias" ;

        $this->tableData() ;

    }

    /* Método que especifica quais campos serão exibidos na listagem
    * @access public 
    */
    private function tableData() {

    	$this->tableFilds =
    	[
            'id_gestor' => 'Gestor solicitante', 
            'id_colaborador' => 'Colaborador', 
            'data_inicial' => 'Data Inicial',
            'data_final' => 'Data Final',
            'status' => 'Status da Solicitação'
    	] ;

    	$this->camposForm =
    	[
    		'id_gestor'  => [
                    'name' => 'Gestor solicitante',
                    'type' => 'text'
            ] 	,
    		'id_colaborador'  => [
                'name' => 'Colaborador',
                'type' => 'text'
            ] 	,
            'id_user_autorizacao'  => [
                'name' => 'Autorizado por',
                'type' => 'text'
            ] 	,
            'data_inicial'  => [
                'name' => 'Data Inicial',
                'type' => 'date'
            ] 	,
            'data_final'  => [
                'name' => 'Data Final',
                'type' => 'date'
            ] 	,
            'abono_pecuniario'  => [
                'name' => 'Abono Pecuniario',
                'type' => 'text'
            ] 	,
            'dias_abono_pecuniario'  => [
                'name' => 'Dias Abono Pecuniario',
                'type' => 'number'
            ] 	,
            'status'  => [
                'name' => 'Status da Solicitação',
                'type' => 'text'
            ] ,
            'motivo_recusa'  => [
                'name' => 'Motivo Recusa',
                'type' => 'text'
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