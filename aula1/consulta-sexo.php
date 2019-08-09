<?php	

	header("Cache-Control: no-cache, no-store, must-revalidate"); // limpa o cache
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=utf-8"); 
	
	require('conexao.php');
	
	$sexo = $_GET["sexo"];
	
	$consultaAluno = $pdo->query("SELECT * FROM tbAluno where sexo='$sexo';");
	
	$jsonUsuario = "[";
	
	while ($result = $consultaAluno->fetch(PDO::FETCH_ASSOC)) {
		if ($jsonUsuario != "[") {$jsonUsuario .= ",";}	
		$jsonUsuario .= '{"id":"' . $result['idAluno']. '",';
		$jsonUsuario .= '"dataCadastro":"' . $result['dtCadastro']. '",';
		$jsonUsuario .= '"nome":"' . $result['nomeAluno']. '",';
		$jsonUsuario .= '"email":"' . $result['emailAluno']. '",';
		$jsonUsuario .= '"sexo":"' . $result['sexo'].'"}';
	}
	
	$jsonUsuario = $jsonUsuario . "]";
	
	echo $jsonUsuario;

	$pdo = null;	

	// para consultar o jason http://localhost/aula1/consulta-sexo.php?sexo=F 
	// localhost+nome da pasta + parâmetro
	?>

