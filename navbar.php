<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Navbar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">

.navbar{
	background-color: yellow;
	background: linear-gradient(to right top, #0fbcf9, #4bcffa);
	background-repeat: repeat;
	width: 100%;
}

.ulul{
	display: flex;
	height: 4em;
}

.navbar-brand{
	margin-left: -0.5em;
}

.livro{
	padding-top: 1.6em;
	list-style-type: none;
	margin: 0 15.5vh;
}


#menu{
	text-decoration: none;
	color: white;
	font-family: 'Poppins', sans-serif;
	display: inline-block;
	color: #fff;
	position: relative;
}

#menu:after{
 	content: "";
	position: absolute;
	height: 2px;
	background-color: white;
	width: 0;
	bottom: 0;
	left: 50%;
  	-webkit-transform: translateX(-50%);
  	-ms-transform: translateX(-50%);
	transform: translateX(-50%);
	-webkit-transition: 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55) all;
  	transition: 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55) all;
}

#menu:hover{
	color: white;
}

/*.equipe{
	font-size: 60px;
	text-align: center;
	padding-bottom: 10%;
	color: white; 
}*/

#menu:hover:after {
	width: 100%;
}



	</style>
</head>
<body>

	<nav class="navbar">
		
		<ul class="ulul">
			
			<a class="navbar-brand" href="#">
    			<img src="images/logo.png" width="75" height="30" alt="">
			</a>

			<li class="livro"><a class="a_nav" href="Pagina_inicial.php" id="menu">Home</a></li>
			<li class="livro"><a class="a_nav" href="quem_somos.php" id="menu">Quem Somos</a></li>
			<li class="livro"><a class="a_nav" href="EntrarPlano.php" id="menu">Marcar Consulta</a></li>
			<!-- <li class="livro"><a class="a_nav" href="#" id="menu">Serviços</a></li> -->
			
		
		</ul>
	
	</nav>

</body>
</html>