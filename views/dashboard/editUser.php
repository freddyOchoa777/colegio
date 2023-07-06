<div class="content">
  <div class="menu">
    <div class="d-flex justify-content-between">
      <span>Bienvenid@,
        <?php echo ($email) ?>
      </span>
      <form method="POST" action="?controller=Home">
        <button class="btn btn-danger">Salir</button>
      </form>
    </div>
  </div>
  <form method="POST" action="?controller=home&method=updateUser">
    <h1>Editar usuario</h1>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nombres">Nombres</label>
        <input type="text" class="form-control" value="<?php echo $data[0]->Nombres ?>" placeholder="Nombres"
          name="Nombres" id="nombres">
      </div>
      <div class="col-md-6 mb-3">
        <label for="apellidos">Apellidos</label>
        <input type="hidden" class="form-control" value="<?php echo $data[0]->idPersona ?>" placeholder="Apellidos"
          name="idPersona">
        <input type="hidden" class="form-control" value="<?php echo $data[0]->idUsuario ?>" placeholder="Apellidos"
          name="idUsuario">
        <input type="text" class="form-control" value="<?php echo $data[0]->Apellidos ?>" placeholder="Apellidos"
          name="Apellidos" id="apellidos">
      </div>
    </div>
    <div class="form-group">
      <label for="direccion">Dirección</label>
      <input type="text" class="form-control" value="<?php echo $data[0]->Direccion ?>" placeholder="Direccion"
        name="Direccion" id="direccion">
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="telefono">Teléfono</label>
        <input type="text" class="form-control" value="<?php echo $data[0]->Telefono ?>" placeholder="Teléfono"
          name="Telefono" id="telefono">
      </div>
      <div class="col-md-6 mb-3">
        <label for="fechaNacimiento">Fecha de nacimiento</label>
        <input type="date" class="form-control" value="<?php echo $data[0]->Fecha_Nacimiento ?>"
          placeholder="Fecha de nacimiento" name="Fecha_Nacimiento" id="fechaNacimiento">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="rol">Rol</label>
        <input type="text" class="form-control" name="Rol" disabled value="<?php echo $data[0]->nombreRol ?>"
          placeholder="Rol" id="rol">
      </div>
      <div class="col-md-6 mb-3">
        <label for="correo">Correo</label>
        <input type="text" class="form-control" name="Correo" value="<?php echo $data[0]->correo ?>"
          placeholder="Correo" id="correo">
      </div>
    </div>
    <div class="d-flex justify-content-between">
      <button class="btn btn-secondary"><a href="?controller=login&method=index"
          style="color:white;">Volver</a></button>
      <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</div>
</form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>