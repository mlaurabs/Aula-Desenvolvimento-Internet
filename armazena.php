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


file_put_contents("dados_.csv", "$n,$firma,$cnpj,$inscricao,$endereco,$bairro,$complemento,$cep,$email,$data,$uf,$tel,$cel", FILE_APPEND);

?>





