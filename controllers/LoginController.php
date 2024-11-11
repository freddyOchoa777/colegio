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
		if (isset($_SESSION['user'])) {
			$email = $_SESSION['user']->correo;
			$dataUsers = $this->modelHome->getAllUsers();
			require "views/dashboard/dashboard.php";
			require "views/dashboard/listPerson.php";
		} else {
			header('Location: ?controller=home');
		}
	}

	public function validarCredenciales()
	{
		$validarCredenciales = $this->model->ValidarCredenciales($_POST);
		if (sizeof($validarCredenciales) == 1) {
			$dataUsers = $this->modelHome->getAllUsers();
			header('Location: ?controller=login&method=index');
		} else {
			require "views/login/Login.php";
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
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		$_SESSION = [];
		session_destroy();
		if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();
			setcookie(
				session_name(),
				'',
				time() - 42000,
				$params["path"],
				$params["domain"],
				$params["secure"],
				$params["httponly"]
			);
		}
		header('Location: ?controller=home');
		exit();
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