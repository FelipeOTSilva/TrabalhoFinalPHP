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

                      
$update= mysql_query("update fornecedor set idFornecedor='$codigo',idCidade='$cidade', fornecedor= '$nome', endereco = '$endereco', num = '$numero',
                      bairro = '$bairro', cep = '$cep', contato = '$contato', cnpj = '$cnpj', insc = '$inscricao', tel = '$telefone'
                      where idFornecedor='$codigo'") or die ("ERRO");
if ($update != ''){
echo "<script>alert('Atualizado com Sucesso');</script>";
echo "<script>window.location ='pesquisafornecedor.php';</script>"; 
         
            }					
else{
				
echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='pesquisafornecedor.php';</script>";
            		
				}





?>
