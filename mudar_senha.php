<?php

include 'conexao.php';

session_start();

$id_pessoa = $_SESSION['id'];
$nova_senha= md5($_POST['s_nova']);
$senha_velha= md5($_POST['s_antiga']);
$confirmacao = md5($_POST['confirm']);

$senha1 = mysqli_query($connection, "SELECT senha FROM pessoa WHERE id = '$id_pessoa';");
$dados = mysqli_fetch_array($senha1);
$senha = $dados['senha'];

if($senha==$senha_velha){
    
    if ($nova_senha == $confirmacao){
        $atualiza = "UPDATE pessoa SET senha = '$nova_senha' where id = '$id_pessoa'";
        $confirmacao = mysqli_query ($connection, $atualiza);
        echo "<script>alert('Sua senha foi atualizada'); window.location='perfil.php'</script>";
    }
    
    else{
    echo "<script>alert('Sua nova senha não confirma com a confirmação'); window.location='perfil.php'</script>";
    }
}
 
else{
    header('location: erro.html');
}

?>