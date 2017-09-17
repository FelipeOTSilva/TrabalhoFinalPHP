<?php

include "conecta.php";
$codigo=$_POST["codigo"];
$estado=$_POST["estado"];
$uf=$_POST["uf"];


$update= mysql_query("update estado set idEstado='$codigo',nome='$estado', uf= '$uf' where idEstado='$codigo'") or die ("ERRO");
if ($update != ''){
echo "<script>alert('Atualizado com Sucesso');</script>";
echo "<script>window.location ='pesquisaestado.php';</script>"; 
         
            }					
else{
				
echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='pesquisaestado.php';</script>";
            		
				}





?>
