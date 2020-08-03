<?php
include('../conexion.php');

// INS | UDT | DLT

$i = '';
if (isset($_GET['accion'])) {
    $i = $_GET['accion'];
}

if (isset($_GET['id'])) {
    $codigo = base64_decode($_GET['id']);
}

if ($i == 'INS'){
    $msj='';
    $nombre=    $_POST['nombre'];
    $direccion= $_POST['direccion'];
    $telefono=  $_POST['telefono'];
    $fecha_nacimiento=  $_POST['fechaN'];
    $experiencia=   $_POST['experiencia'];

    $sql="
        INSERT INTO `propietario`
        (
            `nombre`, 
            `direccion`, 
            `telefono`, 
            `fecha_nacimiento`, 
            `experiencia`, 
            `estado`
        ) VALUES (
            '$nombre',
            '$direccion',
            '$telefono',
            '$fecha_nacimiento',
            '$experiencia',
            'A'
        ) 
    ";

    if ($mysqli->query($sql)) {
        $msj ='successins';
    } else {
        $msj ='errorins';
    }

    header("Location: ../../propietario_mant.php?s=".$msj);
}

if ($i == 'UDT'){
    $msj='';
    $nombre=    $_POST['nombre'];
    $direccion= $_POST['direccion'];
    $telefono=  $_POST['telefono'];
    $fecha_nacimiento=  $_POST['fechaN'];
    $experiencia=   $_POST['experiencia'];
    $estado=   $_POST['estado'];
    $codigo=   $_POST['codigo'];

    $sql="
    UPDATE `propietario` 
    SET 
    
    `nombre`='$nombre',
    `direccion`='$direccion',
    `telefono`='$telefono',
    `fecha_nacimiento`='$fecha_nacimiento',
    `experiencia`='$experiencia',
    `estado`='$estado'
    WHERE codpropietario = '$codigo'
    ";

    if ($mysqli->query($sql)) {
        $msj ='successudt';
    } else {
        $msj ='errorudt';
    }

    header("Location: ../../propietario_mant.php?s=".$msj);
}

if ($i == 'DLT') {    
    $sql="UPDATE `propietario` SET `estado` = 'I' WHERE `codpropietario` = '$codigo' ";

    if ($mysqli->query($sql)) {
        $msj ='successdlt';
    } else {
        $msj ='errordlt';
    }

    header("Location: ../../propietario_mant.php?s=".$msj);
}

?>