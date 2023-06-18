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
            $dataUser['Documento'] = $data['Documento'];
            $dataUser['Correo'] = $data['Correo'];
            $dataUser['Contrasena'] = $data['Contrasena'];
            if ($data['Contrasena'] !== $data['Contraseñados']) {
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
                    if(str_contains($data['Correo'], '@sanjosecafasso.com')){
                        $dataProfesor['Nombre'] = $data['Nombre'];
                        $dataProfesor['Apellidos'] = $data['Apellidos'];
                        $dataProfesor['Teléfono'] = $data['Teléfono'];
                        $dataProfesor['idUsuario'] = $LastUserId[0]->id;
                        try {
                            $this->pdo->insert('Profesor', $dataProfesor);
                        } catch(PDOException $e) {
                            die($e->getMessage());
                        }
                    }else{
                        $dataAcudiente['Nombre'] = $data['Nombre'];
                        $dataAcudiente['Apellidos'] = $data['Apellidos'];
                        $dataAcudiente['Teléfono'] = $data['Teléfono'];
                        $dataAcudiente['idUsuario'] = $LastUserId[0]->id;
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