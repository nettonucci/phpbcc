<?php
require_once '../conexao.php'; 

$con = open_conexao(); 
selectDb(); 
   //recuperar valor passado por get
$id = trim($_REQUEST['id']);
    //buscar no banco de dados
$rs = mysql_query("SELECT * FROM os WHERE id=".$id);
close_conexao($con); 

$row = mysql_fetch_array($rs); 
$cli = $row['cliente']; 
$apa = $row['aparelho'];
$mar = $row['marca']; 
$mod = $row['modelo'];
$ser = $row['seriall'];
$ace = $row['acessorio'];
$def = $row['defeito']; 
$lau = $row['laudo'];
$pec = $row['peca'];
$val = $row['valor'];
$sta = $row['status']; 
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
<title>Alteração de O.S</title>
</head>
<body class="container">   
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <form class="form-horizontal id=cadCli" name="cadCli" method="post" action="../validar/valAlterCli.php">
    <fieldset>

      <legend>Alterar Dados da O.S</legend>

      <div class="form-group">
        <label class="col-md-4 control-label" for="id">ID: <?php echo $id?> </label>
        <input type="hidden" name="id"  value="<?php echo $id?>">
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="idNome">Cliente </label>
        <div class="col-md-5">
          <input type="text" class="form-control input-md" id="txtNome" name="txtNome" value="<?php echo $cli?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="idNome">Aparelho </label>
        <div class="col-md-5">
          <input type="text" class="form-control input-md" id="txtEnd" name="txtEnd" value="<?php echo $apa?>" >
        </div>
      </div>


      <div class="form-group">
        <label class="col-md-4 control-label" for="idNome">Marca </label>
        <div class="col-md-5">
          <input type="text" class="form-control input-md" id="txtCid" name="txtCid" value="<?php echo $mar?>">
        </div>
      </div>


      <div class="form-group">
        <label class="col-md-4 control-label" for="idNome">Modelo </label>
        <div class="col-md-5">
          <input type="text" class="form-control input-md" id="txtEst" name="txtEst" value="<?php echo $mod?>">
        </div>
      </div>


      <div class="form-group">
        <label class="col-md-4 control-label" for="idNome">Serial </label>
        <div class="col-md-5">
          <input type="text" class="form-control input-md" id="txtTel" name="txtTel" value="<?php echo $ser?>">
        </div> 
      </div>


      <div class="form-group">
        <label class="col-md-4 control-label" for="idNome">Acessorio </label>
        <div class="col-md-5">
          <input type="text" class="form-control input-md" id="txtCpf" name="txtCpf" value="<?php echo $ace?>">
        </div>  
      </div>


      <div class="form-group">
        <label class="col-md-4 control-label" for="idNome">Defeito </label>
        <div class="col-md-5">
          <input type="text" class="form-control input-md" id="txtNas" name="txtNas" value="<?php echo $def?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="idNome">Laudo </label>
        <div class="col-md-5">
          <input type="text" class="form-control input-md" id="txtNas" name="txtNas"  value="<?php echo $lau?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="idNome">Peça </label>
        <div class="col-md-5">
          <input type="text" class="form-control input-md" id="txtNas" name="txtNas" value="<?php echo $pec?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="idNome">Valor </label>
        <div class="col-md-5">
          <input type="text" class="form-control input-md" id="txtNas" name="txtNas" value="<?php echo $val?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="idNome">Status </label>
        <div class="col-md-5">
          <input type="text" class="form-control input-md" id="txtNas" name="txtNas" value="<?php echo $sta?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="idConfirmar"></label>
        <div class="col-md-8">
          <input id="bt_Atl" type="submit" value="Atualizar" class="btn btn-success"/>
          <button id="bt_voltar" type="button" class="btn btn-danger"
          onclick="javascript:location.href='../listar/listOs.php'">Voltar</button>

        </div>
      </div>


    </fieldset>
  </form>
</body>
</html>