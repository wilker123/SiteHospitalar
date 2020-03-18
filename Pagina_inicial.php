<?php
		
		include_once("conexao.php");

		session_start();

		if (!isset($_SESSION['logado']) == true) {
			unset($_SESSION['logado']);
			header("Location: login.php");
		}
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Pagina Inicial</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="home2.css">
	   

</head>
<body>

	<div>
		<nav class="navbar navbar-expand-lg navbar-dark " style="padding: 10px;background: linear-gradient(to right top, #0fbcf9, #4bcffa);">
  <a class="navbar-brand" href="#" style="font-size: 40px;position: relative;top: -10px;font-family: merlim;margin-left: 20px">Vitae</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav" style="margin-left: 50px;font-size: 20px">
      <a class="nav-item nav-link active" href="#" style="position: relative;top: -10px;">Página Inicial <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="quem_somos.php"style="position: relative;top: -10px;">Quem Somos</a>
      <a class="nav-item nav-link active" href="MarcarConsulta.php" style="position: relative;top: -10px;">Marcar Consulta</a>
      <a class="nav-item nav-link active" href="CadastrarPlano.php"style="position: relative;top: -10px;">Fazer Plano</a>
      <a class="nav-item nav-link active" href="Logout.php" style="position: relative;top: -10px;">Logout</a>
    </div><br><br><br>
  </div>
</nav>
		<section class="header-site" style="position: relative; top: -20px">


			<h1 style="position: relative;top: -220px;margin-left: 50px;color: #0080FF">Contemple os nossos<br>planos para a melhoria de sua saúde</h1><br>
			<h3 style="position: relative;top: -230px;margin-left: 50px">O plano de saúde Vitae tem vantagens e serviços que fazem<br>
				toda a diferença em sua vida</h3>
			<a href="CadastrarPlano.php"><input id="adiq" type="submit" name="adiquirir" value="Adquira já seu plano"></a>
		</section>
<br><br>
		<h1 style="text-align: center;color: #0080FF">Serviços</h1>
		
		<div id="div2">
			<br>

			<div class="card-deck" style="width: 900px;margin: auto;">
  <div class="card">
    <img src="images/img1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <center><a href="EntrarPla		no.php"><h5 class="card-title" style="color: #0080FF;text-align: center;display: inline;"> Marcar consulta</h5></a></center>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

  <div class="card">
    <img src="images/images.jpg" style="height: 172px" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="color: #0080FF;text-align: center;">Gerar exame</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

  <div class="card">
    <img src="images/img2.png" style="height: 172px;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="color: #0080FF;text-align: center;">Informações do plano</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<br>
		</div>
<br><br><br>
		<div id="div2"><br>
			<div class="media" >
  				<img src="images/img3.png" style="margin-left: 50px;height: 250px" class="mr-5" alt="...">
  					<div class="media-body"><br>
    					<h5 class="mt-0" style="color: #0080FF">Priorize o seu bem estar</h5><br>
    					<div style="width: 600px">
    					<h6 style="text-align: justify;">Vitae ­atende a diversas especialidades médicas. Desde consultas
						até cirurgias,os beneficiários têm acesso a planos de saúde com
						um atendimento diferenciado por sua agilidade e qualidade.</h6>
						</div>
<br>
		<input id="saiba" type="buttom" name="saiba" value="Saiba mais" style="text-align: center;">
		<br>
  					</div>
			</div><br>
		</div>
<br><br><br>
		<div id="div2">
<br>

			<div class="media">
  				<div class="media-body"><br>
    				<h5 class="mt-0 mb-1" style="margin-left: 70px;color: #0080FF">Conte com o acesso a saúde e tecnologia</h5><br>
    				<h6 style="margin-left: 70px;text-align: justify;">A tecnologia segue avançado na área da saúde e a Vitae faz o possível para se manter conectada a este avanço. Sua rede própria se destaca pela infraestrutura
					e equipamentos modernos que possibilitam prestar o melhor serviço de seus 
					planos de saúde.</h6>

  				<input id="saiba" type="buttom" name="saiba" value="Saiba mais" style="text-align: center; margin-left: 70px;position: relative;top: 20px">
  				</div>

  					<img src="images/ic1.png" style="height: 240px;margin-right: 50px" class="ml-3" alt="...">

			</div><br>

		</div>
<br><br>
			
			<div>
				<a href="CadastrarPlano.php"><section class="img"></section></a>
			</div>
		<!--Div onde está o segundo paralax-->

			<div id="fundo">
				<br><br>

				<!--Div onde está as divs de blocos de informações-->
				
				<!--Bloco 1-->

				<div id="bloco">
					<br>

					<img src="images/med1.jpg" width="70%" style="margin-left: 40px;">
					<hr style="width: 80%;border: 2px solid #BDBDBD">
					<h6 style="color: white;text-align: center;position: relative;top: -15px">Atendimento de alta<p> qualidade</p></h6>

				</div><br>

				<!--Bloco 2-->

				<div id="bloco" style="margin-top: -254px;margin-left: 550px">
					<br>

					<img src="images/med2.jpg" width="70%" style="margin-left: 40px;">
					<hr style="width: 80%;border: 2px solid #BDBDBD">
					<h6 style="color: white;text-align: center;position: relative;top: -15px">Profissionais altamente<p>qualificados</p></h6>

				</div>

				<!--Bloco 3-->

				<div id="bloco" style="margin-top: -230px;margin-left: 890px;">
					<br>>

					<img src="images/bloc3.jpg" width="70%" height="55%" style="margin-left: 40px;">
					<hr style="width: 80%;border: 2px solid #BDBDBD">
					<h6 style="color: white;text-align: center;position: relative;top: -15px">Campanha a favor do<p>novembro azul</p></h6>

				</div><br>


			</div>
			<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <img src="images/logo.png" width="40%" id="vitaeimg">
        <p style="margin-left: 120px;position: relative;top: 35px;font-family: arial;color: white">"Sua saúde é nossa prioridade"<br>Pacatuba.Jereissati - Av.xxv.450.<br>Frente ao Mercadinho Martins</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->

        <h5 class="text-uppercase" style="position: relative;top: 70px;font-size: 30px;margin-left: -200px;color: white">Funcionalidades</h5>

      <p style="position: relative;top: 90px;color: white;margin-left: -200px;font-family: arial">+ Criação de Planos de Saúde</p>

        <p style="position: relative;top: 70px;margin-left: -200px;color: white;font-family: arial">+ Serviços hospitalares</p>

       <p style="position: relative;top: 50px;margin-left: -200px;color: white;font-family: arial">+ Marque suas consultas</p>

       <p style="position: relative;top: 29px;margin-left: -200px;font-family: arial;color: white">+ Visualização da nossa equipe</p>

      </div>
   
      <div class="col-md-3 mb-md-0 mb-3">
      	<!--form comentario-->
   	
      	<textarea class="form-control" aria-label="With textarea" style="margin-top: 30px;margin-left: -150px;width: 400px" placeholder="Escreva seu comentário"></textarea>

      	<input style="position: relative;left: 190px;top: 10px" type="submit" name="comentário" value="Enviar">

      	<h6 style="color: white;position: relative;top: 10px;right: 150px;font-family: arial;font-size: 20px;">Comentários</h6>

      	<textarea class="form-control" aria-label="With textarea" style="margin-top: 20px;margin-left: -150px;height: 150px;width: 400px"></textarea>

      </div>
     

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright --><br><br>
  <hr style="background-color: #BDBDBD;position: relative;top: 20px;width: 95%">
  <div class="footer-copyright text-center py-3" style="color: white">© 2019 Grupo Vitae:
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

	</div>

	
</body>
</html>	
