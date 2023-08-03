<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Modules;
use App\Models\ModuleDepartament ;


class ModulesController extends Controller
{

    public function index( Request $request ) {

        $status = ['0' => 'Inativo' , '1' => 'Ativo'] ;

        # preciso listar os usuários
        $modules = Modules::where('status','1')->get() ;
        // Users::where('id_user','2')->get() ; // pego o usuario de id - 2
        // Users::create($request) ;
        // Users::where('id_user',2)->update([$request]) ;
        // Users::where('id_user',2)->delete() ;

        return view( 'list_modules' , ['data' => $modules , 'status' => $status]);

    }
    
    public function new( Request $request )
    {
        $modules_main = [] ;
        $modules_main = Modules::where('main_module',NULL)->get() ;

        $moduleDepartament = ModuleDepartament::where('status',1)->get() ;

        return view( 'form_module' , ['modules_main'=> $modules_main,'moduleDepartament' =>$moduleDepartament]);

    }

    public function show( Request $request ) {
        $modules_main = [] ;
        $modules = Modules::find($request->id) ;
        $modules_main = Modules::where('main_module','')->get() ;

        $moduleDepartament = ModuleDepartament::where('status',1)->get() ;
        return view( 'form_module' , ['data' => $modules , 'modules_main'=> $modules_main,'moduleDepartament' =>$moduleDepartament]);

    }

    public function store( Request $request ) {

        $request->merge(['id_user' => $request->session()->get('userIdSession')]) ;

        if( ! empty( $request->id ) ) {
            Modules::find($request->id)->update($request->all());
        } else{
            Modules::create( $request->all() ) ;
        }

       return  $this->index( $request ) ;

    }

    public function destroy( Request $request ) {
        
        Modules::find($request->id)->update(['status' => '0']);
        return redirect('modules') ;
    }


}