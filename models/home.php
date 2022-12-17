<?php
	
	/**
	 * Modelo de la Tabla person
	 */
	
	class home
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

		public function RegisterUser($data)
		{
            $dataUser['documento'] = $data['documento'];
            $dataUser['correo'] = $data['correo'];
            $dataUser['contrasena'] = $data['contrasena'];
            if ($data['contrasena'] !== $data['contraseñados']) {
                echo("LA CONTRASEÑA NO ES LA MISMA");
                die();
            }else{
                try {
                    $this->pdo->insert('Usuario', $dataUser);
                } catch(PDOException $e) {
                    die($e->getMessage());
                }
                try {
                    $LastUserId = $this->getLastIdUser();
                    if(str_contains($data['correo'], '@sanjosecafasso.com')){
                        $dataProfesor['nombre'] = $data['nombre'];
                        $dataProfesor['apellidos'] = $data['apellidos'];
                        $dataProfesor['Telefono'] = $data['Telefono'];
                        $dataProfesor['idUsuario'] = $LastUserId[0]->id;
                        try {
                            $this->pdo->insert('Profesor', $dataProfesor);
                        } catch(PDOException $e) {
                            die($e->getMessage());
                        }
                    }else{
                        $dataAcudiente['nombre'] = $data['nombre'];
                        $dataAcudiente['apellidos'] = $data['apellidos'];
                        $dataAcudiente['Telefono'] = $data['Telefono'];
                        $dataAcudiente['idUsuario'] = $LastUserId[0]->id;
                        var_dump($dataAcudiente);
                        try {
                            $this->pdo->insert('Acudiente', $dataAcudiente);
                        } catch(PDOException $e) {
                            die($e->getMessage());
                        }
                    }
                } catch(PDOException $e) {
                    die($e->getMessage());
                }
            }
        }
        public function getLastIdUser()
		{
             try {
                    $strSql = "SELECT MAX(idUsuario) as id FROM usuario";
                    $query = $this->pdo->select($strSql);
                    return $query; 
                } catch(PDOException $e) {
                    die($e->getMessage());
                }
        }

}