<?php
/**
 * Created by PhpStorm.
 * User: lore
 * Date: 19/09/2016
 * Time: 13:00
 */


if(isset($_GET["peso"]) && isset($_GET["altura"])
    && $_GET["peso"]!="" && $_GET["altura"]!="" ) {
    $pes = $_GET['peso'];
    $alt = $_GET['altura'];
    $imc = round($pes / pow($alt / 100, 2));
    if ($imc < 18.5)
        echo "Bajo Peso";
    elseif (($imc > 18.5) && ($imc< 24.99)) {
        echo "Peso Normal";
    } elseif (($imc > 25) && ($imc < 29.99)){
        echo "SobrePeso";
    } elseif ($imc > 30) {
        echo "Obesidad";
    } else
        echo "vuelva a introducir los datos";
}
?>
