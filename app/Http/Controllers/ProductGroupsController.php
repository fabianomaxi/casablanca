<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\ProductGroups;


class ProductGroupsController extends Controller
{

    public function index( Request $request ) {

        $status = ['0' => 'Inativo' , '1' => 'Ativo'] ;

        # preciso listar os usuários
        $productGroups = ProductGroups::where('status','1')->orderBy('id_product_group','desc')->limit(200)->get() ;
        // Users::where('id_user','2')->get() ; // pego o usuario de id - 2
        // Users::create($request) ;
        // Users::where('id_user',2)->update([$request]) ;
        // Users::where('id_user',2)->delete() ;

        return view( 'list_product_groups' , ['data' => $productGroups , 'status' => $status]);

    }
    
    public function new( Request $request )
    {
        return view( 'form_product_group');
    }

    public function show( Request $request ) {

        $productGroups = ProductGroups::find($request->id) ;
        return view( 'form_product_group' , ['data' => $productGroups]);
        
    }

    public function store( Request $request ) {

        $request->merge(['id_user' => $request->session()->get('userIdSession')]) ;

        if( ! empty( $request->id ) ) {
            ProductGroups::find($request->id)->update($request->all());
        } else{
            ProductGroups::create( $request->all() ) ;
        }

       return  $this->index( $request ) ;

    }

    public function destroy( Request $request ) {
        
        ProductGroups::find($request->id)->update(['status' => '0']);
        return  $this->index( $request ) ;
    }

}