<?php

include 'conecta.php';

$nome = strtoupper($_POST["nome"]);
$nome=preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $nome ) );
$nome = strtoupper($nome);




$sql="insert into categoria(categoria) values ('$nome')";
    if(mysql_query($sql)){
        echo "<script>alert('Cadastro Efetuado com Sucesso');</script>";
        echo "<script>window.location='cad_categoria.php';</script>";        
    }
    else{
        echo "<script>alert('Erro ao Efetuar Cadastro');</script>";
        echo "<script>window.location='cad_categoria.php';</script>";
    }
 

?>
