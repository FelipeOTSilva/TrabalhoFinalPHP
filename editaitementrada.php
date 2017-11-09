<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edição de Usuarios</title>

    <style type="text/css/style1">
table{
	font-size: 12px; 
	}
</style>

<script>

function troca(){

       if(document.getElementById("botao").value=='Editar'){
      document.getElementById("transportadora").disabled = false; // Habilitar
      document.getElementById("datapedido").disabled = false; // Habilitar
      document.getElementById("dataentrada").disabled = false; // Habilitar
      document.getElementById("frete").disabled = false; // Habilitar
      document.getElementById("nota").disabled = false; // Habilitar
      document.getElementById("imposto").disabled = false; // Habilitar
      document.getElementById("totalpedido").disabled = false; // Habilitar
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
$idEntrada=$_GET["codigo"];
$ItemEntrada=$_GET["itementrada"];

$sql = "SELECT entrada.identrada, 
               entrada.idTransportadora,
               entrada.dataped,
               entrada.dataentr,
               entrada.total,
               entrada.frete,
               entrada.numnf,
               entrada.imposto,
               itementrada.idItemEntrada,
               itementrada.idProduto,
               itementrada.lote,
               itementrada.qtde,
               itementrada.valor
          FROM entrada
          JOIN transportadora ON (transportadora.idTransportadora = entrada.idTransportadora)
          JOIN itementrada ON (entrada.idEntrada = itementrada.idEntrada)
          JOIN produto ON (produto.idProduto = itementrada.idProduto)
         WHERE entrada.idEntrada  = $idEntrada
           AND itementrada.idItemEntrada = $ItemEntrada";

      $editar = mysql_query($sql);
      list($idEntradan,$transportadora, $dataped, $dataentrada, $total, $frete, $numnf, $imposto, $idItemEntrada, $produto,$lote,$quantidade,$valor)  = mysql_fetch_row($editar);
      
   
  
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
                                    <form name="formulario"  action="atualizaritementrada.php"  method="post">
                                       <!-- <div class="panel-body">-->
                                       <center>
	
	                                  <table width="100%">
	 
	                                                            
                                                   
                                                <tr>
                                                <td align="right">
                                               
                                                </td>		
		                                        <td>
                                                          	<input type="hidden"name="idEntrada" id="idEntrada" value="<?php echo $idEntradan ?>">
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
	                       	  	                        $sql_tipo = mysql_query("select * from transportadora");
		                        	                    while ($list_tipo = mysql_fetch_array($sql_tipo)) {			
				                                        $idTransportadora = $list_tipo['idTransportadora'];
				                                        $descricao = $list_tipo['transportadora'];                                      
		                        	                    $selecionado = '';
	                       		                        if($idTransportadora== $transportadora){
	                        		                        $selecionado = 'selected';
                                                        }
			                          	                echo "<option value='$idTransportadora' $selecionado>$descricao</option>";	                                            
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
							                           	<input type="date" name="datapedido" id="datapedido" value="<?php echo $dataped ?>" disabled>							                    
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
                                                <label>Data Entrada</label>
                                                </td>		
		                                        <td>
							                           	<input type="date" name="dataentrada" id="dataentrada" value="<?php echo $dataentrada ?>" disabled>
                                                </td>
	                                            <td>
                                                </td>           
							                    
                                               	
                                                <td align="right">
                                                <label>Frete:</label>
                                                </td>
	                                            <td>
							                           	<input type="text" name="frete" id="frete" value="<?php echo $frete ?>" onKeyUp="maskIt(this,event,'###.###.###,##',true)" disabled>
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
                                                <label>Número da Nota</label>
                                                </td>
		                                        <td>
							                           	<input type="number" name="nota" id="nota" value="<?php echo $numnf ?>" disabled>
							                    </td>

	                                            <td>
                                                </td>

                                                <td align="right">
                                                <label>Valor do  Imposto:</label>
		                                        </td>
		                                        <td>
	
                                                    	<input type="text" name="imposto" id="imposto" onKeyUp="maskIt(this,event,'###.###.###,##',true)" value="<?php echo $imposto ?>"  disabled>
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
	
	                                            <input type="text" name="totalpedido" id="totalpedido" value="<?php echo $total ?>" onKeyUp="maskIt(this,event,'###.###.###,##',true)" disabled>
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
                                                </td>		
		                                        <td>
                                                        <input type="hidden"name="idItemEntrada" id="idItemEntrada" value="<?php echo $idItemEntrada ?>">
                                                </td>
	                                            <td>
                                                </td>           
                                                </tr>
                                                
                                                 
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

                                                            $selecionado = '';
	                       		                            if($cod_produto== $produto){
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

	                                            <b>Valor total:</b>
	                                            </td>
	                                            <td>	
                                                	<input type="text" name="valortotal" id="valortotal" value="<?php echo $valor ?>" onKeyUp="maskIt(this,event,'###.###.###,##',true)" disabled>

	                                            </td>
	                                            </tr>   

                                                </table>
                                                <br>
                                                <br>

                                                <center>                          
                                   
  
							                   
							                           	<input type="button"  id="botao"  class="btn btn-success" value="Editar" onclick="troca()">  
							                           	<a href="<?php echo "excluiritementrada.php?codigo=$idEntradan&itementrada=$idItemEntrada&produto=$produto&quantidade=$quantidade";?>">
							                            <input type="button"  id="excluir" class="btn btn-danger" value="Excluir" > 
							                      </a>
							                           	
</form>					

		                           	
							                           </div>
                                        </div>
                                        </div>
                                        
                                        

    </body>
    </html>
