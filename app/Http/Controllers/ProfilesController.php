<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Profiles;


class ProfilesController extends Controller
{

    public function index( Request $request ) {
        
        $status = ['0' => 'Inativo' , '1' => 'Ativo'] ;

        # preciso listar os usuários
        $profiles = Profiles::where('status','1')->get() ;
        // Users::where('id_user','2')->get() ; // pego o usuario de id - 2
        // Users::create($request) ;
        // Users::where('id_user',2)->update([$request]) ;
        // Users::where('id_user',2)->delete() ;

        return view( 'list_profiles' , ['data' => $profiles,'status' => $status]);

    }

    #exibir o formulário para preencher
    public function new( Request $request ) {
        return view( 'form_profile');
    }

    public function show( Request $request ) {

        $profile = Profiles::find($request->id) ;
        return view( 'form_profile' , ['data' => $profile]);

    }

    public function destroy( Request $request ) {
        
        Profiles::find($request->id)->update(['status' => '0']);
        return redirect('profiles') ;

    }

    public function store( Request $request ) {

        $request->merge(['id_user' => $request->session()->get('userIdSession')]) ;

        if( ! empty( $request->id ) ) {
            Profiles::find($request->id)->update($request->all());
        } else{
            Profiles::create( $request->all() ) ;
        }

       return  $this->index( $request ) ;

    }

    

}