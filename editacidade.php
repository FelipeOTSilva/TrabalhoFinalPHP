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
      document.getElementById("cidade").disabled = false; // Habilitar
      document.getElementById("estado").disabled = false; // Habilitar
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

$sql = "SELECT * FROM cidade WHERE idCidade ='$codigo'";

      $editar = mysql_query($sql);
      list($codigo,$cidade,$estado) = mysql_fetch_row($editar);
      
  
  ?>
  
   <div class="panel-body">
   
                            <div class="row">
                                <div class="col-lg-6">
                                    <form name="formulario"  action="atualizarcidade.php"  method="POST" role="form">
                                        <div class="panel-body">
                                           
                                            	<label>Codigo</label><br>
                                            
							                           	<input type="tex" name="codigo1" value=<?php echo $codigo ?> disabled>
							                          
							                           	 <input TYPE="hidden" name="codigo" value="<?php echo $codigo?>">
							                      <br>
							                          
                                        <label>Cidade</label><br>
							                           	<input type="tex" name="cidade" id="cidade" value="<?php echo $cidade ?>" disabled>
							                           	<br>
							                           	
							                          
							                          <label>Estado</label><br>
							                          
                                        <select name="estado" id="estado" disabled>
		                   	<?php
	                       	  	$sql_tipo = mysql_query("select * from estado");
		                        	while ($list_tipo = mysql_fetch_array($sql_tipo)) {			
				                      $idEstado = $list_tipo['idEstado'];
				                      $descricao = $list_tipo['nome'];
                                      $uf = $list_tipo['uf']; 
		                        	$selecionado = '';
	                       		if($idEstado== $estado){
	                        		$selecionado = 'selected';
                            }
			                          	echo "<option value='$idEstado' $selecionado>$uf</option>";	                                            
		                                	}
		                     	?>
                           </select>
	                       <br>
                       	<br>

                                   
  
							                   
							                           	<input type="button"  id="botao"  class="btn btn-success" value="Editar" onclick="troca()">  
							                           	<a href="<?php echo "excluircidade.php?codigo=$codigo";?>">
							                            <input type="button"  id="excluir" class="btn btn-danger" value="Excluir" > 
							                      </a>
							                           	
</form>					

		                           	
							                           </div>
                                        </div>
                                        </div>
                                        
                                        

    </body>
    </html>
