<html>
	<head>
		<meta charset="utf-8" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	
	<header>
		
		<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand">Curso</a> 
		</nav>
    </header>
	
		<table class="table">
		  <thead>
			<tr>
			  <th scope="col">id</th>
			  <th scope="col">Curso</th>
			  <th scope="col">Carga Horária</th>
			</tr>
		  </thead> 
		</nav>
		<section>
		<?php 
			require("conexao.php");
				$consultaCurso = $pdo->query("SELECT * FROM tbCurso;");
					while ($resultCurso = $consultaCurso->fetch(PDO::FETCH_ASSOC)){
						
						echo"<tr>";
						   echo"<th scope='row'>{$resultCurso['idCurso']}</th>";
						   echo"<td>{$resultCurso['curso']}</td>";
						   echo"<td>{$resultCurso['duracao']}</td>";			   
						  						   
						 echo "</tr>";
						
					}
						
					$pdo=null;
		?>
		
		<a href="tabela-aluno.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Alunos</a>

</section>
	


</html>