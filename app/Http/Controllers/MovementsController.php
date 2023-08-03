<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
use App\Models\Movements;
use App\Models\StockLocations;
use App\Models\Products;
use App\Models\ProductModels;
use App\Models\Users;
use App\Models\Labels ;

class MovementsController extends Controller
{

    public function index( Request $request ) {
        
        $status = ['0' => 'Inativo' , '1' => 'Ativo'] ;

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
                $prodSeries[$product->id_products] = $product->serie ;
            }
        }

        $stockLocations = StockLocations::all() ;
        if( ! empty($stockLocations) ) {
            foreach( $stockLocations as $stockLocation ){
                $stock[$stockLocation->id_stock_locations] = $stockLocation->name ;
            }
        }


        # preciso listar os usuários
        $movements = Movements::where('status','1')->orderBy('date','DESC')->get() ;
        // Users::where('id_user','2')->get() ; // pego o usuario de id - 2
        // Users::create($request) ;
        // Users::where('id_user',2)->update([$request]) ;
        // Users::where('id_user',2)->delete() ;

        return view( 'list_movements' , ['prodSeries' => $prodSeries, 'data' => $movements , 'status' => $status, 'products' => $prod, 'users' => $use, 'stockLocations' => $stock] );

    }
    
    public function new( Request $request )
    {

        $labelsData = [] ;

        $stockLocations = StockLocations::all();
        $users = Users::all();
        
        $products = Products::all();

        $productModels = ProductModels::all();
        if( ! empty($productModels) ) {
            foreach( $productModels as $productModel ){
                $productM[$productModel->id_product_models] = $productModel->name ;
            }
        }

        $labels = Labels::all() ;
        if( ! empty($labels) ) {
            foreach( $labels as $label ){
                $labelsData[$label->id_labels] = $label->name ;
            }
        }

        return view( 'form_movement', ['labelsData' => $labelsData, 'users' => $users, 'productModels' => $productM ,'products' => $products, 'stockLocations' => $stockLocations] );
    }

    public function show( Request $request ) {


        $stockLocations = StockLocations::all();
        $users = Users::all();
        $products = Products::all();

        $labelsData = [] ;

        $productModels = ProductModels::all();
        if( ! empty($productModels) ) {
            foreach( $productModels as $productModel ){
                $productM[$productModel->id_product_models] = $productModel->name ;
            }
        }

        $labels = Labels::all() ;
        if( ! empty($labels) ) {
            foreach( $labels as $label ){
                $labelsData[$label->id_labels] = $label->name ;
            }
        }

        $movements = Movements::find($request->id) ;
        return view( 'form_movement' , ['productModels' => $productModels , 'labelsData' => $labelsData, 'data' => $movements, 'users' => $users, 'products' => $products, 'stockLocations' => $stockLocations] );

    }

    public function store( Request $request ) {

        $request->merge(['id_user' => $request->session()->get('userIdSession')]) ;
        
        if( ! empty( $request->id ) ) {
            Movements::find($request->id)->update($request->all());
        } else{
            Movements::create( $request->all() ) ;
        }

       return  $this->index( $request ) ;

    }
    
    public function destroy( Request $request ) {
        
        Movements::find($request->id)->update(['status' => '0']);
        return  $this->index( $request ) ;
    }

    public function showMov(Request $request)
    {
        $shows = Movements::select("date", "id_user", "id_stock_locations_from", "id_stock_locations_to")
            ->where("id_products", $request->id)
            ->get();

        $return = "";

        $users = Users::all() ;
        if( ! empty($users) ) {
            foreach( $users as $user ){
                $userData[$user->id_user] = $user->name ;
            }
        }

        $stockLocations = StockLocations::all() ;
        if( ! empty($stockLocations) ) {
            foreach( $stockLocations as $stockLocation ){
                $stock[$stockLocation->id_stock_locations] = $stockLocation->name ;
            }
        }


        foreach($shows as $show){
            $return .= '
            <tr>
                <td contenteditable="true">'.$show->date.'</td>
                <td contenteditable="true">'.$userData[$show->id_user].'</td>
                <td contenteditable="true">'.$stock[$show->id_stock_locations_from].'</td>
                <td contenteditable="true">'.$stock[$show->id_stock_locations_to].'</td>
            </tr>
            ';

            return $return;

        }


    }


}