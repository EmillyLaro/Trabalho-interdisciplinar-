<?php
session_start();
?>
<!DOCTYPE html>
<html lang=pt-br>
<head>
	<title>Chatbot C&T</title>	
	<meta charset="utf-8">

	<link href="estilo.css" rel="stylesheet"> 
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head
<body>

	<div class="container-fluid" id="corpo">
		
		<div class="row" >
			<div class="col-12" id="title">
				<h1>Chatbot da C&T - IFMG Sabará </h1>
			</div>
		</div>
		<div class="row" >
			<div class="col-4" id="menu">
				<a href="http://200.131.14.132/saiinfo2018/grupo3/index.html" style="text-decoration: none; color:white;">Página inicial - Converse com o bot!</a>
			</div>
			<div class="col-4" id="menu">
				<a href="http://200.131.14.132/saiinfo2018/grupo3/sobre.html" style="text-decoration: none; color:white;">Sobre o Projeto</a>
			</div>
			<div class="col-4" id="menu">
		  		<a href="http://200.131.14.132/saiinfo2018/grupo3/equipe.html" style="text-decoration: none; color:white;">Equipe</a>
		  	</div>
		</div>	 
	<div class="row" id="chat">
		<div class="col-6">
	<p id="bot"> Olá, eu sou o Chatbot da C&T! Antes de mais nada, não esqueça de fazer o seu login. Dessa maneira eu posso conversar com você de maneira mais personalizada e me lembrar de você quando voltar! Caso não tenha cadastro, é só clicar no botão abaixo.<br><br>
		<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Cadastro</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="analise.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
    	<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
      <label type="email" for="email"><b>Email</b></label>
      <input type="text" placeholder="nome@email.com" name="email" required>

      <label for="nome"><b>Nome</b></label>
      <input type="text" placeholder="José da Silva" name="nome" required>

      <label for="senha"><b>Senha</b></label>
      <input type="password" placeholder="Digite sua senha" name="senha" required>

      <label for="cpf"><b>CPF</b></label>
      <input type="int" placeholder="Digite seu CPF" name="cpf" required><br>
        
      <input type="submit" value="Cadastrar" name="button"> 
    </div>

    <div class="container" align="center">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
     	<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Entrar</button>
    
    </div>
  </form>
</div>
	</p>
	<script>
	var modal = document.getElementById('id01');
	window.onclick = function(event) {
    	if (event.target == modal) {
      	  modal.style.display = "none";
    	}
	}
	</script>
		</div>
		
	</div> </div>


	<footer>
	<div class="row" id="campo">
		<div class="col-12">
	<input type="text" id="resposta" name="resposta" placeholder="Digite sua mensagem">
	<input type="submit" id="botao" name="enviar" value="Enviar">
	</div>
	</div>
	</footer>
	
</body>
	

</html>