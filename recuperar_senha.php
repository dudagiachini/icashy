<?php

include 'conexao.php';

// Check for empty fields
if(empty($_POST['email_rec'])) {
  echo "<script>alert('Digite seu email'); window.location='index.html'</script>";
}

$email = ($_POST['email_rec']);
$senha = rand(100,1000000);

// Create the email and send the message
$to = $email; // This is where the form will send a message to.
$subject = "Recuperação de senha iCashy";
$body = "A sua nova senha é:\n\n".$senha;
$header = "From: donotreply@iCashy.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.	
$senha_rash = md5($senha);

$sql= "UPDATE pessoa SET senha = '$senha_rash' WHERE email= '$email'"; 

if ($connection->query($sql)==TRUE){
    echo "<script>alert('Senha recuperada com sucesso!'); window.location='index.html'</script>";
 
    if(!mail($to, $subject, $body, $header)){
    http_response_code(500);
    }
}
 
else{
    echo "<script>alert('Erro ao recuperar senha: insira o email que utilizou no cadastro'); window.location='index.html'</script>";
}
?>