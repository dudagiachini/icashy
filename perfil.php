<!DOCTYPE html PUBLIC
"-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Perfil</title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-png"/>
  <script> 
    <?php 
     
    /* esse bloco de código em php verifica se existe a sessão*/
  
    session_start();
    
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:index.html');
    }
        $logado = $_SESSION['login'];
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


  <br><br><br><br><BR><BR>
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <img src="img/avatar.png" class="img-circle" height="80" width="80" alt="Avatar">
		<p><a href="perfil.php">
		 <?php echo "@".$logado; ?>
		 </a></p>
      </div>
      <div class="well">
       <a href="#.php" data-toggle="collapse" data-target="#senha"> Alterar senha </a>
			<div id="senha" class="collapse">
                
                <form name="sentMessage" id="contactForm" action="mudar_senha.php" method="POST">
                    <br>
                    <label>Senha antiga:</label><br>
                    <input class="form-control" name="s_antiga" type="password" placeholder="Senha antiga" required="required" data-validation-required-message="Por favor, digite sua senha antiga."><br>
                  
                    <label>Nova senha:</label><br>
                    <input class="form-control" name="s_nova" type="password" placeholder="Senha nova" required="required" data-validation-required-message="Por favor, digite sua nova senha."><br>
                    
                    <label>Confirme a nova senha:</label><br>
                    <input class="form-control" name="confirm" type="password" placeholder="Senha nova" required="required" data-validation-required-message="Por favor, digite sua nova senha."><br>
                    
                    <input type="submit" value="Enviar">
                </form>
              </div>
              <br>
            <a href="#.php" data-toggle="collapse" data-target="#conta"> Excluir conta </a>
			<div id="conta" class="collapse">
                
                <form name="sentMessage" id="contactForm" action="excluir.php" method="POST">
                    <br>
                    <p>Tem certeza que deseja excluir sua conta? Todos os seus dados serão apagados</p><br>
                   
                    <div class=radio>
					<label><input type="radio" name="excluir" value="sim"/><p class="texto" id="ff">&nbsp;&nbsp;&nbsp; Sim</p></label>
				    </div>
				    
                    <input type="submit" value="Excluir">
                </form>
              </div>
     </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Olá <?php 
		     echo $logado;
		     ?>!</strong></p>
        Que bom que você está de volta, vamos aprender!
      </div>
	   <div class="dropdown">
	   <button type="button" class="btn btn"><a href="aulas.html">Aulas</a></button>
	   <button type="button" class="btn btn"><a href="tabela.php">Pontuação</a></button>
	</div>
	</div> 
	
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <img src="img/1.png" class="img" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
			<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo">Conceitos iniciais</button>
			<div id="demo" class="collapse">
			Breve introdu&ccedil;&atilde;o para a melhor compreens&atilde;o das aulas de matem&aacute;tica financeira.<br>
			<button type="button" class="btn btn"><a href="aulas.html">Aulas</a></button>
			</div>
			</div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <img src="img/2.png" class="img" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
		  <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo1">Juros Simples</button>
			<div id="demo1" class="collapse">
			Uma taxa variável que pode aumentar ou diminuir e incide sempre sobre o valor principal.<br>
			<button type="button" class="btn btn"><a href="aulas.html">Aulas</a></button>
			</div>
		</div>
		  </div>
        </div>
     
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <img src="img/3.png" class="img" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
			<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo2">Juros Compostos</button>
			<div id="demo2" class="collapse">
			A taxa de juros é sempre aplicada ao somatório do capital no final de cada mês.<br>
			<button type="button" class="btn btn"><a href="aulas.html">Aulas</a></button>
			</div>
			</div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <img src="img/4.png" class="img" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
			<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo3">Investimentos</button>
			<div id="demo3" class="collapse">
			Aplicação de capital com a expectativa de um benefício futuro.<br>
			<button type="button" class="btn btn"><a href="aulas.html">Aulas</a></button>
			</div>
			</div>
        </div>
      </div>
		
		 <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <img src="img/5.png" class="img" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
			<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo4">Regra do 72</button>
			<div id="demo4" class="collapse">
		    Resultanta no número de anos que você precisa para dobrar o montante a uma taxa de juros fixa.<br>
			<button type="button" class="btn btn"><a href="aulas.html">Aulas</a></button>
			</div>
			</div>
        </div>
      </div>
	 </div>
	  
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <img src="img/money.png" alt="iCashy" width="400" height="400">
        <p><strong>iCashy</strong></p>
      </div>      
      <div class="well">
        <p> <span class="glyphicon glyphicon-envelope"></span> icashy@ifsc.edu.br </p>
      </div>
      <div class="well">
        <form action="logout.php">
            <input type="submit" clas="btn btn-primary btn-x1" id="botaosair" value="Sair">
        </form>
      </div>
    </div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<footer class= "container-fluid text-center">
 <div class="copyright py-4 text-center text-white">
    <div class="container">
      <p>iCashy ®</p>
    </div>
  </div>
</footer>

</body>
</html>