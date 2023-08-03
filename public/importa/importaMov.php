<?php 
include_once('cursor.php') ;

$handle = fopen("Movimentos_Ativo_20230222.csv", "r");

$row = 0;
while ($line = fgetcsv($handle, 10000, ",")) {

    if ($row++ == 0) {
		continue;
	}

    $data = explode(';',$line[0]) ;

    if( $data[0] == 'Item' )
        continue ;
    
        print_r($data) ;

        $date = explode('/',$data['2']) ;

        $dateok = $date[2]."-".$date[1]."-".$date[0] ;
        $type = 'T' ;
        $location = explode('-',$data[4]) ;

        if( $data['3'] == 'Transferencia De' ){
            $type = 'F' ;
        }

        if( $data[1] != '' ){
            $sql = "select * from product_models where name = '".$data[1]."' ";
            $c = new Cursor( $sql );
            if( $c->linhas() > 0 ){
                $r = $c->fetch() ;
                $id_product_models = $r['id_product_models'] ;
            } else {
                $sql = "insert into product_models(name, description) values('".$data[1]."','".$data[1]."') ";
                $c2 = new Cursor( $sql );
            }
        }
    exit ;
        $sql = [
                'cod_do_item'   => $data[0] ,
                'date'          => $dateok ,
                'type'          => $type,
                'id_stock_locations'              =>  "select id_stock_locations from stock_locations where name = '".trim($location[1])."'" ,
            ] ;

    
    
    $sqlFields = ['cod_do_item','description','id_products','id_stock_locations','type','id_user','status'] ;

    /*
    $data = explode(';',$line[0]) ;
    $sqlVal = [] ;

    foreach($data as $d) {
        $sqlVal[] = "'".str_replace("'","",$d)."'" ;
    }

    if( count($sqlVal) < 9 ){
        $falta = 9 - count($sqlVal) ;
        for($a = 0; $a < $falta; $a++){
            $sqlVal[] = "''" ;
        }
    }

    if( ! empty( $sqlVal[1] ) ) {
        $id = str_replace("'",'',$sqlVal[1]) ;
        echo "REPLACE INTO labels( id_labels, name, status, used, id_user ) values( ".intval($id).", ".$sqlVal[1].",1,1,21 ); <br> " ;
    }

    array_push($sqlFields,'description','id_user','status','id_labels') ;
    array_push($sqlVal,$sqlVal[0],21,1,intval(str_replace("'",'',$sqlVal[1]))) ;
    #print_r($sqlFields);
    #print_r($sqlVal) ; 
    #exit ;
   
    $sql = " insert into products( ".implode(',',$sqlFields)." ) values(".implode(',',$sqlVal)."); <br>" ;
    echo $sql ; 
    */
}


fclose($handle);