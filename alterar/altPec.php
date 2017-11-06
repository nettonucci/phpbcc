<?php
require_once '../conexao.php'; 

$con = open_conexao(); 
selectDb(); 
   //recuperar valor passado por get
$id = trim($_REQUEST['id']);
    //buscar no banco de dados
$rs = mysql_query("SELECT * FROM pecas WHERE id=".$id);
close_conexao($con); 

$row = mysql_fetch_array($rs); 
$qtde = $row['qtd']; 
$val = $row['valor'];

?>

<html>
<head>
 <meta charset="UTF-8"> 
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
             <li><a href="../cadastro/cadCli.php">Clientes</a></li>
              <li><a href="../cadastro/cadOS.php">O.S</a></li>
              <li><a href="../cadastro/cadPec.php">Peças</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../cadastro/cadUser.php">Usuarios</a></li>
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
<title>Alteração de Peças</title>
</head>
<body class="container">   
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  
  
  <form class="form-horizontal id=cadCli" name="cadCli" method="post" action="valAlterPec.php">
    <fieldset>

      <legend>Alterar informações de peça</legend>

      <div class="form-group">
        <label class="col-md-4 control-label" for="id">ID: <?php echo $id?> </label>
        <input type="hidden" name="id"  value="<?php echo $id?>">
      </div>


      <div class="form-group">
        <label class="col-md-4 control-label" for="idNome">Quantidade </label>
        <div class="col-md-5">
          <input type="text" class="form-control input-md" id="idQtd" name="idQtd" value="<?php echo $qtde?>">
      </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="idNome">Valor </label>
        <div class="col-md-5">
          <input type="text" class="form-control input-md" id="idVal" name="idVal" value="<?php echo $val?>">
      </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="idConfirmar"></label>
        <div class="col-md-8">
          <input id="bt_Atl" type="submit" value="Atualizar" class="btn btn-success"/>
          <button id="bt_voltar" type="button" class="btn btn-danger"
          onclick="javascript:location.href='listPeca.php'">Voltar</button>
          </div>
          </div>

        </fieldset>
      </form>
    </body>
    </html>