<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Cadastro de Produto</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body bgcolor="#FFCC66">
	<?php 
	include "menu.php"; 
    include "conecta.php";
    $sql1= mysql_query("SELECT * FROM categoria order by categoria");
    $sql2= mysql_query("SELECT * FROM fornecedor order by fornecedor");
	?>
<div class="panel panel-success">
                        <div class="panel-heading">
                        <center>
                        <h4>
                           Cadastro de Produto
                            </h4>
                            </center>
                        </div>
                       
                    </div>
 
	    <form action="add_produto.php" method="post">
		<label>Nome </label><br>
		<input type="text" name="nome" required><br>
		<br>

        <label>Peso </label><br>
		<input type="text" name="peso" required><br>
		<br>

        <label>Quantidade Minima </label><br>
		<input type="text" name="qntmin" required><br>
		<br>

        <label>Categoria</label>   
        <select name="categoria" required>
        <option>Selecione uma categoria...</option>
    <?php
        while ($query = mysql_fetch_array($sql1))
     {
    ?>
    <option value="<?php echo $query['idCategoria']; ?>">
    <?php echo $query['categoria']; ?></option>";
    <?php
    }
    ?>
    </select> 
    <br>
    <br>

      <label>Fornecedor</label>   
        <select name="fornecedor" required>
        <option>Selecione um fornecedor...</option>
    <?php
        while ($query = mysql_fetch_array($sql2))
     {
    ?>
    <option value="<?php echo $query['idFornecedor']; ?>">
    <?php echo $query['fornecedor']; ?></option>";
    <?php
    }
    ?>
    </select>       
       

    

 	<input type="submit" name="salvar" value="Cadastrar">
	</form>

	</body>
	
	</html>