<?php

$hots = 'localhost';
$username = 'root';
$password = '';
$database = 'bd_asistencia';


$conexion = mysqli_connect($host,$username, $password,$database);


if (!$conexion) {
    die("Error en la conexion: " . mysqli_connect_error());
}
echo "conexion exitosa";
?>