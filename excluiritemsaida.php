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
			$idSaida=$_GET["codigo"];
            $idItemSaida=$_GET["itemsaida"];
            $idProduto=$_GET["produto"];
            $quantidade=$_GET["quantidade"];
			$teste=0;

 $entradaproduto = mysql_query("select COALESCE(sum(itementrada.qtde),0) from itementrada 
                           where itementrada.idProduto = '$idProduto'");
 list($valorentrada) = mysql_fetch_row($entradaproduto); 
                         
 $saidaProduto =  mysql_query("select COALESCE(sum(itemsaida.qtde),0) from itemsaida 
                           where itemsaida.idProduto = '$idProduto'"); 
 list($valorsaida) = mysql_fetch_row($saidaProduto);                             
 $saldo = $valorentrada - $valorsaida;

    
/*    if ($quantidade > $saldo ) {
    $teste=1;
    echo "<script>alert('Quantidade a ser excluída é maior que saldo disponivel.. Impossivel Excluir!');</script>";
    echo "<script>window.location='pesquisaitementrada.php'</script>";
}*/

if($teste==0){
			$apagaritem="delete from itemsaida where idItemSaida='$idItemSaida'";
            $apagarsaida="delete from saida where idSaida='$idSaida'";
			if((mysql_query($apagaritem))&&(mysql_query($apagarsaida))) {
				echo"<script>alert('Excluido com Sucesso');</script>";
				echo "<script>window.location ='pesquisaitemsaida.php';</script>";
			}
			else{
				echo"<script>alert('Erro ao excluir');</script>";
				echo "<script>window.location ='pesquisaitemsaida.php';</script>";
			}
			}
		?>
	</body>
</html>
