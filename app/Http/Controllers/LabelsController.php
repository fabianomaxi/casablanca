<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ; 
use App\Models\Labels;
use App\Models\Users;
use App\Models\StockLocations ;


class LabelsController extends Controller
{

    public function index( Request $request ) {
        
        $status = ['0' => 'Inativo' , '1' => 'Ativo'] ;
        $used = ['0' => 'Não' , '1' => 'Sim','2'=>'Cancelada'] ;

        $users = Users::all() ;
        if( ! empty($users) ) {
            foreach( $users as $user ){
                $use[$user->id_user] = $user->name ;
            }
        }

        # preciso listar os usuários
        $labels = Labels::where('status','1')->get() ;
        // Users::where('id_user','2')->get() ; // pego o usuario de id - 2
        // Users::create($request) ;
        // Users::where('id_user',2)->update([$request]) ;
        // Users::where('id_user',2)->delete() ;

        return view( 'list_labels' , ['data' => $labels , 'status' => $status, 'users' => $use,'used'=>$used]);

    }
    
    public function new( Request $request )
    {
        $users = Users::all();
        $stock = StockLocations::orderBy('name','desc')->get();

        return view( 'form_label', ['users' => $users,'stock'=>$stock] );
    }

    public function show( Request $request ) {

        $users = Users::all();
        $stock = StockLocations::orderBy('name','desc')->get();

        $labels = Labels::find($request->id) ;
        return view( 'form_label' , ['data' => $labels, 'users' => $users,'stock'=>$stock] );
    }

    public function store( Request $request ) {

        $request->merge(['id_user' => $request->session()->get('userIdSession')]) ;

        // caso range de etiquetas
        if( ! empty($request->start) && ! empty($request->end) ) {

            // valida se alguma delas existe
            for( $a = $request->start; $a <= $request->end; $a++ ) {

                $exist = Labels::where('name',$a)->first();

                if( ! empty($exist) ){
                    $request->session()->put('message','Etiqueta de número '.$a.' já existe ') ;
                    return  $this->index( $request ) ;
                }

            }

            for( $a = $request->start; $a <= $request->end; $a++ ) {
                $request->merge(['name' => $a]) ;        
                Labels::create( $request->all() ) ;
            }

            return  $this->index( $request ) ;
        }

        if( ! empty( $request->id ) ) {
            Labels::find($request->id)->update($request->all());
        } else{
            Labels::create( $request->all() ) ;
        }

       return  $this->index( $request ) ;

    }

    public function destroy( Request $request ) {
        
        Labels::where('id_labels',$request->id)->update(['status' => '0']);
        return  $this->index( $request ) ;
    }


}