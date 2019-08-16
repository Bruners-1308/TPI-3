<?php
	
	header("Access-Control-Allow-Credentials: true");
	header("Access-Control-Max-Age: 1000");
	header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
	header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");	
	header("Cache-Control: no-cache, no-store, must-revalidate"); // limpa o cache
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=utf-8"); 
	
	require('conexao.php');
	
	$nome = isset($_GET['nome'])? $_GET['nome'] :'';
	$email = isset($_GET['email'])? $_GET['email'] :'';
	$sexo = isset($_GET['sexo'])? $_GET['sexo'] :'';	
	
	try{		
		$stmt = $pdo->prepare("INSERT INTO tbAluno VALUES(null,now(),'$nome','$email','$sexo')");		
		$stmt->execute();				 				 		
		
	}catch(PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	}	
	$pdo = null;
?>