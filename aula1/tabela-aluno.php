<html>
	<head>
		<meta charset="utf-8" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	
	<header>
		
		<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand">Aluno</a> 
		</nav>
    </header>
	
		<table class="table table-dark">
		  <thead>
			<tr>
			  <th scope="col">id</th>
			  <th scope="col">data do Cadastro</th>
			  <th scope="col">Nome do Aluno</th>
			  <th scope="col">e-mail</th>
			  <th scope="col">Sexo</th>
			</tr>
		  </thead> 
		</nav>
		<section>
		<?php 
			require("conexao.php");
				$consultaAluno = $pdo->query("SELECT * FROM tbAluno;");
					while ($resulttbAluno = $consultaAluno->fetch(PDO::FETCH_ASSOC)){
						
						echo"<tr>";
						   echo"<th scope='row'>{$resulttbAluno['idAluno']}</th>";
						   echo"<td>{$resulttbAluno['dtCadastro']}</td>";
						   echo"<td>{$resulttbAluno['nomeAluno']}</td>";
						   echo"<td>{$resulttbAluno['emailAluno']}</td>";
						   echo"<td>{$resulttbAluno['sexo']}</td>";
						   
						  						   
						 echo "</tr>";
						
					}
						
					$pdo=null;
		?>

</section>

<a href="tabela-curso.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cursos</a>
	


</html>


