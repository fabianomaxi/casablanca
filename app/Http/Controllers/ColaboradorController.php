<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Profiles;
use App\Models\User;
use App\Models\Positions;
use App\Models\TypeOfEmployment;
use App\Models\Modules;
use App\Models\Maintenances;
use App\Models\ModuleDepartament ;

use Illuminate\Support\Facades\DB;

class ColaboradorController extends BaseController
{

    /** 
    * Neste construtor editarmos a variáve classe que é usada no BaseController
    * @access public 
    * @return void
    */
    public function __construct( Request $request ) {
        
        $this->classe = User::class ;

        $this->key = 'id_user';
        $this->tituloPagina = 'Colaboradores' ;
        $this->pageAction  = 'colaborador' ;
        $this->uri = env('API_URL') . "/api/example" ;

        $this->tableData( $request ) ;

    }

    /* Método que especifica quais campos serão exibidos na listagem
    * @access public 
    */
    private function tableData( Request $request ) {

        $moduleDepartament = ModuleDepartament::where('status',1)->get() ;
        $profiles = Profiles::where('status',1)->get() ;
        $positions = Positions::where('status','1')->get() ;
        $typeOfEmployment = TypeOfEmployment::where('status',1)->get() ;


    	$this->tableFilds =
    	[
    		'name' 			    => 	'Nome',
            'email'             =>  'E-mail'     
    	] ;

    	$this->camposForm =
    	[
    		'name'  => [
                    'name' => 'Nome',
                    'type' => 'text'
            ] 	,
    		'email'  => [
                'name' => 'Email',
                'type' => 'mail'
            ] 	,
            
            'id_profile'  => [
                'name' => 'Perfil de Usuário',
                'type' => 'select',
                'values' => $profiles->toArray(),
                'id_values' => 'id_profile',
                'name_values' => 'name'
            ] 	,

            'id_module_departament'  => [
                'name' => 'Departamento',
                'type' => 'select',
                'values' => $moduleDepartament->toArray(),
                'id_values' => 'id_module_departament',
                'name_values' => 'name'
            ] 	,
            'address'  => [
                'name' => 'Endereço',
                'type' => 'text'
            ] 	,
            'date_of_birth'  => [
                'name' => 'Data de Nascimento',
                'type' => 'date'
            ] 	,
            'marital_status'  => [
                'name' => 'Estado Civil',
                'type' => 'select',
                'values' => [[ 'id'=>'0' , 'name' => 'Solteiro' ],[ 'id'=>'1' , 'name' => 'Casado' ],[ 'id'=>'2' , 'name' => 'Divorciado' ]],
                'id_values' => 'id',
                'name_values' => 'name'
            ] 	,
            'id_positions'  => [
                'name' => 'Cargo Ocupado',
                'type' => 'select',
                'values' => $positions->toArray(),
                'id_values' => 'id_positions',
                'name_values' => 'name'
            ] 	,
            'admission_date'  => [
                'name' => 'Data de Aadmissão',
                'type' => 'date'
            ] 	,
            'type_of_employment'  => [
                'name' => 'Tipo de Vínculo',
                'type' => 'select',
                'values' => $typeOfEmployment->toArray(),
                'id_values' => 'id_type_of_employment',
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