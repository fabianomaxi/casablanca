<?php

if( $_SERVER["HTTP_HOST"] != "univestuario.com.br" ) {
	$path = "http://127.0.0.1:85/scriptcase/file/img/" ;	
}

$path = "http://127.0.0.1:85/scriptcase/file/img/" ;	
$pathDocs = "http://127.0.0.1:85/scriptcase/file/doc/" ;	
$pathDocs = "http://cbconline.com.br/zeus/_lib/file/doc/" ;	

$pathSite = "http://localhost/cbconline.com.br/" ;	
$pathSite = "http://cbconline.com.br/" ;	

if( $_SERVER["HTTP_HOST"] == "localhost" ) {
	$path = "http://127.0.0.1:85/scriptcase/file/img/" ;	
	$pathDocs = "http://127.0.0.1:85/scriptcase/file/file/doc/" ;	
	$linkPlataforma = "http://localhost/cbconline.com.br/portaldecursos.cbconline.com.br/" ;
;
} else {
	$path = "http://cbconline.com.br/zeus/_lib/file/img/" ;
	$pathFisico = "/home/cbconlinecom/public_html/prod/file/img/" ;
	$linkPlataforma = "http://portaldecursos.cbconline.com.br/" ;
}

$id_site = "1" ;
class Conexao{

	var $conn;

	//function Conexao( $host = '184.173.7.178', $user = 'sitepara_uapp', $pass = 'ca301085' , $bd = 'sitepara_app' ){

	function Conexao( $host = 'localhost', $user = 'virginia_nsite', $pass = 'virginia_db' , $bd = 'virginia_nsite' ){	


		$dbHost		= 'mysql.devfabiano.com.br';

		$dbName		= 'devfabiano01';

		$dbuser		= 'devfabiano01';

		$dbpasswd	= 'ca301085';

		$this->conn = mysql_connect( $dbHost, $dbuser, $dbpasswd );
		
		if (!$this->conn) 
			die('Could not connect: ' . mysql_error());

		mysql_select_db( $dbName, $this->conn );

	}

	function getConexao(){

		return $this->conn;

	}

	function executar( $aSQL ){

		$r = mysql_query( $aSQL, $this->conn );

		return $r;

	}

}

class Cursor{

	var $conn;

	var $Cursor;

	var $linhas;

	var $linhaAtual;

	var $eof;

	function Cursor( $aSQL ){

			$c = new Conexao();

			$this->conn = $c->getConexao();

			$this->Cursor = $c->executar( $aSQL );

			$this->eof = true;

			$this->linhas();

			if( $this->linhas ){		

				$this->eof = false;

			}			 

	}

	function fetch(){

		if( $this->Cursor ){

			$r = @mysql_fetch_array( $this->Cursor );

			$this->linhaAtual++ ;

			if( $this->linhaAtual >= $this->linhas ){

				$this->eof = true;				

			}

		}

		return $r;	

	}

	function eof(){

		return $this->eof;

	}

	function linhas(){

		$this->linhas = @mysql_num_rows( $this->Cursor );

		return $this->linhas;

	}

}

function jsAlertLocation( $url, $msg ) {
	?>
		<script>
			alert('<?=$msg?>') ;
			window.location = '<?=$url?>' ;
		</script>
	<?php
}

function jsLocation( $url ) {
	?>
		<script>
			window.location = '<?=$url?>' ;
		</script>
	<?php
}
?>
