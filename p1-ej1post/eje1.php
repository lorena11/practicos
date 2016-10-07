<?php
/**
 * Created by PhpStorm.
 * User: lore
 * Date: 18/09/2016
 * Time: 19:39
 */


  $i=90000;
  while ($i>0){
      $i--;
  }
  if(isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["numero3"])
      && $_POST["numero1"]!="" && $_POST["numero2"]!="" && $_POST["numero3"]!=""){
      $numero1 = $_POST["numero1"];
      $numero2 = $_POST["numero2"];
      $numero3 = $_POST["numero3"];

      $resulmul = $numero1 * $numero2;
      $resulrest = $resulmul - $numero3;
      echo "El resultado de $numero1 * $numero2  es : $resulmul";
      echo "El resultado de $resulmul - $numero3 es : $resulrest";

  }
  else{
      echo "Introduzca Numeros ";
  }
 ?>
