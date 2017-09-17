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
			$idProduto = $_GET["codigo"];
			$teste=0;
 $consulta = mysql_query("select * from itementrada where idProduto = '$idProduto'");
     $linha = mysql_num_rows($consulta);
    if ($linha != 0) {
    $teste=1;
    echo "<script>alert('Produto vinculado a uma entrada.. Impossivel Excluir!');</script>";
    echo "<script>window.location='pesquisaproduto.php'</script>";
}

$consulta1 = mysql_query("select * from itemsaida where idProduto = '$idProduto'");
     $linha1 = mysql_num_rows($consulta1);
    if ($linha1 != 0) {
    $teste=1;
    echo "<script>alert('Produto vinculado a uma saída.. Impossivel Excluir!');</script>";
    echo "<script>window.location='pesquisaproduto.php'</script>";
}

if($teste==0){
			$apagar="delete from produto where idProduto ='$idProduto'";
			if(mysql_query($apagar)){
				echo"<script>alert('Excluido com Sucesso');</script>";
				echo "<script>window.location ='pesquisaproduto.php';</script>";
			}
			else{
				echo"<script>alert('Erro ao excluir');</script>";
				echo "<script>window.location ='pesquisaproduto.php';</script>";
			}
			}
		?>
	</body>
</html>
