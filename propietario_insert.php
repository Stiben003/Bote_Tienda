<?php
    include('php/pcabeza.php');
?>
<!-- Opciones de Navegación -->
<ol class="breadcrumb">
    <li><a href="./">Inicio</a></li>
    <li><a href="propietario_mant.php">Listado de Propietarios</a></li>
    <li class="active">Formulario de Propietarios</li>
</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Formulario de Propietarios</h1>
    </div>
    <div class="panel-body">
        <div class="container" style="width: 450px;">
            <div class="col-6 ml-4">
                <div class="myform form ">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control my-input" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" id="direccion" class="form-control my-input" placeholder="Direccion">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="number" min="0" name="telefono" id="telefono" class="form-control my-input" placeholder="(000) 000-0000">
                    </div>
                    <div class="form-group">
                        <label for="fechanac"> Fecha de Nacimiento</label>
                        <input type="text" min="0" name="fechanacimiento" id="fechanac" class="form-control my-input" placeholder="YYYY-MM-DD">
                    </div>
                    <div class="form-group">
                        <label for="experiencia"> Experiencia</label>
                        <select class="form-control my-input" id="experiencia" name="experiencia">
                        <option selected disabled hidden>Seleccionar una</option>
                            <option value="Ninguna">Ninguna</option>
                            <option value="Minima">Minima</option>
                            <option value="Suficiente">Suficiente</option>
                        </select>
                    </div>
                    <div class="text-center ">
                        <button type="submit" name="submit" class=" btn btn-block send-button tx-tfm">Guardar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

    </div>
</div> <!-- Fin del Panel -->
<?php
include("php/conexion.php");

if (isset($_POST['submit'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['fechanacimiento']) >= 1) {
	    $nombre = trim($_POST['nombre']);
	    $direccion = trim($_POST['direccion']);
        $telefono = trim($_POST['telefono']);
        $fechanac = trim($_POST['fechanacimiento']);
        $exp = $_POST['experiencia'];
	    $consulta = "INSERT INTO propietario(nombre, direccion, telefeno, fecha_nacimiento, experiencia, estado) VALUES ('$nombre','$direccion','$telefono', '$fechanac', '$exp', 'A')";
	    $resultado = mysqli_query($mysqli,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>

<?php
    include('php/ppie.php');
?>