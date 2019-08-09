<?php	

	header("Cache-Control: no-cache, no-store, must-revalidate"); // limpa o cache
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=utf-8"); 
	
	require('conexao.php');
	
	$consultaCurso = $pdo->query("SELECT * FROM tbCurso;");
	
	$jsonCurso = "[";
	
	while ($result = $consultaCurso->fetch(PDO::FETCH_ASSOC)) {
		if ($jsonCurso != "[") {$jsonCurso .= ",";}	
		$jsonCurso .= '{"id":"' . $result['idCurso']. '",';
		$jsonCurso .= '"Curso":"' . $result['curso']. '",';
		$jsonCurso .= '"Carga Horária":"' . $result['duracao'].'"}';
	}
	
	$jsonCurso = $jsonCurso . "]";
	
	echo $jsonCurso;

	$pdo = null;	
?>
