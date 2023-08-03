<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Phrases;


class PhrasesController extends Controller
{
    
    public function getPhrases( Request $request ) {

        $phrases = Phrases::select('phrase')
                        ->selectRaw('TO_BASE64(id_phrase) as code')
                        ->get() ;

        $response = ['success' => true , 'data' => $phrases] ;
        $code = 200 ;

        return  response()
            ->json( $response , $code ) ;

    } 

}