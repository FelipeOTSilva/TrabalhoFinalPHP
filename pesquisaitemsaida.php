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

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">]
    
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	


    
    <style type="text/css">
table{
	font-size: 12px; 
	}
</style>

	<script>
	
	$('body').on('hidden.bs.modal', '.modal', function () {
				$(this).removeData('bs.modal').find(".modal-content").html("");
			});
			
			</script>


</head>	

<body>
	<!-- Modal -->
	<div class="modal fade bs-example-modal-lg" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop="static">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      
	    </div>
	  </div>
	</div>
	
	
<?php

include "menu.php";
include "conecta.php";

@session_start();

  ?>

    <div class="panel panel-success">
                        <div class="panel-heading">
                        <center>
                        <h4>
                           Pedidos de saída cadastros sistema
                            </h4>
                            </center>
                        </div>
                       
                    </div>
            <!-- /.row -->
      
       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                             
                                             <th>Loja</th>
                                             <th>Transportadora</th>                                 
                                             <th>Total</th>
                                             <th>Frete</th>
                                             <th>Imposto</th>
                                             <th>Opção</th>
                                             
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                      	$sql = "select saida.idSaida, loja.nome,transportadora.transportadora,total,frete,imposto, itemsaida.idItemSaida
                                                  from saida
                                                  join transportadora on (saida.idTransportadora = transportadora.idTransportadora)
                                                  join loja on (saida.idLoja = loja.idLoja)
                                                  join itemsaida on (saida.idSaida = itemsaida.idSaida)";
	
	 $editar = mysql_query($sql);
     while ($l = mysql_fetch_array($editar)){	
    $codigo = $l['idSaida'];
    $loja = $l['nome'];  
	$transportadora = $l['transportadora'];
    $total = $l['total'];
    $total = number_format($total,2,",",".");
    $frete = $l['frete'];
    $frete = number_format($frete,2,",",".");
    $imposto = $l['imposto'];
    $imposto = number_format($imposto,2,",",".");
    $idItemSaida = $l['idItemSaida'];

    

	echo "
      
      <tr class=success>
      <td> $loja </td>
      <td> $transportadora </td> 
      <td> $total </td>
      <td> $frete </td>
      <td> $imposto </td>
    <center>  
    <td align=center> <a href=editaitemsaida.php?codigo='$codigo'&itemsaida='$idItemSaida'; data-toggle=modal data-target=#myModal>
      <button type='button' class='btn btn-primary btn-xs'>Visualizar Cadastro</button> </td>  
  
 </a> 
                              
      </tr>
 </a>                                   
      </tr>
      ";
     }
                                      ?>
                                    </tbody>
                                </table>
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="bower_components/datatables-responsive/js/dataTables.responsive.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
