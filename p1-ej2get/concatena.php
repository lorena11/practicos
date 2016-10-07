<?php
/**
 * Created by PhpStorm.
 * User: lore
 * Date: 19/09/2016
 * Time: 12:28
 */

if(isset($_GET["palabra1"]) && isset($_GET["palabra2"])
    && $_GET["palabra1"]!="" && $_GET["palabra2"]!="" ){
    $cad1 = $_GET['palabra1'];
    $cad2 = $_GET['palabra2'];
    $cadt = $cad1 ." ". $cad2;

    echo " La cadena numero uno concatenada con la cadena dos es : $cadt<br />";




}
else{
    echo "Introduzca Numeros ";
}
?>