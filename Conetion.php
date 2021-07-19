<?php

    $servername = "bdwebredes.database.windows.net";
    $conexion = array(
        "Database" => "Formulario",
        "UID" => "Lasport",
        "PWD" => "Chabacano12",
        "CharacterSet" => "UTF-8"
    );
    $con = sqlsrv_connect($servername,$conexion);

?>
