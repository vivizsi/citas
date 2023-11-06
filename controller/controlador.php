<?php
	require_once("../model/modelo.php");
	$menu = new citas();
	$pd = $menu->lista_citas();
	require_once("../view/vista.php");
?>