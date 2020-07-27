<?php
include('../conexion.php');

// INS | UDT | DLT

$i = '';
if (isset($_GET['accion'])) {
    $i = $_GET['accion'];
}

if (isset($_GET['id'])) {
    $codigo = $_GET['id'];
}

if ($i == 'DLT') {    
    $sql="
    UPDATE `tipo_equipo` SET
    `estado` = 'I'
    WHERE `codtipo_equipo` = '$codigo'
    ";

    if ($mysqli->query($sql)) {
        $msj ='successdlt';
    } else {
        $msj ='errordlt';
    }

    header("Location: ../../equipos_mant.php?s=".$msj);
}

?>