<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Students;


class StudentsController extends Controller
{
    
    public function logar( Request $request ) {

        $students = Students::select('id_student','id_user','university')
                ->where('email',$request->header('user'))
                ->where('passwd',$request->header('passwd'))
                ->get() ;

        if( $students->isEmpty() ) {
            $response = ['success' => false] ;
            $code = 202 ;
        } else {
            $token = md5($students[0]->id_student."IA".$students[0]->user."IA".$students[0]->university."D".date('Ymdis'));
            $students[0]->update(['token' => $token]) ;
            $response = ['success' => true , 'token' => $token] ;
            $code = 200 ;
        }

        return  response()
            ->json( $response , $code ) ;

    } 

}