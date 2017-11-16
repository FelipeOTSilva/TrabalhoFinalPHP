<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Cadastro de Estado</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body bgcolor="#FFCC66">
	<?php 
	include "menu.php"; 
	?>
<div class="panel panel-success">
                        <div class="panel-heading">
                        <center>
                        <h4>
                           Relatórios
                            </h4>
                            </center>
                        </div>
                       
                    </div>
	<form action="verifica_relatorios.php" method="post">
		<label>Tipo de relatório </label><br>

		<input type="radio" name="entradaproduto" required><br>
        <input type="radio" name="entradaproduto" required><br>
		<br>
 	<input type="submit" name="imprimir" value="Cadastrar">
	</form>

	</body>
	
	</html>