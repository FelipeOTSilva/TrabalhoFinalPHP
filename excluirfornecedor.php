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
			$idFornecedor=$_GET["codigo"];
			$teste=0;
 $consulta = mysql_query("select * from produto where idFornecedor= '$idFornecedor'");
     $linha = mysql_num_rows($consulta);
    if ($linha != 0) {
    $teste=1;
    echo "<script>alert('Fornecedor vinculado a um produto.. Impossivel Excluir!');</script>";
    echo "<script>window.location='pesquisafornecedor.php'</script>";
}

if($teste==0){
			$apagar="delete from fornecedor where idFornecedor='$idFornecedor'";
			if(mysql_query($apagar)){
				echo"<script>alert('Excluido com Sucesso');</script>";
				echo "<script>window.location ='pesquisafornecedor.php';</script>";
			}
			else{
				echo"<script>alert('Erro ao excluir');</script>";
				echo "<script>window.location ='pesquisacidade.php';</script>";
			}
			}
		?>
	</body>
</html>
