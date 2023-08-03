<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\StockLocations;


class StockLocationsController extends Controller
{

    public function index( Request $request ) {
        
        $status = ['0' => 'Inativo' , '1' => 'Ativo'] ;

        # preciso listar os usuários
        $stockLocations = StockLocations::where('status','1')->get() ;
        // Users::where('id_user','2')->get() ; // pego o usuario de id - 2
        // Users::create($request) ;
        // Users::where('id_user',2)->update([$request]) ;
        // Users::where('id_user',2)->delete() ;

        return view( 'list_stock_locations' , ['data' => $stockLocations , 'status' => $status]);

    }
    
    public function new( Request $request )
    {
        return view( 'form_stock_location');
    }

    public function show( Request $request ) {

        $stockLocations = StockLocations::find($request->id) ;
        return view( 'form_stock_location' , ['data' => $stockLocations]);

    }

    public function store( Request $request ) {

        $request->merge(['id_user' => $request->session()->get('userIdSession')]) ;
        
        if( ! empty( $request->id ) ) {
            StockLocations::find($request->id)->update($request->all());
        } else{
            StockLocations::create( $request->all() ) ;
        }

       return  $this->index( $request ) ;

    }

    public function destroy( Request $request ) {
        
        StockLocations::find($request->id)->update(['status' => '0']);
        return  $this->index( $request ) ;
    }

}