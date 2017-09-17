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
			$idEstado=$_GET["codigo"];
			$teste=0;
 $consulta = mysql_query("select * from cidade where idEstado = '$idEstado'");
     $linha = mysql_num_rows($consulta);
    if ($linha != 0) {
    $teste=1;
    echo "<script>alert('Estado vinculado a uma cidade.. Impossivel Excluir!');</script>";
    echo "<script>window.location='pesquisaestado.php'</script>";
}



if($teste==0){
			$apagar="delete from estado where idEstado='$idEstado'";
			if(mysql_query($apagar)){
				echo"<script>alert('Excluido com Sucesso');</script>";
				echo "<script>window.location ='pesquisaestado.php';</script>";
			}
			else{
				echo"<script>alert('Erro ao excluir!');</script>";
				echo "<script>window.location ='pesquisaestado.php';</script>";
			}
			}
		?>
	</body>
</html>
