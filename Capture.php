<?php
include ("Conetion.php");
$IdUsuario = $_POST ['IdUsuario'];
$Nombre = $_POST ['Nombre'];
$ApPaterno = $_POST ['ApPaterno'];
$ApMaterno = $_POST ['ApMaterno'];

$query ="INSERT INTO Datos (IdUsu, Nombre, ApMataeno, ApPaterno) values('$IdUsuario','$Nombre','$ApMaterno','$ApPaterno')";
$res = sqlsrv_prepare($conn,$query);

if(sqlsrv_execute($res)){
    echo 'Datos insertados correctamente';
}else {
    echo 'Error al insertar los datos';
}

?>


