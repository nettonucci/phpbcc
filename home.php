<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>Bem Vindo</title>
	<style rel="stylesheet" type="text/css">


	</style>
</head>
<body class="container"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<nav class="navbar navbar-default">

		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">OSBCC</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="cadastro/cadCli.php">Clientes</a></li>
							<li><a href="cadastro/cadOS.php">O.S</a></li>
							<li><a href="cadastro/cadPec.php">Peças</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="cadastro/cadUser.php">Usuarios</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pesquisar <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="listar/listCli.php">Clientes</a></li>
							<li><a href="listar/listOs.php">O.S</a></li>
							<li><a href="listar/listPeca.php">Peças</a></li>
						</ul>
					</li>
					

					<li class="active"><a href="logout.php">Logout <span class="sr-only">(current)</span></a></li>
				</ul>
			</div>
		</div>
	</nav>

	<link href="/bootstrap/css/banner.css" rel="stylesheet" type="text/css" />

	<script type="text/jscript" src="bootstrap/js/banner.js"></script>

	<div id="banner" class="banner">

		<div id="banner_img">

			<img src="banner_img/1.jpg" width="100%" >

		</div>

		<div id="botoes">

			<a href="javascript:void(0);" id="banner_img_1" class="hover" onclick="mudaImg('0');"></a>
			<a href="javascript:void(0);" id="banner_img_2" onclick="mudaImg('1');"></a>
			<a href="javascript:void(0);" id="banner_img_3" onclick="mudaImg('2');"></a>
			<a href="javascript:void(0);" id="banner_img_4" onclick="mudaImg('3');"></a>

		</div>

	</div>


	

	<hr>
	<center>Copyright © 2017 Studio BlueMind - Todos os direitos reservados</center>
	
	
</body>
</html>