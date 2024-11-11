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
            $validateEmail = $this->getUserByEmail($data['Correo']);
            if (count($validateEmail) > 0) {
                return 1;
            }
            $dataUser['Documento'] = $data['Documento'];
            $dataUser['Correo'] = $data['Correo'];
            $dataUser['Contrasena'] = $data['Contrasena'];
            if ($data['Contrasena'] !== $data['Contraseñados']) {
                return 2;
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
                        $dataProfesor['idRol'] = 4;
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
        public function registerEnrollment($data){
            $dataMatricula = [
                'periodo' => $data['periodo'],
                'fecha' => $data['fecha'],
                'jornada' => $data['jornada'],
                'primer_nombre' => $data['primer_nombre'],
                'segundo_nombre' => $data['segundo_nombre'],
                'primer_apellido' => $data['primer_apellido'],
                'segundo_apellido' => $data['segundo_apellido'],
                'documento_estudiante' => $data['documento_estudiante'],
                'fecha_nacimiento' => $data['fecha_nacimiento'],
                'sexo' => $data['sexo'],
                'ciudad_residencia' => $data['ciudad_residencia'],
                'direccion' => $data['direccion'],
                'barrio' => $data['barrio'],
                'grado_aspirado' => $data['grado_aspirado'],
                'colegio_procedencia' => $data['colegio_procedencia'],
                'tipo_documento' => $data['tipo_documento'],
                'edad_actual' => $data['edad_actual'],
                'eps' => $data['eps'],
                'grupo_sanguineo' => $data['grupo_sanguineo'],
                'rh' => $data['rh'],
                'quien_vive' => $data['quien_vive'],
                'estrato' => $data['estrato'],
                'hermanos_institucion' => $data['hermanos_institucion'],
                'enfermedades_actuales' => $data['enfermedades_actuales'],
                'medicamento_permanente' => $data['medicamento_permanente'],
                'padre_nombres' => $data['padre_nombres'],
                'padre_apellidos' => $data['padre_apellidos'],
                'padre_direccion' => $data['padre_direccion'],
                'padre_email' => $data['padre_email'],
                'padre_celular' => $data['padre_celular'],
                'padre_telefono_fijo' => $data['padre_telefono_fijo'],
                'padre_profesion' => $data['padre_profesion'],
                'padre_empresa' => $data['padre_empresa'],
                'padre_cargo' => $data['padre_cargo'],
                'padre_telefono_empresa' => $data['padre_telefono_empresa'],
                'padre_direccion_empresa' => $data['padre_direccion_empresa'],
                'padre_estado_civil' => $data['padre_estado_civil'],
                'madre_nombres' => $data['madre_nombres'],
                'madre_apellidos' => $data['madre_apellidos'],
                'madre_direccion' => $data['madre_direccion'],
                'madre_email' => $data['madre_email'],
                'madre_celular' => $data['madre_telefono_celular'],
                'madre_telefono_fijo' => $data['madre_telefono_fijo'],
                'madre_profesion' => $data['madre_profesion'],
                'madre_empresa' => $data['madre_empresa'],
                'madre_cargo' => $data['madre_cargo_empresa'],
                'madre_telefono_empresa' => $data['madre_telefono_empresa'],
                'madre_direccion_empresa' => $data['madre_direccion_empresa'],
                'madre_estado_civil' => $data['madre_estado_civil'],
                'acudiente' => $data['acudiente'],
                'responsable_economico' => $data['responsable_economico']
            ];        
            try {
                $this->pdo->insert('registro_academico', $dataMatricula);
                return true;
            } catch(PDOException $e) {
                die($e->getMessage());
            }
        }
        public function requestToRegister($data) {
            $dataInscripcion = [
                'nombre_completo' => $data['nombre_completo'], 
                'numero_identificacion' => $data['numero_identificacion'],
                'fecha_nacimiento' => $data['fecha_nacimiento'], 
                'genero' => $data['genero'],
                'direccion' => $data['direccion_completa'], 
                'telefono_contacto' => $data['telefono_contacto'], 
                'correo_electronico' => $data['correo_electronico'],
                'tipo_representante' => $data['tipo_representante'],
                'nombre_representante' => $data['nombre_representante'], 
                'telefono_representante' => $data['telefono_representante'], 
                'correo_representante' => $data['correo_representante'], 
                'profesion_representante' => $data['profesion_representante'], 
                'asistencia_colegio_anterior' => $data['ha_asistido_previamente'] === '1' ? 1 : 0, 
                'colegio_anterior' => $data['colegio_anterior'],
                'grado_inscrito' => $data['grado_inscrito'], 
                'tiene_necesidad_educativa' =>  $data['necesidad_educativa'], 
                'descripcion_necesidad' =>  $data['descripcion_necesidad'] 
            ];
        
            try {
                $this->pdo->insert('inscripciones', $dataInscripcion);
                return true;
            } catch(PDOException $e) {
                die($e->getMessage());
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
        public function getUserByEmail($email)
		{
             try {
                    $strSql = "SELECT * from usuario
                    WHERE correo='".$email."'";
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