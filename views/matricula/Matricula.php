<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Matrícula</title>
  <style>
    /* Estilos generales */
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to bottom, #257415, #f6f64f);
      margin: 0;
      padding: 0;
    }

    /* Encabezado */
    #inicio {
      text-align: center;
      margin: 20px 0;
    }

    .titulo h1 {
      font-size: 2.5em;
      color: #fff;
    }

    .logo img {
      height: 100px;
    }

    /* Fondo y Secciones */
    .todofondo {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      max-width: 800px;
      margin: 20px auto;
    }

    h1 {
      color: #257415;
      border-bottom: 2px solid #257415;
      padding-bottom: 10px;
    }

    .verificacion {
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      margin: 10px 0;
      border-collapse: collapse;
    }

    td {
      padding: 10px;
      vertical-align: top;
    }

    input[type="text"],
    input[type="date"],
    select {
      width: calc(100% - 20px);
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1em;
      box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    /* Botones */
    button {
      background-color: #007BFF;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 1em;
      margin-top: 10px;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <center>
    <div id="inicio">
      <div class="titulo">
        <h1><em>Matriculas Colegio San José de Cafasso</em></h1>
      </div>
      <div class="logo">
        <img src="assets/img/Noticias/Logo_San_José_de_Cafasso.png" alt="Logo San José de Cafasso">
      </div>
    </div>
  </center>

  <div class="todofondo">

    <div class="verificacion">
      <h1>Registro Académico:</h1>
      <hr>
      <form method="POST" action="?controller=Home&method=enviarMatricula">
        <table>
          <tr>
            <td>Periodo:</td>
            <td>
              <select required name="periodo">
                <option>Septiembre 2012 - Febrero 2015</option>
                <option>Abril 2012 - Agosto 2014</option>
                <option>Septiembre 2012 - Febrero 2014</option>
                <option>Marzo 2013 - Septiembre 2013</option>
                <option>Septiembre 2012 - Febrero 2013</option>
                <option>Marzo 2012 - Julio 2012</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Fecha:</td>
            <td><input required type="date" name="fecha"></td>
          </tr>
          <tr>
            <td>Jornada:</td>
            <td>
              <select required name="jornada">
                <option>Matutina</option>
                <option>Vespertina</option>
              </select>
            </td>
          </tr>
        </table>
  </div>
    <div class="verificacion">
      <h1>Datos Personales del Estudiante:</h1>
      <hr>
        <table>
          <tr>
            <td>Primer Nombre:</td>
            <td><input required  type="text" name="primer_nombre"></td>
          </tr>
          <tr>
            <td>Segundo Nombre:</td>
            <td><input required type="text" name="segundo_nombre"></td>
          </tr>
          <tr>
            <td>Primer Apellido:</td>
            <td><input required type="text" name="primer_apellido"></td>
          </tr>
          <tr>
            <td>Segundo Apellido:</td>
            <td><input required type="text" name="segundo_apellido"></td>
          </tr>
          <tr>
            <td>Fecha de Nacimiento:</td>
            <td><input required type="date" name="fecha_nacimiento"></td>
          </tr>
          <tr>
            <td>Sexo:</td>
            <td>
              <select required name="sexo">
                <option>Femenino</option>
                <option>Masculino</option>
                <option>Otro</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Ciudad de Residencia:</td>
            <td>
              <select required name="ciudad_residencia">
                <option>Bogotá</option>
                <option>Soacha</option>
                <option>Otro</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Dirección:</td>
            <td><input type="text" required name="direccion"></td>
          </tr>
          <tr>
            <td>Barrio:</td>
            <td><input type="text" required name="barrio"></td>
          </tr>
          <tr>
            <td>Grado al que Aspira:</td>
            <td>
              <select required name="grado_aspirado">
                <option>Pre-kinder</option>
                <option>Kinder</option>
                <option>Transición</option>
                <option>Primero</option>
                <option>Segundo</option>
                <option>Tercero</option>
                <option>Cuarto</option>
                <option>Quinto</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Nombre del Colegio o Jardín de Procedencia:</td>
            <td><input required type="text" name="colegio_procedencia"></td>
          </tr>
          <tr>
            <td>Tipo de Documento de Identidad:</td>
            <td>
              <select required name="tipo_documento">
                <option>NUIP</option>
                <option>Tarjeta de Identidad</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Número de documento de identidad:</td>
            <td>
            <td><input required type="number" name="documento_estudiante"></td>
            </td>
          </tr>
          <tr>
            <td>Edad Actual:</td>
            <td>
              <select required name="edad_actual">
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>EPS:</td>
            <td><input required type="text" name="eps"></td>
          </tr>
          <tr>
            <td>Grupo Sanguíneo:</td>
            <td>
              <select required name="grupo_sanguineo">
                <option>O</option>
                <option>A</option>
                <option>B</option>
                <option>AB</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>RH:</td>
            <td>
              <select required name="rh">
                <option>Positivo</option>
                <option>Negativo</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>El estudiante vive con:</td>
            <td>
              <select required name="quien_vive">
                <option>Mamá - Papá</option>
                <option>Mamá</option>
                <option>Papá</option>
                <option>Otro</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Estrato:</td>
            <td>
              <select required name="estrato">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Hermanos en la Institución:</td>
            <td><input required type="number" name="hermanos_institucion"></td>
          </tr>
        </table>
        <div class="verificacion">
          <h1>Informacion medica del estudiante:</h1>
          <hr>
            <table>
              <tr>
                <td>Enfermedades actuales:</td>
                <td><input required type="text" name="enfermedades_actuales"></td>
              </tr>
              <tr>
                <td>¿El estudiante toma algún medicamento de manera permanente?*
                  Escriba Si o No. De escribir Si, especifique cuál:</td>
                <td> <input type="text" name="medicamento_permanente"><br></td>
              </tr>
            </table>
        </div>
          <table>
            <div class="verificacion">
              <h1>Informacion del PADRE DE FAMILIA:</h1>
          </table>
        <hr>
          <table>
            <tr>
              <td> Nombres:</td>
              <td> <input required type="text" name="padre_nombres"><br></td>
            </tr>
            <tr>
              <td>Apellidos:</td>
              <td><input required type="text" name="padre_apellidos"></td>
            </tr>
            <tr>
              <td>Direccion:</td>
              <td><input required type="text" name="padre_direccion"></td>
            </tr>
            <tr>
              <td>Correo electronico:</td>
              <td><input required type="text" name="padre_email"></td>
            </tr>
            <tr>
              <td>Telefono celular:</td>
              <td><input required type="text" name="padre_celular"></td>
            </tr>

            <tr>
              <td>Telefono fijo:</td>
              <td><input  type="text" name="padre_telefono_fijo"></td>
            </tr>
            <tr>
              <td>Profesion:</td>
              <td><input required type="text" name="padre_profesion"></td>
            </tr>
            <tr>
              <td>Empresa donde trabaja:</td>
              <td> <input required type="text" name="padre_empresa"><br></td>
            </tr>
            <tr>
              <td>Cargo que ocupa en la empresa:</td>
              <td><input  type="text" name="padre_cargo"></td>
            </tr>
            <tr>
              <td>Telefono de la empresa:</td>
              <td><input  type="text" name="padre_telefono_empresa"></td>
            </tr>
            <tr>
              <td>Direccion de empresa:</td>
              <td><input  type="text" name="padre_direccion_empresa"></td>
            </tr>
            <tr>
              <td>Estado Civil:</td>
              <td>
                <select required name="padre_estado_civil">
                  <option>Union Libre</option>
                  <option>Casado</option>
                  <option>Divorcioado</option>
                  <option>Otro</option>
                </select>
              </td>
            </tr>
          </table>
          <hr>
            <table>
              <div class="verificacion">
                <h1>Informacion de la MADRE DE FAMILIA:</h1>
            </table>
  </hr>
            <table>
              <tr>
                <td> Nombres:</td>
                <td> <input required type="text" name="madre_nombres"><br></td>
              </tr>
              <tr>
                <td>Apellidos:</td>
                <td><input required type="text" name="madre_apellidos"></td>
              </tr>
              <tr>
                <td>Direccion:</td>
                <td><input required type="text" name="madre_direccion"></td>
              </tr>
              <tr>
                <td>Correo electronico:</td>
                <td><input required type="text" name="madre_email"></td>
              </tr>
              <tr>
                <td>Telefono celular:</td>
                <td><input required type="text" name="madre_telefono_celular"></td>
              </tr>
              <tr>
                <td>Telefono fijo:</td>
                <td><input  type="text" name="madre_telefono_fijo"> </td>
              </tr>
              <tr>
                <td>Profesion:</td>
                <td><input required type="text" name="madre_profesion"></td>
              </tr>
              <tr>
                <td>Empresa donde trabaja:</td>
                <td> <input  type="text" name="madre_empresa"><br></td>
              </tr>
              <tr>
                <td>Cargo que ocupa en la empresa:</td>
                <td><input  type="text" name="madre_cargo_empresa"></td>
              </tr>
              <tr>
                <td>Telefono de la empresa:</td>
                <td><input  type="text" name="madre_telefono_empresa"></td>
              </tr>
              <tr>
                <td>Direccion de empresa:</td>
                <td><input   type="text" name="madre_direccion_empresa"></td>
              </tr>
              <tr>
                <td>Estado Civil:</td>
                <td>
                  <select required name="madre_estado_civil">
                    <option>Union Libre</option>
                    <option>Casada</option>
                    <option>Divorcioada</option>
                    <option>Otro</option>
                  </select>
                </td>
              </tr>
            </table>
          <hr>
            <table>
              <div class="verificacion">
                <h1>Informacion del Acudiente:</h1>
            </table>
          <hr>
            <table>
              <tr>
                <td>¿Quién es el acudiente del estudiante?:</td>
                <td>
                  <select required name="acudiente">
                    <option>Mamá</option>
                    <option>Papá</option>
                    <option>Otra persona</option>
                  </select>
                </td>
              </tr>
            </table>
          <hr>
            <table>
              <div class="verificacion">
                <h1>Información del responsable económico del estudiante:</h1>
            </table>
          <hr>
            <table>
              <tr>
                <td>¿Quién es la persona a cargo de los pagos?:</td>
                <td>
                  <select required name="responsable_economico">
                    <option>Mamá</option>
                    <option>Papá</option>
                    <option>Acudiente</option>
                  </select>
                </td>
              </tr>
            </table>
    </div>
    <td>
      </tr>
      </table>
      <button type="submit">Enviar</button>
      </form>
  </div>
  </div>
</body>
</html>