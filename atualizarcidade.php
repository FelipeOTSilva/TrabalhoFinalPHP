<?php

include "conecta.php";
$codigo=$_POST["codigo"];
$nome=$_POST["cidade"];
$estado=$_POST["estado"];


$update= mysql_query("update cidade set idCidade='$codigo',cidade='$nome', idEstado= '$estado' where idCidade='$codigo'") or die ("ERRO");
if ($update != ''){
echo "<script>alert('Atualizado com Sucesso');</script>";
echo "<script>window.location ='pesquisacidade.php';</script>"; 
         
            }					
else{
				
echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='pesquisacidade.php';</script>";
            		
				}





?>
