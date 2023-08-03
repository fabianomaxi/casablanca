<?php 

$handle = fopen("produtos.CSV", "r");

$row = 0;
while ($line = fgetcsv($handle, 10000, ",")) {

   # print_r($line) ;
    if ($row++ == 0) {
		continue;
	}

    $sqlFields = ['name','label','date_acquisition','cod_do_item','item_do_bem','quantidade','incluido_por','modelo','serie'] ;
    
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
    
}


fclose($handle);