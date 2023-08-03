<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Clientes;
use App\Models\User;
use App\Http\Controllers\DashboardController ;
use App\Models\Students;


class UserController extends Controller
{
    
    public function logar( Request $request ) {

        $students = Students::where('email',$request->header('user'))
                ->where('passwd',$request->header('passwd'))
                ->get() ;

        print_r($students) ;

        exit ;

        return ['teste' => 'Fabiano'] ;

    } 

}