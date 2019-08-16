<?php	

	header("Cache-Control: no-cache, no-store, must-revalidate"); // limpa o cache
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=utf-8"); 
	
	require('conexao.php');
	
	$dataEvento = $_GET["dataEvento"];
	
	$consultaEvento = $pdo->query("SELECT * FROM tbEvento where MONTH (dataEvento) ='$dataEvento';");
	
	$jsonEvento = "[";
	
	while ($result = $consultaEvento->fetch(PDO::FETCH_ASSOC)) {
		if ($jsonEvento != "[") {$jsonEvento .= ",";}	
		$jsonEvento .= '{"idEvento":"' . $result['idEvento']. '",';
		$jsonEvento .= '"nomeEvento":"' . $result['nomeEvento']. '",';
		$jsonEvento .= '"dataEvento":"' . $result['dataEvento']. '",';
		$jsonEvento .= '"localEvento":"' . $result['localEvento']. '",';
		$jsonEvento .= '"porteEvento":"' . $result['porteEvento'].'"}';
	}
	
	$jsonEvento = $jsonEvento . "]";
	
	echo $jsonEvento;

	$pdo = null;	
?>