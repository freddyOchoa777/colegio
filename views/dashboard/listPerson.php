  <h1>Lista de Usuarios</h1>
      <div class="table-container">
        <table id="userTable" class="table">
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
                <td><?php echo $dataUser->Nombres ?></td>
                <td><?php echo $dataUser->Apellidos ?></td>
                <td><?php echo $dataUser->documento ?></td>
                <td><?php echo $dataUser->correo ?></td>
                <td><?php echo $dataUser->Rol ?></td>
                <td>
                  <a class="btn btn-tbl-delete btn-xs" href="?controller=Home&method=editUser&id=<?php echo $dataUser->idPersona ?>"><i class="fa fa-edit "></i></a>
                  <a class="btn btn-tbl-eliminar-ajax btn-xs" href="?controller=Home&method=delete&id=<?php echo $dataUser->idPersona ?>"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- Fin de contenido -->
  </div>

  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#userTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {
            extend: 'copy',
            text: 'Copiar',
          },
          {
            extend: 'csv',
            text: 'CSV',
          },
          {
            extend: 'excel',
            text: 'Excel',
          },
          {
            extend: 'pdf',
            text: 'PDF',
          },
          {
            extend: 'print',
            text: 'Imprimir',
          }
        ],
        language: {
          buttons: {
            copyTitle: 'Copiado al portapapeles',
            copySuccess: {
              _: '%d filas copiadas',
              1: '1 fila copiada'
            }
          }
        }
      });


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