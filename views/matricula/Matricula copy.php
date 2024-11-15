<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Sistéma de Matrícula</title>
  <link rel="stylesheet" type="text/css" href="assets/css/styleind.css">
  <link rel="shortcut icon" href="assets/img/Noticias/Logo_San_José_de_Cafasso.png" />
  <meta name="viewport" content="text/css" media="screen" href="main.css">
  <script src="assets/js/main.js"></script>

  <script>
    $(document).ready(function () {
      $("#menu").load("menu.html");
      $("#pie").load("pie.html");

    });


  </script>


</head>

<body>
  <!-- ..................................................... ............-->
  <center>
    <div id="inicio">
      <div class="titulo">
        <h1><em>Matriculas Colegio San José de Cafasso</em></h1>
      </div>
  </center>
  <!-- iMAGEN DEL BANNER CENTRADA-->

  <div class="logo">
    <center><img src="assets/img/Noticias/Logo_San_José_de_Cafasso.png" height="100px"></center>
  </div>
  </div>

  <!-- ..................................................... -->
  <center>
    <div class="todofondo">
      <h1>Sistema de Matricula</h1>
  </center>

  <div class="verificacion">
    <h1>Registro Academico:</h1>
    <hr>
    <form>
      <center>
        <table>
          <tr>
            <td>Periodo:</td>
            <td>
              <select name="catsndogs">

                <option>Septiembre_2012 Febrero-2015</option>
                <option>Abril 2012- Agosto_2014</option>
                <option>Septiembre_2012 Febrero-2014</option>
                <option>Marzo_2013 Septiembre_2013</option>
                <option>Septiembre_2012 Febrero-2013</option>
                <option>Marzo_2012 Julio_2012</option>

              </select>
            </td>
          </tr>
          <tr>
            <td>Fecha:</td>
            <td><input type="date"></td>
          </tr>
          <tr>
            <td>Jornada:</td>
            <td>

              <select name="catsndogs">
                <option>Matutina</option>
                <option>Vespertina</option>
              </select>

            </td>
          </tr>

        </table>
      </center>
    </form>
  </div>
  <br>



  <table>
    <tr>
      <td>
        <div class="verificacion">
          <h1>Datos Personales del Estudiante:</h1>
          <hr>
          <form>
            <center>
              <table>
                <tr>
                  <td>Primer Nombre:</td>
                  <td> <input type="text"><br></td>
                </tr>
                <tr>
                  <td>Segundo Nombre:</td>
                  <td> <input type="text"><br></td>
                </tr>
                <tr>
                  <td>Pimer Apellido:</td>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <td>Segundo Apellido:</td>
                  <td> <input type="text"><br></td>
                </tr>
                <tr>
                  <td>Fecha de Nacimiento:</td>
                  <td><input type="date"></td>
                </tr>
                <tr>
                  <td>Sexo:</td>
                  <td>

                    <select name="catsndogs">
                      <option>Femenino</option>
                      <option>Maculino</option>
                      <option>Otro</option>
                    </select>

                  </td>
                </tr>

                <tr>
                  <td>Cuidad de Residencia:</td>
                  <td>

                    <select name="catsndogs">
                      <option>Bogota</option>
                      <option>Soacha</option>
                      <option>Otro</option>
                    </select>

                  </td>
                </tr>
                <tr>
                  <td>Direccion:</td>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <td>Barrio:</td>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <td>Grado al que Aspira:</td>
                  <td>

                    <select name="catsndogs">
                      <option>Pre-kinder</option>
                      <option>kinder</option>
                      <option>Transicion</option>
                      <option>Primero</option>
                      <option>Segundo</option>
                      <option>Tercero</option>
                      <option>Cuarto</option>
                      <option>Quinto</option>
                    </select>

                  </td>
                </tr>
                <tr>
                  <td>Nombre del Colegio o Jardin de procedencia :</td>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <td>Tipo documento Identidad:</td>
                  <td>

                    <select name="catsndogs">
                      <option>NUIP</option>
                      <option>Tarjeta de Identidad</option>
                    </select>

                  </td>
                </tr>

                <tr>
                  <td>Edad Actual:</td>
                  <td>

                    <select name="catsndogs">
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
                    </select>

                  </td>
                </tr>
                <tr>
                  <td>EPS:</td>
                  <td><input type="text"></td>
                </tr>

                <tr>
                  <td>Grupo Sanguineo:</td>
                  <td>

                    <select name="catsndogs">
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

                    <select name="catsndogs">
                      <option>Positivo</option>
                      <option>Negativo</option>
                    </select>

                  </td>
                </tr>

                <tr>
                  <td>El estudiante vive con:</td>
                  <td>

                    <select name="catsndogs">
                      <option>Mama - Papa</option>
                      <option>Mama</option>
                      <option>Papa</option>
                      <option>Otro</option>
                    </select>

                  </td>
                </tr>

                <tr>
                  <td>Estrato:</td>
                  <td>

                    <select name="catsndogs">
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
                  <td>Hermanos en la Institucion:</td>
                  <td><input type="text"></td>
                </tr>

              </table>
            </center>
          </form>
        </div>
      </td>

      <hr>
      <form>
        <table>

          <div class="verificacion">
            <h1>Informacion medica del estudiante:</h1>

        </table>

      </form>

      <hr>
      <form>

        <table>

          <tr>
            <td>Enfermedades actuales:</td>
            <td><input type="text"></td>
          </tr>

          <tr>
            <td>¿El estudiante toma algún medicamento de manera permanente?*
              Escriba Si o No. De escribir Si, especifique cuál:</td>
            <td> <input type="text"><br></td>
          </tr>

        </table>
      </form>

      <hr>
      <form>
        <table>

          <div class="verificacion">
            <h1>Informacion del PADRE DE FAMILIA:</h1>

        </table>

      </form>
      <hr>
      <form>
        <table>
          <tr>
            <td> Nombres:</td>
            <td> <input type="text"><br></td>
          </tr>
          <tr>
            <td>Apellidos:</td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>Direccion:</td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>Correo electronico:</td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>Telefono celular:</td>
            <td><input type="text"></td>
          </tr>

          <tr>
            <td>Telefono fijo:</td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>Profesion:</td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>Empresa donde trabaja:</td>
            <td> <input type="text"><br></td>
          </tr>
          <tr>
            <td>Cargo que ocupa en la empresa:</td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>Telefono de la empresa:</td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>Direccion de empresa:</td>
            <td><input type="text"></td>
          </tr>
          <tr>
            <td>Estado Civil:</td>
            <td>
              <select name="catsndogs">
                <option>Union Libre</option>
                <option>Casado</option>
                <option>Divorcioado</option>
                <option>Otro</option>
              </select>
            </td>
          </tr>
        </table>

        <hr>
        <form>
          <table>

            <div class="verificacion">
              <h1>Informacion de la MADRE DE FAMILIA:</h1>

          </table>

        </form>
        <hr>
        <form>
          <table>
            <tr>
              <td> Nombres:</td>
              <td> <input type="text"><br></td>
            </tr>
            <tr>
              <td>Apellidos:</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>Direccion:</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>Correo electronico:</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>Telefono celular:</td>
              <td><input type="text"></td>
            </tr>

            <tr>
              <td>Telefono fijo:</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>Profesion:</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>Empresa donde trabaja:</td>
              <td> <input type="text"><br></td>
            </tr>
            <tr>
              <td>Cargo que ocupa en la empresa:</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>Telefono de la empresa:</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>Direccion de empresa:</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>Estado Civil:</td>
              <td>
                <select name="catsndogs">
                  <option>Union Libre</option>
                  <option>Casada</option>
                  <option>Divorcioada</option>
                  <option>Otro</option>
                </select>
              </td>
            </tr>
          </table>
        </form>


        <hr>
        <form>
          <table>

            <div class="verificacion">
              <h1>Informacion del Acudiente:</h1>

          </table>

        </form>

        <hr>
        <form>

          <table>
            <tr>
              <td>¿Quién es el acudiente del estudiante?:</td>
              <td>
                <select name="catsndogs">
                  <option>Mama</option>
                  <option>Papa</option>
                  <option>Otra persona</option>
                </select>
              </td>
            </tr>


          </table>
        </form>


        <hr>
        <form>
          <table>

            <div class="verificacion">
              <h1>Información del responsable económico del estudiante:</h1>

          </table>

        </form>

        <hr>
        <form>

          <table>
            <tr>
              <td>¿Quién es la persona a cargo de los pagos?:</td>
              <td>
                <select name="catsndogs">
                  <option>Mama</option>
                  <option>Papa</option>
                  <option>Acudiente</option>
                </select>
              </td>
            </tr>


          </table>
        </form>

        </div>
        <td>
    </tr>
  </table>
  <br>

  <input type="submit" value="Enviar">
  <input type="submit" value="Modificar">
  <input type="submit" value="Imprimir">


  </div>




  <!-- ..................................................... ............-->

  <footer id="pie"> <!-- Aqui estara el pie --> </footer>


</body>

</html>