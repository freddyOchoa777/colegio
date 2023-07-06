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
                return false;
            }else{
                try {
                    $_SESSION['user'] = $dataUser;
                    $this->pdo->insert('Usuario', $dataUser);
                } catch(PDOException $e) {
                    die($e->getMessage());
                }
                try {
                    $LastUserId = $this->getLastIdUser();
                    if(str_contains($data['Correo'], '@sanjosecafasso.com')){
                        $dataProfesor['Nombres'] = $data['Nombres'];
                        $dataProfesor['Apellidos'] = $data['Apellidos'];
                        $dataProfesor['Telefono'] = $data['Telefono'];
                        $dataProfesor['Fecha_Nacimiento'] = $data['Fecha_Nacimiento'];
                        $dataProfesor['Direccion'] = $data['Direccion'];
                        $dataProfesor['idUsuario'] = $LastUserId[0]->id;
                        $dataProfesor['idRol'] = 1;
                        try {
                            $this->pdo->insert('Persona', $dataProfesor);
                        } catch(PDOException $e) {
                            die($e->getMessage());
                        }
                    }else{
                        $dataAcudiente['Nombres'] = $data['Nombres'];
                        $dataAcudiente['Apellidos'] = $data['Apellidos'];
                        $dataAcudiente['Telefono'] = $data['Telefono'];
                        $dataAcudiente['Direccion'] = $data['Direccion'];
                        $dataAcudiente['Fecha_Nacimiento'] = $data['Fecha_Nacimiento'];
                        $dataAcudiente['idUsuario'] = $LastUserId[0]->id;
                        $dataAcudiente['idRol'] = 2;
                try {
                            $this->pdo->insert('Persona', $dataAcudiente);
                        } catch(PDOException $e) {
                            die($e->getMessage());
                        }
                    }
                } catch(PDOException $e) {
                    die($e->getMessage());
                }
            }
            return true;
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
        public function getAllUsers()
		{
             try {
                    $strSql = "SELECT per.*,ro.nombreRol as Rol ,us.* FROM persona per 
                    INNER JOIN rol ro on ro.idRol = per.idRol
                    INNER JOIN usuario us on us.idUsuario=per.idUsuario";
                    $query = $this->pdo->select($strSql);
                    return $query; 
                } catch(PDOException $e) {
                    die($e->getMessage());
                }
        }
        public function getUserById($id)
		{
             try {
                    $strSql = "SELECT per.*,ro.nombreRol,us.correo,us.documento FROM persona per 
                    INNER JOIN rol ro on ro.idRol = per.idRol 
                    INNER JOIN usuario us on us.idUsuario = per.idUsuario
                    WHERE idPersona=".$id;
                    $query = $this->pdo->select($strSql);
                    return $query; 
                } catch(PDOException $e) {
                    die($e->getMessage());
                }
        }
        public function updateUser($dataUpdate)
    {
        try {
            $strWhere = 'idUsuario = '. $dataUpdate['idUsuario'];
            $dataUsuario['correo'] = $dataUpdate['Correo'];
            $this->pdo->update('usuario',$dataUsuario, $strWhere);
            try {
                $strWhere = 'idPersona = '.$dataUpdate['idPersona'];
                $data['Nombres'] = $dataUpdate['Nombres'];
                $data['Apellidos'] = $dataUpdate['Apellidos'];
                $data['Direccion'] = $dataUpdate['Direccion'];
                $data['Telefono'] = $dataUpdate['Telefono'];
                $data['Fecha_Nacimiento'] = $dataUpdate['Fecha_Nacimiento'];
                $this->pdo->update('persona',$data, $strWhere);
            } catch(PDOException $e) {
                die($e->getMessage());
            }
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }
    public function deletePersonById($idPersona,$idUsuario)
		{
			try {
				$strWherePerson = 'idPersona = '. $idPersona;
				$this->pdo->delete('persona', $strWherePerson);
                try {
                    $strWhereUser = 'idUsuario = '. $idUsuario;
                    $this->pdo->delete('usuario', $strWhereUser);
                } catch(PDOException $e) {
                    die($e->getMessage());
                }	
			} catch(PDOException $e) {
				die($e->getMessage());
			}	
		}

}