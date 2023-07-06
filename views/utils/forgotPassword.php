<head>
    <link rel="stylesheet" href="assets/css/forgotPassword.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <div class="logo-container">
                Recuperar contraseña
            </div>
            <center>
            <img class="logo-image" src="assets/img/Noticias/Logo_San_José_de_Cafasso.png" style="height: 80px;width: 80px;" alt="Logo colegio">
            </center>
            <form class="form" method="POST" action="?controller=Login&method=sendEmail" id="reset-password-form">
            <div class="form-group">
                    <label for="email">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="Diligencia tu nombre" required="">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="correo" placeholder="Diligencia tu correo" required="">
                </div>

                <button class="form-submit-btn" type="submit">Enviar Email</button>
            </form>

            <p class="signup-link">
                ¿No tienes cuenta?
                <a href="?controller=Home&method=RegisterScreen" class="signup-link link">Registrate ahora</a>
            </p>
            <a href="?controller=Home" style="color:black;" class="signup-link link">Volver</a>
        </div>
    </div>
</body>

</html>