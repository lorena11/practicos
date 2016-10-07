<?php
/**
 * Created by PhpStorm.
 * User: lore
 * Date: 20/09/2016
 * Time: 9:32
 */

// Funciones auxiliares

//evaluar tipo de raices
/*
function TipoRaiz($a,$b,$c){
    if ($b > 0 ) {
        $b2 = sqrt($b);
        if (($a && $c ) != 0){
            if($b2 < (4 * $a * $c)){
                $tipoRaiz = "Raices Compleja Conjugadas";
            }
            elseif ($b2 > (4 * $a * $c)){
                $tipoRaiz = "Raices reales distintas";
            }
            elseif ($b2 == (4 * $a * $c)){
                $tipoRaiz = "Raices Reales iguales";
            }

        }
    }
    //elseif ($a == 0){
    //    $tipoRaiz = "Raices Reales iguales";
    //}
    return $tipoRaiz;
}*/



//function EvaluarRaices()


// Si los valores recibidos son correctos ...
/*
if ($aOk && $bOk && $cOk) {
    print "<p>La ecuación <span style=\"font-size: 200%\">";
    if ($a == 1) {
        print "x<sup>2</sup>";
    } elseif ($a == -1) {
        print "-x<sup>2</sup>";
    } elseif ($a != 0) {
        print "{$a}x<sup>2</sup>";
    }
    if ($b == 1) {
        if ($a != 0) {
            print "+";
        }
        print "x";
    } elseif ($b > 0) {
        if ($a != 0) {
            print "+";
        }
        print $b . "x";
    } elseif ($b == -1) {
        print "-x";
    } elseif ($b < 0) {
        print $b . "x";
    }
    if ($c > 0) {
        if ($a != 0 || $b != 0) {
            print "+";
        }
        print $c;
    } elseif ($c < 0) {
        print $c;
    } elseif ($a == 0 && $b == 0 && $c == 0) {
        print "0";
    }
    print " = 0</span> ";
*/
    $i=90000;
    while ($i>0){
        $i--;
    }
    if(isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"]))
        if (($_POST["a"]!="") && ($_POST["b"]!="") && ($_POST["c"]!=""))
            if  ((is_numeric($_POST["a"])) && (is_numeric($_POST["b"])) && (is_numeric($_POST["c"]))){
             $a = $_POST["a"];
             $b = $_POST["b"];
             $c = $_POST["c"];
             echo "entro";

    }
    else
        echo "No ha ingresado valores numericos o ha dejado en blanco ";

?>