<?php
include "conecta.php";
$login=$_POST["login"];
$senha=$_POST["senha"];
$consulta = mysql_query("select * from  usuario where login= '$login' and senha='$senha'");
	$linha = mysql_num_rows($consulta);
	if($linha==0) {
		echo"<script>alert('Usuario ou senha Invalidos');</script>";
    echo "<script>window.location ='index.php';</script>";
    }
 	else{
 	
 	 	$consulta1 ="select nivel from  usuario where login= '$login' and senha='$senha'";
 	 $editar1 =mysql_query($consulta1);
  list($nivel)=@mysql_fetch_row($editar1);
  session_start();	
 	$_SESSION['nivel']= $nivel;
 
 	
			header("Location:index1.php");
     }
     
?>