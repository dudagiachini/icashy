<!DOCTYPE html>
<html>
<head>
  <title>Tabela de pontuação</title>
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-png"/>
 <script>
 <?php

    include 'conexao.php';

    session_start();
    
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:index.html');
    }

    $id_pessoa=$_SESSION['id'];

    $result= mysqli_query($connection, "SELECT pontuacao FROM etapa WHERE id_pessoa = '$id_pessoa' AND fase='1'");
    $dados = mysqli_fetch_array($result);
    $fase1 = $dados['pontuacao'];
    if(!isset($fase1)){$fase1=" ? ";}

    $result= mysqli_query($connection, "SELECT pontuacao FROM etapa WHERE id_pessoa = '$id_pessoa' AND fase='2'");
    $dados = mysqli_fetch_array($result);
    $fase2 = $dados['pontuacao'];
    if(!isset($fase2)){$fase2=" ? ";}
    
    $result= mysqli_query($connection, "SELECT pontuacao FROM etapa WHERE id_pessoa = '$id_pessoa' AND fase='3'");
    $dados = mysqli_fetch_array($result);
    $fase3 = $dados['pontuacao'];
    if(!isset($fase3)){$fase3=" ? ";}

    $result= mysqli_query($connection, "SELECT pontuacao FROM etapa WHERE id_pessoa = '$id_pessoa' AND fase='4'");
    $dados = mysqli_fetch_array($result);
    $fase4 = $dados['pontuacao'];
    if(!isset($fase4)){$fase4=" ? ";}

    $result= mysqli_query($connection, "SELECT pontuacao FROM etapa WHERE id_pessoa = '$id_pessoa' AND fase='5'");
    $dados = mysqli_fetch_array($result);
    $fase5 = $dados['pontuacao'];
    if(!isset($fase5)){$fase5=" ? ";}
?>

  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  
</head>

<body>

<header>
  <h1>
    <p> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <a href="index.html"><img  src="img/icashy_branco.png" alt="iCashy" width="110" height="50"></a></p>
  </h1>
</header>

<div class="container">

<div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <h1 class="titulo">Tabela de Pontuação </h1>
  <p align="center"><img src="img/estrela.png" alt="linha" width="300"></p>
  <br>
</div>
 
  <br>
  <div class="panel panel-default">
  <table class="table">
    <thead>
      <tr>
        <th>Fase</th>
        <th>Conte&uacutedo trabalhado</th>
        <th>Sua pontua&ccedil;&atildeo</th>
      </tr>
    </thead>
    <tbody>
	<tr>
        <td>1</td>
        <td>Conceitos iniciais</td>
        <td><?php echo $fase1." / 5"; ?></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Juros simples</td>
        <td><?php echo $fase2." / 5"; ?></td>
      </tr>
	  <tr>
        <td>3</td>
        <td>Juros compostos</td>
        <td><?php echo $fase3." / 5"; ?></td>
      </tr>
	  <tr>
        <td>4</td>
        <td>Investimentos</td>
        <td><?php echo $fase4." / 5"; ?></td>
      </tr>
	  <tr>
        <td>5</td>
        <td>Regra do 72</td>
        <td><?php echo $fase5." / 5"; ?></td>
      </tr> 
    </tbody>
  </table>
  </div>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

 <footer class= "container-fluid text-center">
 <div class="copyright py-4 text-center text-white">
    <div class="container">
      <p>iCashy ®</p>
    </div>
  </div>
</footer>

</body>
</html>