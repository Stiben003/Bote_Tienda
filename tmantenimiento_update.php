<?php
    include 'php/pcabeza.php';
    $query = extraerTipoMant(base64_decode($_GET['id']));
    $row = $query->fetch_assoc();
?>
<!-- Opciones de Navegación -->
<ol class="breadcrumb">
    <li><a href="./">Inicio</a></li>
    <li><a href="tmantenimiento_mant.php">Listado de Tipos de Mantenimiento</a></li>
    <li class="active">Actualizar Tipo de Mantenimiento</li>
</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Actualizar Tipo de Mantenimiento</h1>
    </div>

    <div class="panel-body">
        <form action="php/registros/tipo_mant.php?accion=UDT" method="POST">
            <div class="row">
                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Codigo <span style="color:red">*</span></label>
                        <input class="form-control" readonly type="text" name="codigo" id="codigo" value="<?php echo $row['codtipo_mant'] ?>" require>
                    </div>
                </div>    
                <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-offset-0 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Estado <span style="color:red">*</span></label>
                        <select class="form-control" name="estado" id="estado">
                            <option value="A" <?php if($row['estado'] == 'A'){echo "selected";} ?>>Activo</option>
                            <option value="I" <?php if($row['estado'] == 'I'){echo "selected";} ?>>Inactivo</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Descripción <span style="color:red">*</span></label>
                        <textarea class="form-control" name="descripcion" id="descripcion"><?php echo $row['descripcion'] ?></textarea>
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