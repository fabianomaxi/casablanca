<?php 

$handle = fopen("familia.CSV", "r");

$row = 0;
while ($line = fgetcsv($handle, 10000, ",")) {

    
    if ($row++ == 0) {
		continue;
	}

    $sqlFields = ['cod_familia','desc_familia','pict_padrao','procedencia','marca','descricao','status_grupo','grupo_relac','tipo_grupo','mark_up','percent_margem_pre','codigo','exige_conc'] ;
    

    $data = explode(';',$line[0]) ;
    $sqlVal = [] ;

    foreach($data as $d) {
        $sqlVal[] = "'".str_replace("'","",$d)."'" ;
    }

    if( count($sqlVal) < 13 ){
        $falta = 13 - count($sqlVal) ;
        for($a = 0; $a < $falta; $a++){
            $sqlVal[] = "''" ;
        }
    }

    array_push($sqlFields,'name','id_user','status') ;
    array_push($sqlVal,$sqlVal[1],21,1) ;

    #print_r($sqlFields);
    #print_r($sqlVal) ; 

    $sql = " insert into product_groups( ".implode(',',$sqlFields)." ) values(".implode(',',$sqlVal)."); <br>" ;
    echo $sql ; 
    
}


fclose($handle);