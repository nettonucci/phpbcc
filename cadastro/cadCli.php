<html>
<head>
	<meta charset="UTF-8"> 
	<title>Cadastrar Cliente</title>
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
					<li class="active"><a href="../home.php">Inicio <span class="sr-only">(current)</span></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="cadCli.php">Clientes</a></li>
							<li><a href="cadOS.php">O.S</a></li>
							<li><a href="cadPec.php">Peças</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="cadUser.php">Usuarios</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pesquisar <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="../listar/listCli.php">Clientes</a></li>
							<li><a href="../listar/listOs.php">O.S</a></li>
							<li><a href="../listar/listPeca.php">Peças</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	

	<form class="form-horizontal id=cadCli" name="cadCli" method="post" action="../validar/valCadCli.php">
<fieldset>

<!-- Form Name -->
<legend>Cadastro do Cliente</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idNome">Nome</label>  
  <div class="col-md-5">
  <input id="idNome" name="idNome" type="text" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idEnd">Endereço</label>  
  <div class="col-md-5">
  <input id="idEnd" name="idEnd" type="text"  class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idCid">Cidade</label>  
  <div class="col-md-5">
  <input id="idCid" name="idCid" type="text"  class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idEst">Estado</label>  
  <div class="col-md-5">
  <input id="idEst" name="idEst" type="text"  class="form-control input-md" required="">

  </div>
</div>


  <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idTel">Telefone</label>  
  <div class="col-md-5">
  <input id="idTel" name="idTel" type="text"  class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idCpf">CPF</label>  
  <div class="col-md-5">
  <input id="idCpf" name="idCpf" type="text"  class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="idNas">Nascimento</label>  
  <div class="col-md-5">
  <input id="idNas" name="idNas" type="text"  class="form-control input-md" required="">
    
  </div>
</div>
    
  </div>
</div>



<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="idConfirmar"></label>
  <div class="col-md-8">
    <button id="idConfirmar" name="idConfirmar" class="btn btn-primary">confirmar</button>
    <input  id="bt_limpar" type="reset" value="Limpar" class="btn btn-warning"/>

  </div>
</div>

</fieldset>
</form>
</body>
</html>