<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
use App\Models\Maintenances;
use App\Models\Users;
use App\Models\Products;
use App\Models\ProductModels;
use App\Models\Manufacturer;

class MaintenancesController extends Controller
{

    public function index( Request $request ) {
        
        $status = ['0' => 'Inativo' , '1' => 'Ativo'] ;
        $situations = ['0' => 'Recebido' , '1' => 'Em Execução' , '2' => 'Concluído'] ;
        $prodSerie = [] ;

        $users = Users::all() ;
        if( ! empty($users) ) {
            foreach( $users as $user ){
                $use[$user->id_user] = $user->name ;
            }
        }


        $products = Products::all() ;
        if( ! empty($products) ) {
            foreach( $products as $product ){
                $prod[$product->id_products] = $product->name ;
            }
        }

        $products = Products::all() ;
        if( ! empty($products) ) {
            foreach( $products as $product ){
                $prodSerie[$product->id_products] = $product->serie ;
            }
        }


        $manufacturer = Manufacturer::all();
        $productModels = ProductModels::all(); 

        # preciso listar os usuários
        $maintenances = Maintenances::where('status','1')->get() ;
        // Users::where('id_user','2')->get() ; // pego o usuario de id - 2
        // Users::create($request) ;
        // Users::where('id_user',2)->update([$request]) ;
        // Users::where('id_user',2)->delete() ;

        return view( 'list_maintenances' , ['prodSerie' => $prodSerie, 'data' => $maintenances , 'status' => $status, 'products' => $prod, 'users' => $use, 'situations'=>$situations, 'manufacturer' => $manufacturer, 'productModels' => $productModels] );

    }
    
    public function new( Request $request )
    {

        $users = Users::all();
        $products = Products::all();
        $situations = ['0' => 'Recebido' , '1' => 'Em Execução' , '2' => 'Concluído'] ;


        return view( 'form_maintenance', ['users' => $users, 'products' => $products,'situations'=>$situations] );
    }

    public function show( Request $request ) {

        $users = Users::all();
        $products = Products::all();
        $situations = ['0' => 'Recebido' , '1' => 'Em Execução' , '2' => 'Concluído'] ;

        $maintenances = Maintenances::find($request->id) ;
        return view( 'form_maintenance' , ['data' => $maintenances, 'users' => $users, 'products' => $products,'situations' =>$situations] );

    }

    public function store( Request $request ) {

        $request->merge(['id_user' => $request->session()->get('userIdSession')]) ;

        if( ! empty( $request->id ) ) {
            Maintenances::find($request->id)->update($request->all());
        } else{
            Maintenances::create( $request->all() ) ;
        }

       return  $this->index( $request ) ;

    }
    
    public function destroy( Request $request ) {
        
        Maintenances::find($request->id)->update(['status' => '0']);
        return  $this->index( $request ) ;
    }

}