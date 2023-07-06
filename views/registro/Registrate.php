<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="assets/Fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<div class="wrapper" style="background-color: #257415;">
			<div class="inner">
				<div class="image-holder">
					<img src="assets/img/Noticias/Logo_San_José_de_Cafasso.png" style="padding-top: 50px;" alt="">
					<a href="?controller=home"style="color:black">Volver</a>
				</div>
				<form method="POST" action="?controller=Home&method=registerUser">
					<h3>Formulario de registro</h3>
					<div class="form-group">
						<input type="text" required placeholder="Nombres" name="Nombres" class="form-control">
						<input type="text" required placeholder="Apellidos" name="Apellidos" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Documento de identidad" name="Documento" class="form-control">
						<input type="text" required placeholder="Dirección" name="Direccion" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" required placeholder="Email" name="Correo" class="form-control">
						<input type="text" required placeholder="Telefono" name="Telefono" class="form-control">
					</div>
					<div class="form-wrapper">
						Fecha de nacimiento:
						<input type="date" required placeholder="Fecha de Nacimiento" name="Fecha_Nacimiento" class="form-control">
						<i class="zmdi zmdi-date"></i>
					</div>
					<!--<div class="form-wrapper">
						<select name="" id="" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option>
							<option value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>-->
					<div class="form-group">
						<input type="password" required placeholder="Contraseña" name="Contrasena" class="form-control">
						<input type="password" required placeholder="Confirmar contraseña" name="Contraseñados" class="form-control">
					</div>
					Acepto términos y condiciones:
					<div class="form-group">
						<input type="checkbox" required class="form-control">
						<button type="submit">Registrar
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
					</div>
				</form>
			</div>
		</div>
		
	</body>
</html>