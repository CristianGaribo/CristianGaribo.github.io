<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:bdwebredes.database.windows.net,1433; Database = Formulario", "Lasport", "Chabacano12");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Lasport", "pwd" => "Chabacano12", "Database" => "Formulario", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:bdwebredes.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
