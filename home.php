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
    <link rel="stylesheet" href="assets/css/estilos.css">
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
            font-size:
                <?php echo $fontSize; ?>
                px;
        }
    </style>
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
                <div><img class="logo-colegio" src="assets/img/Noticias/Logo_San_José_de_Cafasso.png"
                        alt="Logo_San_José_de_Cafasso"></div>
                <div>
                    <hr class="unique">
                </div>
                <h1>COLEGIO SAN JOSÉ DE CAFASSO</h1>
            </div>
    </div>


    <div class="banner">
    </div>
    <center>
        <div>
            <hr class="unique">
        </div>
    </center>
    <div>
        <h1>
            NOTICIAS
        </h1>
    </div>

    <center>
        <div>
            <hr class="unique">
        </div>
    </center>


    <div>
        <div class="saludo">
            <div class="tamañoTexto">
                <article>
                    <h2>Con modernos y amplios espacios educativos, el Gobierno nacional le cumple a los niños y jóvenes
                        de Caldas y llega a 282 infraestructuras educativas entregadas en todo el país</h2>
                    <p style="text-align:justify;">La ministra de Educación, María Victoria Angulo, llegó a la región
                        del Eje Cafetero para entregar
                        oficialmente a la comunidad las obras de las instituciones educativas Nuestra Señora del
                        Rosario, sede Abraham Montoya, en Neira; y San Francisco de Paula, sede María Inmaculada, en
                        Chinchiná, con las que se benefician más de 1.500 estudiantes.</p>
                </article>
            </div>
            <div class="tamañoTexto">
                <article>
                    <h2>La Hora del Código 2022: todo lo que necesitas saber para participar</h2>
                    <p style="text-align:justify;">Esta iniciativa mundial se celebra durante la Semana por la Educación
                        en Ciencias de la
                        Computación y propone una hora al día de actividades y tutoriales para trabajar el pensamiento
                        computacional en todos los niveles educativos. Este año se celebra del 5 al 11 de diciembre.</p>
                </article>
            </div>
        </div>

        <div class="saludo">
            <div class="tamañoTexto">
                <article>
                    <h2>Cuerpos saludables</h2>
                    <p style="text-align:justify;">Coma con su hijo siempre que sea posible. Muéstrele que a usted le
                        gusta comer frutas, verduras y
                        granos integrales en las comidas o los refrigerios. Su hijo solo debe comer y beber una cantidad
                        limitada de alimentos con azúcar agregada, grasas sólidas o sal.
                        Limite el tiempo que su niño pasa frente a pantallas a no más de 1 o 2 horas al día de programas
                        adecuados, ya sea en casa, en la escuela o en los centros de atención infantil.
                        Ofrézcale a su hijo juguetes adecuados para su edad, como pelotas y bates de plástico, pero deje
                        que escoja a qué quiere jugar. Esto hará que moverse y estar activo sea algo divertido para él.
                        Asegúrese que su hijo duerma la cantidad recomendada cada noche. Niños de 3 a 5 años: de 10 a 13
                        horas cada 24 horas, incluyendo siestas.</p>
                </article>
            </div>
            <div class="tamañoTexto">
                <article>
                    <h2>Bases curriculares para la educación inicial y preescolar</h2>
                    <p style="text-align:justify;">El Ministerio de Educación Nacional presenta las Bases Curriculares
                        como un referente que orienta
                        la organización curricular y pedagógica de la educación inicial y preescolar, que propende por
                        la generación de propuestas educativas pertinentes y contextualizadas, en el marco de los
                        proyectos educativos institucionales –PEI– de los establecimientos educativos, y de los
                        proyectos pedagógicos –P.P– de las diferentes modalidades y escenarios educativos públicos y
                        privados, que trabajan por la garantía del desarrollo integral de los niños y las niñas menores
                        de seis años. </p>
                </article>
            </div>
        </div>
    </div>
</body>

</html>