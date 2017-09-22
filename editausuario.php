<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Controladoria Merlo Capacitação e Treinamento</title>

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
      document.getElementById("login").disabled = false; // Habilitar
      document.getElementById("nivel").disabled = false; // Habilitar
      document.getElementById("senha").disabled = false; // Habilitar
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

$sql = "SELECT * FROM usuario WHERE idUsuario='$codigo'";

      $editar = mysql_query($sql);
      list($cod_usuario,$nome,$login,$senha,$nivel) = mysql_fetch_row($editar);
      
      	if($nivel==""){
$g1="ADMINISTRADOR";
$d1="Administrador";

$g2="USUARIO";
$d2="Usuario";	
}
else{

$g2="ADMINISTRADOR";
$d2="Administrador";

$g1="USUARIO";
$d1="Usuario";

}



  
  ?>
  
   <div class="panel-body">
   
                            <div class="row">
                                <div class="col-lg-6">
                                    <form name="formulario"  action="atualizarusuario.php"  method="POST" role="form">
                                        <div class="panel-body">
                                           
                                            	<label>Codigo</label><br>
                                            
							                           	<input type="tex" name="codigo1" value=<?php echo $cod_usuario ?> disabled>
							                          
							                           	 <input TYPE="hidden" name="codigo" value="<?php echo $cod_usuario?>">
							                      
							                          
                                        <label>Nome</label><br>
							                           	<input type="tex" name="nome" id="nome" value="<?php echo $nome ?>" disabled>
							                          
                                        
                                            <label>Login</label><br>                                          
							                           	<input type="tex" name="login" id="login" value="<?php echo $login ?>" disabled>
							                           	
                                         <label>Senha</label><br>
							                           	<input type="tex" name="senha" id="senha" value="<?php echo $senha?>"" disabled>
							                           

                                        
 <label>Nivel</label><br>
	           	<select name="nivel" id="nivel" disabled>
	           	<?php
		            echo "<option value='$g1'>$d1</option> SELECTED;";
		            echo "<option value='$g2'>$d2</option>";
  
							   ?> 
							   </select>
                 <br>
                 <br>
  
							                   
							                           	<input type="button"  id="botao"  class="btn btn-success" value="Editar" onclick="troca()">  
							                           	<a href="<?php echo "excluirusuario.php?cod_usuario=$cod_usuario";?>">
							                            <input type="button"  id="excluir" class="btn btn-danger" value="Excluir" > 
							                      </a>
							                           	
</form>					

		                           	
							                           </div>
                                        </div>
                                        </div>
                                        
                                        

    </body>
    </html>
