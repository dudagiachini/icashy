<head>
  <title> Juros Simples  </title>
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-png"/>
 
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
  <h1 class="titulo_menor">Juros Simples</h1>
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
	  <source src="audios/juros_simples.mp3" type="audio/mpeg">
	  </audio>
	  <p class="exemplo" align="center">Ouça o áudio da aula &nbsp; <span class="glyphicon glyphicon-headphones"></span></p>
	</div>   
    </div>
    <div class="col-sm-6 text-left"> 
      <h2>&nbsp; Conceituação</h2>
      <p class="texto" align="justify">&nbsp; &nbsp; &nbsp; Podemos definir juros como o rendimento de uma aplicação financeira, valor referente ao atraso no pagamento de uma prestação ou a quantia paga pelo empréstimo de um capital. Nos juros simples, a taxa é fixa, ou seja, a cada mês você vai pagar a mesma quantia de juros. Para calcular esses juros, existem duas fórmulas:
	  </p> <br>
	  <p id="quadrado" align="center"> J = C * i * t </p>
	  <br>
	  <p class="ss"> J = juros </p>
	  <p class="ss"> C = capital </p>
	  <p class="ss"> i = taxa de juros </p>
	  <p class="ss"> t = tempo de aplicação (mês, bimestre, trimestre, semestre, ano...) </p>
	  <br>
	  <p class="texto"> Essa fórmula é usada para calcular a quantia de juros que serão pagos.</p>
	  <br>
	  <p id="quadrado"  align="center"> M = C + J </p>
	  <br>
	  <p class="ss"> M = montante final </p>
	  <p class="ss"> C = capital </p>
	  <p class="ss"> J = juros </p>
	  <br>
	  <p class="texto"> Essa fórmula é usada para calcular o valor final que você pagará, ou seja, a quantia a ser paga + os juros pagos. </p>
	  
	 
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
  
  <div class="butao2">
   <button type="button" class="btn btn-success" onclick="window.location.href='aula2.php';"><span class="glyphicon glyphicon-arrow-left "></span> Página anterior </button>
   <button type="button" class="btn btn-success" onclick="window.location.href='aula4.php';">Próxima página <span class="glyphicon glyphicon-arrow-right "></span></button>
  </div>
  

<script type="text/javascript">
jQuery(window).scroll(function () {
 if (jQuery(this).scrollTop() > 180) {
     jQuery(".fixado").addClass("fixo");
 } else {
     jQuery(".fixado").removeClass("fixo");
 }
});
</script>

<script>

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