<?php
	require 'models/login.php';
	class LoginController
	{		
		private $model;

		public function __construct()
		{
			$this->model = new login;
		}

		public function index()
		{
			require "home.php";
	   	}

		public function validarCredenciales()
		{
			$validarCredenciales= $this->model->ValidarCredenciales($_POST);
            

            if (sizeof ($validarCredenciales) == 1)  {
                echo("si existe");
            
            }else{echo("no existe");}
			 die ();
            require "home.php";
		}
     }
?>