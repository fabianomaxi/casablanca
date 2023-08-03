<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Clientes;
use App\Models\User;
use App\Http\Controllers\DashboardController ;
use App\Models\AttendancesMessages;


class AttendancesMessagesController extends Controller
{
    
    public function save( Request $request ) {

        AttendancesMessages::create( $request->all() ) ;

        return ['success' => true] ;

    } 

}