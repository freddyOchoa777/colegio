<?php

	class login
	{
		private $pdo;
		
		public function __construct()
		{
			try {
				$this->pdo = new Database;
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}

        public function ValidarCredenciales($data){
            $correo = $data['Correo'];
            $contraseña = $data['Contraseña'];
            try {
                $strSql = "SELECT * FROM usuario WHERE correo='".$correo."' AND contrasena='".$contraseña."'";
                $query = $this->pdo->select($strSql);
                return $query; 
            } catch(PDOException $e) {
                die($e->getMessage());
            }
        }


}