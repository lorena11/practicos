<?php
/**
 * Created by PhpStorm.
 * User: lore
 * Date: 21/09/2016
 * Time: 10:55
 */


if (!$_POST){
    $i = 0;
    $total =$_POST['total'];
    for ($i=0, i<$total, $i++){
        $dato = $_POST['dato'];
        $miarray = array($dato);
    }
else
    echo $miarray;
}