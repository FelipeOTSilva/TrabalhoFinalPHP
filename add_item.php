<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Itens</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<?php

include 'conecta.php';


// aqui pega os dados do cabeçalho do pedido 

$transportadora = $_POST["transportadora"];
$datapedido = $_POST["datapedido"];
$dataentrada = $_POST["dataentrada"];
$frete=$_POST["frete"];
$frete=str_replace('.', '', $frete);
$frete = str_replace(",",".", $frete);
$nota = $_POST["nota"];

$imposto=$_POST["imposto"];
$imposto=str_replace('.', '', $imposto);
$imposto = str_replace(",",".", $imposto);

$totalpedido=$_POST["totalpedido"];
$totalpedido=str_replace('.', '', $totalpedido);
$totalpedido = str_replace(",",".", $totalpedido);

$sql="insert into entrada(idTransportadora, dataped, dataentr, total, frete, numnf, imposto) values ('$transportadora', '$datapedido', 
     '$dataentrada', '$totalpedido', '$frete', '$nota', '$imposto')";
    
	mysql_query($sql);
      
 


// depois de fazer o insert agora voce busca o codigo da ultima entrada para inserir na tabela item entrada

 
$produto = $_POST["produto"];
$lote = $_POST["lote"];
$quantidade = $_POST["quantidade"];
$valortotal=$_POST["valortotal"];
$valortotal=str_replace('.', '', $valortotal);
$valortotal = str_replace(",",".", $valortotal);  

$sql5 = "SELECT max(idEntrada) FROM entrada";

      $editar5 = mysql_query($sql5);
      list($maximoentrada) = mysql_fetch_row($editar5);
      
 $sql1="insert into itementrada(idProduto, idEntrada, lote, qtde, valor) values ('$produto', '$maximoentrada', 
     '$lote', '$quantidade', '$valortotal')";
    if(mysql_query($sql1)){
        echo "<script>alert('Cadastro Efetuado com Sucesso');</script>";
        echo "<script>window.location='pedidos.php';</script>";        
    }
    else{
        echo "<script>alert('Erro no item do pedido');</script>";
        echo "<script>window.location='pedidos.php';</script>";
    } 
 
 
 
?>







