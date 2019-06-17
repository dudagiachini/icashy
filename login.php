<?php
include 'conexao.php';
session_start();
 
$login = $_POST['user'];
$senha = md5($_POST['senha']);

$result = mysqli_query($connection, "SELECT * FROM pessoa WHERE usuario = '$login' AND senha = '$senha'");

if(mysqli_num_rows ($result) > 0)
 {  
     
    $identificacao = mysqli_query($connection, "SELECT id FROM pessoa WHERE usuario = '$login'");
    $dados = mysqli_fetch_array($identificacao);
    $id_pessoa = $dados['id'];

    $_SESSION['id']= $id_pessoa;
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('location: perfil.php');
 }

else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    echo "<script>alert('SENHA OU USUÁRIO INCORRETO'); window.location='index.html'</script>";
  }
?>