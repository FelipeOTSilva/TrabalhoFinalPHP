<?php

include 'conecta.php';

$nome = strtoupper($_POST["nome"]);
$nome=preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $nome ) );
$nome = strtoupper($nome);
$login =strtoupper($_POST["login"]);
$senha =$_POST["senha"];
$nivel= strtoupper($_POST["nivel"]);


$consulta = mysql_query("select * from usuario where login = '$login'");
$linha = mysql_num_rows($consulta);
if ($linha != 0) {
    echo "<script>alert('Usuario já cadastrado!');</script>";
    echo "<script>window.location='cad_usuario.php'</script>";
} else {
$sql = "insert into usuario(nome,login,senha,nivel) values(
'$nome', '$login', '$senha','$nivel')";
    if (mysql_query($sql)) {
        echo "<script>alert('Cadastro efetuado com sucesso');</script>";
    } else {
        echo "<script>alert('Erro ao efetuar cadastro');</script>";
    }
   echo "<script>window.location='cad_usuario.php'</script>";
 
}
?>
