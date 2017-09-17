<?php

include 'conecta.php';

$nome = strtoupper($_POST["nome"]);
$nome=preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $nome ) );
$nome = strtoupper($nome);
$uf =strtoupper($_POST["uf"]);



$sql="insert into estado(nome,uf) values ('$nome', '$uf')";
    if(mysql_query($sql)){
        echo "<script>alert('Cadastro Efetuado com Sucesso');</script>";
        echo "<script>window.location='cad_estado.php';</script>";        
    }
    else{
        echo "<script>alert('Erro ao Efetuar Cadastro');</script>";
        echo "<script>window.location='cad_estado.php';</script>";
    }
 

?>
