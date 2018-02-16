<?php


require 'Soda/public/socrata.php';
require 'Controller/HelperController.php';

$helper = new HelperController();


if(!empty($_GET['method']) and method_exists($helper,$_GET['method']))
{
	$method = $_GET['method'];
	$helper->$method();
}
else
{
	$helper->index();
}


