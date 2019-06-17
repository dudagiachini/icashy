<html lang="en">
<head>
  <title> Conceitos Iniciais </title>
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-png"/>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
	
   <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  .affix {
    top: 90px;
    z-index: 9999 !important;
  }
  </style>
</head>

<body>

<header>
  <h1>
    <p> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <a href="perfil.php"><img src="img/icashy_branco.png" alt="iCashy" width="110" height="50"></a></p>
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
  <h1 class="titulo_menor">Entendendo Capital </h1>
  <p align="center"><img src="img/estrela.png" alt="linha" width="200"></p>
  <br>
</div>

 </div>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-3 sidenav">
	<div class="fixado">
      <br>
      <p align="center"><img src="img/gif_nancy.gif" alt="Nancy" height="300"></p>
	  <audio controls>
	  <source src="audios/capital_de_giro_pessoal.mp3" type="audio/mpeg">
	  </audio> 
	  <br>
	  <p class="exemplo" align="center">Ouça o áudio da aula &nbsp; <span class="glyphicon glyphicon-headphones"></span></p>
	</div>
    </div>
    <div class="col-sm-6 text-left"> 
      <h1>&nbsp; Capital de giro</h1>
      <p class="texto" align="justify">&nbsp; &nbsp; &nbsp; Capital é o conjunto de bens de uma pessoa ou empresa, já o capital de giro pessoal é o dinheiro do seus gastos mensais, ou seja, o dinheiro que você usará para pagar suas contas. Um conceito importante ligado à isso é o fluxo de caixa. Fluxo de caixa é a relação entre o dinheiro que entra e o dinheiro que sai. Se a quantia que sai é maior que a que entra, há um desencaixe no fluxo de caixa (e isso é ruim). Então, qual é o ideal?
	  </p>
	  <p class="texto" align="justify">&nbsp; &nbsp; &nbsp; O ideal é ter sempre na sua conta quantia suficiente para pagar as despesas do mês, ou seja, não contar completamente com a entrada da sua renda mensal para isso. Isso serve como uma garantia em caso de imprevistos. Um exemplo de imprevisto é gasto com saúde.
       </p>
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
	    <a href="#" class="texto" data-toggle="popover" title="Capital" data-content="Conjunto de bens de uma pessoa ou empresa">Capital</a><br>
	    <a href="#" class="texto" data-toggle="popover" title="Fluxo de Caixa" data-content="Relação entre o dinheiro que entra e o dinheiro que sai">Fluxo de Caixa</a>
      </div>
    </nav>
  </div>
	</div>
      </div>
    </div>
  </div>
  
  <div class="butao1">
   <button type="button" class="btn btn-success" onclick="window.location.href='aula2.php';">Próxima página <span class="glyphicon glyphicon-arrow-right "></span></button>
  </div>


 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> (Talvez eu use)--> 
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


<br><br><br><br><br><br><br>

 <footer class= "container-fluid text-center">
 <div class="copyright py-4 text-center text-white">
    <div class="container">
      <p>iCashy ®</p>
    </div>
  </div>
</footer>
 
</body>
</html>