<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\ProductModels;


class ProductModelsController extends Controller
{

    public function index( Request $request ) {
        
        $status = ['0' => 'Inativo' , '1' => 'Ativo'] ;

        # preciso listar os usuários
        $productModels = ProductModels::where('status',1)->orderBy('name')->get() ;
        // Users::where('id_user','2')->get() ; // pego o usuario de id - 2
        // Users::create($request) ;
        // Users::where('id_user',2)->update([$request]) ;
        // Users::where('id_user',2)->delete() ;

        return view( 'list_product_models' , ['data' => $productModels,'status' => $status]);

    }

    #exibir o formulário para preencher
    public function new( Request $request ) {
        return view( 'form_product_model');
    }

    public function show( Request $request ) {

        $productModels = ProductModels::find($request->id) ;
        return view( 'form_product_model' , ['data' => $productModels]);

    }

    public function destroy( Request $request ) {
        
        ProductModels::find($request->id)->update(['status' => '0']);
        return  $this->index( $request ) ;
    }

    public function store( Request $request ) {

        $request->merge(['id_user' => $request->session()->get('userIdSession')]) ;

        if( ! empty( $request->id ) ) {
            ProductModels::find($request->id)->update($request->all());
        } else{
            ProductModels::create( $request->all() ) ;
        }

       return  $this->index( $request ) ;

    }

}