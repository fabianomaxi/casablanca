<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ; 
use App\Models\UserLogs;
use App\Models\Users;
use App\Models\Modules;


class UserLogsController extends Controller
{

    public function index( Request $request ) {
        
        $status = ['0' => 'Inativo' , '1' => 'Ativo'] ;

        # preciso listar os usuários
        $userlog = UserLogs::all() ;
        // Users::where('id_user','2')->get() ; // pego o usuario de id - 2
        // Users::create($request) ;
        // Users::where('id_user',2)->update([$request]) ;
        // Users::where('id_user',2)->delete() ;

        return view( 'list_user_logs' , ['data' => $userlog , 'status' => $userlog]);

    }
    
    public function new( Request $request )
    {
        return view( 'form_user_log');
    }

    public function show( Request $request ) {

        $userlog = UserLogs::find($request->id) ;
        return view( 'form_user_log' , ['data' => $userlog]);

    }

    public function store( Request $request ) {

        $request->merge(['id_user' => $request->session()->get('userIdSession')]) ;

        if( ! empty( $request->id ) ) {
            UserLogs::find($request->id)->update($request->all());
        } else{
            UserLogs::create( $request->all() ) ;
        }

       return  $this->index( $request ) ;

    }

    public function destroy( Request $request ) {
        
        UserLogs::find($request->id)->update(['status' => '0']);
        return  $this->index( $request ) ;
    }

    public function showLog(Request $request)
    {
        $shows = UserLogs::select("date", "id_user", "action", "data_json", "id_module")
            ->where("id_user", $request->id)
            ->get();

        $return = "";
        
        $users = Users::all() ;
        if( ! empty($users) ) {
            foreach( $users as $user ){
                $userData[$user->id_user] = $user->name ;
            }
        }

        $modules = Modules::all() ;
        if( ! empty($modules) ) {
            foreach( $modules as $module ){
                $modulo[$module->id_module] = $module->name ;
            }
        }
        

        $userlogs = UserLogs::all() ;
        if( ! empty($userlogs) ) {
            foreach( $userlogs as $userlog ){
                $userL[$userlog->id_user_log] = $userlog->name ;
            }
        }

        foreach($shows as $show){
            $return .= '
            <tr>
                <td contenteditable="true">'.$show->date.'</td> 
                <td contenteditable="true">'.$show->action.'</td>
                <td contenteditable="true">'.$show->data_json.'</td>
                <td contenteditable="true">'.$show->user->name.'</td>
                <td contenteditable="true">'.$show->module->name.'</td>
                
            </tr>
            ';

        }
        return $return;

    }


}