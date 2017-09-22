<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Cadastro de Transportadora</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body bgcolor="#FFCC66">
	<?php 
	include "menu.php"; 
    include "conecta.php";
    $sql= mysql_query("SELECT * FROM transportadora order by transportadora");
	?>
<div class="panel panel-success">
                        <div class="panel-heading">
                        <center>
                        <h4>
                           Entradas de Produtos
                            </h4>
                            </center>
                        </div>
                       
                    </div>
 
	    <form action="add_entrada.php" method="post">
		<label>Transportadora </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php
        while ($query = mysql_fetch_array($sql))
     {
    ?>
    <option value="<?php echo $query['idTransportadora']; ?>">
    <?php echo $query['transportadora']; ?></option>";
    <?php
    }
    ?>
    </select>       
		/*<input type="text" name="transportadora" id ="transportadora" required>*/
        <label>Total</label>
		<input type="text" name="total" id ="total" required><br>
		<br>

        <label>Data Pedido </label>
		<input type="date" name="datapedido" id ="datapedido" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label>Total</label>
		<input type="text" name="total" id ="total" required><br>
		<br>



      
 	<input type="submit" name="salvar" value="Cadastrar">
	</form>

    <hr>

	</body>
	
	</html>