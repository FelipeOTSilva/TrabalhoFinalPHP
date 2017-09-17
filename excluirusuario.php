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
			$cod_usuario=$_GET["cod_usuario"];

			$apagar="delete from usuario where cod_usuario='$cod_usuario'";
			if(mysql_query($apagar)){
				echo"<script>alert('Usuário Excluido com Sucesso');</script>";
				echo "<script>window.location ='pesquisausuario.php';</script>";
			}
			else{
				echo"<script>alert('Erro ao excluir Usuário');</script>";
				echo "<script>window.location ='pesquisausuario.php';</script>";
			}
		?>
	</body>
</html>
