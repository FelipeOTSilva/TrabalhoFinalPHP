<!DOCTYPE html>
<html lang="pt-br">
	<head>  
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Excluindo...</title>

		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
	</head>
	<body>
      <?php
			include "conecta.php";
			$idCategoria$_GET["idCategoria"];

			$apagar="delete from categoria where idCategoria='$idCategoria'";
			if(mysql_query($apagar)){
				echo"<script>alert('Excluido com Sucesso');</script>";
				echo "<script>window.location ='pesquisacategoria.php';</script>";
			}
			else{
				echo"<script>alert('Erro ao excluir');</script>";
				echo "<script>window.location ='pesquisacategoria.php';</script>";
			}
		?>
	</body>
</html>
