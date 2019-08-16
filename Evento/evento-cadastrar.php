<?php
	
	header("Access-Control-Allow-Credentials: true");
	header("Access-Control-Max-Age: 1000");
	header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
	header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");	
	header("Cache-Control: no-cache, no-store, must-revalidate"); // limpa o cache
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=utf-8"); 
	
	require('conexao.php');
	
	$nomeEvento = isset($_GET['nomeEvento'])? $_GET['nomeEvento'] :'';
	$dataEvento = isset($_GET['dataEvento'])? $_GET['dataEvento'] :'';
	$localEvento = isset($_GET['localEvento'])? $_GET['localEvento'] :'';	
	$porteEvento = isset($_GET['porteEvento'])? $_GET['porteEvento'] :'';	
	
	try{		
		$stmt = $pdo->prepare("INSERT INTO tbEvento VALUES(null,'$nomeEvento','$dataEvento','$localEvento', '$porteEvento')");		
		$stmt->execute();				 				 		
		
	}catch(PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	}	
	$pdo = null;
?>