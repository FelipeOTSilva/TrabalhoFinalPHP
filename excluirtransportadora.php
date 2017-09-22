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
			$idTransportadora=$_GET["codigo"];
			$teste=0;
 $consulta = mysql_query("select * from saida where idTransportadora= '$idTransportadora'");
     $linha = mysql_num_rows($consulta);
    if ($linha != 0) {
    $teste=1;
    echo "<script>alert('Transportadora vinculada a uma saída.. Impossivel Excluir!');</script>";
    echo "<script>window.location='pesquisatransportadora.php'</script>";
}

$consulta1 = mysql_query("select * from entrada where idTransportadora= '$idTransportadora'");
     $linha = mysql_num_rows($consulta);
    if ($linha != 0) {
    $teste=1;
    echo "<script>alert('Transportadora vinculada a uma entrada.. Impossivel Excluir!');</script>";
    echo "<script>window.location='pesquisatransportadora.php'</script>";
}

if($teste==0){
			$apagar="delete from transportadora where idTransportadora='$idTransportadora'";
			if(mysql_query($apagar)){
				echo"<script>alert('Excluido com Sucesso');</script>";
				echo "<script>window.location ='pesquisatransportadora.php';</script>";
			}
			else{
				echo"<script>alert('Erro ao excluir');</script>";
				echo "<script>window.location ='pesquisatransportadora.php';</script>";
			}
			}
		?>
	</body>
</html>
