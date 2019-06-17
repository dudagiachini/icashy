<?php

include 'conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$data_nasc = $_POST['data_nasc'];
$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']); 
$nro=0;

$verifica = mysqli_query($connection, "SELECT * FROM pessoa WHERE usuario = '$usuario'"); 
$nro = mysqli_num_rows($verifica);

if ($nro > 0){
   echo "<script>alert('Usuário já utilizado, escolha outro.'); window.location='index.html'</script>";
}

else{
$result_inscricao = "INSERT INTO pessoa (nome, sobrenome, email, data_nascimento, usuario, senha) VALUES  ('$nome', '$sobrenome', '$email', '$data_nasc', '$usuario', '$senha')";

if ($connection->query($result_inscricao)==TRUE){
    
    session_start();
    
    $identificacao = mysqli_query($connection, "SELECT id FROM pessoa WHERE usuario = '$usuario'");
    $dados = mysqli_fetch_array($identificacao);
    $id_pessoa = $dados['id'];

    $_SESSION['id']= $id_pessoa;
    $_SESSION['login'] = $usuario;
    $_SESSION['senha'] = $senha;
    
    header('location: perfil.php');
 }
 
else{
    echo "Erro: ".$result_inscricao. "<BR>" . $connection->error;
}

 $connection->close();
}
?>