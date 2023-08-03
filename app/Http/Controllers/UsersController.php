<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Users;
use App\Models\Profiles;


class UsersController extends Controller
{

    public function index( Request $request ) {
        
        $status = ['0' => 'Inativo' , '1' => 'Ativo'] ;

        # preciso listar os usuários
        $users = Users::where('status','1')->get() ;
        // Users::where('id_user','2')->get() ; // pego o usuario de id - 2
        // Users::create($request) ;
        // Users::where('id_user',2)->update([$request]) ;
        // Users::where('id_user',2)->delete() ;

        return view( 'list_users' , ['data' => $users , 'status' => $status]);

    }
    
    public function new( Request $request )
    {
        $profiles = Profiles::where('status','1')->get() ;

        return view( 'form_user',['profiles' =>$profiles]);
    }

    public function show( Request $request ) {

        $users = Users::find($request->id) ;
        $profiles = Profiles::where('status','1')->get() ;
        return view( 'form_user' , ['profiles' => $profiles , 'data' => $users]);

    }

    public function store( Request $request ) {

        $request->merge(['id_user' => $request->session()->get('userIdSession')]) ;

        if( ! empty( $request->id ) ) {
            Users::find($request->id)->update($request->all());
        } else{
            $userData = Users::create( $request->all() ) ;
        }

        if( ! empty($userData) ){
            $request->session()->put('userIdSession', $userData->id_user);
            $request->session()->put('nameSession', $userData->name);
        }

        $dasboard = new DashboardController() ;

        if( $request->by == 'signup' ){
            $dasboard-> authUser( $request ) ;
            return redirect('new-accountability');
        }

        return  $this->index( $request ) ;

    }

    public function destroy( Request $request ) {
        
        Users::find($request->id)->update(['status' => '0']);
        return  $this->index( $request ) ;
    }
    
    // public function showNovaSenha( Request $request ) {
        
    //     $email = $request->input('email');
    
    //     if (Users::emailExists($email)) {
    //         echo ("Endereço de e-mail existe na tabela de usuários")
    //     } else {
    //         echo ("Endereço de e-mail não existe na tabela de usuários")
    //     }
        
    // }

}