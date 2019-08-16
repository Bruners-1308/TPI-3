<?php
	
	header("Access-Control-Allow-Credentials: true");
	header("Access-C'ontrol-Max-Age: 1000");
	header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
	header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");	
	header("Cache-Control: no-cache, no-store, must-revalidate"); // limpa o cache
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=utf-8"); 
	
	require('conexao.php');
	
	$nome = isset($_GET['nome'])? $_GET['nomeEvento'] :'';
	$data = isset($_GET['data'])? $_GET['dataEvento'] :'';
	$local = isset($_GET['local'])? $_GET['localEvento'] :'';	
	$porte = isset($_GET['porte'])? $_GET['porteEvento'] :'';
	
	try{		
		$stmt = $pdo->prepare("INSERT INTO tbEvento VALUES(null,now(),'$nome','$data','$local', '$porte')");		
		$stmt->execute();				 				 		
		
	}catch(PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	}	
	$pdo = null;
?>