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
		require "views/utils/menu.php";
		require "home.php";
		require "views/utils/footer.php";
	}

	public function registerUser()
	{
		$registerUser = $this->model->RegisterUser($_POST);
		if ($registerUser === true) {
			header('Location: ?controller=login&method=index');
		} else if ($registerUser == 1) {
			require "views/registro/Registrate.php";
			?>
				<script type="text/javascript">
					Swal.fire({
						icon: "error",
						title: "Oops...",
						text: "Ya existe un usuario en el sistema con la información ingresada",
						footer: '<a href="?controller=Home&method=Login">Iniciar sesión</a>'
					});
				</script>
			<?php
		} else {
			require "views/registro/Registrate.php";
			?>
				<script type="text/javascript">
					Swal.fire({
						icon: 'error',
						title: 'Oops...',
						text: 'Las contraseñas no son iguales'
					})	
				</script>
			<?php
		}

	}
	public function RegisterScreen()
	{
		require "views/registro/Registrate.php";
	}
	public function login()
	{
		require "views/login/Login.php";
	}
	public function getMatriculaForm()
	{
		require "views/matricula/Matricula.php";
	}
	public function getNosotros()
	{
		require "views/utils/menu.php";
		require "views/nosotros/Nosotros.php";
		require "views/utils/footer.php";

	}
	public function editUser()
	{
		if (isset($_REQUEST['id'])) {
			$id = $_REQUEST['id'];
			$data = $this->model->getUserById($id);
			if (isset($_SESSION['user']->correo)) {
				$email = $_SESSION['user']->correo;
			} else {
				$email = $_SESSION['user']['Correo'];
			}
			require "views/dashboard/dashboard.php";
			require "views/dashboard/editUser.php";
		} else {
			echo "Error";
		}

	}
	public function enviarInscripcion()
	{
		$registerInscription = $this->model->requestToRegister($_POST);
		if ($registerInscription == true) {
			require "views/utils/menu.php";
		require "home.php";
		require "views/utils/footer.php";
			?>
			<script type="text/javascript">
				Swal.fire({
					title: "Excelente",
					text: "¡Revisaremos tu inscripción y te llamaremos para continuar con el proceso!",
					icon: "success"
				});
			</script>
			<?php
		}
	}

	public function enviarMatricula()
	{
		$registerInscription = $this->model->registerEnrollment($_POST);
		if ($registerInscription == true) {
			require "views/utils/menu.php";
		require "home.php";
		require "views/utils/footer.php";
			?>
			<script type="text/javascript">
				Swal.fire({
					title: "Excelente",
					text: "Bienvenido al colegio San José de Cafasso, nos vemos pronto...",
					icon: "success"
				});
			</script>
			<?php
		}
	}
	public function updateUser()
	{
		$this->model->updateUser($_POST);
		header('Location: ?controller=login&method=index');
	}
	public function delete()
	{
		if (isset($_REQUEST['id'])) {
			$idPersona = $_REQUEST['id'];
			$dataUser = $this->model->getUserById($idPersona);
			$idUsuario = $dataUser[0]->idUsuario;
			$this->model->deletePersonById($idPersona, $idUsuario);
			return "success";
		} else {
			echo "Error";
		}
	}
	public function GetAdmisiones()
	{
		require "views/utils/menu.php";
		require "views/admisiones/Admisiones.php";
		require "views/utils/footer.php";
	}
	public function GetInscripcionFomr()
	{
		require "views/formularios/inscripcion.php";
	}
}
?>