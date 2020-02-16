<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Practica 1</title>

    <style>
    .pizarron
    {
      border: 5px solid brown;
      background-color: green !important;
      height: 100px;
      width: 300px;
    }
    .panel
    {
      border: 10px solid black;
      background-color: grey;
      height: 200px;
      width: 500px;
    }

    </style>


  </head>
  <body>

      <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <a class="navbar-brand" href="#">
            <h7><img src="http://lorempixel.com/75/75/food"   alt="" >
              El paraiso de la Comida</h7>
          </a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">

            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">

                    <a class="nav-link"  href="/">Principal<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">

                    <a class="nav-link" href="/catalogo"><i class="fas fa-hotdog"></i>Catalogo</a>
                  </li>
                  <li class="nav-item">

                    <a class="nav-link" href="/quienesSomos"><i class="far fa-address-card"></i>¿Quienes Somos?</a>
                  </li>
                  <li class="nav-item">

                    <a class="nav-link" href="/contacto"><i class="fas fa-align-justify"></i>contacto</a>

                  </li>
            </ul>

          </div>
      </nav>

      <table class="tabla">

        <tr>
            <th>Dato 1 </th>
            <th>Dato 2 </th>
            <th>Dato 3 </th>
        </tr>

    <tbody>
        <tr>

            <td>Dato 4 </td>
            <td>Dato 5 </td>
        </tr>
        <tr>

            <td>Dato 6 </td>
            <td>Dato 7 </td>
        </tr>
    </tbody>

    <tfoot><tr>
            <th>Dato 1 </th>
            <th>Dato 2 </th>
            <th>Dato 3 </th>
    </tr> </tfoot>
</table>

  <!-- Para cargar una imagen estando en la carpeta : img/imagen.jpg-->

  <div class="pizarron panel"> hola </div>

    </body>
    </html>
