<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Colegio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    /* Estilos del dashboard */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .dashboard {
      display: flex;
    }

    .sidebar {
      flex: 0 0 250px;
      background-color: #257415;
      padding: 20px;
      height: 100vh;
    }

    .sidebar h2 {
      margin-top: 0;
    }

    .sidebar ul {
      list-style: none;
      padding: 0;
      margin: 20px 0;
    }

    .sidebar li {
      margin-bottom: 10px;
    }

    .sidebar a {
      color: #ffffff;
      text-decoration: none;
    }

    .sidebar a i {
      margin-right: 10px;
    }

    .content {
      flex: 1;
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    /* Estilos del menú horizontal */
    .menu {
      background-color: #f2f2f2;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .menu span {
      margin-right: 10px;
    }

    .menu button {
      background-color: #ff0000;
      color: #ffffff;
      border: none;
      padding: 5px 10px;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <!-- Sidebar -->
    <div class="sidebar">
      <h2 style="color: #ffffff;">Menú</h2>
      <img src="assets/img/Noticias/Logo_San_José_de_Cafasso.png" height="100px">
      <ul>
        <li><a href="#"><i class="fas fa-user-graduate"></i> Matrícula</a></li>
        <li><a href="#"><i class="fas fa-pencil-alt"></i> Inscribir Materia</a></li>
        <li><a href="#"><i class="fas fa-users"></i> Inscripción Alumno</a></li>
        <li><a href="#"><i class="fas fa-university"></i> Admisiones</a></li>
        <li><a href="#"><i class="fas fa-info-circle"></i> Información del Colegio</a></li>
        <li><a href="#"><i class="fas fa-calendar-alt"></i> Calendario</a></li>
        <li><a href="#"><i class="fas fa-envelope"></i> Contacto</a></li>
      </ul>
    </div>

    <!-- Contenido principal -->
    <div class="content">
      <div class="menu">
        <span>Bienvenido, <?php echo($email) ?></span>
        <form method="POST" action="?controller=Home&method=Salir">
        <button>Salir</button>
        </form>
      </div>

      <h1>Registro de Usuarios</h1>
      <table>
        <thead>
          <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Rol</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($dataUsers as $dataUser) : ?>
													<tr>
														<td><?php echo $dataUser->Nombres ?></td>
														<td><?php echo $dataUser->Apellidos ?></td>
                            <td><?php echo $dataUser->Rol ?></td>
														<td>
															<a class="btn btn-tbl-delete btn-xs" href="?controller=role&method=edit&id=<?php echo $dataUser->Id ?>"><i class="fa fa-edit "></i></a>
															<a class="btn btn-tbl-eliminar btn-xs" href="?controller=role&method=delete&id=<?php echo $dataUser->Id ?>"><i class="fa fa-trash-o "></i></a>
														</td>
													</tr>
												<?php endforeach ?> 
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
