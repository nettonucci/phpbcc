<?php
   require_once '../conexao.php'; 

   $nome = trim($_POST['idNome']); 
   $endereco = trim($_POST['idEnd']); 
   $cidade = trim($_POST['idCid']); 
   $estado = trim($_POST['idEst']); 
   $telefone = trim($_POST['idTel']); 
   $cpf = trim($_POST['idCpf']); 
   $nascimento = trim($_POST['idNas']); 

 
   if (!empty($nome) && !empty($endereco) && !empty($cidade) && !empty($estado) && !empty($telefone) && !empty($cpf) && !empty($nascimento)){
      $con = open_conexao(); 
      selectDb(); 
      $sql = "INSERT INTO clientes 
               (nome, endereco, cidade, estado, telefone, cpf, nascimento)
        VALUES ('$nome', '$endereco', '$cidade', '$estado', '$telefone', '$cpf', '$nascimento');";  
      $ins = mysql_query($sql); 

      if ($ins==FALSE)
        $msg= "Erro no cadastro de cliente<BR/>";
      else {
          $msg = "Foi inserido ". mysql_affected_rows() . " registro";
          unset($nome, $endereco, $cidade, $estado, $telefone, $cpf, $nascimento); 
      }
      close_conexao($con); 
      echo $msg;
   }
   header("location: ../listar/listCli.php");
?> 