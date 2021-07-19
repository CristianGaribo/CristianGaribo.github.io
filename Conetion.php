<?php

    $servername = "DESKTOP-UQ7DEF8\SQLEXPRESS";
    $conexion = array(
        "Database" => "Registro",
        "UID" => "sa",
        "PWD" => "123",
        "CharacterSet" => "UTF-8"
    );
    $con = sqlsrv_connect($servername,$conexion);

?>
