<?php

include "conecta.php";
$codigo=$_POST["codigo"];
$nome=$_POST["nome"];
$endereco=$_POST["endereco"];
$numero=$_POST["numero"];
$bairro=$_POST["bairro"];
$cep=$_POST["cep"];
$cidade=$_POST["cidade"];
$contato=$_POST["contato"];
$cnpj=$_POST["cnpj"];
$inscricao=$_POST["inscricao"];
$telefone=$_POST["telefone"];

                      
$update= mysql_query("update transportadora set idTransportadora='$codigo',idCidade='$cidade', transportadora= '$nome', endereco = '$endereco', num = '$numero',
                      bairro = '$bairro', cep = '$cep',  cnpj = '$cnpj', insc = '$inscricao', contato = '$contato', tel = '$telefone'
                      where idTransportadora='$codigo'") or die ("ERRO");
if ($update != ''){
echo "<script>alert('Atualizado com Sucesso');</script>";
echo "<script>window.location ='pesquisatransportadora.php';</script>"; 
         
            }					
else{
				
echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='pesquisatransportadora.php';</script>";
            		
				}





?>
