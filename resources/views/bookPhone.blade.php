<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>BookPhone</title>
</head>
<body>
    <div class="head text-center p-3">
        <h1 >Agenda teléfonica</h1>
    </div>
 
<div class="modal fade" id="mdlRegister" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-end" id="exampleModalToggleLabel">Registra tu teléfono</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex flex-column justify-content-center align-items-center text-center">
          <div class="content-name m-2">
            <input type="text" class="input-group-text" placeholder="Nombre" id="idInpname" required>
        </div>
        <div class="content-phone m-2">
            <input type="number" class="input-group-text" placeholder="Teléfono" id="idInpNumber" required>
        </div>
        <div class="content-date m-2">
            <input type="date" class="input-group-text" placeholder="Fecha" id="idInpDate" required>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal" id="idBtnSavePhone">Guardar</button>
      </div>
    </div>
  </div>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="button text-end m-2">
    <button id="idBtnAddPhone" class="btn btn-primary">Agregar teléfono</button>
</div>
<div class="table">
            <table id="example" class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
           
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
            </tr>
        </tbody>
    
    </table>
</div>

    </div>
</body>
</html>