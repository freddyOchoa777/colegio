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
			if($registerUser === true){
				$dataUsers =  $this->model->getAllUsers();
				$email =  $_POST["Correo"];
				require "dashboard.php";
			}else{
				require "home.php";
			}
		}
		public function RegisterScreen()
		{
			require "Registrate.html/Registrate.php";
		}
		public function Salir()
		{
			require "home.php";
		}
		public function GetMatriculaForm()
		{			
		require "Matricula.php";
		}
		public function GetAdmisiones()
		{
			require "Admisiones.html/Admisiones.php";
		}
     }
?>