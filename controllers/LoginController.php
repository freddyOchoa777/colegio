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
		$dataUsers = $this->modelHome->getAllUsers();
		if(isset($_SESSION['user']->correo)){
			$email = $_SESSION['user']->correo;
		}else{
			$email = $_SESSION['user']['Correo'];
		}
		require "views/dashboard/dashboard.php";
		require "views/dashboard/listPerson.php";
	}

	public function validarCredenciales()
	{
		$validarCredenciales = $this->model->ValidarCredenciales($_POST);
		if (sizeof($validarCredenciales) == 1) {
			$dataUsers = $this->modelHome->getAllUsers();
			header('Location: ?controller=login&method=index');
		} else {
			require "views/utils/menu.php";
			require "home.php";
			require "views/utils/footer.php";
			?>
			<script type="text/javascript">
				Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Las credenciales son incorrectas'
				})	
			</script>
			<?php

		}
	}
	public function forgotPassword()
	{
		require "views/utils/forgotPassword.php";
	}
	public function exit()
	{
		if(isset($_SESSION['user'])){
			session_destroy();
			header('Location: ?controller=home');
		}else{
			header('Location: ?controller=home');
		}
	}
	public function sendEmail()
	{
		require "views/utils/forgotPassword.php";
		$sendpassword = $this->model->sendpassword($_POST);
		$changuePassword = $this->model->updatePassword($_POST["correo"], $sendpassword);
		?>
		<script type="text/javascript">
			Swal.fire({
				icon: 'success',
				title: '¡Correo enviado!',
				text: 'Se ha enviado un correo electrónico a <?php echo $_POST["correo"] ?> para recuperar la contraseña.',
		confirmButtonText: 'OK',
	});
</script>
<?php
	}
}
?>