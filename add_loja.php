 <?php
 include "conecta.php";
    $nome= strtoupper($_POST["nome"]);
    $nome=preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $nome ) );
    $nome = strtoupper($nome);
    $endereco= strtoupper($_POST["endereco"]);
    $endereco=preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $endereco ) );
    $endreco = strtoupper($endereco);
    $num = $_POST["numero"];
    $bairro= strtoupper($_POST["bairro"]);
    $bairro=preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $bairro ) );
    $bairro = strtoupper($bairro);
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $cnpj = $_POST["cnpj"];
    $insc = $_POST["insc"];
    $telefone = $_POST["telefone"];   
    

    $sql="insert into loja(idCidade,nome,endereco,num,bairro,tel,insc,cnpj) values ('$cidade', '$nome', 
          '$endereco', '$num', '$bairro', '$telefone', '$insc', '$cnpj')";
    if(mysql_query($sql)){
        echo "<script>alert('Cadastro Efetuado com Sucesso');</script>";
        echo "<script>window.location='cad_transportadora.php';</script>";        
    }
    else{
        echo "<script>alert('Erro ao Efetuar Cadastro');</script>";
        echo "<script>window.location='cad_transportadora.php';</script>";
    }
 ?>   