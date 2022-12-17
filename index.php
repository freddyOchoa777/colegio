<?php

	session_start();

	require 'providers/Database.php';

	$controller = 'HomeController';

	if(!isset($_REQUEST['controller'])) {
		require "controllers/" . $controller . ".php";
		$controller = ucwords($controller);
		$controller = new $controller;
		$controller->index();		
	} else {
		$controller = ucwords($_REQUEST['controller'].'Controller');
		//Condicional Ternario   condición       Si es Verdad         Si es Falso
		$method = isset($_REQUEST['method']) ? $_REQUEST['method'] : 'index';

		require "controllers/". $controller	.".php";
		$controller = new $controller;

		//Función para llamar al controlados y ejecutar el metodo.
		call_user_func(array($controller, $method));

	}