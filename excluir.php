<?php

include 'conexao.php';

session_start();

$user_id = $_SESSION['id'];

if(!empty($_POST['excluir'])){
    
$sql = "DELETE FROM etapa WHERE id_pessoa = '$user_id'";

    if ($connection->query($sql)==TRUE){
        
        $sql2 = "DELETE FROM pessoa WHERE id = '$user_id'";
        
        if($connection->query($sql2)==TRUE){
            
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            unset($_SESSION['id']);
            session_destroy();
            
            echo "<script>alert('Conta excluida com sucesso!'); window.location='index.html'</script>";      
        }
        else{
            echo "<script>alert('Não foi possível excluir a conta, tente novamente mais tarde!'); window.location='perfil.php'</script>";
        } 
    }
    
    else{
     echo "<script>alert('Não foi possível excluir a conta, tente novamente mais tarde!'); window.location='perfil.php'</script>";  
        
    }
}
?>