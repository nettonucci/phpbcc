<?php
   require_once '../conexao.php'; 

   $id = trim($_POST['id']);
   $nome = trim($_POST['txtNome']); 
   $end = trim($_POST['txtEnd']); 
   $cid = trim($_POST['txtCid']); 
   $est = trim($_POST['txtEst']);
   $tel = trim($_POST['txtTel']);  
   $cpf = trim($_POST['txtCpf']); 
   $nas = trim($_POST['txtNas']); 
 
   if (!empty($id) && !empty($nome) && !empty($end) && !empty($cid) && !empty($est) && !empty($tel) && !empty($cpf) && !empty($nas)){
      $con = open_conexao(); 
      selectDb(); 
      $sql = "UPDATE clientes SET nome='$nome', 
             endereco='$end', cidade='$cid', estado='$est', telefone='$tel', cpf='$cpf', nascimento='$nas'
             WHERE id='$id';";

      $upd = mysql_query($sql); 
      close_conexao($con); 
      
      if ($upd==FALSE)
        $msg= "Erro na alteração de Cadastro...<BR/>";
      else {
          $msg = "Foi alterado ". mysql_affected_rows() . " registro";
          unset($id, $nome, $end, $cid, $est, $tel, $cpf, $nas); 
      }
      echo $msg;
   }
   header("location: ../listar/listCli.php"); 
?> 