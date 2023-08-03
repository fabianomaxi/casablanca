<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Manufacturer;

class ManufacturerController extends Controller
{

    public function index( Request $request ) {
        
        $status = ['0' => 'Inativo' , '1' => 'Ativo'] ;

        # preciso listar os usuários
        $manufacturer = Manufacturer::where('status','1')->orderBy('name')->get() ;

        return view( 'list_manufacturer' , ['data' => $manufacturer , 'status' => $status] );

    }
    
    public function new( Request $request )
    {
        return view( 'form_manufacture' );
    }

    public function show( Request $request ) {

        $manufacturer = Manufacturer::find($request->id) ;

        return view( 'form_manufacture' , ['data' => $manufacturer] );

    }

    public function store( Request $request ) {

        $request->merge(['id_user' => $request->session()->get('userIdSession')]) ;

        if( ! empty( $request->id ) ) {
            Manufacturer::find($request->id)->update($request->all());
        } else{
            Manufacturer::create( $request->all() ) ;
        }

       return  $this->index( $request ) ;

    }
    
    public function destroy( Request $request ) {
        
        Manufacturer::find($request->id)->update(['status' => '0']);
        
        return  $this->index( $request ) ;
    }

}