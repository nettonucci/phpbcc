<?php
require_once '../conexao.php';
$con = open_conexao();
selectDb();
    //recuperar valor passado por get
$id = trim($_REQUEST['id']);
     //buscar no banco de dados
$rs = mysql_query("SELECT * FROM clientes WHERE id=".$id);
close_conexao($con);

$row = mysql_fetch_array($rs);
$nome = $row['nome'];
$end = $row['endereco'];
$cid = $row['cidade'];
$est = $row['estado'];
$tel = $row['telefone'];
$cpf = $row['cpf'];
$nas = $row['nascimento'];
?>

<html>
<head>
  <meta charset="UTF-8"> 
  <title>Cadastrar Peça</title>
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

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<form class="form-horizontal id=cadUser" name="cadUser" method="post" action="../validar/valRemCli.php">
  <fieldset>

    <legend>Remover Cliente</legend>
    <center>
    <div class="form-group">
      <label for="id">ID:</span>
       <span class="textoNormal"><?php echo $id?></span>
     </label>
     <input type="hidden" name="id"  value="<?php echo $id?>">
   </div>

   <div class="form-group">
    <label for="lblDesc">
     <span class="textoBold">Nome:</span>
     <span class="textoNormal"><?php echo $nome;?></span>
   </label>
 </div>


 <div class="form-group">
  <label for="lblQtd">
   <span class="textoBold">Endereço:</span>
   <span class="textoNormal"><?php echo $end;?></span>
 </label>
</div>  

<div class="form-group">
  <label for="lblVal">
   <span class="textoBold">Cidade:</span>
   <span class="textoNormal"><?php echo $cid;?></span>
 </label>
</div>

<div class="form-group">
  <label for="lblVal">
   <span class="textoBold">Estado:</span>
   <span class="textoNormal"><?php echo $est;?></span>
 </label>
</div>

<div class="form-group">
  <label for="lblVal">
   <span class="textoBold">Telefone:</span>
   <span class="textoNormal"><?php echo $tel;?></span>
 </label>
</div>

<div class="form-group">
  <label for="lblVal">
   <span class="textoBold">CPF:</span>
   <span class="textoNormal"><?php echo $cpf;?></span>
 </label>
</div>

<div class="form-group">
  <label for="lblVal">
   <span class="textoBold">Nascimento:</span>
   <span class="textoNormal"><?php echo $nas;?></span>
 </label>
</div>
</center>
<input id="bt_Rem" type="submit" value="Remover" class="btn btn-success"/>

<button id="bt_voltar" type="button" class="btn btn-danger"
onclick="javascript:location.href='../listar/listCli.php'">Voltar</button>


</fieldset>
</body>    
</html>
