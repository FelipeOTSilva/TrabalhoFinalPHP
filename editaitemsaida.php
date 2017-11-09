<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edição de Usuarios</title>

    <style type="text/css/stylesaida.css">
table{
	font-size: 12px; 
	}
</style>

<script>

function troca(){

       if(document.getElementById("botao").value=='Editar'){
      document.getElementById("loja").disabled = false; // Habilitar     
      document.getElementById("transportadora").disabled = false; // Habilitar
      document.getElementById("frete").disabled = false; // Habilitar
      document.getElementById("imposto").disabled = false; // Habilitar
      document.getElementById("total").disabled = false; // Habilitar
      document.getElementById("produto").disabled = false; // Habilitar
      document.getElementById("lote").disabled = false; // Habilitar
      document.getElementById("quantidade").disabled = false; // Habilitar
      document.getElementById("valortotal").disabled = false; // Habilitar
      document.getElementById("botao").value = 'Salvar';
      document.getElementById("excluir").disabled = true; // Habilitar
}
else{
document.formulario.submit();
}
}


</script>

</head>

<body>
 <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>


<?php

include "conecta.php";
$idSaida=$_GET["codigo"];
$ItemSaida=$_GET["itemsaida"];

$sql = "SELECT saida.idsaida,
               saida.idLoja, 
               saida.idTransportadora,
               saida.total,
               saida.frete,
               saida.imposto,
               itemsaida.idItemSaida,
               itemsaida.idProduto,
               itemsaida.lote,
               itemsaida.qtde,
               itemsaida.valor
          FROM saida
          JOIN transportadora ON (transportadora.idTransportadora = saida.idTransportadora)
          JOIN itemsaida ON (saida.idSaida = itemsaida.idSaida)
          JOIN produto ON (produto.idProduto = itemsaida.idProduto)
          JOIN loja ON (loja.idLoja = saida.idLoja)
         WHERE saida.idSaida  = $idSaida
           AND itemsaida.idItemSaida = $ItemSaida";

      $editar = mysql_query($sql);
      list($idSaidan,$loja,$transportadora,$total, $frete,$imposto, $idItemSaidan, $produto,$lote,$quantidade,$valor)  = mysql_fetch_row($editar);
      
   
  
  ?>
  
   <div class="panel panel-success">
                        <div class="panel-heading">
                        <center>
                        <h4>
                           Dados do Pedido de Saída
                            </h4>
                            </center>
                        </div>
                                             
                    </div>
                     
                     
	<form name="formulario"  action="atualizaritemsaida.php"  method="post">
	
	<center>
	
	 <table width="100%">

     <tr>
                                                <td align="right">
                                               
                                                </td>		
		                                        <td>
                                                          	<input type="hidden"name="idSaida" id="idSaida" value="<?php echo $idSaidan ?>">
                                                </td>
	                                            <td>
                                                </td>           
                                                </tr>

                                                 <tr>
                                                <td align="right">
                                               
                                                </td>		
		                                        <td>
                                                          	<input type="hidden"name="idItemSaida" id="idItemSaida" value="<?php echo $idItemSaidan ?>">
                                                </td>
	                                            <td>
                                                </td>           
                                                </tr>
	 
	 <tr>
	 <td align="right">
	 
  	<b>Transportadora</b>: 
  	</td>
  	<td >
		<select name="transportadora" id="transportadora" disabled>
			<?php
			$sql_transportadora = mysql_query("select * from transportadora");
			while ($list_transportadora = mysql_fetch_array($sql_transportadora)) {			
				$cod_transportadora= $list_transportadora['idTransportadora'];
				$descricao = $list_transportadora['transportadora'];
                $selecionadotransportadora = '';
	            if($cod_transportadora == $transportadora){
	                $selecionadotransportadora = 'selected';
                }
				echo "<option value='$cod_transportadora' $selecionadotransportadora>$descricao</option>";
			}
			?>
</select>
</td>
<td>
</td>
<td align="right">
	<b>Loja</b>:
	</td>
	<td>
			
		<select name="loja" id="loja" disabled>
			<?php
			$sql_loja = mysql_query("select * from loja");
			while ($list_loja = mysql_fetch_array($sql_loja)) {			
				$cod_loja= $list_loja['idLoja'];
				$descricao = $list_loja['nome'];
                if($cod_loja == $loja){
	                $selecionadoloja = 'selected';
                }
				echo "<option value='$cod_loja' $selecionadoloja>$descricao</option>";
			}
			?>
                        
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
		
		<label>Total:</label>
		</td>
		
		<td>
			
		<input type="text" name="total" id="total" value="<?php echo $total ?>" placeholder="Informe o Valor" onKeyUp="maskIt(this,event,'###.###.###,##',true)" disabled>
		
	</td>
	<td>
</td>
	
<td align="right">

	<label>Frete:</label>
	</td>
	<td>
	
	<input type="text" name="frete" id="frete" value="<?php echo $frete?>" placeholder="Informe o Valor" onKeyUp="maskIt(this,event,'###.###.###,##',true)" disabled>
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
		<label>Valor do  Imposto:</label>
		</td>
		<td>
	
	<input type="text" name="imposto" id="imposto" value="<?php echo $imposto?>" placeholder="Informe o Valor" onKeyUp="maskIt(this,event,'###.###.###,##',true)" disabled>
</td>
		
		</tr>
      <!  </tr>
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
		<select name="produto" id="produto" disabled>
			<?php
			$sql_produto = mysql_query("select * from produto");
			while ($list_produto = mysql_fetch_array($sql_produto)) {			
				$cod_produto= $list_produto['idProduto'];
				$descricao = $list_produto['descricao'];
                 if($cod_produto == $produto){
	                $selecionadoproduto = 'selected';
                }
				echo "<option value='$cod_produto' $selecionadoproduto>$descricao</option>";
			}
			?>
</select>
</td>

 <td align="right">
	 
  	<b>Lote</b>: 
  	</td>
  	<td>
  	<input type="text" name="lote" id="lote" value="<?php echo $lote ?>" disabled>
  	</td>
  	
  	<td align="right">
	 
  	<b>Quantidade</b>: 
  	</td>
  	<td>
  	<input type="number" name="quantidade" id="quantidade" value="<?php echo $quantidade ?>" disabled>
  	</td>
  	<td align="right">

	<b>Valor:</b>
	</td>
	<td>
	
	<input type="text" name="valortotal" id="valortotal" value="<?php echo $valor ?>" placeholder="Informe o Valor" onKeyUp="maskIt(this,event,'###.###.###,##',true)" disabled>
	</td>
	</tr>


</table>
<br>
<br>

<center>
                                   
  
							                   
							                           	<input type="button"  id="botao"  class="btn btn-success" value="Editar" onclick="troca()">  
							                           	<a href="<?php echo "excluiritemsaida.php?codigo=$idSaidan&itemsaida=$idItemSaida&produto=$produto&quantidade=$quantidade";?>">
							                            <input type="button"  id="excluir" class="btn btn-danger" value="Excluir" > 
							                      </a>
							                           	
</form>					

		                           	
							                           </div>
                                        </div>
                                        </div>
                                        
                                        

    </body>
    </html>
