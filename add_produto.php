 <?php
 include "conecta.php";
    $nome= strtoupper($_POST["nome"]);
    $nome=preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $nome ) );
    $nome = strtoupper($nome);
    $qntmin = $_POST["qntmin"];
	$peso= $_POST["peso"];
	$categoria = $_POST["categoria"];
	$fornecedor = $_POST["fornecedor"];
	
    
    

    $sql="insert into produto(idCategoria,idFornecedor,descricao,peso, qtdemin) values ('$categoria', '$fornecedor', '$nome', '$peso', '$qntmin')";
    if(mysql_query($sql)){
        echo "<script>alert('Cadastro Efetuado com Sucesso');</script>";
        echo "<script>window.location='cad_produto.php';</script>";        
    }
    else{
        echo "<script>alert('Erro ao Efetuar Cadastro');</script>";
      /*  echo "<script>window.location='cad_produto.php';</script>";*/
    }
 ?>   