<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Colegio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/dashboard.css">
  <link rel="shortcut icon" href="assets/img/Noticias/Logo_San_José_de_Cafasso.png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
  <div class="dashboard">
    <!-- Sidebar -->
    <div class="sidebar">
      <h2>Menú</h2>
      <img src="assets/img/Noticias/Logo_San_José_de_Cafasso.png" alt="Logo" height="100px">
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
    <div class="content">
  <div class="menu">
    <div class="d-flex justify-content-between">
      <span>Bienvenid@,
        <?php echo ($email) ?>
      </span>
      <form method="POST" action="?controller=login&method=exit">
        <button class="btn btn-danger">Salir</button>
      </form>
    </div>
  </div>
    <!-- Contenido principal -->