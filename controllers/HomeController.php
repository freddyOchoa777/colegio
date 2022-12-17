<?php
	require 'models/home.php';
	class HomeController
	{		
		private $model;

		public function __construct()
		{
			$this->model = new home;
		}

		public function index()
		{
			require "home.php";
	   	}

		public function registerUser()
		{
			$registerUser= $this->model->RegisterUser($_POST);
			require "home.php";
		}
		public function RegisterScreen()
		{
			require "Registrate.html/Registrate.php";
		}
     }
?>