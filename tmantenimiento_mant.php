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
    <li class="active">Listado de Tipos de Mantenimiento</li>
</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Listado de Tipos de Mantenimiento</h1>
    </div>
    <div class="panel-body">
        <p>
            <a href="tmantenimiento_insert.php" class="btn btn-success pull-left"> Nuevo </a>
        </p>
        <br>
        <hr>
        <table class="table table-striped" style="text-align: center;">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = lista_tipo_mant();
                    while ($row = $query->fetch_assoc()) {
                        echo"
                            <tr>
                                <td>".$row['codtipo_mant']."</td>
                                <td>".$row['descripcion']."</td>
                                <td>".$row['estado']."</td>
                                <td> <a data-toggle='tooltip' title='Editar' href='tmantenimiento_update.php?id=".base64_encode($row['codtipo_mant'])."' class='btn btn-primary'> <img src='img/editar.png' width=34px /> </a> </td>
                                <td> <a data-toggle='tooltip' title='Anular' href='php/registros/tipo_mant.php?accion=DLT&id=".base64_encode($row['codtipo_mant'])."' class='btn btn-danger'> <img src='img/basura.png' width=34px /> </a></td>
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