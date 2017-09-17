<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Cadastro de Usuarios</title>
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
	<form action="add_usuario.php" method="post">
		<label>Nome </label><br>
		<input type="text" name="nome" required><br>
		<br>
		<label>Usuario</label><br>
		<input type="text" name="login" required><br>
	<br>
  	<label>Senha: </label><br>
		<input type="password" name="senha" required><br>
		<br>
      <label>Nivel</label><br>
		<select name="nivel">
		<option value="Administrador">Administrador</option>
		<option value="Usuario">Usuario</option>
    <input type="submit" name="salvar" value="Cadastrar">
	</form>

	</body>
	
	</html>