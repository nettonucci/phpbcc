<?php
   require_once '../conexao.php'; 

   $descricao = trim($_POST['idDesc']); 
   $qtd = trim($_POST['idQtd']); 
   $valor = trim($_POST['idVal']); 

 
   if (!empty($descricao) && !empty($qtd) && !empty($valor)){
      $con = open_conexao(); 
      selectDb(); 
      $sql = "INSERT INTO pecas 
               (descricao, qtd, valor)
        VALUES ('$descricao', '$qtd', '$valor');";  
      $ins = mysql_query($sql); 

      if ($ins==FALSE)
        $msg= "Erro na insercao de Peças<BR/>";
      else {
          $msg = "Foi inserido ". mysql_affected_rows() . " registro";
          unset($descricao, $qtd, $valor); 
      }
      close_conexao($con); 
      echo $msg;
   }
   header("location: ../listar/listPeca.php");
?> 