<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edição de Usuarios</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style type="text/css">
table{
	font-size: 12px; 
	}
</style>

<script>

function troca(){

       if(document.getElementById("botao").value=='Editar'){
      document.getElementById("nome").disabled = false; // Habilitar
      document.getElementById("peso").disabled = false; // Habilitar
      document.getElementById("qtdmin").disabled = false; // Habilitar
      document.getElementById("categoria").disabled = false; // Habilitar
      document.getElementById("fornecedor").disabled = false; // Habilitar
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
$codigo=$_GET["codigo"];

$sql = "SELECT * FROM produto WHERE idProduto ='$codigo'";

      $editar = mysql_query($sql);
      list($codigo,$categoria,$fornecedor,$nome,$peso,$qtdmin) = mysql_fetch_row($editar);
      
  
  ?>
  
   <div class="panel-body">
   
                            <div class="row">
                                <div class="col-lg-6">
                                    <form name="formulario"  action="atualizarproduto.php"  method="POST" role="form">
                                        <div class="panel-body">
                                           
                                            	<label>Codigo</label><br>
                                            
							                           	<input type="tex" name="codigo1" value=<?php echo $codigo ?> disabled>
							                          
							                           	 <input TYPE="hidden" name="codigo" value="<?php echo $codigo?>">
							                      <br>
							                          
                                        <label>Nome</label><br>
							                           	<input type="tex" name="nome" id="nome" value="<?php echo $nome ?>" disabled>
							            <br>

                                        <label>Peso</label><br>
							                           	<input type="tex" name="peso" id="peso" value="<?php echo $peso ?>" disabled>
							            <br>

                                        <label>Quantidade Mínima</label><br>
							                           	<input type="tex" name="qtdmin" id="qtdmin" value="<?php echo $qtdmin ?>" disabled>
							            <br>

                                        				                           	
							                          
							             <label>Categoria</label><br>
							                          
                                        <select name="categoria" id="categoria" disabled>
		                   	<?php
	                       	  	$sql_tipo = mysql_query("select * from categoria");
		                        	while ($list_tipo = mysql_fetch_array($sql_tipo)) {			
				                      $idCategoria = $list_tipo['idCategoria'];
				                      $descricao = $list_tipo['categoria'];
                                $selecionado = '';
	                       		if($idCategoria== $categoria){
	                        		$selecionado = 'selected';
                            }
			                          	echo "<option value='$idCategoria' $selecionado>$descricao</option>";	                                            
		                                	}
		                     	?>
                           </select>
	                       <br>
                       	<br>


                                        <label>Fornecedor</label><br>
							                          
                                        <select name="fornecedor" id="fornecedor" disabled>
		                   	<?php
	                       	  	$sql_tipo = mysql_query("select * from fornecedor");
		                        	while ($list_tipo = mysql_fetch_array($sql_tipo)) {			
				                      $idFornecedor = $list_tipo['idFornecedor'];
				                      $descricao = $list_tipo['fornecedor'];                                     
                                $selecionado = '';
	                       		if($idCategoria== $categoria){
	                        		$selecionado = 'selected';
                            }
			                          	echo "<option value='$idFornecedor' $selecionado>$descricao</option>";	                                            
		                                	}
		                     	?>
                           </select>
	                       <br>
                       	<br>

                                   
  
							                   
							                           	<input type="button"  id="botao"  class="btn btn-success" value="Editar" onclick="troca()">  
							                           	<a href="<?php echo "excluirproduto.php?codigo=$codigo";?>">
							                            <input type="button"  id="excluir" class="btn btn-danger" value="Excluir" > 
							                      </a>
							                           	
</form>					

		                           	
							                           </div>
                                        </div>
                                        </div>
                                        
                                        

    </body>
    </html>
