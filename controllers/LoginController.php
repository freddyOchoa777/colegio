<?php
	require 'models/login.php';
	require 'models/home.php';
	class LoginController
	{		
		private $model;
		private $modelHome;

		public function __construct()
		{
			$this->model = new login;
			$this->modelHome = new home;
		}

		public function index()
		{
			require "home.php";
	   	}

		public function validarCredenciales()
		{
			$validarCredenciales= $this->model->ValidarCredenciales($_POST);
            if (sizeof ($validarCredenciales) == 1)  {
                $dataUsers =  $this->modelHome->getAllUsers();
				$email=$_POST['Correo'];
				require "dashboard.php";
            }else{
				echo("no existe usuario");
				die ();
			}
		}
     }
?>