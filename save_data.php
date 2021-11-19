<?php
    $n = $_POST["n"];
    $firma = $_POST["firma"];
    $cnpj = $_POST["cnpj"];
    $inscricao = $_POST["incricao"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    $complemento = $_POST["complemento"];
    $cep = $_POST["cep"];
    $email = $_POST["email"];
    $data = $_POST["data"];
    $uf = $_POST["uf"];
    $tel = $_POST["tel"];
    $cel = $_POST["cel"];
    
    
    if(empty($firma) or empty($n) or empty($cnpj) or empty($cep) or empty($inscricao) or empty($endereco) or empty($bairro) or empty($complemento) or empty($email) or empty($data) or empty($uf) or empty($tel) or empty($cel)) {
        echo "<p>Todos os campos devem ser preenchidos.</p>";
    }
    else {
        echo "<p> Olá <i><b>$firma</i></b>!! Suas respostas foram recebidas. Aguarde um retorno nosso!</p>";
        file_put_contents("info_forms.csv", "$n,$firma,$cnpj,$inscricao,$endereco,$bairro,$complemento,$cep,$email,$data,$uf,$tel,$cel", FILE_APPEND);
    }
?>





