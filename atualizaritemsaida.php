<?php

include "conecta.php";
$idSaida=$_POST["idSaida"];
$idItemSaida=$_POST["idItemSaida"];
$transportadora=$_POST["transportadora"];
$loja=$_POST["loja"];
$frete=$_POST["frete"];
$imposto=$_POST["imposto"];
$total=$_POST["total"];
$produto=$_POST["produto"];
$lote=$_POST["lote"];
$quantidade=$_POST["quantidade"];
$valortotal=$_POST["valortotal"];



$UpdateSaida= mysql_query("update saida set idLoja='$loja', idTransportadora='$transportadora', total = '$total', frete = '$frete', imposto = '$imposto'  where idSaida='$idSaida'") or die ("ERRO");
$UpdateItemSaida = mysql_query("update itemsaida set idProduto='$produto', idSaida='$idSaida', lote='$lote', qtde='$quantidade', valor='$valortotal'
                                  where idItemSaida = '$idItemSaida' 
                                    and idSaida = '$idSaida'") or die ("ERRO");  

 $entradaproduto = mysl_query("select COALESCE(sum(itementrada.qtde),0) from itementrada 
                           where itementrada.idProduto = '$idProduto'");
 list($valorentrada) = mysql_fetch_row($entradaproduto); 
                         
 $saidaProduto =  mysql_query("select COALESCE(sum(itemsaida.qtde),0) from itemsaida 
                           where itemsaida.idProduto = '$idProduto'"); 
 list($valorsaida) = mysql_fetch_row($saidaProduto);                             
 $saldo = $valorentrada - $valorsaida;  

 if ($quantidade <= $saldo){ 
                                                              
      if (($UpdateSaida != '') && ($UpdateItemSaida != '')) {
        echo "<script>alert('Atualizado com Sucesso');</script>";
        echo "<script>window.location ='pesquisaitemsaida.php';</script>"; 
         
      }					
      else{				
         echo "<script>alert('Erro ao atualizar os dados');</script>";	
         echo "<script>window.location ='pesquisaitemsaida.php';</script>";
     }
}
?>
