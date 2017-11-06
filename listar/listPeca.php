<?php
  //verifica sessão, se está logado 
session_start();
if (!isset($_SESSION['user'])) //AND (!isset($_SESSION[nome])) ) 
Header("Location: index.html");

require_once '../conexao.php';
$con = open_conexao();
selectDb();
$rs = mysql_query("select * from pecas;"); //rs=record set (conjunto de registros)
close_conexao($con);
?>

<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Pesquisar Peças</title>
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
              <li><a href="listCli.php">Clientes</a></li>
              <li><a href="../listar/listOs.php">O.S</a></li>
              <li><a href="listPeca.php">Peças</a></li>
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <body class="container"> 
    <form class="form-horizontal id=cadCli" name="cadCli" method="post">
      <fieldset>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <h1>Lista de Peças</h1>

        <div class="row col-md-7">
          <table  class="table table-striped">
            <tr>
             <th widht="300" align="right">Descriçao</th>
             <th widht="80" align="right">Quantidade</th>
             <th widht="80" align="right">valor</th>


             <th></th>
             <th></th>
           </tr>
           <?php while ($row = mysql_fetch_array($rs)) { ?> 
           <tr>


            <td><?php echo $row['descricao'] ?></td>
            <td><?php echo $row['qtd'] ?></td>
            <td><?php echo $row['valor'] ?></td>


            <td>
              <button type="button" class="btn btn-warning"
              onclick="javascript:location.href='altPec.php?id=' 
              + <?php echo $row['id'] ?> ">
              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </button>                 
          </td>  
          <td>
            <button type="button" class="btn btn-danger"
            onclick="javascript:location.href='../remover/remPec.php?id=' 
            + <?php echo $row['id'] ?> ">
            <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
          </button>                 
        </td>                    
      </tr>
      <?php 
    } ?>

  </table>
</div>
</fieldset>
</form>
</body>
</html>