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

  <h1>Lista de Usuarios</h1>
  <div class="table-container">
    <table id="userTable">
      <thead>
        <tr>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Documento</th>
          <th>Correo</th>
          <th>Rol</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($dataUsers as $dataUser): ?>
          <tr>
            <td>
              <?php echo $dataUser->Nombres ?>
            </td>
            <td>
              <?php echo $dataUser->Apellidos ?>
            </td>
            <td>
              <?php echo $dataUser->documento ?>
            </td>
            <td>
              <?php echo $dataUser->correo ?>
            </td>
            <td>
              <?php echo $dataUser->Rol ?>
            </td>
            <td>
              <a class="btn btn-tbl-delete btn-xs"
                href="?controller=Home&method=editUser&id=<?php echo $dataUser->idPersona ?>"><i
                  class="fa fa-edit "></i></a>
              <a class="btn btn-tbl-eliminar-ajax btn-xs"
                href="?controller=Home&method=delete&id=<?php echo $dataUser->idPersona ?>"><i
                  class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
<!-- Fin de contenido -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    $('#userTable').DataTable();

    $('.btn-tbl-eliminar-ajax').click(function (event) {
      event.preventDefault(); // Evita el comportamiento predeterminado del enlace
      var deleteUrl = $(this).attr('href'); // Obtiene la URL de eliminación del atributo href del enlace

      Swal.fire({
        title: '¿Estás seguro de que quieres eliminar?',
        text: "No podrás revertir este cambio.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, quiero eliminarlo.'
      }).then((result) => {
        if (result.isConfirmed) {
          // Realizar la solicitud AJAX al servidor
          $.ajax({
            url: deleteUrl,
            type: 'POST',
            success: function (response) {
              Swal.fire('Eliminado!', 'El usuario fue eliminado del sistema', 'success');
              location.reload();
            },
          });
        }
      });
    });
  });
</script>
</body>

</html>