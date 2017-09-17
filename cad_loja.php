<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Cadastro de Loja</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body bgcolor="#FFCC66">
	<?php 
	include "menu.php"; 
    include "conecta.php";
    $sql= mysql_query("SELECT * FROM cidade order by cidade");
	?>
<div class="panel panel-success">
                        <div class="panel-heading">
                        <center>
                        <h4>
                           Cadastro de Loja
                            </h4>
                            </center>
                        </div>
                       
                    </div>
 
	    <form action="add_loja.php" method="post">
		<label>Nome </label><br>
		<input type="text" name="nome" required><br>
		<br>

        <label>Endereço </label><br>
		<input type="text" name="endereco" required><br>
		<br>

        <label>Numero </label><br>
		<input type="text" name="numero" required><br>
		<br>

        <label>Bairro </label><br>
		<input type="text" name="bairro" required><br>
		<br>

        <label>CEP </label><br>
		<input type="text" name="cep" required><br>
		<br>

        <label>Cidade</label>   
        <select name="cidade" required>
        <option>Selecione uma cidade...</option>
    <?php
        while ($query = mysql_fetch_array($sql))
     {
    ?>
    <option value="<?php echo $query['idCidade']; ?>">
    <?php echo $query['cidade']; ?></option>";
    <?php
    }
    ?>
    </select> 
    <br>
    <br>      
       

    <label>CNPJ </label><br>
		<input type="text" name="cnpj" required><br>
	<br>

    <label>Inscrição </label><br>
		<input type="text" name="insc" required><br>
	<br>

    <label>Telefone </label><br>
		<input type="text" name="telefone" required><br>
	<br>

 	<input type="submit" name="salvar" value="Cadastrar">
	</form>

	</body>
	
	</html>