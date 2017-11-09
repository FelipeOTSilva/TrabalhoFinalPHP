<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Itens</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<?php

include 'conecta.php';

$teste = 0;
// aqui pega os dados do cabeçalho do pedido 

$transportadora = $_POST["transportadora"];
$loja = $_POST["loja"];
$frete=$_POST["frete"];
$frete=str_replace('.', '', $frete);
$frete = str_replace(",",".", $frete);
$total=$_POST["total"];
$total=str_replace('.', '', $total);
$total = str_replace(",",".", $total);
$imposto=$_POST["imposto"];
$imposto=str_replace('.', '', $imposto);
$imposto = str_replace(",",".", $imposto);

$produto = $_POST["produto"];
$lote = $_POST["lote"];
$quantidade = $_POST["quantidade"];
$valortotal=$_POST["valortotal"];
$valortotal=str_replace('.', '', $valortotal);
$valortotal = str_replace(",",".", $valortotal);  


$sql5 = "SELECT max(idSaida) FROM saida";

$entradaproduto = mysql_query("select COALESCE(sum(itementrada.qtde),0) from itementrada 
                           where itementrada.idProduto = '$produto'");
 list($valorentrada) = mysql_fetch_row($entradaproduto); 

 $saidaProduto =  mysql_query("select COALESCE(sum(itemsaida.qtde),0) from itemsaida 
                           where itemsaida.idProduto = '$produto'"); 

 list($valorsaida) = mysql_fetch_row($saidaProduto);                             
 $saldo = $valorentrada - $valorsaida;

      $editar5 = mysql_query($sql5);
      list($maximosaida) = mysql_fetch_row($editar5);

  
 if ($quantidade  > $saldo){
    $teste=1;
    echo "<script>alert('Quantidade de saída menor do que quantidade em estoque.. Impossivel Excluir!');</script>";
    echo "<script>window.location='pedidossaida.php'</script>";
  }
  
  if ($teste==0){   
   $sql="insert into saida(idLoja,idTransportadora,total, frete,imposto) values ('$loja', '$transportadora', '$total', '$frete', '$imposto')"; 
   mysql_query($sql);
  }

   if ($teste==0){
     $sql5 = "SELECT max(idSaida) FROM saida";
     $editar5 = mysql_query($sql5);
      list($maximosaida) = mysql_fetch_row($editar5);
      
      $sql1="insert into itemsaida(idSaida,idProduto,lote, qtde, valor) values ('$maximosaida', '$produto', '$lote', '$quantidade', '$valortotal')";
      if(mysql_query($sql1)){
         echo "<script>alert('Cadastro Efetuado com Sucesso');</script>";
          echo "<script>window.location='pedidossaida.php';</script>";        
        }
      else{
          echo "<script>alert('Erro no item do pedido');</script>";
           echo "<script>window.location='pedidossaida.php';</script>";
      } 

      }

     


  /*if ($teste==0){     
    $sql="insert into saida(idLoja,idTransportadora,total, frete,imposto) values ('$loja', '$transportadora', '$total', '$frete', '$imposto')"; 
    $sql1="insert into itemsaida(idSaida,idProduto,lote, qtde, valor) values ('$maximosaida', '$produto', '$lote', '$quantidade', '$valortotal')";

	   if ((mysql_query($sql)) &&  (mysql_query($sql1))){
       echo "<script>alert('Cadastro Efetuado com Sucesso');</script>";
           echo "<script>window.location='pedidossaida.php';</script>";        
        }
      else{
          echo "<script>alert('Erro no item do pedido');</script>";
           echo "<script>window.location='pedidossaida.php';</script>";
      } 
     } 
      // depois de fazer o insert agora voce busca o codigo da ultima entrada para inserir na tabela item entrada
      */
     
       
  
 
?>







