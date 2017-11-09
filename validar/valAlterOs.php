<?php
   require_once '../conexao.php'; 

   $id = trim($_POST['id']);
   $Cli = trim($_POST['idCli']); 
   $Apa = trim($_POST['idApa']); 
   $Mar = trim($_POST['idMar']); 
   $Mod = trim($_POST['idMod']);
   $Ser = trim($_POST['idSer']);
   $Acs = trim($_POST['idAcs']);
   $Def = trim($_POST['idDef']);
   $Lau = trim($_POST['idLau']);
   $Pec = trim($_POST['idPec']);
   $Val = trim($_POST['idVal']);
   $Sta = trim($_POST['idSta']); 

 echo "Cliente" .$Cli.'<br>';
 echo "Aparelho" .$Apa.'<br>';
 echo "Marca" .$Mar.'<br>';
 echo "Modelo" .$Mod.'<br>';
 echo "Serial" .$Ser.'<br>';
 echo "acessorio" .$Acs.'<br>';
 echo "Defeito" .$Def.'<br>';
 echo "Laudo" .$Lau.'<br>';
 echo "Peça" .$Pec.'<br>';
 echo "Valor" .$Val.'<br>';
 echo "Status" .$Sta.'<br>';
 
   if (!empty($id) && !empty($Cli) && !empty($Apa) && !empty($Mar) && !empty($Mod) && !empty($Ser) && !empty($Acs) && !empty($Def) && !empty($Lau) && !empty($Pec) && !empty($Val) && !empty($Sta)){
      $con = open_conexao(); 
      selectDb(); 
      $sql = "UPDATE os SET cliente='$Cli', 
             aparelho='$Apa', marca='$Mar', modelo='$Mod', seriall='$Ser', acessorio='$Acs', defeito='$Def', laudo='$Lau', peca='$Pec', valor='$Val', status='$Sta'
             WHERE id='$id';";

      $upd = mysql_query($sql); 
      close_conexao($con); 
      
      if ($upd==FALSE)
        $msg= "Erro na alteração de Cadastro...<BR/>";
      else {
          $msg = "Foi alterado ". mysql_affected_rows() . " registro";
          unset($id, $Cli, $Apa, $Mar, $Mod, $Ser, $Acs, $Def, $Lau, $Pec, $Val, $Sta); 
      }
      echo $msg;
   }
   header("location: ../listar/listOs.php"); 
?> 