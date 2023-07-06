<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formulario Registro</title>
   <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>

   <section class="modal">

      <div class="container-form">
         <form action="?controller=Home&method=registerUser" method="POST" class="form">
            <p class="form-titulo">Registrate</p>

            <div class="form-input myname">
               <input required type="text" id="myname" name="Nombre">
               <label for="myname">Nombres</label>
               <p class="mensajeError"></p>
            </div>
            <div class="form-input surname">
               <input required type="text" id="surname" name="Apellidos">
               <label for="myname">Apellidos</label>
               <p class="mensajeError"></p>
            </div>
            <div class="form-input mobile">
               <input required type="number" id="mobile" name="Documento">
               <label for="mobile">Documento Identidad</label>
               <p class="mensajeError"></p>
            </div>
            <div class="form-input email">
               <input required type="email" id="email" name="Correo">
               <label for="email">Correo electrónico</label>
               <p class="mensajeError"></p>
            </div>
            <div class="form-input mobile">
               <input required type="number" name="Telefono" id="mobile">
               <label for="mobile">Celular</label>
               <p class="mensajeError"></p>
            </div>
            <div class="form-input mobile">
               <input required type="date" name="Fecha_Nacimiento" id="mobile">
               <label for="mobile">Fecha Nacimiento</label>
               <p class="mensajeError"></p>
            </div>
            <div class="form-input password">
               <input required type="password" name="Contrasena" id="password">
               <label for="password">Contraseña</label>
               <p class="mensajeError"></p>
            </div>
            <div class="form-input repeat-password">
               <input required type="password" name="Contraseñados" id="repeat-password">
               <label for="repeat-password">Repetir Contraseña</label>
               <p class="mensajeError"></p>
            </div>
            <div class="form-termsAndConditions termsAndConditions">
               <input required type="checkbox" id="termsAndConditions">
               <label for="termsAndConditions">He leído y acepto los </label>
               <a href="#">Términos y Condiciones</a>
            </div>

            <div class="form-boton">
               <input type="submit" value="enviar">
            </div>
            <p class="mensajeCorrecto"></p>
            <button class="modal_close">X</button>
         </form>
      </div>
   </section>

   <script src="assets/js/Registrate.js"></script>
</body>

</html>