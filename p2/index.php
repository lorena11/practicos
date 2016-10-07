<?php
	require('./libs/Smarty.class.php');
	$smarty=new Smarty;

    $smarty->debugging = true;
    $smarty->caching = true;
    $smarty->cache_lifetime=120;

	$categorias[0]["url"]="noticias.php";
	$categorias[0]["categoria"]="Noticias";
	$categorias[1]["url"]="deportes.php";
	$categorias[1]["categoria"]="Deportes";
	$titulo="Mi Web";
	
	$smarty->assign("categorias",$categorias);
	//$smarty->assign("titulo",$titulo);
	$smarty->display("index.tpl");
?>
