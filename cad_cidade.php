<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Cadastro de Cidade</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body bgcolor="#FFCC66">
	<?php 
	include "menu.php"; 
    include "conecta.php";
    $sql= mysql_query("SELECT * FROM estado order by nome");
	?>
<div class="panel panel-success">
                        <div class="panel-heading">
                        <center>
                        <h4>
                           Cadastro de Cidade
                            </h4>
                            </center>
                        </div>
                       
                    </div>
 
	    <form action="add_cidade.php" method="post">
		<label>Nome </label><br>
		<input type="text" name="nome" required><br>
		<br>
        
        <label class="col-md-4 control-label">Estado</label>  
        <select class="form-control" name="estado" required>
        <option>Selecione um Estado...</option>
    <?php
        while ($query = mysql_fetch_array($sql))
     {
    ?>
    <option value="<?php echo $query['idEstado']; ?>">
    <?php echo $query['nome']; ?></option>";
    <?php
    }
    ?>
    </select>
 	<input type="submit" name="salvar" value="Cadastrar">
	</form>

	</body>
	
	</html>