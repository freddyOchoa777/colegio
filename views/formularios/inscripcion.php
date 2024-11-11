<!DOCTYPE html>
<html>

<head>
    <title>Formulario de Inscripción</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="shortcut icon" href="assets/img/Noticias/Logo_San_José_de_Cafasso.png" />
    <style>
        body {
            background: linear-gradient(to bottom, #257415, #f6f64f);
            font-family: Arial, sans-serif;
            color: #333;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #fff;
        }

        form {
            background-color: #fff;
            padding: 20px;
            max-width: 800px;
            /* Ampliar el ancho del formulario */
            margin: 0 auto;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        form:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        .form-group {
            display: flex;
            /* Para permitir el agrupamiento de inputs */
            flex-wrap: wrap;
            margin-bottom: 15px;
            align-items: center;
        }

        .form-group label {
            flex: 1;
            /* Para que las etiquetas ocupen espacio */
            margin-right: 10px;
            min-width: 150px;
            /* Establece un ancho mínimo para las etiquetas */
            color: #555;
        }

        .input-container {
            position: relative;
            flex: 2;
            /* Hacer que los inputs ocupen más espacio */
        }

        .input-container input[type="text"],
        .input-container input[type="number"],
        .input-container input[type="email"],
        .input-container input[type="tel"],
        .input-container select,
        .input-container textarea {
            width: 100%;
            /* Asegurar que los inputs ocupen el 100% de su contenedor */
            padding: 10px 35px 10px 40px;
            /* Espacio para el icono */
            border: 2px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
            box-sizing: border-box;
            /* Asegurar que el padding no afecte el ancho total */
        }

        .input-container input:focus,
        .input-container select:focus,
        .input-container textarea:focus {
            border-color: #257415;
            /* Color del borde al enfocar */
        }

        .input-container i {
            position: absolute;
            left: 10px;
            top: 10px;
            font-size: 18px;
            color: #aaa;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: #257415;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
            width: 100%;
            /* Asegurar que el botón de envío ocupe todo el ancho */
        }

        input[type="submit"]:hover {
            background-color: #1c5810;
        }

        h2 {
            margin-top: 20px;
            color: #257415;
            border-bottom: 2px solid #257415;
            padding-bottom: 5px;
        }

        ul {
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .input-container {
            position: relative;
            width: 100%;
            /* Asegura que el contenedor tome todo el ancho */
        }

        .input-container input[type="date"] {
            width: 100%;
            padding: 10px 30px;
            /* Añade padding a la derecha para espacio al icono */
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            /* Asegura que el padding no afecte al ancho total */
        }

        .input-container i {
            position: absolute;
            left: 10px;
            /* Posición horizontal del icono */
            top: 50%;
            /* Centrado vertical */
            transform: translateY(-50%);
            /* Centrado vertical */
            color: #888;
            /* Color del icono */
            pointer-events: none;
            /* Evitar que el icono interfiera con el input */
        }

        .back-button {
            display: block;
            text-align: center;
            background-color: #ccc;
            color: #333;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
            text-decoration: none;
            margin-top: 10px;
        }

        .back-button:hover {
            background-color: #999;
        }
    </style>
</head>

<body>
    <h1>Formulario de Inscripción</h1>
    <form action="?controller=home&method=enviarInscripcion" method="POST">
        <div class="form-group">
            <label for="nombre_completo">Nombre completo:</label>
            <div class="input-container">
                <i class="fas fa-user"></i>
                <input type="text" id="nombre_completo" name="nombre_completo" required>
            </div>
        </div>
        <div class="form-group">
            <label for="nombre_completo">Numero identificación alumno</label>
            <div class="input-container">
                <i class="fas fa-id-card"></i>
                <input type="number" id="numero_identificacion" name="numero_identificacion" required>
            </div>
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <div class="input-container">
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
                <i class="fas fa-calendar-alt"></i>
            </div>
        </div>

        <div class="form-group">
            <label for="genero">Género:</label>
            <div class="input-container">
                <i class="fas fa-venus-mars"></i>
                <select id="genero" name="genero" required>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="direccion_completa">Dirección completa:</label>
            <div class="input-container">
                <i class="fas fa-home"></i>
                <input type="text" id="direccion_completa" name="direccion_completa" required>
            </div>
        </div>

        <div class="form-group">
            <label for="telefono_contacto">Teléfono de contacto:</label>
            <div class="input-container">
                <i class="fas fa-phone"></i>
                <input type="tel" id="telefono_contacto" name="telefono_contacto" required>
            </div>
        </div>

        <div class="form-group">
            <label for="correo_electronico">Correo electrónico (opcional):</label>
            <div class="input-container">
                <i class="fas fa-envelope"></i>
                <input type="email" id="correo_electronico" name="correo_electronico">
            </div>
        </div>

        <h2>Información de los Padres o Representantes</h2>

        <div class="form-group">
            <label for="tipo_representante">Tipo de representante:</label>
            <div class="input-container">
                <i class="fas fa-user-friends"></i>
                <select id="tipo_representante" name="tipo_representante" required>
                    <option value="Padre">Padre</option>
                    <option value="Madre">Madre</option>
                    <option value="Tutor">Tutor</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="nombre_representante">Nombre del representante:</label>
            <div class="input-container">
                <i class="fas fa-user"></i>
                <input type="text" id="nombre_representante" name="nombre_representante" required>
            </div>
        </div>

        <div class="form-group">
            <label for="telefono_representante">Número de teléfono:</label>
            <div class="input-container">
                <i class="fas fa-phone"></i>
                <input type="tel" id="telefono_representante" name="telefono_representante" required>
            </div>
        </div>

        <div class="form-group">
            <label for="correo_representante">Dirección de correo electrónico:</label>
            <div class="input-container">
                <i class="fas fa-envelope"></i>
                <input type="email" id="correo_representante" name="correo_representante" required>
            </div>
        </div>

        <div class="form-group">
            <label for="profesion_representante">Profesión:</label>
            <div class="input-container">
                <i class="fas fa-briefcase"></i>
                <input type="text" id="profesion_representante" name="profesion_representante" required>
            </div>
        </div>

        <h2>Información Adicional</h2>

        <div class="form-group">
            <label>¿El estudiante ha asistido previamente a otro colegio?</label>
            <div style="flex: 2; display: flex; align-items: center;">
                <input type="radio" name="ha_asistido_previamente" value="1" required> Sí
                <input type="radio" name="ha_asistido_previamente" value="0"> No
            </div>
        </div>

        <div class="form-group">
            <label for="colegio_anterior">En caso afirmativo, nombre del colegio anterior:</label>
            <div class="input-container">
                <i class="fas fa-school"></i>
                <input type="text" id="colegio_anterior" name="colegio_anterior">
            </div>
        </div>

        <div class="form-group">
            <label for="grado_inscrito">Grado al que se inscribe:</label>
            <div class="input-container">
                <i class="fas fa-graduation-cap"></i>
                <select id="grado_inscrito" name="grado_inscrito" required>
                    <option value="Primero">Jardín</option>
                    <option value="Primero">Transición</option>
                    <option value="Primero">Primero</option>
                    <option value="Segundo">Segundo</option>
                    <option value="Tercero">Tercero</option>
                    <option value="Cuarto">Cuarto</option>
                    <option value="Quinto">Quinto</option>
                    <option value="Sexto">Sexto</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label>¿Tiene alguna necesidad educativa especial?</label>
            <div style="flex: 2; display: flex; align-items: center;">
                <input type="radio" name="necesidad_educativa" value="1" required> Sí
                <input type="radio" name="necesidad_educativa" value="0"> No
            </div>
        </div>
        <div class="form-group">
            <label for="observaciones">En caso afirmativo, por favor especificar:</label>
            <div class="input-container">
                <i class="fas fa-comments"></i>
                <textarea id="descripcion_necesidad" name="descripcion_necesidad" rows="4"
                    placeholder="Escriba aquí sus observaciones"></textarea>
            </div>
        </div>
        <h2>Documentos Requeridos</h2>

        <div class="form-group">
            <label>Adjunte los siguientes documentos:</label>
            <div style="flex: 2; display: flex; align-items: center;">
                <ul>
                    <li>Copia del certificado de nacimiento del estudiante.</li>
                    <li>Copia de la cédula de identidad o pasaporte del estudiante.</li>
                    <li>Copia de los documentos de identidad de los padres o representantes.</li>
                    <li>Certificados de estudios anteriores (si corresponde).</li>
                    <li>Otros documentos relevantes (si los hay).</li>
                </ul>
            </div>
        </div>
        <input type="submit" value="Enviar Inscripción">
        <a href="?controller=home" class="back-button">Volver</a>
    </form>
</body>

</html>