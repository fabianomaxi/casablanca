<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
 
use App\Models\Products;
use App\Models\Labels;
use App\Models\ProductGroups ;
use App\Models\ProductModels ;
use App\Models\Manufacturer ;

class ProductsController extends Controller
{


    public function listagemNovo( Request $request ) {

        $status = ['0' => 'Inativo' , '1' => 'Ativo'] ;

        $productG = [] ;
        
        $productModels = ProductModels::all() ;
        if( ! empty($productModels) ) {
            foreach( $productModels as $productModel ){
                $productM[$productModel->id_product_models] = $productModel->name ;
            }
        }

        $productGroups = ProductGroups::all() ;
        if( ! empty($productGroups) ) {
            foreach( $productGroups as $productGroup ){
                $productG[$productGroup->id_product_group] = $productGroup->name ;
            }
        }

        
        $manufacturer = Manufacturer::all() ;
        if( ! empty($manufacturer) ) {
            foreach( $manufacturer as $manufacture ){
                $dataManufacturer[$manufacture->id_manufacturer] = $manufacture->name ;
            }
        }

        $labels = Labels::all() ;
        if( ! empty($labels) ) {
            foreach( $labels as $label ){
                $lb[$label->id_labels] = $label->name ;
            }
        }

        # preciso listar os usuários
        $products = Products::where('status','1')->get() ;

        return view( 'novo-painel/listagem' , ['data' => $products , 'status' => $status,'labels' => $lb, 'productGroups' => $productG, 'productModels' => $productM, 'manufacturer' => $dataManufacturer ] );
   
    } 

    public function newNovo( Request $request )
    {

        $labels = Labels::where('used','0')->orderBy('name')->get() ;

        $productGroups = ProductGroups::all() ;

        $productModels = ProductModels::all() ;

        $manufacturer = Manufacturer::all() ;

        return view( 'novo-painel/form' , ['labels' => $labels, 'productGroups' => $productGroups,'productModels'=>$productModels, 'manufacturer' => $manufacturer] );
    }

    // OLD

    public function index( Request $request ) {
        
        $status = ['0' => 'Inativo' , '1' => 'Ativo'] ;

        $productG = [] ;
        
        $productModels = ProductModels::all() ;
        if( ! empty($productModels) ) {
            foreach( $productModels as $productModel ){
                $productM[$productModel->id_product_models] = $productModel->name ;
            }
        }

        $productGroups = ProductGroups::all() ;
        if( ! empty($productGroups) ) {
            foreach( $productGroups as $productGroup ){
                $productG[$productGroup->id_product_group] = $productGroup->name ;
            }
        }

        
        $manufacturer = Manufacturer::all() ;
        if( ! empty($manufacturer) ) {
            foreach( $manufacturer as $manufacture ){
                $dataManufacturer[$manufacture->id_manufacturer] = $manufacture->name ;
            }
        }


        // $users = Users::all() ;
        // if( ! empty($users) ) {
        //     foreach( $users as $user ){
        //         $use[$user->id_user] = $user->name ;
        //     }
        // }


        $labels = Labels::all() ;
        if( ! empty($labels) ) {
            foreach( $labels as $label ){
                $lb[$label->id_labels] = $label->name ;
            }
        }

        # preciso listar os usuários
        $products = Products::where('status','1')->get() ;

        return view( 'list_products' , ['data' => $products , 'status' => $status,'labels' => $lb, 'productGroups' => $productG, 'productModels' => $productM, 'manufacturer' => $dataManufacturer ] );
        
    }

    public function search( Request $request ) {
        
        $status = ['0' => 'Inativo' , '1' => 'Ativo'] ;
        $labels = Labels::all() ;

        if( ! empty($labels) ) {
            foreach( $labels as $label ){
                $lb[$label->id_labels] = $label->name ;
            }
        }

        $where = " (
                        name like '%".$request->search."%' or 
                        serie like '%".$request->search."%' or
                        ( id_labels in ( select id_labels from labels where name = '".$request->search."') )
                    )
            and status = 1
         " ;

        # preciso listar os usuários
        $products = Products::whereRaw($where)->get() ;
        // Users::where('id_user','2')->get() ; // pego o usuario de id - 2
        // Users::create($request) ;
        // Users::where('id_user',2)->update([$request]) ;
        // Users::where('id_user',2)->delete() ;

        return view( 'list_products' , ['data' => $products , 'status' => $status,'labels' => $lb]);

    }

    
    
    public function new( Request $request )
    {

        $labels = Labels::where('used','0')->orderBy('name')->get() ;

        $productGroups = ProductGroups::all() ;

        $productModels = ProductModels::all() ;

        $manufacturer = Manufacturer::all() ;

        return view( 'form_product' , ['labels' => $labels, 'productGroups' => $productGroups,'productModels'=>$productModels, 'manufacturer' => $manufacturer] );
    }

    public function show( Request $request ) {

        $where = "  used = 0 " ;
        $products = Products::find($request->id) ;
        if( ! empty( $products->id_labels ) ) {
            $where .= " or id_labels = ".$products->id_labels." " ;
        }

        $labels = Labels::whereRaw($where)->orderBy('name')->get() ;

        $productGroups = ProductGroups::all() ;
        $productModels = ProductModels::all() ;
        $manufacturer = Manufacturer::all() ;

        $products = Products::find($request->id) ;

        return view( 'form_product' , ['data' => $products,'labels' => $labels, 'productGroups' => $productGroups,'productModels'=>$productModels, 'manufacturer' => $manufacturer] );

    }

    public function store( Request $request ) {

        $request->merge(['id_user' => $request->session()->get('userIdSession')]) ;

        if( ! empty( $request->id ) ) {
            Products::find($request->id)->update($request->all());
        } else{
            Products::create( $request->all() ) ;
        }

       return  $this->index( $request ) ;

    }
    
    public function destroy( Request $request ) {
        
        Products::find($request->id)->update(['status' => '0']);
        return  $this->index( $request ) ;
    }

    public function showFiltrar(Request $request)
    {
        $labels = Labels::all();

        $return = "";

        $return = ' <div class="form-row">
                        <div class="col">
                        <label for="email">Etiquetas</label>
                            <select class="form-control" id="exampleFormControlSelect1"  name="id_labels">' ;

        foreach($labels as $label){

            $return .= '
                <option value="'.$label->id_labels.'">'.$label->name.'</option>
            ';

        }

        return $return;

    }

}