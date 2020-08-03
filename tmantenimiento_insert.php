<?php
    include('php/pcabeza.php');
?>

<!-- Opciones de Navegación -->
<ol class="breadcrumb">
    <li><a href="./">Inicio</a></li>
    <li><a href="tmantenimiento_mant.php">Listado de Tipos de Mantenimiento</a></li>
    <li class="active">Nuevo Tipo de Mantenimiento</li>
</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Nuevo Tipo de Mantenimiento</h1>
    </div>

    <div class="panel-body">
        <form action="php/registros/tipo_mant.php?accion=INS" method="POST">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Descripción <span style="color:red">*</span></label>
                        <textarea class="form-control" name="descripcion" id="descripcion"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <a href="tmantenimiento_mant.php" class="btn btn-danger">Atras</a>
                        <input type="submit" value="Guardar" class="btn btn-success">
                    </div>
                </div>
            </div>
        </form>
    </div>
<!-- Fin del Panel -->

<?php
    include('php/ppie.php');
?>