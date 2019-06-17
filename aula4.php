<head>
  <title> Juros simples  </title>
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
  <h1 class="titulo_menor">Juros positivos e negativos</h1>
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
	  <source src="audios/juros_positivos_e_negativos.mp3" type="audio/mpeg">
	  </audio>
	  <p class="exemplo" align="center">Ouça o áudio da aula &nbsp; <span class="glyphicon glyphicon-headphones"></span></p>
	</div>   
    </div>
	
    <div class="col-sm-6 text-left"> 
      <p class="texto" align="justify">&nbsp; &nbsp; &nbsp; Quando os juros são positivos, será adicionada uma quantia ao capital. Mas, e quando os juros são negativos?</p>
	  <p class="texto" align="justify">&nbsp; &nbsp; &nbsp; Quando os juros são negativos, uma quantia será retirada do capital.</p>
	  <br>   
	  <h4>&nbsp; Exemplo: </h4>
	  <p class="exemplo" align="justify"> Você tem uma dívida de R$ 50,00, 2 meses para pagar, e uma taxa de juros de 5%. Ao colocar isso na fórmula temos:</p>
	  <p class= "exemplo " align="center">J = 50 * 0,05 * 2 </p>
	  <p class= "exemplo " align="center">J = R$ 5,00 </p>
	   <br> 
	  <p class= "exemplo " align="center">M = C + J </p>
	  <p class= "exemplo " align="center">M = 50 + 5 </p>
	  <p class= "exemplo " align="center">M = R$ 55,00 </p>
	  <br>
	  <p class="exemplo" align="justify">&nbsp; &nbsp; &nbsp; Agora, você tem essa mesma dívida, porém, com a taxa de juros negativa. Ao colocar isso na fórmula temos:</p>
	  <br>   
	  <p class= "exemplo " align="center">J = 50 * -0,05 * 2 </p>
	  <p class= "exemplo " align="center">J = R$ -5,00 </p>
	   <br> 
	  <p class= "exemplo " align="center">M = C + J </p>
	  <p class= "exemplo " align="center">M = 50 + (-5) </p>
	  <p class= "exemplo " align="center">M = 50 - 5 </p>
	  <p class= "exemplo " align="center">M = R$ 45,00 </p>
	  <br>
	  <p class="texto" align="justify">&nbsp; &nbsp; &nbsp; Com isso, podemos perceber que a diferença entre taxa positiva e negativo é, basicamente, que na positiva adicionamos o valor referente aos juros ao capital, e na taxa negativa, tiramos esse valor do capital. </p>
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
   <button type="button" class="btn btn-success" onclick="window.location.href='aula3.php';"><span class="glyphicon glyphicon-arrow-left "></span> Página anterior </button>
   <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo1" >Resolver Questões</button>
   <button type="button" class="btn btn-success" onclick="window.location.href='aula5.php';">Próxima página <span class="glyphicon glyphicon-arrow-right "></span></button>
  </div>
			<div id="demo1" class="collapse">
			<br><br><br>
			<div class="container-fluid text-center">    
			<div class="row content">
				<div class="col-sm-3 sidenav">
				</div>
				
				<div class="col-sm-6 text-left"> 
				<h2 align="center" >&nbsp; Questões: Juros Simples</h2>
				<br><br>
				
				<form action="verifica_aula4.php" method="POST">
				
				<p class="texto"><b>1.</b> Qual o melhor conceito que define o que é juros simples?</p>
			
					<div class="radio">
					<label><input type="radio" name="q1" value="A1"><p class="texto" id="ff">Juros sobre juros.</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q1" value="B1" ><p class="texto" id="ff">Percentual calculado sobre o valor inicial.</p></label>
					</div>
					<div class="radio ">
					<label><input type="radio" name="q1" value="C1" ><p class="texto" id="ff">Juros baixos.</p></label>
					</div>
					<div class="radio ">
					<label><input type="radio" name="q1" value="D1"><p class="texto" id="ff">Percentual recalculado a cada incremento.</p></label>
					</div>
				
				
				<p class="texto"><b>2.</b> Sobre a taxa dos juros simples.</p>
				
					<div class="radio">
					<label><input type="radio" name="q2" value="A2" ><p class="texto" id="ff">A taxa muda mensalmente.</p></label>
					</div> 
					<div class="radio">
					<label><input type="radio" name="q2" value="B2"  ><p class="texto" id="ff">A taxa é fixa.</p></label>
					</div>
					<div class="radio ">
					<label><input type="radio" name="q2" value="C2"  ><p class="texto" id="ff">Não existe taxa.</p></label>
					</div>
					<div class="radio ">
					<label><input type="radio" name="q2" value="D2"  ><p class="texto" id="ff">A taxa é sempre 5%.</p></label>
					</div>
			
				
				<p class="texto"><b>3.</b> Se eu emprestar ao meu amigo R$100,00 uma taxa de juros de 10% ao mês, seguindo a regra do juros simples, qual será o valor que irei receber após 2 meses? </p>
			
					<div class="radio">
					<label><input type="radio" name="q3" value="A3"  ><p class="texto" id="ff">R$ 110,25</p></label>
					</div> 
					<div class="radio">
					<label><input type="radio" name="q3" value="B3" ><p class="texto" id="ff">R$ 110,00</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q3" value="C3" ><p class="texto" id="ff">R$ 120,00</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q3" value="D3" ><p class="texto" id="ff">R$ 121,00</p></label>
					</div>
				
				
				<p class="texto"><b>4.</b> Qual montante teremos em 4 meses se aplicarmos um capital inicial de R$5.000,00 a um juros simples de 5% ao mês?</p>
				
					<div class="radio">
					<label><input type="radio" name="q4" value="A4" ><p class="texto" id="ff">R$ 5.250</p></label>
					</div> 
					<div class="radio">
					<label><input type="radio" name="q4" value="B4" ><p class="texto" id="ff">R$ 5.500</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q4" value="C4" ><p class="texto" id="ff">R$ 5.750</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q4" value="D4"><p class="texto" id="ff"> R$ 6.000</p></label>
					</div>
			
				
				<p class="texto"><b>5.</b> Qual será o montante (valor inicial + juros) produzido por um capital de R$ 20.000,00 empregado à taxa de 0,4% ao mês, no fim de 3 anos, 4 meses e 15 dias?</p>
				
					<div class="radio">
					<label><input type="radio" name="q5" value="A5" ><p class="texto" id="ff">M = R$ 17600</p></label>
					</div> 
					<div class="radio">
					<label><input type="radio" name="q5" value="B5" ><p class="texto" id="ff">M = R$ 23240</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q5" value="C5" ><p class="texto" id="ff">M = R$ 32400</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q5" value="D5" ><p class="texto" id="ff">M = R$ 28800</p></label>
					</div>
				
				<input align="center" type="submit" class="btn btn-danger" value="Enviar">
			    </form>

				<br> <br>
				<p align="center"><img src="img/estrela.png" alt="linha" width="200"></p>
				</div>  
	
				<div class="col-sm-3 sidenav">
				<nav class="col-sm-3">
				</nav>
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