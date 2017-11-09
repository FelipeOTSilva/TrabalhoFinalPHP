<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Entrada de Estoque</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    


</head>
<body>
<?php

include "conecta.php";
include "funcao.php";
include "menu.php";

?>

<div class="panel panel-success">
                        <div class="panel-heading">
                        <center>
                        <h4>
                           Dados do Pedido de Entrada
                            </h4>
                            </center>
                        </div>
                                             
                    </div>
                     
                     
	<form action="add_item.php"  method="post">
	
	<center>
	
	 <table width="100%">
	 
	 <tr>
	 <td align="right">
	 
  	<b>Transportadora</b>: 
  	</td>
  	<td >
		<select name="transportadora" id="transportadora" required>
			<?php
			$sql_transportadora = mysql_query("select * from transportadora");
			while ($list_transportadora = mysql_fetch_array($sql_transportadora)) {			
				$cod_transportadora= $list_transportadora['idTransportadora'];
				$descricao = $list_transportadora['transportadora'];
				echo "<option value='$cod_transportadora'>$descricao</option>";
			}
			?>
</select>
</td>
<td>
</td>
<td align="right">
	<label>Data Pedido:</label>
	</td>
	<td>
			
		<input type="date" name="datapedido" id="datapedido" required>
                        
</td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
      
      
<tr>
<td align="right">
		
		<label>Data Entrada:</label>
		</td>
		
		<td>
			
		<input type="date" name="dataentrada" id="dataentrada" required>
		
	</td>
	<td>
</td>
	
<td align="right">

	<label>Frete:</label>
	</td>
	<td>
	
	<input type="text" name="frete" id="frete" required placeholder="Informe o Valor" onKeyUp="maskIt(this,event,'###.###.###,##',true)">
	</td>
	</tr>
	
	<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
      
	<tr>
	<td align="right">
		<label>Numero Nota:</label>
		</td>
		<td>
	
	<input type="number" name="nota" id="nota" required placeholder="Informe o Valor" ">
</td>

	<td>
</td>

<td align="right">
		<label>Valor do  Imposto:</label>
		</td>
		<td>
	
	<input type="text" name="imposto" id="imposto" required placeholder="Informe o Valor" onKeyUp="maskIt(this,event,'###.###.###,##',true)">
</td>
		
		</tr>
		
		<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
	
		<tr>
		
		<td align="right">
		<label>Valor Total Pedido:</label>
		</td>
		<td>
	
	<input type="text" name="totalpedido" id="totalpedido" required placeholder="Informe o Valor" onKeyUp="maskIt(this,event,'###.###.###,##',true)">
</td>

</tr>
</table>		
                         	 
                    
                    <br>
                    <br>
                    <br>
                    
                    <div class="panel panel-info">
                        <div class="panel-heading">
                        <center>
                        <h4>
                           Itens do Pedido
                            </h4>
                            </center>
                        </div>
                                             
                    </div>
                    
                    
                    	 <table width="100%">
	 
	 <tr>
	 <td align="right">
	 
  	<b>Produto</b>: 
  	</td>
  	<td >
		<select name="produto" id="produto" required>
			<?php
			$sql_produto = mysql_query("select * from produto");
			while ($list_produto = mysql_fetch_array($sql_produto)) {			
				$cod_produto= $list_produto['idProduto'];
				$descricao = $list_produto['descricao'];
				echo "<option value='$cod_produto'>$descricao</option>";
			}
			?>
</select>
</td>

 <td align="right">
	 
  	<b>Lote</b>: 
  	</td>
  	<td>
  	<input type="text" name="lote" id="lote" required>
  	</td>
  	
  	<td align="right">
	 
  	<b>Quantidade</b>: 
  	</td>
  	<td>
  	<input type="number" name="quantidade" id="quantidade" required>
  	</td>
  	<td align="right">

	<b>Valor total:</b>
	</td>
	<td>
	
	<input type="text" name="valortotal" id="valortotal" required placeholder="Informe o Valor" onKeyUp="maskIt(this,event,'###.###.###,##',true)">
	</td>
	</tr>


</table>
<br>
<br>

<center>
	
	<input type="submit"  id="cadastro" class="btn btn-success" value="Cadastrar Pedido"> 
	</center>
	
</form>

	</body>
	
	</html>