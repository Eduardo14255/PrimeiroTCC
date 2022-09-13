<?php
$mail->Port = '465'; //porta usada pelo gmail.
$mail->Host = 'eduardo.teste.php@gmail.com'; 
$mail->IsHTML(true); 
$mail->Mailer = 'smtp'; 
$mail->SMTPSecure = 'ssl';

  //Variáveis
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  $acao = $_POST['acao'];
if($acao == "SALVAR"){
  
  
  //Emails para quem será enviado o formulário
  $mail->addAddress = ("eduardo.noveli100@gmail.com");
  $mail-> Subject ="Contato pelo Site";
  $mail->Body = "
    <html>
      <p><strong>Nome: </strong>$nome</p>
      <p><strong>E-mail: </strong>$email</p>
      <p><strong>Mensagem: </strong>$mensagem</p>
    </html>
  ";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From:eduardo.teste.php@gmail.com";

  //Enviar
  if ($mail->Send("addAddress", "Subject", "Body"));
  
 // echo "<meta http-equiv='refresh' content='10;URL=../contato.html'>";
}else {
  header("Location: index.html?erro=SALVAR");
}
?>