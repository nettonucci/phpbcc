<?php
   require_once '../conexao.php'; 

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



    if (!empty($Cli) && !empty($Apa) && !empty($Mar) && !empty($Mod) && !empty($Ser) && !empty($Acs) && !empty($Def) && !empty($Lau) && !empty($Pec) && !empty($Val) && !empty($Sta)){
      $con = open_conexao(); 
      selectDb(); 
      $sql = "INSERT INTO os(cliente, aparelho, marca, modelo, seriall, acessorio, defeito, laudo, peca, valor, status) VALUES ('$Cli', '$Apa', '$Mar', '$Mod', '$Ser', '$Acs', '$Def', '$Lau', '$Pec', '$Val', '$Sta');";
      $ins = mysql_query($sql); 

      if ($ins==FALSE)
        $msg= "Erro na insercao de Pedidos...<BR/>";
      else {
          $msg = "Foi inserido ". mysql_affected_rows() . " registro";
          unset($Cli, $Apa, $Mar, $Mod, $Ser, $Acs, $Def, $Lau, $Pec, $Val, $Sta); 
      }
      close_conexao($con); 
      echo $msg;
   }
   header("location: ../listar/listOs.php");
?> 