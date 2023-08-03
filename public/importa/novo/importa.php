<?php 
include_once('../cursor.php') ;

$csv = array();

$handle = fopen($_FILES['csv']['tmp_name'], "r");

$row = 0;
while ($line = fgetcsv($handle, 10000, ",")) {
    
    /*
    $data = explode(';',$line[0]) ;

    if( $row == '0' ){
        $row++ ;
        print_r($data) ;
    }

    print_r($data) ;
    exit ;
    /*
        1 -> etiqueta
        2 -> nome prod
        3 -> fabricante
        4 -> modelo
        5 -> série
        6 -> localizacao
        7 -> status
        8 -> origem
        9 -> destino 
        10 -> data
        11 -> observacao 
    */

    if( $row == '0' ){
        $row++ ;
        continue ;
    }

    $data = explode(';',$line[0]) ;
    if( ! empty( $data['0'] ) ) {

        $fabricante = trim($data['3']) ;

        $sql = " select * from manufacturer where name = '".$fabricante."' " ;
        $c = new Cursor( $sql ) ;
        exit ;
        var_dump($c) ; exit ;
        echo $c->linhas() ; exit ;
        if( $c->linhas <= 0 ){
            $sql = "insert into manufacturer( name ) values( '".$fabricante."' ) " ;
            echo $sql ; exit ;
        }

        exit ;
    }



    // salvar fabricante
    



    // salvar modelo
    // salvar origem
    // salvar destino
    // salvar produto
    // salvar mvimentação

}

fclose($handle);