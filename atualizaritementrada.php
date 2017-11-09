<?php

include "conecta.php";
$idEntrada=$_POST["idEntrada"];
$idItemEntrada=$_POST["idItemEntrada"];
$transportadora=$_POST["transportadora"];
$datapedido=$_POST["datapedido"];
$dataentrada=$_POST["dataentrada"];
$frete=$_POST["frete"];
$nota=$_POST["nota"];
$imposto=$_POST["imposto"];
$totalpedido=$_POST["totalpedido"];
$produto=$_POST["produto"];
$lote=$_POST["lote"];
$quantidade=$_POST["quantidade"];
$valortotal=$_POST["valortotal"];




$UpdateEntrada= mysql_query("update entrada set idTransportadora='$transportadora', dataped= '$datapedido', dataentr = '$dataentrada', total = '$totalpedido',
                             frete = '$frete', numnf = '$nota', imposto = '$imposto'  where idEntrada='$idEntrada'") or die ("ERRO");
$UpdateItemEntrada = mysql_query("update itementrada set idProduto='$produto', idEntrada='$idEntrada', lote='$lote', qtde='$quantidade', valor='$valortotal'
                                  where idItemEntrada = '$idItemEntrada' 
                                    and idEntrada = '$idEntrada'") or die ("ERRO");
                                    
$entradaproduto = mysl_query("select COALESCE(sum(itementrada.qtde),0) from itementrada 
                           where itementrada.idProduto = '$idProduto'");
 list($valorentrada) = mysql_fetch_row($entradaproduto); 
                         
 $saidaProduto =  mysql_query("select COALESCE(sum(itemsaida.qtde),0) from itemsaida 
                           where itemsaida.idProduto = '$idProduto'"); 
 list($valorsaida) = mysql_fetch_row($saidaProduto);                             
 $saldo = $valorentrada - $valorsaida;  


if ($quantidade  $saldo){                                                                 
if (($UpdateEntrada != '') && ($UpdateItemEntrada != '')) {
echo "<script>alert('Atualizado com Sucesso');</script>";
echo "<script>window.location ='pesquisaitementrada.php';</script>"; 
         
    }					
else{
				
echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='pesquisaitementrada.php';</script>";
}
}
?>
