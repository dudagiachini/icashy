<head>
  <title> Investimentos </title>
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
  <h1 class="titulo_menor">Investimentos</h1>
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
	  <source src="audios/investimentos.mp3" type="audio/mpeg">
	  </audio>
	  <p class="exemplo" align="center">Ouça o áudio da aula &nbsp; <span class="glyphicon glyphicon-headphones"></span></p>
	</div>   
    </div>
	
	
    <div class="col-sm-6 text-left"> 
      <h2>&nbsp; Economia financeira</h2>
      <p class="texto" align="justify">&nbsp; &nbsp; &nbsp; Economia financeira é quando guardamos nosso dinheiro pensando em investimentos futuros. Um exemplo disso é a conta poupança. É muito comum, por exemplo, que os pais façam uma conta poupança para os filhos quando eles nascem e vão guardando dinheiro nela até o filho chegar à faculdade, quando eles repassam esse dinheiro para ele. 
	  </p> <br>
	  
	  <h2>&nbsp; Por que economizar?</h2>
      <p class="texto" align="justify">&nbsp; &nbsp; &nbsp; Economizar é muito importante para planejamento de vida. É a base para investimentos futuros, como por exemplo ir para a faculdade, comprar um carro ou comprar uma casa. Entretanto, não é só para isso que é importante economizar. Em casos de emergências, de saúde por exemplo, é necessário ter dinheiro guardado para arcar com dívidas inesperadas.
		</p> <br>
	  <p class="texto" align="justify">&nbsp; &nbsp; &nbsp; Também, é importante economizar para evitar que seu nome fique na lista de endividados (o famoso “nome sujo”), pois, uma vez lá, torna-se muito difícil para você organizar suas finanças e até mesmo conseguir créditos, como empréstimos.
		</p> <br>
		
	  <h2>&nbsp; Conta poupança</h2>
      <p class="texto" align="justify">&nbsp; &nbsp; &nbsp; A conta poupança, conhecida como uma forma de guardar dinheiro, é na verdade um tipo de investimento. Ela funciona da seguinte forma: você coloca certa quantia na sua conta poupança e, então, receberá uma remuneração de 0,5% ao mês mais a variação do TR. TR é um índice criado pelo governo para complementação do rendimento das poupanças. Ele é calculado a partir da taxa SELIC (que indica a taxa de juros no Brasil). Uma das vantagens da conta poupança é que ela oferece risco muito baixo, porém, em razão disso, ela rende muito pouco.  </p> <br>

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
	    <a href="#" class="texto" data-toggle="popover" title="Planejamento" data-content="Plano que visa guardar parte da sua renda para objetivos futuros. Exemplo: comprar uma casa ou carro">Planejamento</a><br>
		<a href="#" class="texto" data-toggle="popover" title="Inadimplência" data-content="Falta de cumprimento de uma obrigação, neste caso, pagamento de dívida.">Inadimplência</a><br>
		<a href="#" class="texto" data-toggle="popover" title="Nome Sujo" data-content="Quando seu nome se encontraem uma lista de não-pagadores, logo, não confiável à crédito">"Nome sujo"</a><br>
	</div>
    </nav>
  </div>
	</div>
      </div>
    </div>
  </div>
  
	<div class="butao">
   <button type="button" class="btn btn-success" onclick="window.location.href='aula5.php';"><span class="glyphicon glyphicon-arrow-left "></span> Página anterior </button>
   <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo1" >Resolver Questões</button>
   <button type="button" class="btn btn-success" onclick="window.location.href='aula7.php';">Próxima página <span class="glyphicon glyphicon-arrow-right "></span></button>
    </div>
			<div id="demo1" class="collapse">
			<br><br><br>
			<div class="container-fluid text-center">    
			<div class="row content">
				<div class="col-sm-3 sidenav">
				</div>
				
				<div class="col-sm-6 text-left"> 
				<h2 align="center" >&nbsp; Questões: Investimentos</h2>
				<br><br>
				
				<form action="verifica_aula6.php" method="POST">
				
				<p class="texto"><b>1.</b> Sobre economia financeira, qual a alternativa incorreta?</p>
				
					<div class="radio">
					<label><input type="radio" name="q1" value="A1" ><p class="texto" id="ff">É guardar dinheiro pensando em investimentos futuros. </p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q1" value="B1"  ><p class="texto" id="ff">Conta poupança é uma ótima opção nesse caso.</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q1" value="C1"  ><p class="texto" id="ff">Aproveitar e gastar seu dinheiro enquanto ainda o possui.</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q1" value="D1" ><p class="texto" id="ff"> Se trata do controle financeiro.</p></label>
					</div>
				
				<p class="texto"><b>2.</b> A conta poupança é um investimento...</p>
				
					<div class="radio">
					<label><input type="radio" name="q2" value="A2" ><p class="texto" id="ff">Ótimo para quem possui muito dinheiro e quer alta rentabilidade.</p></label>
					</div> 
					<div class="radio">
					<label><input type="radio" name="q2" value="B2" ><p class="texto" id="ff">De baixo risco e baixa rentabilidade, porém ótimo para quem está começando.</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q2" value="C2" ><p class="texto" id="ff">De alta rentabilidade calculado através da taxa SELIC.</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q2" value="D2" ><p class="texto" id="ff">De alto risco, ótimo para quem possui pouco dinheiro.</p></label>
					</div>
				
				<p class="texto"><b>3.</b> Qual a importância de economizar? </p>
				
					<div class="radio">
					<label><input type="radio" name="q3" value="A3" ><p class="texto" id="ff">Para guardar muito dinheiro e gastar tudo de uma só vez.</p></label>
					</div> 
					<div class="radio">
					<label><input type="radio" name="q3" value="B3" ><p class="texto" id="ff">Para garantir uma consciência sobre finanças e um bom planejamento de vida.</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q3" value="C3" ><p class="texto" id="ff">Para poder comprar várias coisas inúteis.</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q3" value="D3" ><p class="texto" id="ff">Para garantir uma consciência sobre finanças e lucrar fazendo empréstimo aos amigos.</p></label>
					</div>
				
				<p class="texto"><b>4.</b> Imagine que você possui uma quantia em dinheiro e quer um investimento de alta rentabilidade. Qual a pior opção?</p>
				
					<div class="radio">
					<label><input type="radio" name="q4" value="A4" ><p class="texto" id="ff">Tesouro direto</p></label>
					</div> 
					<div class="radio">
					<label><input type="radio" name="q4" value="B4" ><p class="texto" id="ff">Ações</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q4" value="C4" ><p class="texto" id="ff">Conta poupança</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q4" value="D4" ><p class="texto" id="ff">CDB e LCI</p></label>
					</div>
				
				<p class="texto"><b>5.</b> Se você possui dinheiro guardado, o que é mais apropriado para que seu dinheiro renda?</p>
				
					<div class="radio">
					<label><input type="radio" name="q5" value="A5" ><p class="texto" id="ff">Gastar em coisas inúteis</p></label>
					</div> 
					<div class="radio">
					<label><input type="radio" name="q5" value="B5" ><p class="texto" id="ff">Comprar carro</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q5" value="C5" ><p class="texto" id="ff">Colocar no CDB ou LCI</p></label>
					</div>
					<div class="radio">
					<label><input type="radio" name="q5" value="D5" ><p class="texto" id="ff">Construir uma piscina </p></label>
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