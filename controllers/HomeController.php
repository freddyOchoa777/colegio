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
	public function GetMatriculaForm()
	{
		require "Matricula.php";
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
			if(isset($_SESSION['user']->correo)){
				$email = $_SESSION['user']->correo;
			}else{
				$email = $_SESSION['user']['Correo'];
			}
			require "views/dashboard/dashboard.php";
			require "views/dashboard/editUser.php";
		} else {
			echo "Error";
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
}
?>