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
			$idCidade=$_GET["codigo"];
			$teste=0;
 $consulta = mysql_query("select * from fornecedor where idCidade = '$idCidade'");
     $linha = mysql_num_rows($consulta);
    if ($linha != 0) {
    $teste=1;
    echo "<script>alert('Cidade vinculada a um fornecedor.. Impossivel Excluir!');</script>";
    echo "<script>window.location='pesquisacidade.php'</script>";
}

$consulta1 = mysql_query("select * from transportadora where idCidade = '$idCidade'");
     $linha1 = mysql_num_rows($consulta1);
    if ($linha1 != 0) {
    $teste=1;
    echo "<script>alert('Cidade vinculada a uma transportadora.. Impossivel Excluir!');</script>";
    echo "<script>window.location='pesquisacidade.php'</script>";
}

$consulta2 = mysql_query("select * from loja where idCidade = '$idCidade'");
     $linha2 = mysql_num_rows($consulta2);
    if ($linha2 != 0) {
    $teste=1;
    echo "<script>alert('Cidade vinculada a uma loja.. Impossivel Excluir!');</script>";
    echo "<script>window.location='pesquisacidade.php'</script>";
}

if($teste==0){
			$apagar="delete from cidade where idCidade='$idCidade'";
			if(mysql_query($apagar)){
				echo"<script>alert('Excluido com Sucesso');</script>";
				echo "<script>window.location ='pesquisacidade.php';</script>";
			}
			else{
				echo"<script>alert('Erro ao excluir');</script>";
				echo "<script>window.location ='pesquisacidade.php';</script>";
			}
			}
		?>
	</body>
</html>
