<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edição de Fornecedor</title>

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
      document.getElementById("endereco").disabled = false; // Habilitar
      document.getElementById("numero").disabled = false; // Habilitar
      document.getElementById("bairro").disabled = false; // Habilitar
      document.getElementById("cep").disabled = false; // Habilitar
      document.getElementById("cidade").disabled = false; // Habilitar
      document.getElementById("contato").disabled = false; // Habilitar
      document.getElementById("cnpj").disabled = false; // Habilitar
      document.getElementById("inscricao").disabled = false; // Habilitar
      document.getElementById("telefone").disabled = false; // Habilitar
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

$sql = "SELECT * FROM fornecedor WHERE idFornecedor ='$codigo'";

      $editar = mysql_query($sql);
      list($codigo,$cidade,$nome,$endereco,$numero,$bairro,$cep,$contato,$cnpj,$inscricao,$telefone) = mysql_fetch_row($editar);
      
  
  ?>
  
   <div class="panel-body">
   
                            <div class="row">
                                <div class="col-lg-6">
                                    <form name="formulario"  action="atualizarfornecedor.php"  method="POST" role="form">
                                        <div class="panel-body">
                                           
                                            	<label>Codigo</label><br>
                                            
							                           	<input type="tex" name="codigo1" value=<?php echo $codigo ?> disabled>
							                          
							                           	 <input TYPE="hidden" name="codigo" value="<?php echo $codigo?>">
							                      <br>
							                          
                                        <label>Nome</label><br>
							                           	<input type="tex" name="nome" id="nome" value="<?php echo $nome ?>" disabled>
							            <br>

                                        <label>Endereço</label><br>
							                           	<input type="tex" name="endereco" id="endereco" value="<?php echo $endereco ?>" disabled>
							            <br>

                                        <label>Número</label><br>
							                           	<input type="tex" name="numero" id="numero" value="<?php echo $numero ?>" disabled>
							            <br>

                                        <label>Bairro</label><br>
							                           	<input type="tex" name="bairro" id="bairro" value="<?php echo $bairro ?>" disabled>
							            <br>

                                        <label>CEP</label><br>
							                           	<input type="tex" name="cep" id="cep" value="<?php echo $cep ?>" disabled>
							            <br>

                                                           	
							                       
							           <label>Cidade</label><br>
							                          
                                        <select name="cidade" id="cidade" disabled>
		                   	<?php
	                       	  	$sql_tipo = mysql_query("select * from cidade");
		                        	while ($list_tipo = mysql_fetch_array($sql_tipo)) {			
				                      $idCidade = $list_tipo['idCidade'];
				                      $descricao = $list_tipo['cidade']; 
                                      $estado = $list_tipo['idEstado'];                                      
		                        	$selecionado = '';
	                       		if($idCidade== $cidade){
	                        		$selecionado = 'selected';
                            }
			                          	echo "<option value='$idCidade' $selecionado>$descricao</option>";	                                            
		                                	}
		                     	?>
                           </select>
	                       <br>
                       	<br>


                                        <label>Contato</label><br>
							                           	<input type="tex" name="contato" id="contato" value="<?php echo $contato ?>" disabled>
							            <br>

                                        <label>CNPJ</label><br>
							                           	<input type="tex" name="cnpj" id="cnpj" value="<?php echo $cnpj ?>" disabled>
							            <br>

                                        <label>Inscrição</label><br>
							                           	<input type="tex" name="inscricao" id="inscricao" value="<?php echo $inscricao ?>" disabled>
							            <br>

                                        <label>Telefone</label><br>
							                           	<input type="tex" name="telefone" id="telefone" value="<?php echo $telefone ?>" disabled>
							            <br>

                                   
  
							                   
							                           	<input type="button"  id="botao"  class="btn btn-success" value="Editar" onclick="troca()">  
							                           	<a href="<?php echo "excluirfornecedor.php?codigo=$codigo";?>">
							                            <input type="button"  id="excluir" class="btn btn-danger" value="Excluir" > 
							                      </a>
							                           	
</form>					

		                           	
							                           </div>
                                        </div>
                                        </div>
                                        
                                        

    </body>
    </html>
