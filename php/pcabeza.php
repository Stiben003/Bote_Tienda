<?php
    include('php/consultas.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseño Sistemas</title>

    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- Cargar Fuentes -->
    <script defer src="fonts/fontawesome/js/all.js"></script>

    <!-- Cargar arhivos JS -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-inverse" style="border-radius: 0">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
          <table align="center" width="100%" style="margin-top: -10px">
            <tr>
              <td>
                <img src="img/isc.jpg" alt="Logo" width="40px" style="margin-right: 10px; border-radius: 80%;" />
              </td>
              <td>
                <span>Diseño Sistema</span>
              </td>
            </tr>
          </table>

      </div>

      <!-- Agregar componentes de navegacion como link, formularios u otro contenido -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <!-- Componentes del Menu -->
          <!-- <i class="fas fa-users"></i>  -->
          <li><a href="propietario_mant.php">Propietarios</a></li>
          <li><a href="clientes_mant.php">Clientes</a></li>
          <li><a href="tmantenimiento_mant.php">Tipo de Mantenimiento</a></li>
          <li><a href="tripulacion_mant.php">Tripulacion</a></li>
          <li><a href="equipos_mant.php">Tipo de Equipos</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="mailto:info@mangusoft.com">Contacto</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="container-fluid">

 

