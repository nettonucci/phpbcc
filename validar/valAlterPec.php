<?php
   require_once '../conexao.php'; 

   $id = trim($_POST['id']);
   $qtde = trim($_POST['idQtd']); 
   $val = trim($_POST['idVal']); 

   if (!empty($id) && !empty($qtde) && !empty($val)){
      $con = open_conexao(); 
      selectDb(); 
      $sql = "UPDATE pecas SET qtd='$qtde', 
             valor='$val'
             WHERE id='$id';";

      $upd = mysql_query($sql); 
      close_conexao($con); 
      
      if ($upd==FALSE)
        $msg= "Erro na alteração de Peças<BR/>";
      else {
          $msg = "Foi alterado ". mysql_affected_rows() . " registro";
          unset($id, $qtde, $val); 
      }
      echo $msg;
   }
   header("location: ../listar/listPeca.php"); 
?> 