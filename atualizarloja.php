<?php

include "conecta.php";
$codigo=$_POST["codigo"];
$nome=$_POST["loja"];
$endereco=$_POST["endereco"];
$numero=$_POST["numero"];
$bairro=$_POST["bairro"];
$cidade=$_POST["cidade"];
$cnpj=$_POST["cnpj"];
$inscricao=$_POST["inscricao"];
$telefone=$_POST["telefone"];

$update= mysql_query("update loja set idLoja='$codigo',idCidade='$cidade', nome = '$nome', endereco = '$endereco', num = '$numero', bairro = '$bairro',
                      tel = '$telefone', insc = '$inscricao', cnpj = '$cnpj'
                      where idLoja='$codigo'") or die ("ERRO");
if ($update != ''){
echo "<script>alert('Atualizado com Sucesso');</script>";
echo "<script>window.location ='pesquisaloja.php';</script>"; 
         
            }					
else{
				
echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='pesquisaloja.php';</script>";
            		
				}





?>
