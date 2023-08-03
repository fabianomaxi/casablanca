<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Accountability;
use App\Models\States ;
use App\Models\User ;

class AccountabilityController extends BaseController
{

    /** 
    * Neste construtor editarmos a variáve classe que é usada no BaseController
    * @access public 
    * @return void
    */
    public function __construct( Request $request ) {
        
        $this->classe = Accountability::class ;

        $this->key = 'id_accountability';
        $this->tituloPagina = 'Prestação de Contas' ;
        $this->pageAction  = 'accountability' ;
        $this->uri = env('API_URL') . "/api/accountability" ;

        $this->tableData( $request ) ;

    }

    /* Método que especifica quais campos serão exibidos na listagem
    * @access public 
    */
    private function tableData( Request $request ) {

        $states = States::where('status','1')->get() ;
        $user = User::where('status','1')->get() ;

    	$this->tableFilds =
    	[
            'date' => 'Data', 
            'id_user' => 'Colaborador', 
            'client' => 'Cliente',
            'event' => 'Evento',
            'responsible_manager' => 'Gestor'
    	] ;

        $this->modals = [
            'upload_prestador.blade.php'
        ] ;

        $this->buttons = [
            'upload_prestador.blade.php'
        ] ;

    	$this->camposForm =
    	[
    		'id_accountability'   => [
                'name' => 'Enviado por',
                'type' => 'text',
                'values' => '',
                'disabled' => 'disabled'
            ],
            'date'   => [
                'name' => 'Data do Evento',
                'type' => 'date',
                'disabled' => '',
                'values' => date('Y-m-d'),
            ],

            'mobile_unit_number'   => [
                            'name' => 'Número da Unidade Móvel',
                            'type' => 'text',
                            'required' => 'required'
            ],
            'sector'   => [
                            'name' => 'Setor',
                            'type' => 'text'
            ],
            'responsible_manager'   => [
                            'name' => 'Gestor responsável',
                            'type' => 'text'
            ],
            'client'   => [
                            'name' => 'Cliente',
                            'type' => 'text'
            ],
            'event'   => [
                            'name' => 'Evento',
                            'type' => 'text'
            ],
            'dates'   => [
                            'name' => 'Data(s)',
                            'type' => 'text'
            ],
            'state'   => [
                'name' => 'Estado',
                'type' => 'select',
                'values' => $states->toArray(),
                'id_values' => 'id',
                'name_values' => 'nome'
            ],
            'city'   => [
                            'name' => 'Cidade',
                            'type' => 'text'
            ],
            'location'   => [
                'name' => 'Local 2: estádio, arena, estúdio etc..',
                'type' => 'text'
            ],
            'job_code'   => [
                            'name' => 'Código do JOB',
                            'type' => 'text'
            ],
            'meal_expenses'   => [
                'name' => 'Datas das despesas com refeição',
                'type' => 'text'
            ],
            'total_meal_expenses'   => [
                            'name' => 'Total das despesas com refeição',
                            'type' => 'text',
                            'modal_upload' => '1',
                            'modal_id' => 'upload_prestador'
            ],
            'freelancer_team_meals'   => [
                            'name' => 'Datas das despesas com refeição(Freelancer)',
                            'type' => 'text'
            ],
            'total_freelancer_team_meals'   => [
                            'name' => 'Total das despesas com refeição(Freelancer)',
                            'type' => 'text',
                            'modal_upload' => '1',
                            'modal_id' => 'upload_prestador'
            ],
            'total_fuel_expenses'   => [
                            'name' => 'Despesas com combustível',
                            'type' => 'text',
                            'modal_upload' => '1',
                            'modal_id' => 'upload_prestador'
            ],
            'start_fuel_expenses'   => [
                            'name' => 'KM inicial',
                            'type' => 'text'
            ],
            'finish_fuel_expenses'   => [
                            'name' => 'KM final',
                            'type' => 'text'
            ],
            'total_expenses_with_transport'   => [
                'name' => 'Total de despesas com Uber, táxi ou transporte público',
                'type' => 'text',
                'modal_upload' => '1',
                            'modal_id' => 'upload_prestador'
            ],
            'local_start_expenses_with_transport'   => [
                'name' => 'Local de partida - Uber, táxi ou transporte público',
                'type' => 'text'
            ],
            'local_end_expenses_with_transport'   => [
                'name' => 'Local de chegada - Uber, táxi ou transporte público',
                'type' => 'text'
            ],
            'total_expenses_with_parking'   => [
                            'name' => 'Total de despesas com estacionamento',
                            'type' => 'text',
                            'modal_upload' => '1',
                            'modal_id' => 'upload_prestador'
            ],
            'total_expenses_with_water'   => [
                            'name' => 'Total de despesas com água',
                            'type' => 'text',
                            'modal_upload' => '1',
                            'modal_id' => 'upload_prestador'
            ],
            'vol_expenses_with_water'   => [
                            'name' => 'Litros de água',
                            'type' => 'text'
            ],
            'total_expenses_with_ice'   => [
                            'name' => 'Total de despesas com gelo',
                            'type' => 'text',
                            'modal_upload' => '1',
                            'modal_id' => 'upload_prestador'
            ],
            'qtde_expenses_with_ice'   => [
                            'name' => 'Quantidade de despesas com gelo',
                            'type' => 'text'
            ],
            'total_hotel_expenses'   => [
                            'name' => 'Total de despesas com Hotel',
                            'type' => 'text',
                            'modal_upload' => '1',
                            'modal_id' => 'upload_prestador'
            ],
            'total_car_wash_expenses'   => [
                            'name' => 'Despesas com lavagem de carro',
                            'type' => 'text',
                            'modal_upload' => '1',
                            'modal_id' => 'upload_prestador'
            ],
            'total_expenses_with_mailings'   => [
                            'name' => 'Despesa com envios de correio',
                            'type' => 'text',
                            'modal_upload' => '1',
                            'modal_id' => 'upload_prestador'
            ],
            'production_expenses'   => [
                'name' => 'Despesas com produção',
                'type' => 'text'
            ],
            'status'   => [
                            'name' => 'Status da Solicitação',
                            'type' => 'select',
                            'values' => [[ 'id'=>'0' , 'name' => 'Pendente do Gestor' ],[ 'id'=>'4' , 'name' => 'Recusada pelo Gestor' ],[ 'id'=>'5' , 'name' => 'Recusada pelo Financeiro' ],[ 'id'=>'1' , 'name' => 'Pendente do Financeiro' ],[ 'id'=>'2' , 'name' => 'Aguardando Pagamento' ],[ 'id'=>'3' , 'name' => 'Fechada' ]],
                            'id_values' => 'id',
                            'name_values' => 'name'
            ],
            'id_user_manager_approved'   => [
                            'name' => 'Gestor - Aprovação',
                            'type' => 'select',
                            'values' => $user->toArray(),
                            'id_values' => 'id_user',
                            'name_values' => 'name'
            ],
            'id_user_fin_approved'   => [
                            'name' => 'Financeiro - Aprovação',
                            'type' => 'select',
                            'values' => $user->toArray(),
                            'id_values' => 'id_user',
                            'name_values' => 'name'
            ],
            'date_user_manager_approved'   => [
                            'name' => 'Data da Aprovação do Gestor',
                            'type' => 'date'
            ],
            'date_user_fin_approved'   => [
                            'name' => 'Data da Aprovação do Financeiro',
                            'type' => 'date'
            ],
            'obs_user_manager_approved'   => [
                            'name' => 'Observações do Gestor',
                            'type' => 'textarea'
            ],
            'obs_user_fin_approved'   => [
                            'name' => 'Observações do Financeiro',
                            'type' => 'textarea'
            ],
            'obs_accountability'   => [
                            'name' => 'Observação da Solicitação',
                            'type' => 'textarea'
            ],
        
        ] ;
        

    }
    

    public function myIndex( Request $request )
	{

        if( @$request->status == "pedding"  ){
            $where = "status = 0 " ;
        } else if( @$request->status == "approouved"  ){
            $where = "status = 1 " ;
        } else if( @$request->status == "rejected"  ){
            $where = "status = 4 " ;
        }else {
            $where = " 1 = 1 " ;
        }

        $recurso = $this->classe::whereRaw($where)
        //->offset($request->offset)
        ->limit($request->limit)
        ->orderBy('date','desc')
        ->get() ;

        $return['titulo']      = $this->tituloPagina ;
        $return['campos']      = $this->tableFilds ;
        $return['valores_campos']      = @$this->tableFildsData ;
        
        $return['pageAction'] = $this->pageAction ;
        $return['dados']       = $recurso ;
        $return['reload']       = $this->reload ;
        $return['extra']       = $this->extra ;
        $return['buttons']       = $this->buttons ;

        return view($this->folder . 'dashboard_accountability' , ['data' => $recurso, 'return' => $return, 'id' => $this->key]);

	}
    
    public function index( Request $request )
	{

        if( @$request->status == "pedding"  ){
            $where = "status = 0 " ;
        } else if( @$request->status == "approouved"  ){
            $where = "status = 1 " ;
        } else if( @$request->status == "rejected"  ){
            $where = "status = 4 " ;
        }else {
            $where = " 1 = 1 " ;
        }

        $recurso = $this->classe::whereRaw($where)
        //->offset($request->offset)
        ->limit($request->limit)
        ->orderBy('date','desc')
        ->get() ;

        $return['titulo']      = $this->tituloPagina ;
        $return['campos']      = $this->tableFilds ;
        $return['valores_campos']      = @$this->tableFildsData ;
        
        $return['pageAction'] = $this->pageAction ;
        $return['dados']       = $recurso ;
        $return['reload']       = $this->reload ;
        $return['extra']       = $this->extra ;
        $return['buttons']       = $this->buttons ;

        return view($this->folder . 'dashboard_accountability_start' , ['data' => $recurso, 'return' => $return, 'id' => $this->key]);

	}

    public function indexMy( Request $request )
	{

        if( @$request->status == "pedding"  ){
            $where = "status = 0 " ;
        } else if( @$request->status == "approouved"  ){
            $where = "status = 1 " ;
        } else if( @$request->status == "rejected"  ){
            $where = "status = 4 " ;
        }else {
            $where = " 1 = 1 " ;
        }

        $recurso = $this->classe::whereRaw($where)
        //->offset($request->offset)
        ->limit($request->limit)
        ->orderBy('date','desc')
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