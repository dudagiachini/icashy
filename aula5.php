<head>
  <title> Juros Compostos </title>
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
  <h1 class="titulo_menor">Juros Compostos</h1>
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
	  <source src="audios/juros_compostos.mp3" type="audio/mpeg" >
	  </audio>
	  <p class="exemplo" align="center">Ouça o áudio da aula &nbsp; <span class="glyphicon glyphicon-headphones"></span></p>
	</div>   
    </div>
    <div class="col-sm-6 text-left"> 
      <h2>&nbsp; Conceituação</h2>
      <p class="texto" align="justify">&nbsp; &nbsp; &nbsp; Nos juros simples, a taxa de juros é calculada apenas em cima do capital inicial. Já nos juros compostos, essa taxa é calculada em cima do capital mais os juros pagos nos meses passados. Esse tipo de juros é conhecido também como “juros sobre juros”. A fórmula para calcular juros compostos é a seguinte:
	  </p> <br>
	  <p id="quadrado" align="center"> M = C * (1 + i)<sup>t</sup>  </p>
	  <br>
	  <p class="ss"> J = juros </p>
	  <p class="ss"> C = capital </p>
	  <p class="ss"> i = taxa de juros </p>
	  <p class="ss"> t = tempo de aplicação (mês, bimestre, trimestre, semestre, ano...) </p>
	  <br>
	  
	 
	   <br>   
	   <p align="center"><img src="img/estrela.png" alt="linha" width="200"></p>	   
	   <br><br><br>   
    </div>
 
	<div class="col-sm-3 sidenav">
	<div class="container">
  <div class="row">
    <nav class="col-sm-3">
      <div class="fixado">
        <h1 > Palavras chave </h1>
	    <a href="#" class="texto" data-toggle="popover" title="Juros" data-content="Rendimento de uma aplicação financeira, referente ao atraso no pagamento de uma prestação do empréstimo de um capital">Juros</a><br>
		<a href="#" class="texto" data-toggle="popover" title="Capital" data-content="Valor inicial em dinheiro">Capital</a><br>
		<a href="#" class="texto" data-toggle="popover" title="Montante" data-content="Junção do capital com o valor acumulado pelos juros">Montante</a><br>
	</div>
    </nav>
  </div>
	</div>

      </div>
    </div>
  </div>
  
	<div class="butao">
   <button type="button" class="btn btn-success" onclick="window.location.href='aula4.php';"><span class="glyphicon glyphicon-arrow-left "></span> Página anterior </button>
   <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo1" >Resolver Questões</button>
   <button type="button" class="btn btn-success" onclick="window.location.href='aula6.php';">Próxima página <span class="glyphicon glyphicon-arrow-right "></span></button>
    </div>
			<div id="demo1" class="collapse">
			<br><br><br>
			<div class="container-fluid text-center">    
			<div class="row content">
				<div class="col-sm-3 sidenav">
				</div>
				
				<div class="col-sm-6 text-left"> 
				<h2 align="center" >&nbsp; Questões: Juros Compostos</h2>
				<br><br>
				
				<form action="verifica_aula5.php" method="POST">
				
				<p class="texto"><b>1.</b> O que melhor define juros compostos? </p>
			
					<div class="radio">
					<label><input type="radio" name="q1" id="value" ><p class="texto" id="ff">Juros sobre juros</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q1" id="value" ><p class="texto" id="ff">Juros fixos</p></label>
					</div>
					<div class="radio ">
					<label><input type="radio" name="q1" id="value" ><p class="texto" id="ff">Capital inicial mais 5%</p></label>
					</div>
					<div class="radio ">
					<label><input type="radio" name="q1" id="value" ><p class="texto" id="ff"> Juros mais capital fixo</p></label>
					</div>
			
				
				<p class="texto"><b>2.</b> Qual das alternativas está correta?</p>
				
					<div class="radio">
					<label><input type="radio" name="q2" value="A2" ><p class="texto" id="ff">Quando os juros são negativos, uma quantia será adicionada ao capital.</p></label>
					</div> 
					<div class="radio">
					<label><input type="radio" name="q2" value="B2" ><p class="texto" id="ff">Juros compostos são menos lucrativos que juros simples.</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q2" value="C2" ><p class="texto" id="ff">Os juros compostos são mais lucrativos que juros simples.</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q2" value="D2" ><p class="texto" id="ff">Quando os juros são positivos, uma quantia será retirada do capital.</p></label>
					</div>
				
				<p class="texto"><b>3.</b> Um investidor aplicou R$ 30.000,00 à taxa de juros compostos de 7% a.m. Qual o montante que este investidor terá após 5 meses? </p>
				
					<div class="radio">
					<label><input type="radio" name="q3" value="A3" ><p class="texto" id="ff">R$ 39,729,12</p></label>
					</div> 
					<div class="radio">
					<label><input type="radio" name="q3" value="B3" ><p class="texto" id="ff">R$ 40.592,99</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q3" value="C3" ><p class="texto" id="ff">R$ 41.000,50</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q3" value="D3" ><p class="texto" id="ff">R$ 42.076,55</p></label>
					</div>
				
				<p class="texto"><b>4.</b> Quanto receberá de juros, no fim de um semestre, uma pessoa que investiu, a juros compostos, a quantia de R$5.000,00, à taxa de 1% ao mês? Sendo:</p>
				<p class="texto">C = 5000</p>
				<p class="texto">i = 1% ao mês (0,01)</p>
				<p class="texto">t = 1 semestre = 6 meses</p>
				<br>
				
					<div class="radio">
					<label><input type="radio" name="q4" value="A4" ><p class="texto" id="ff">R$306,00</p></label>
					</div> 
					<div class="radio">
					<label><input type="radio" name="q4" value="B4" ><p class="texto" id="ff">R$307,60</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q4" value="C4"  ><p class="texto" id="ff">R$310,00</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q4" value="D4"  ><p class="texto" id="ff">R$320,60</p></label>
					</div>
					
				<p class="texto"><b>5.</b> Você tem uma dívida de R$ 100,00, 5 meses para pagar, e uma taxa de juros negativas de 5%. Qual será o montante?</p>
			
					<div class="radio">
					<label><input type="radio" name="q5" value="A5"  ><p class="texto" id="ff">R$65,00</p></label>
					</div> 
					<div class="radio">
					<label><input type="radio" name="q5" value="B5" ><p class="texto" id="ff">R$95,00</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q5" value="C5" ><p class="texto" id="ff">R$175,00</div>
					<div class="radio">
					<label><input type="radio" name="q5" value="D5" ><p class="texto" id="ff">R$75,00</p></label>
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