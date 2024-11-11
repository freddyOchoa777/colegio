<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Iniciar Sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="assets/Fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="assets/img/Noticias/Logo_San_José_de_Cafasso.png" />
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Ajuste de estilos para los botones */
        .button-group {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-top: 15px;
        }
        .btn-volver, .btn-iniciar-sesion {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 45px;
            transition: background-color 0.3s;
        }
        .btn-volver {
            background-color: #4A90E2;
        }
        .btn-iniciar-sesion {
            background-color: #257415;
        }
        .btn-iniciar-sesion i, .btn-volver i {
            margin-left: 5px;
        }
        .btn-volver:hover {
            background-color: #357ABD;
        }
        .btn-volver i {
            transition: transform 0.3s ease;
        }
        .btn-volver:hover i {
            transform: translateX(-5px);
        }
        .form-checkbox {
            display: flex;
            align-items: center;
            margin-top: 15px;
        }
        .form-checkbox input {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="wrapper" style="background: linear-gradient(to bottom, #257415, #f6f64f)">
        <div class="inner">
            <div class="image-holder">
                <img src="assets/img/Noticias/Logo_San_José_de_Cafasso.png" style="padding-top: 50px;" alt="">
            </div>
            <form method="POST" action="?controller=Login&method=validarCredenciales">
                <h3>Iniciar Sesión</h3>
                
                <div class="form-group">
                    <input type="email" required placeholder="Email" name="Correo" class="form-control">
                </div>
                
                <div class="form-group">
                    <input type="password" required placeholder="Contraseña" name="Contraseña" class="form-control">
                </div>
                
                <div class="form-checkbox">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Recordarme</label>
                </div>
                
                <div class="button-group">
                    <a href="?controller=home" class="btn-volver">Volver
                        <i class="zmdi zmdi-arrow-left"></i>
                    </a>
                    <button type="submit" class="btn-iniciar-sesion">Iniciar Sesión
                        <i class="zmdi zmdi-arrow-right"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
