

<?php
	$servidor = "localhost";
	$banco = "bdEscola";
	$usuario = "root";
	$senha  ="";
	
	/*string de conexão, realiza a conexão com o banco de dados
	
	 $pdo = new PDO("mysql:host=$servidor;dbname=$banco";$usuario,$senha);  
	*/
	
	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha,array(  
		PDO :: ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION,
		PDO :: ATTR_PERSISTENT => false,
		PDO :: ATTR_EMULATE_PREPARES => false,
		PDO :: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',  /*correção de acentuação*/
		));
?>