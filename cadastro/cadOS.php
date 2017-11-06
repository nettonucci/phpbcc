<html>
<head>
  <meta charset="UTF-8"> 
  <title>Cadastrar O.S</title>
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

  

  <form class="form-horizontal id=cadCli" name="cadCli" method="post" action="../validar/valCadOs.php">
    <fieldset>


<meta charset="UTF-8"> 
      <!-- Form Name -->
      <legend>Cadastro de O.S</legend>

      <?php
      require_once '../conexao.php'; 
      $con = open_conexao(); 
      selectDb();   
      $rsCli = mysql_query("select * from clientes;"); //rs=record set (conjunto de registros)
      close_conexao($con); 
      ?>
      <div class="form-group">
        <label class="col-md-4 control-label" for="Cliente">Cliente </label>
        <select id="idCli" name="idCli" class="col-md-4 control-label">
          <option value="volvo">Escolha</option>
          <?php
          while($linha = mysql_fetch_array($rsCli)){
            ?>
            <option value="<?php echo $linha['id'];?>">
              <?php echo $linha['nome'];?>
            </option>

            <?php

          }
          ?>
        </select>

      </select>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="idApa">Aparelho</label>  
      <div class="col-md-5">
        <input id="idApa" name="idApa" type="text"  class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="idMar">Marca</label>  
      <div class="col-md-5">
        <input id="idMar" name="idMar" type="text"  class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="idMod">Modelo</label>  
      <div class="col-md-5">
        <input id="idMod" name="idMod" type="text"  class="form-control input-md" required="">

      </div>
    </div>


    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="idSer">Serial</label>  
      <div class="col-md-5">
        <input id="idSer" name="idSer" type="text"  class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="idAcs">Acessorio</label>  
      <div class="col-md-5">
        <input id="idAcs" name="idAcs" type="text"  class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="idDef">Defeito</label>  
      <div class="col-md-5">
        <input id="idDef" name="idDef" type="text"  class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="idLau">Laudo</label>  
      <div class="col-md-5">
        <textarea class="form-control" name="idLau" id="idLau" rows="3"></textarea>

      </div>
    </div>

    <?php
    require_once '../conexao.php'; 
    $con = open_conexao(); 
    selectDb();   
      $rsPec = mysql_query("select * from pecas"); //rs=record set (conjunto de registros)
      close_conexao($con); 
      ?>
      <div class="form-group">
        <label class="col-md-4 control-label" for="pecas">Peça   </label>
        <select id="idPec" name="idPec" class="col-md-4 control-label">
         <option value="#">Escolha</option>
            </option>
            
          
            <?php
            while($linha = mysql_fetch_array($rsPec)){
              ?>
              <option value="<?php echo $linha['id'];?>">
                <?php echo $linha['descricao'];?>
              </option>

              <?php

            }
            ?>
          </select>

        </select>
      </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="idVal">Valor</label>  
      <div class="col-md-5">
        <input id="idVal" name="idVal" type="text"  class="form-control input-md">

      </div>
    </div>

      
      <div class="form-group">
        <label class="col-md-4 control-label" for="idSta">Status</label> 
        <div class="col-md-5">
          <select id="idSta" name="idSta">
            <option value="Aguardando avaliaçao">Aguardando avaliaçao</option>
            <option value="Aguardando Aprovaçao">Aguardando Aprovaçao</option>
            <option value="Reparo em andamento">Reparo em andamento</option>
            <option value="Pronto">Pronto</option>
          </select>

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