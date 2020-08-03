<?php
    include('php/pcabeza.php');

    $mensaje = '';
    $color = '';

    if (isset($_GET['s'])){
        switch ($_GET['s']) {
            case 'successdlt':
                $mensaje = 'Registro inabilitado correctamente';
                $color = 'success';
                break;
            
            case 'errordlt':
                $mensaje = 'Imposible inhabilitar el registro';
                $color = 'danger';
                break;
                
            case 'successins':
                $mensaje = 'Registro almacenado correctamente';
                $color = 'success';
                break;
            
            case 'errorins':
                $mensaje = 'Imposible almacenar el registro';
                $color = 'danger';
                break;
            
            case 'successudt':
                $mensaje = 'Registro actualizado correctamente';
                $color = 'success';
                break;
            
            case 'errorudt':
                $mensaje = 'Imposible actualizar el registro';
                $color = 'danger';
                break;
        }
    }

    if (!empty($mensaje) and !empty($color)) {
        //echo'<div class="alert alert-'.$color.'" role="alert">'.$mensaje .'</div> ';
        echo'<div class="alert alert-'.$color.'" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <span>'.$mensaje.'</span>
        </div>';
    }
?>


<!-- Opciones de Navegación -->
<ol class="breadcrumb">
    <li><a href="./">Inicio</a></li>
    <li class="active">Listado de Propietarios</li>
</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Listado de Propietarios</h1>
    </div>
    <div class="panel-body">
        <p>
            <a href="propietario_insert.php" class="btn btn-success pull-left"> Nuevo </a>
        </p>
        <br>
        <hr>
        <table class="table table-striped" style="text-align: center;">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Estado</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = lista_propietario();
                    while ($row = $query->fetch_assoc()) {
                        echo"
                            <tr>
                                <td>".$row['codpropietario']."</td>
                                <td>".$row['nombre']."</td>
                                <td>".$row['direccion']."</td>
                                <td>".$row['telefono']."</td>
                                <td>".$row['estado']."</td>
                                <td> <a data-toggle='tooltip' title='Editar' href='propietario_update.php?id=".base64_encode($row['codpropietario'])."' class='btn btn-primary'> <img src='img/editar.png' width=34px /> </a> </td>
                                <td> <a data-toggle='tooltip' title='Anular' href='php/registros/propietario.php?accion=DLT&id=".base64_encode($row['codpropietario'])."' class='btn btn-danger'> <img src='img/basura.png' width=34px /> </a></td>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div> <!-- Fin del Panel -->

<?php
    include('php/ppie.php');
?>