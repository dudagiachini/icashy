<html lang="en">
<head>
    
  <title> Conceitos Iniciais  </title>
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-png"/>

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
 
        $pessoa = $_SESSION['login']; 
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
  <h1 class="titulo_menor">Empr&eacute;stimos </h1>
  <p align="center"><img src="img/estrela.png" alt="linha" width="200"> </p>
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
	  <source src="audios/emprestimo.mp3" type="audio/mpeg">
	  </audio>
	  <p class="exemplo" align="center">Ouça o áudio da aula &nbsp; <span class="glyphicon glyphicon-headphones"></span></p>
	</div>   
    </div>
    <div class="col-sm-6 text-left"> 
      <h2>&nbsp; Introdu&ccedil;&atilde;o</h2>
      <p class="texto" align="justify">&nbsp; &nbsp; &nbsp; Às vezes é necessário um dinheirinho extra, seja para investimentos, quitar dívidas, trocar de carro, etc. Uma opção para isso é o empréstimo, que é quando você pega dinheiro do banco e paga de volta futuramente. Alguns dos principais tipos de empréstimo são:</p>
	  
	  <h3>&nbsp;&nbsp;&nbsp;&nbsp;<small><span class="glyphicon glyphicon-usd"></span></small> Empr&eacute;stimo pessoal</h3>
	  <p class="texto" align="justify">&nbsp; &nbsp; &nbsp; Também é chamado de crédito pessoal. Nesse tipo de empréstimo, a pessoa solicitante do empréstimo assina um contrato com o banco. Antes de assinar o contrato, o banco faz uma avaliação de documentos do solicitante. Estar com o nome limpo, endereço e documentos atualizados e com menos de 30% da sua renda comprometida aumentam suas chances de ter o crédito aprovado pelo seu banco. É importante sempre ficar atento ao tipo e taxas de juro.
	  </p>
	  
	  <h3>&nbsp;&nbsp;&nbsp;&nbsp;<small><span class="glyphicon glyphicon-usd"></span></small> Empr&eacute;stimo consignado</h3>
	  <p class="texto" align="justify">&nbsp; &nbsp; &nbsp; É um tipo de empréstimo destinado a aposentados, trabalhadores da iniciativa privada, servidores públicos e pensionistas. A vantagem desse tipo de empréstimo em relação ao pessoal é que o limite máximo para pagamento mensal é de, no máximo, 30% referente ao valor do salário do solicitante. Além disso, as taxas de juros cobradas nessa modalidade são bem inferiores. A principal desvantagem desse tipo de empréstimo é que o pagamento das parcelas é feito pelo desconto em folha de pagamento, que é o nome dado a uma lista da remuneração paga aos trabalhadores de uma instituição. Essa garantia de pagamento é o motivo de o juro ser mais baixo.
	  </p>
	  
	  <h3>&nbsp;&nbsp;&nbsp;&nbsp;<small><span class="glyphicon glyphicon-usd"></span></small> Empr&eacute;stimo rotativo</h3>
	  <p class="texto" align="justify">&nbsp; &nbsp; &nbsp; Esse tipo de empréstimo é relacionado ao cartão de crédito. Quando o consumidor não paga o valor integral da fatura do cartão, o banco empresta o valor restante. 
	  </p>
	  
	  <h3>&nbsp;&nbsp;&nbsp;&nbsp;<small><span class="glyphicon glyphicon-usd"></span></small> Empr&eacute;stimo por cheque especial</h3>
	  <p class="texto" align="justify">&nbsp; &nbsp; &nbsp; Esse é um dos tipos de empréstimos que mais se assemelha ao pessoal em termos de vantagens e desvantagens. Contudo, a principal diferença é que, nesse caso, não é necessário haver a contratação.
         Normalmente, os bancos já o liberam em forma de limite embutido na conta corrente e ele pode ser utilizado a qualquer momento. Porém, deve-se se atentar às cobranças de juros, que também costumam ser bastante abusivas.
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
	    <a class="texto" data-toggle="popover" title="Empr&eacute;stimos" data-content="Dinheiro emprestado de um banco com previsão de devolução">Empr&eacute;stimos</a><br>
    </div>
    </nav>
  </div>
	</div>
      </div>
    </div>
  </div>
  
 <div class="butao">
   <button type="button" class="btn btn-success" onclick="window.location.href='aula1.php';"><span class="glyphicon glyphicon-arrow-left "></span> Página anterior </button>
   <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo1" >Resolver Questões</button>
   <button type="button" class="btn btn-success" onclick="window.location.href='aula3.php';">Próxima página <span class="glyphicon glyphicon-arrow-right "></span></button>
  </div>
			<div id="demo1" class="collapse">
			<br><br><br>
			<div class="container-fluid text-center">    
			<div class="row content">
				<div class="col-sm-3 sidenav">
				</div>
				
				<div class="col-sm-6 text-left"> 
				<h2 align="center" >&nbsp; Questões: Conceitos iniciais</h2>
				<br><br>
				
				<form action="verifica_aula2.php" method="POST">
				    
				<p class="texto"><b>1.</b> O que caracteriza um desencaixe no fluxo de caixa?</p>
				
				    <div class="radio">
				    <label>	<input type="radio" name="q1" value="A1"><p class="texto" id="ff">A quantia de dinheiro que entra é maior do que a quantia de dinheiro que sai.</p>
				    </label>
				    </div>
					<div class="radio">
				    <label><input type="radio" name="q1" value="B1"><p class="texto" id="ff">A quantia de dinheiro que entra é menor que a quantia de dinheiro que sai.</p>
				    </label>
					</div>
					<div class=radio>
					<label><input type="radio" name="q1" value="C1"><p class="texto" id="ff">A quantia de dinheiro entra e não sai.</p>
					</label>
				    </div>
					<div class=radio>
					<label><input type="radio" name="q1" value="D1"><p class="texto" id="ff">A quantia de dinheiro apenas sai.</p></label>
					</div>
				
			
				<p class="texto"><b>2.</b> O que é capital de giro pessoal?</p>
			
					<div class=radio>
					<label><input type="radio" name="q2" value="A2"/><p class="texto" id="ff">Dinheiro para pagar contas mensais e diárias.</p> </label>
				    </div>
					
					<div class=radio>
					<label><input type="radio" name="q2" value="B2"/><p class="texto" id="ff">Soma dos bens.</p> </label>
				    </div>
					
					<div class=radio>
					<label><input type="radio" name="q2" value="C2"/><p class="texto" id="ff">Dinheiro para gastar a vontade.</p> </label>
				    </div>
					<div class=radio>
					<label><input type="radio" name="q2" value="D2"/><p class="texto" id="ff">Salário líquido.  </p> </label>
				    </div>
					
					
				<p class="texto"><b>3.</b> Sobre crédito pessoal, qual a alternativa correta? </p>
				
					<div class=radio>
					<label><input type="radio" name="q3" value="A3"/><p class="texto" id="ff">É o capital de giro que você possui em conta.</p> </label>
				    </div>
					
					<div class=radio>
					<label><input type="radio" name="q3" value="B3"/><p class="texto" id="ff">É o salário que você recebe mensalmente.</p> </label>
				    </div>
					    
					<div class=radio>
					<label><input type="radio" name="q3" value="C3"/><p class="texto" id="ff">É o salário que você recebe anualmente.</p> </label>
				    </div>
					
					<div class=radio>
					<label><input type="radio" name="q3" value="D3"/><p class="texto" id="ff">É um empréstimo feito no banco através de um contrato.</p> </label>
				    </div>
				
				<p class="texto"><b>4.</b> Qual a desvantagem de fazer um empréstimo consignado? </p>
				
					<div class=radio>
					<label><input type="radio" name="q4" value="A4"/><p class="texto" id="ff">Juros altos.</p> </label>
				    </div>
					    
					<div class=radio>
					<label><input type="radio" name="q4" value="B4"/><p class="texto" id="ff">Compromete muito a renda.</p> </label>
				    </div>
					 
					<div class=radio>
					<label><input type="radio" name="q4" value="C4"/><p class="texto" id="ff">É descontado em folha de pagamento. </p> </label>
				    </div>
					<div class=radio>
					<label><input type="radio" name="q4" value="D4"/><p class="texto" id="ff">Receber o dinheiro após 1 mês.</p> </label>
				    </div>
				
				<p class="texto"><b>5.</b> Qual tipo de empréstimo é a melhor opção para alguém que não conseguiu quitar a fatura do cartão de crédito?</p>
				
					<div class=radio>
					<label><input type="radio" name="q5" value="A5"/><p class="texto" id="ff">Empréstimo pessoal.</p> </label>
				    </div>
					
					<div class=radio>
					<label><input type="radio" name="q5" value="B5"/><p class="texto" id="ff">Empréstimo consignado.</p> </label>
				    </div>
					    
					<div class=radio>
					<label><input type="radio" name="q5" value="C5"/><p class="texto" id="ff">Empréstimo rotativo.</p> </label>
				    </div>
					 
					<div class=radio>
					<label><input type="radio" name="q5" value="D5"/><p class="texto" id="ff">Empréstimo por cheque especial.</p> </label>
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