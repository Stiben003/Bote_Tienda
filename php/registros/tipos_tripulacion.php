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

if ($i == 'DLT') {    
    $sql="
    UPDATE `tripulacion` SET
    `estado` = 'I'
    WHERE `codtripulacion` = '$codigo'
    ";

    if ($mysqli->query($sql)) {
        $msj ='successdlt';
    } else {
        $msj ='errordlt';
    }

    header("Location: ../../tripulacion_mant.php?s=".$msj);
}

if ($i == 'INS'){
    $msj='';
    $nombre=    $_POST['nombre'];
    $direccion= $_POST['direccion'];
    $telefono=  $_POST['telefono'];
    $fecha_nacimiento=  $_POST['num_h'];
    $experiencia=   $_POST['valor_h'];

    $sql="
        INSERT INTO `tripulacion`
        (
            `nombre`, 
            `direccion`, 
            `telefono`, 
            `num_horas`, 
            `valor_hora`, 
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

    header("Location: ../../tripulacion_mant.php?s=".$msj);
}

if ($i == 'UDT'){
    $msj='';
    $nombre=    $_POST['nombre'];
    $direccion= $_POST['direccion'];
    $telefono=  $_POST['telefono'];
    $numero_horas=  $_POST['num_h'];
    $valor_hora=   $_POST['valor_h'];
    $estado=   $_POST['estado'];
    $codigo=   $_POST['codigo'];

    $sql="
    UPDATE `tripulacion` 
    SET 
    
    `nombre`='$nombre',
    `direccion`='$direccion',
    `telefono`='$telefono',
    `num_horas`='$numero_horas',
    `valor_hora`='$valor_hora',
    `estado`='$estado'
    WHERE codtripulacion = '$codigo'
    ";

    if ($mysqli->query($sql)) {
        $msj ='successudt';
    } else {
        $msj ='errorudt';
    }

    header("Location: ../../tripulacion_mant.php?s=".$msj);
}

?>