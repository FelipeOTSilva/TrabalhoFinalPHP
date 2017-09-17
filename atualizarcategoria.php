<?php

include "conecta.php";
$codigo=$_POST["codigo"];
$nome=strtoupper($_POST["nome"]);

$update= mysql_query("update categoria set idCategoria='$codigo',categoria='$nome'") or die ("ERRO");
if ($update != ''){
echo "<script>alert('Atualizado com Sucesso');</script>";
echo "<script>window.location ='pesquisacategoria.php';</script>"; 
         
            }					
else{
				
echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='pesquisacategoria.php';</script>";
            		
				}





?>
