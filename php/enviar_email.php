<?php
  //Variáveis
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];

  //Campo E-mail
  $arquivo = "
    <html>
      <p><strong>Nome: </strong>$nome</p>
      <p><strong>E-mail: </strong>$email</p>
      <p><strong>Mensagem: </strong>$mensagem</p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "eduardo.noveli100@gmail.com";
  $assunto = "Contato pelo Site";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From:eduardo.teste.php@gmail.com";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
 // echo "<meta http-equiv='refresh' content='10;URL=../contato.html'>";
?>