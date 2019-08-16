<?php	

	header("Cache-Control: no-cache, no-store, must-revalidate"); // limpa o cache
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=utf-8"); 
	
	require('conexao.php');
	
	$consultaEvento = $pdo->query("SELECT * FROM tbEvento;");
	
	$jsonEvento = "[";
	
	while ($result = $consultaEvento->fetch(PDO::FETCH_ASSOC)) {
		if ($jsonEvento != "[") {$jsonEvento .= ",";}	
		$jsonEvento .= '{"id":"' . $result['idEvento']. '",';
		$jsonEvento .= '"nome":"' . $result['nomeEvento']. '",';
		$jsonEvento .= '"data":"' . $result['dataEvento']. '",';
		$jsonEvento .= '"local":"' . $result['localEvento']. '",';
		$jsonEvento .= '"porte":"' . $result['porteEvento'].'"}';
	}
	
	$jsonEvento = $jsonEvento . "]";
	
	echo $jsonEvento;

	$pdo = null;	
?>