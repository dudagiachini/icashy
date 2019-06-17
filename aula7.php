<head>
  <title> Regra do 72 </title>
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-png"/>
 
  <?php 
    /* esse bloco de código em php verifica se existe a sessão*/
    
    session_start();
    
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:index.html');
    }
 
        $pessoa = $_SESSION['login']; 
    ?>
 
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
    <p> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <a href="perfil.php"><img  src="img/icashy_branco.png" alt="iCashy" width="110" height="50"></a></p>
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
  <h1 class="titulo_menor">Regra do 72</h1>
  <p align="center"><img src="img/estrela.png" alt="linha" width="200"></p>
  <br>
</div>

 </div>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-3 sidenav" >
	<div class="fixado">
      <br>
      <p align="center"><img src="img/gif_nancy.gif" alt="Nancy" height="300"></p>
	  <audio controls>
	  <source src="audios/regra_do_72.mp3" type="audio/mpeg">
	  </audio>
	  <p class="exemplo" align="center">Ouça o áudio da aula &nbsp; <span class="glyphicon glyphicon-headphones"></span></p>
	</div>   
    </div>
	
    <div class="col-sm-6 text-left"> 
      <h2>&nbsp; Utilização</h2>
      <p class="texto" align="justify">&nbsp; &nbsp; &nbsp; A regra do 72 serve para calcular uma estimativa de em quanto tempo determinado valor, aplicado a juros compostos, demora para ser duplicado. A fórmula é:
		</p> <br>
	  <p id="quadrado" align="center"> t = 72 / i </p>
	  <br>
	  <p class="ss"> i = taxa de juros </p>
	  <p class="ss"> t = tempo necessário para que o valor seja duplicado </p>
	  <br>
	  
	  <h4>&nbsp; Exemplo: </h4>
	  <p class="exemplo" align="justify"> Você tem um investimento que está sob uma taxa de juros compostos de 20%. Em quanto tempo essa dívida dobrará? </p>
	  <p class="exemplo" align="justify"> Aplicando na fórmula temos: </p>
	  <p class= "exemplo " align="center">t = 72 / 20 </p>
	  <p class= "exemplo " align="center">t = 3,6 anos </p>
	   <br> 	  
	 
	   <br>   
	   <p align="center"><img src="img/estrela.png" alt="linha" width="200"></p>	   
	   <br><br><br>  
    </div>
	
	<div class="col-sm-3 sidenav">
	<div class="container">
  <div class="row">
    <nav class="col-sm-3">

    </nav>
  </div>
	</div>

      </div>
    </div>
  </div>
  
    <div class="butao">
   <button type="button" class="btn btn-success" onclick="window.location.href='aula6.php';"><span class="glyphicon glyphicon-arrow-left "></span> Página anterior </button>
   <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo1" >Resolver Questões</button>
    </div>
			<div id="demo1" class="collapse">
			<br><br><br>
			<div class="container-fluid text-center">    
			<div class="row content">
				<div class="col-sm-3 sidenav">
				</div>
				
				<div class="col-sm-6 text-left"> 
				<h2 align="center" >&nbsp; Questões: Regra do 72 </h2>
				<br><br>
				
				<form action="verifica_aula7.php" method="POST">
				
				<p class="texto"><b>1.</b> João tem uma dívida de R$ 1500,00 em uma loja de materiais de construção. Essa dívida está sob uma taxa de juros compostos de 15%. Em quanto tempo ela dobrará?</p>
				
					<div class="radio">
					<label><input type="radio" name="q1" value="A1" ><p class="texto" id="ff">Aproximadamente 2,7 anos. </p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q1" value="B1" ><p class="texto" id="ff">5 anos.</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q1" value="C1" ><p class="texto" id="ff">2,4 anos.</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q1" value="D1" ><p class="texto" id="ff">Aproximadamente 6 anos.</p></label>
					</div>
				
				<p class="texto"><b>2.</b> Ana fez um investimento de R$ 37.000,00, sob uma taxa de juros compostos de 16%. Ela só pegará seu dinheiro de volta quando seu valor for o dobro do seu investimento inicial. Em quanto tempo ela fará isso?</p>
				
					<div class="radio">
					<label><input type="radio" name="q2" value="A2" ><p class="texto" id="ff">5 anos.</p></label>
					</div> 
					<div class="radio">
					<label><input type="radio" name="q2" value="B2" ><p class="texto" id="ff">7 anos.</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q2" value="C2" ><p class="texto" id="ff">8,3 anos.</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q2" value="D2" ><p class="texto" id="ff">4,5 anos.</p></label>
					</div>
				
				<p class="texto"><b>3.</b> José fez um empréstimo para um amigo e recebeu o dinheiro de volta em 3,6 anos. Ele recebeu o dobro do valor que emprestou. Qual era a taxa de juros compostos desse empréstimo? </p>
				
					<div class="radio">
					<label><input type="radio" name="q3" value="A3" ><p class="texto" id="ff">20%</p></label>
					</div> 
					<div class="radio">
					<label><input type="radio" name="q3" value="B3" ><p class="texto" id="ff">23%</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q3" value="C3" ><p class="texto" id="ff">8%</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q3" value="D3" ><p class="texto" id="ff">17%</p></label>
					</div>
				
				<p class="texto"><b>4.</b> Para poder calcular em quanto tempo uma dívida dobrará, quais são a(s) informação(ões) necessária(s)?</p>
				
					<div class="radio">
					<label><input type="radio" name="q4" value="A4" ><p class="texto" id="ff">Valor da dívida e taxa de juros compostos</p></label>
					</div> 
					<div class="radio">
					<label><input type="radio" name="q4" value="B4" ><p class="texto" id="ff">Taxa de juros compostos.</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q4" value="C4" ><p class="texto" id="ff">Valor da dívida.</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q4" value="D4" ><p class="texto" id="ff">Valor da dívida e tempo.</p></label>
					</div>	

					<p class="texto"><b>5.</b> João emprestou para um amigo e recebeu 100% do dinheiro de volta em 48 meses. Ele recebeu o triplo do valor que emprestou. Qual era a taxa de juros compostos desse empréstimo?</p>
				
					<div class="radio">
					<label><input type="radio" name="q5" value="A5" ><p class="texto" id="ff">20%</p></label>
					</div> 
					<div class="radio">
					<label><input type="radio" name="q5" value="B5" ><p class="texto" id="ff">18%</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q5" value="C5" ><p class="texto" id="ff">24%</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q5" value="D5" ><p class="texto" id="ff">12%</p></label>
					</div>
				
				<input type="submit" class="btn btn-danger" value="Enviar">
				</form>
				
				<br> <br>
				<p align="center"><img src="img/estrela.png" alt="linha" width="200"></p>
				</div>  
	
				<div class="col-sm-3 sidenav">
				</div>
			</div>
			</div>
			</div>
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript">
jQuery(window).scroll(function () {
 if (jQuery(this).scrollTop() > 180) {
     jQuery(".fixado").addClass("fixo");
 } else {
     jQuery(".fixado").removeClass("fixo");
 }
});

$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

<br><br><br><br><br>

 <footer class= "container-fluid text-center">
 <div class="copyright py-4 text-center text-white">
    <div class="container">
      <p>iCashy ®</p>
    </div>
  </div>
</footer>
 
</body>
</html>