<?php 
session_start();
require 'inc/data/products.php';


if (isset($_GET) && !empty($_GET))
{	
	
	foreach ($_SESSION as $key => $value) 
	{	
		//echo $value;
		if($_GET['name']==$key)
		{
			$_SESSION[$key] ++;
			echo $value . PHP_EOL;
		}
	}
}

header('Location:/index.php');
