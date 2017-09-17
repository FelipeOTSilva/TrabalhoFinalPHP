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
                           Cadastro de Usuarios
                            </h4>
                            </center>
                        </div>
                       
                    </div>
	<form action="add_estado.php" method="post">
		<label>Nome </label><br>
		<input type="text" name="nome" required><br>
		<br>
		<label>UF</label><br>
		<input type="text" name="uf" required><br>
	<br>
  	<input type="submit" name="salvar" value="Cadastrar">
	</form>

	</body>
	
	</html>