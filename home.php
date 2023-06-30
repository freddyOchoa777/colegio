<?php
// Obtener el tamaño de la fuente actual de la sesión o establecer un valor predeterminado
$fontSize = isset($_SESSION['font_size']) ? $_SESSION['font_size'] : 16;

// Verificar si se hizo clic en el botón de aumentar tamaño
if (isset($_POST['increase'])) {
    $fontSize += 2; // Aumentar el tamaño en 2 píxeles
    $_SESSION['font_size'] = $fontSize; // Guardar el nuevo tamaño en la sesión
}

// Verificar si se hizo clic en el botón de disminuir tamaño
if (isset($_POST['decrease'])) {
    $fontSize -= 2; // Disminuir el tamaño en 2 píxeles
    $_SESSION['font_size'] = $fontSize; // Guardar el nuevo tamaño en la sesión
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styleIndex.css">
    <link rel="stylesheet" href="assets/css/styleLogin.css">
    <link rel="stylesheet" href="css\estilos.css">
    <title>Colegio San José de Cafasso</title>
    <script src="https://kit.fontawesome.com/c208b720fb.js" crossorigin="anonymous"></script>
    <!-- <div class="contenedor">
        <form action="">
            <a href="" class="Docmasoft">DOCMASOFT</a>
            <input type="text"><input type="button" value="Buscar">
        </form>
        <div><a href="">Iniciar Sesión</a></div>            
    </div>   -->   
    <style>
    .floating-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
    }

    .floating-button button {
    display: block;
    width: 40px;
    height: 40px;
    border: none;
    border-radius: 50%;
    font-size: 18px;
    color: #fff;
    background-color: #333;
    opacity: 0.7;
    transition: opacity 0.3s ease;
    }

    .floating-button button:hover {
    opacity: 1;
    cursor: pointer;
    }

    p {
            font-size: <?php echo $fontSize; ?>px;
    }

    </style>
    <div>
        <div class="containeBanner">
            <input class="buscador-class" type="text" name="" id="" placeholder="Buscar">
            <button class="btn-class">Buscar</button>
            <button class="btn-class-login">Iniciar Sesión</button>
            <button class="btn-class-login"><a href="?controller=Home&method=RegisterScreen">Registrate</a></button>
        </div>
    </div>
   
</head>

<body>
<div class="floating-button">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <button type="submit" name="increase">A+</button>
            <button type="submit" name="decrease">A-</button>
        </form>
    </div>

    <div id="header">
        <center>
        <div>
            <div><img class="logo-colegio" src="assets/img/Noticias/Logo_San_José_de_Cafasso.png" alt="Logo_San_José_de_Cafasso"></div>
            <div>
                <hr width="340px" size="3px" color="#fff176">
            </div>
                <h1>COLEGIO SAN JOSÉ DE CAFASSO</h1>
            </div>
        </div>
        <div class="contenedor-menu">
            <nav class="menu"></nav>
            <ul class="nav">
                <li><a href="">Inicio</a></li>
				<li><a href="Nosotros.html/Nosotros.html">Nosotros</a></li>
            
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
                <li><a href="">Pediente</a></li>
                <li><a href="">Pediente</a>
            </li>
        </ul>

        <li><a href="Mapa">Contactanos</a>
            <ul>
    </ul>
</div>

<div class="banner">
</div>

<div>
    <hr width="340px" size="3px" color="#fff176">
</div>

<div>
    <h1>
        NOTICIAS
    </h1>
</div>

<div>
    <hr width="340px" size="3px" color="#fff176">
</div>


<div>
    <div class="saludo">
        <div class="tamañoTexto">
            <article>
                <h1>Con modernos y amplios espacios educativos, el Gobierno nacional le cumple a los niños y jóvenes de Caldas y llega a 282 infraestructuras educativas entregadas en todo el país</h1>
                <p>La ministra de Educación, María Victoria Angulo, llegó a la región del Eje Cafetero para entregar oficialmente a la comunidad las obras de las instituciones educativas Nuestra Señora del Rosario, sede Abraham Montoya, en Neira; y San Francisco de Paula, sede María Inmaculada, en Chinchiná, con las que se benefician más de 1.500 estudiantes.</p>
            </article>
        </div>
        <div class="tamañoTexto">
            <article>
            <h1>La Hora del Código 2022: todo lo que necesitas saber para participar</h1>
            <p>Esta iniciativa mundial se celebra durante la Semana por la Educación en Ciencias de la Computación y propone una hora al día de actividades y tutoriales para trabajar el pensamiento computacional en todos los niveles educativos. Este año se celebra del 5 al 11 de diciembre.</p>
            </article>
        </div>
    </div>

    <div class="saludo">
        <div class="tamañoTexto">
            <article>
                <h1>Cuerpos saludables</h1>
                <p>Coma con su hijo siempre que sea posible. Muéstrele que a usted le gusta comer frutas, verduras y granos integrales en las comidas o los refrigerios. Su hijo solo debe comer y beber una cantidad limitada de alimentos con azúcar agregada, grasas sólidas o sal.
                   Limite el tiempo que su niño pasa frente a pantallas a no más de 1 o 2 horas al día de programas adecuados, ya sea en casa, en la escuela o en los centros de atención infantil.
                   Ofrézcale a su hijo juguetes adecuados para su edad, como pelotas y bates de plástico, pero deje que escoja a qué quiere jugar. Esto hará que moverse y estar activo sea algo divertido para él.
                   Asegúrese que su hijo duerma la cantidad recomendada cada noche. Niños de 3 a 5 años: de 10 a 13 horas cada 24 horas, incluyendo siestas.</p>
            </article>
        </div>
        <div class="tamañoTexto">
            <article>
            <h1>Bases curriculares para la educación inicial y preescolar</h1>
            <p>El Ministerio de Educación Nacional presenta las Bases Curriculares como un referente que orienta la organización curricular y pedagógica de la educación inicial y preescolar, que propende por la generación de propuestas educativas pertinentes y contextualizadas, en el marco de los proyectos educativos institucionales –PEI– de los establecimientos educativos, y de los proyectos pedagógicos –P.P– de las diferentes modalidades y escenarios educativos públicos y privados, que trabajan por la garantía del desarrollo integral de los niños y las niñas menores de seis años. </p>
            </article>
        </div>
    </div>
</div>

<section class="modal">
    <div class="modal_container">
        <h2 class="modal_title">Inicio de Sesión</h2>
        <form action="?controller=Login&method=validarCredenciales" method="POST" class="form">
        <div style="width: 80%;">
            <label class="label-formulario" for="">Usuario</label>
        </div>
        <input class="input-formulario" name="Correo" type="email" placeholder="Correo Electrónico">

        <div style="width: 80%;">
            <label class="label-formulario" for="">Contraseña</label>
        </div>
        <input class="input-formulario" type="password" name="Contraseña" id="" placeholder="Contraseña">

        <button type="Submit" class="boton-login">Iniciar Sesión</button>

        <button class="modal_close">X</button>
        </form>    
    </div>

</section>

<script src="assets/js/main.js"></script>


<section class="modal">
    <div class="modal_container">
        <h2 class="modal_title">Registrate</h2>

        <div style="width: 80%;">
            <label class="label-formulario" for="">Nombre</label>
        </div>
        <input class="input-formulario" type="text" placeholder="Usuario">

        <div style="width: 80%;">
            <label class="label-formulario" for="">Apellido</label>
        </div>
        <input class="input-formulario" type="text" placeholder="Usuario">

        <div style="width: 80%;">
            <label class="label-formulario" for="">Celular</label>
        </div>
        <input class="input-formulario" type="text" placeholder="Mobile">

        <div style="width: 80%;">
            <label class="label-formulario" for="">Correo</label>
        </div>
        <input class="input-formulario" type="text" placeholder="Email">

        <div style="width: 80%;">
            <label class="label-formulario" for="">Contraseña</label>
        </div>
        <input class="input-formulario" type="password" name="" id="" placeholder="Contraseña">

        <button class="boton-login">Iniciar Sesión</button>

        <button class="modal_close">X</button>
    </div>   
</section>        

     <script src="js/Registrate.js"></script>
        
</body>

<footer>

<div>
    <hr width="340px" size="3px" color="#fff176">
</div>

        <div id="titulo__footer">
            COLEGIO SAN JOSÉ DE CAFASSO     
        </div>               
        
            <div class="flex-container">    
                    <div class="flex-item">
                    
                        <h3>Dirección</h3>
                            <p>Calle 50 sur # 34 - 09</p>
                            <p>Tunjuelito - Fatima</p>
                            <p>Bogotá</p>
                        <h3>Horarios</h3>
                            <h4>Administración</h4>
                            <p>7:00 am - 4:00 pm</p>
                            <h4>Académico</h4>
                            <p>7:00 am - 2:00 pm</p>
                </div>           
    
                <div class="flex-item">
                        <h3>Contactos</h3>
                            <p>Teléfono 1</p> 
                            <p>Teléfono 2</p>
                        <h3>Redes Sociales</h3>
                            <li><a href="#"><i class="fab fa-facebook-square icon"></i> Facebook</a></li>
                            <li><a href="#"><i class="fab fa-twitter-square icon"></i> Twitter</a></li>
                            <li><a href="#"><i class="fab fa-instagram-square icon"></i> Instagram</a></li>
                </div>

                <div class="flex-item">
                            <h3>Ubicación</h3>
                            <div class="mapa"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.0450683520758!2d-74.13758088523811!3d4.585933396668325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9f287ea325ad%3A0x543e798e736f4d2f!2sColegio%20San%20Jos%C3%A9%20de%20Cafasso!5e0!3m2!1ses!2sco!4v1670254103273!5m2!1ses!2sco" width="150%" height="150%" margin="0 0 50px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                </div>
</footer>
</html>