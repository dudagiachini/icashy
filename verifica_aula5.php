<?php

include 'conexao.php';

session_start();

if(empty($_POST['q1'])||empty($_POST['q2'])||empty($_POST['q3'])||empty($_POST['q4'])||empty($_POST['q5'])){
    echo "<script>alert('Responda todas as questões.'); window.location='aula5.php'</script>";
}

else{
$acertos=0;

$questao1= $_POST['q1'];
$questao2= $_POST['q2'];
$questao3= $_POST['q3'];
$questao4= $_POST['q4'];
$questao5= $_POST['q5'];


if($questao1=="A1"){$acertos++;}
if($questao2=="C2"){$acertos++;}
if($questao3=="D3"){$acertos++;}
if($questao4=="B4"){$acertos++;}
if($questao5=="D5"){$acertos++;}

$id_pessoa = $_SESSION['id'];
$sql= "INSERT INTO etapa (id_pessoa, fase, pontuacao) VALUES ('$id_pessoa', '3', '$acertos')";

if ($connection->query($sql)==TRUE){
   header('location: aula6.php');
 }
 
else{
    header('location: index.html');
}
}
?>