<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Movements;
use App\Models\User;
use App\Models\ProfileModules;
use App\Models\Products;
use App\Models\Modules;
use App\Models\Labels;
use App\Models\StockLocations;

use Illuminate\Support\Facades\DB;


class AppController extends Controller
{
    
    public function index( Request $request ) {

        $movements = Movements::orderBy('date','DESC')->limit('20')->get();


        if( ! empty( $request->busca ) ) {
            $where = " name like '%".$request->busca."%' or serie = '".$request->busca."' " ;
            $prodBUsca = Products::whereRaw($where)->get() ;
            if(! $prodBUsca->isEmpty()) {
                foreach($prodBUsca as $p){
                    $ids[] = $p->id_products ;
                }

                $movements = Movements::whereRaw('id_products in('.implode(',',$ids).') ')->orderBy('date','DESC')->limit('20')->get();

            }

        }

        $users = User::all() ;
        if( ! empty($users) ) {
            foreach( $users as $user ){
                $userData[$user->id_user] = $user->name ;
            }
        }


        $products = Products::all() ;
        if( ! empty($products) ) {
            foreach( $products as $product ){
                $productData[$product->id_products] = $product->name ;
            }
        }

        $stocksLocations = StockLocations::all() ;
        if( ! empty($stocksLocations) ) {
            foreach( $stocksLocations as $stocksLocation ){
                $stockData[$stocksLocation->id_stock_locations] = $stocksLocation->name ;
            }
        }

        $stockLocations = StockLocations::all() ;


        return view('app/index' , ['movements' => $movements, 'users' => $userData, 'products' => $productData, 'stocksLocation' => $stockData, 'stockLocations' => $stockLocations ] );
    } 

    public function getProdutoApp( Request $request ) {

        $labels = Labels::where('name',$request->etiqueta)->get() ;
        if( ! $labels->isEmpty() ){
            $products = Products::where('id_labels',$labels[0]->id_labels)->get() ;
            if( empty($products) ){
                echo "0" ;
            } else {
                echo $products[0]->name ;
            }
        } else {
            echo "0" ;
        }

    }


    public function saveExitApp( Request $request ) {
        
        $id_products = 0 ;

        $products = Products::where('name',$request->product_name)->get() ;
        if( !$products->isEmpty() ) {
            $id_products = $products[0]->id_products ;
        }
        
        $id_stock_locations_from = $request->id_stock_locations_to ;

        $movements = Movements::where('id_products',$id_products)->orderBy('date','DESC')->first() ;
        if( !empty($movements) ) {
            $id_stock_locations_from = $movements->id_stock_locations_to ;
        }

        $movements = new Movements() ;
        $movements->description = $request->observacao;
        // $request->session()->get('userIdSession') ;
        $movements->id_user = 1 ;
        $movements->id_products = $id_products ;
        $movements->id_stock_locations_from = $id_stock_locations_from ;
        $movements->id_stock_locations_to = $request->id_stock_locations_to ;
        $movements->save() ;

        return redirect('/aplicativo?s=1');

    }
    
    public function login( Request $request ) {

        return view('app/login');
    }

    public function validateUser( Request $request ) {

        $user = User::where('email',$request->email)->where('password',$request->password)->first() ;

        if( ! empty($user) ) {
            return  response()->json( [ 'success' => true , 'response' => 'Bem vindo'] , 200 ) ;
        } else {
            return  response()->json( ['success' => false ,'response' => 'Login ou senha invalidos'] , 201 ) ;
        }

        $request->session()->put('nameSession', $user->name);
        
    }



    public function logout( Request $request ) {
        $request->session()->put('userIdSession', '');
        $request->session()->put('nameSession', '');
        return redirect('aplicativo/login');
    }


}