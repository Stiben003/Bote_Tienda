<?php
    include('php/pcabeza.php');
?>
<!-- Opciones de Navegación -->
<ol class="breadcrumb">
    <li><a href="./">Inicio</a></li>
    <li><a href="clientes_mant.php">Listado de Clientes</a></li>
    <li class="active">Nuevo Cliente</li>
</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Nuevo Cliente</h1>
    </div>

    <div class="panel-body">
        <form action="php/registros/clientes.php?accion=INS" method="POST">
            <div class="row">
                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Nombres <span style="color:red">*</span></label>
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Stiben Torres" require>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-offset-0 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Dirección <span style="color:red">*</span></label>
                        <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Esperanza#22, La Vega" require>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Telefono <span style="color:red">*</span></label>
                        <input class="form-control" type="tel" name="telefono" id="telefono" placeholder="809-333-4444" require>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-offset-0 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Fecha de Nacimiento <span style="color:red">*</span></label>
                        <input class="form-control" type="date" name="fechaN" id="fechaN" require>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label class="control-label">Experiencia <span style="color:red">*</span></label>
                        <textarea class="form-control" name="experiencia" id="experiencia"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <a href="clientes_mant.php" class="btn btn-danger">Atras</a>
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