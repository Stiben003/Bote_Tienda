<?php
    include 'php/pcabeza.php';
    $query = extraerPropietario(base64_decode($_GET['id']));
    $row = $query->fetch_assoc();
?>
<!-- Opciones de Navegación -->
<ol class="breadcrumb">
    <li><a href="./">Inicio</a></li>
    <li><a href="propietario_mant.php">Listado de Propietarios</a></li>
    <li class="active">Actualizar Propietario</li>
</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Actualizar Propietario</h1>
    </div>

    <div class="panel-body">
        <form action="php/registros/propietario.php?accion=UDT" method="POST">
            <div class="row">
                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Codigo <span style="color:red">*</span></label>
                        <input class="form-control" readonly type="text" name="codigo" id="codigo" value="<?php echo $row['codpropietario'] ?>" require>
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
                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Nombres <span style="color:red">*</span></label>
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Juan Canahuate" value="<?php echo $row['nombre'] ?>" require>
                    </div>
                </div>    
                <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-offset-0 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Dirección <span style="color:red">*</span></label>
                        <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Primavera #14, Bonao" value="<?php echo $row['direccion'] ?>" require>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Telefono <span style="color:red">*</span></label>
                        <input class="form-control" type="tel" name="telefono" id="telefono" placeholder="809-555-5555" value="<?php echo $row['telefono'] ?>" require>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-offset-0 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Fecha de Nacimiento <span style="color:red">*</span></label>
                        <input class="form-control" type="date" name="fechaN" id="fechaN" value="<?php echo $row['fecha_nacimiento'] ?>" require>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Experiencia <span style="color:red">*</span></label>
                        <textarea class="form-control" name="experiencia" id="experiencia"><?php echo $row['experiencia'] ?></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <a href="propietario_mant.php" class="btn btn-danger">Atras</a>
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