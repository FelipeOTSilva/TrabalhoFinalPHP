<?php

include "conecta.php";
$codigo=$_POST["codigo"];
$nome=$_POST["nome"];
$peso=$_POST["peso"];
$qtdminima=$_POST["qtdmin"];
$categoria=$_POST["categoria"];
$fornecedor=$_POST["fornecedor"];

$update= mysql_query("update produto set idCategoria='$categoria', idFornecedor = '$fornecedor', descricao = '$nome', peso = '$peso',
                      qtdemin = '$qtdminima' where idProduto='$codigo'") or die ("ERRO");
if ($update != ''){
echo "<script>alert('Atualizado com Sucesso');</script>";
echo "<script>window.location ='pesquisaproduto.php';</script>"; 
         
            }					
else{
				
echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='pesquisaproduto.php';</script>";
            		
				}





?>
