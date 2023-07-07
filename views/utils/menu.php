<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styleIndex.css">
    <link rel="stylesheet" href="assets/css/styleLogin.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <title>Colegio San José de Cafasso</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/c208b720fb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<div class="containerBannerBig">
  <div class="containerBanner">
    <img class="logo-image" src="assets/img/Noticias/Logo_San_José_de_Cafasso.png" alt="Logo colegio">
    <div class="button-group">
      <input class="buscador-class" type="text" name="" id="" placeholder="Buscar">
      <button class="btn-class">Buscar</button>
      <button class="btn-class-login">Iniciar Sesión</button>
      <button class="btn-class-login"><a href="?controller=Home&method=RegisterScreen">Regístrate</a></button>
    </div>
  </div>
</div>
<div class="contenedor-menu">
    <nav class="menu"></nav>
    <ul class="nav">
        <li><a href="?controller=Home">Inicio</a></li>
        <li><a href="?controller=Home&method=getNosotros">Nosotros</a></li>

        <li><a href="?controller=Home&method=GetAdmisiones"">Admisiones</a>
                </li>
                <li><a href="">Estudiantes</a>
                    <ul>
                    <li><a href="">Perfil</a></li>
                    <li><a href="">Académico</a>
                </li>
            </ul>

            <li><a href="">Circulares</a>
                <ul>
                <li><a href="">Pendiente</a></li>                
            </li>
        </ul>

        <li><a href=" Mapa">Contáctanos</a>
            <ul>
            </ul>
</div>
<section class="modal">
        <div class="modal_container">
            <button class="modal_close">X</button>
            <form class="login" action="?controller=Login&method=validarCredenciales" method="POST" class="form">
                <p class="heading">Iniciar sesión</p>
                <input class="inputLogin" name="Correo" required type="Correo" placeholder="Correo" type="text">
                <input class="inputLogin" name="Contraseña" required placeholder="Contraseña" type="password">
                <p> <a href="?controller=Login&method=forgotPassword">¿Olvidaste tu contraseña?</a></p>
                <button type="submit" style="border-color: black;"class="btn">Enviar</button>
            </form>
        </div>
    </section>