<?php
//Variáveis
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensagem'];

//Campo E-mail
$arquivo .= '<h2>Teste</h2>';
   

//Emails para quem será enviado o formulário
$destino = "eduardo.noveli100@gmail.com";
$assunto = "Teste";

//Este sempre deverá existir para garantir a exibição correta dos caracteres
$header = "Content-type: text/html; charset=utf-8\n";
$header .= "From:eduardo.teste.php@gmail.com Repy-to:eduardo.teste.php@gmail.com\n";
header("Location:../index.html");
//Enviar

@mail($destino, $assunto, $arquivo, $headers);
echo 10;
  ?>