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
			$idLoja=$_GET["codigo"];
			$teste=0;
 $consulta = mysql_query("select * from saida where idLoja = '$idLoja'");
     $linha = mysql_num_rows($consulta);
    if ($linha != 0) {
    $teste=1;
    echo "<script>alert('Loja vinculada a uma saída de estoque.. Impossivel Excluir!');</script>";
    echo "<script>window.location='pesquisaloja.php'</script>";
}

if($teste==0){
			$apagar="delete from loja where idLoja='$idLoja'";
			if(mysql_query($apagar)){
				echo"<script>alert('Excluido com Sucesso');</script>";
				echo "<script>window.location ='pesquisaloja.php';</script>";
			}
			else{
				echo"<script>alert('Erro ao excluir');</script>";
				echo "<script>window.location ='pesquisaloja.php';</script>";
			}
			}
		?>
	</body>
</html>
