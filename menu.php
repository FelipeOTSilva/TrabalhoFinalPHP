 <!DOCTYPE HTML>
 <html lang="pt-br">
 <head>
 	<meta charset="UTF-8">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de Controle de Estoque</title>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
   
</head>

<body>
   


    <div id="wrapper">

        <!-- Começa o Menu Lateral -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                
                 <a class="navbar-brand" href="index.php">Sair do Aplicativo</a>
            </div>
           

            <div class="navbar-default sidebar" role="navigation">
              
                    <ul class="nav" id="side-menu">
                        
                        <li>
                        
                   <a href="index1.php"><i class="fa fa-dashboard fa-fw"></i>Controle de Estoque</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Cadastros<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                  <a href="cad_categoria.php">Categoria</a>
                                </li> 
                                <li>
                                  <a href="cad_cidade.php">Cidade</a>
                                </li> 
                                <li>
                                  <a href="cad_estado.php">Estado</a>
                                </li>
                                <li>
                                  <a href="cad_fornecedor.php">Fornecedor</a>
                                </li>
                                <li>
                                  <a href="cad_loja.php">Loja</a>
                                </li>
								<li>
                                  <a href="cad_produto.php">Produto</a>
                                </li>
                                <li>
                                  <a href="cad_transportadora.php">Transportadora</a>
                                </li>
                                <li>
                                  <a href="cad_usuario.php">Usuarios</a>
                                </li>
                                 
                            </ul>
                        </li>
                        
                          <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Consulta<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
							    <li>
                                  <a href="pesquisacategoria.php"> Categoria</a>
                                </li>
								<li>
                                  <a href="pesquisacidade.php"> Cidade</a>
                                </li>
                                <li>
                                  <a href="pesquisaestado.php"> Estado</a>
                                </li>
                                <li>
                                  <a href="pesquisafornecedor.php">Fornecedores</a>
                                </li>
                                <li>
                                  <a href="pesquisaloja.php">Loja</a>
                                </li>
                                <li>
                                  <a href="pesquisaproduto.php">Produtos</a>
                                </li> 
                                <li>
                                 <li>
                                  <a href="pesquisatransportadora.php">Transportadora</a>
                                </li> 
                                <li>
                                  <a href="pesquisaentrada.php">Entrada de Estoque</a>
                                </li> 
                                <li>
                                  <a href="pesquisasaida.php">Saída de Estoque</a>
                                </li>
                            </ul>
                        </li>
                        
                         <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Entradas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                  <li>
                                   <a href="cad_entrada.php">Produtos</a>
                                </li>

                            </ul>
                       
                        </li>
                        
                         <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Saida<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                   <a href="cad_saida.php">Produtos</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                         <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Graficos <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                 <li>
                                   <a href="graficoentrada.php">Graficos Entrada de Produtos</a>
                                </li>

                                 <li>
                                   <a href="graficosaida.php">Graficos Saídas de Produtos</a>
                                </li>

                                
                                 <li>
                                   <a href="graficosaldo.php">Graficos Saldo de Produtos</a>
                                </li>
                                
                                 <li>
                                   <a href="#">Fornecedores</a>
                                </li>
                                
                                   
                                  </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                
                                 <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Relatorios Excel<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                   <a href="saldoprodutoexcel.php">Saldo</a>
                                   <a href="entradaestoqueexcel.php">Entrada</a>
                                   <a href="saidaestoqueexcel.php">Saídas</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Relatorios PDF<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                   <a href="saldoprodutopdf.php">Saldo</a>
                                   <a href="entradaestoquepdf.php">Entrada</a>
                                   <a href="saidaestoquepdf.php">Saídas</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                      
                </div>
           
          
      
        </nav>  <!-- Termina o Menu Lateral -->

        <div id="page-wrapper">
            <div class="row">
                
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                  
                </div>
              
                            
                 </div>
          
          

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="bower_components/raphael/raphael-min.js"></script>
    <script src="bower_components/morrisjs/morris.min.js"></script>
    <script src="js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
