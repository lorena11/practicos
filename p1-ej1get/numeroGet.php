<?php
/**
 * Created by PhpStorm.
 * User: lore
 * Date: 19/09/2016
 * Time: 0:47
 * Calcular
 */

if(isset($_GET["numero1"]) && isset($_GET["numero2"]) && isset($_GET["numero3"])
    && $_GET["numero1"]!="" && $_GET["numero2"]!="" && $_GET["numero3"]!=""){
    $num1 = $_GET['numero1'];
    $num2 = $_GET['numero2'];
    $num3 = $_GET['numero3'];


    $resulmul = $num1 * $num2;
    $resulrest = $resulmul - $num3;
    echo "El resultado de $num1 * $num2  es : $resulmul";

    echo "El resultado de $resulmul - $num3 es : $resulrest";

}
else{
    echo "Introduzca Numeros ";
}
?>