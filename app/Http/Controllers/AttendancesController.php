<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Attendances;


class AttendancesController extends Controller
{
    
    public function getByStudent( Request $request ) {

        $attendances = Attendances::where('id_student',1)
                            ->with("student")
                            ->with("patient")
                            ->with("messages")
                            ->with("messages.phrases")
                            ->with("messages.patient")
                            ->with("messages.student")
                            
                            ->get();

        $response = ['success' => true , 'data' => $attendances] ;
        $code = 200 ;

        return  response()
            ->json( $response , $code ) ;

    } 

    public function save( Request $reques ) {

    }

}