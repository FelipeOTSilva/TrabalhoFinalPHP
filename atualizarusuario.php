<?php

include "conecta.php";
$codigo=$_POST["codigo"];
$nome=strtoupper($_POST["nome"]);
$login=strtoupper($_POST["login"]);
$senha=$_POST["senha"];
$nivel=strtoupper($_POST["nivel"]);


$update= mysql_query("update usuario set cod_usuario='$codigo',nome='$nome',login='$login',senha='$senha',nivel='$nivel' where cod_usuario='$codigo'") or die ("ERRO");
if ($update != ''){
echo "<script>alert('Usuario  Atualizado com Sucesso');</script>";
echo "<script>window.location ='pesquisausuario.php';</script>"; 
         
            }					
else{
				
echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='pesquisausuario.php';</script>";
            		
				}





?>
