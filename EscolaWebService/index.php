<html>
	<head>
		<meta charset="utf-8" />
	</head>
		<body>
			
			<section>			
				<h1> Exemplo Consulta com banco de dados </h1>			
			</section>
			
			<section>

				<?php
					require('conexao.php');
					
					$consultaConvite = $pdo->query("SELECT * FROM tbConvite;");
					
					while ($resConvite = $consultaConvite->fetch(PDO::FETCH_ASSOC)) {													
						echo "<p>";
							echo "{$resConvite['idConvite']} ";
							echo "{$resConvite['dtcadastro']} ";		
							echo "{$resConvite['numConvite']} ";									
						echo "</p>";
					}

					$pdo = null;	
				?>
			</section>		
			
		</body>
</html>