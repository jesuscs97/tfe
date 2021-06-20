<?php

$link = mysqli_connect('localhost', 'root', '','tfe');
if(!$link){
    echo'No Se Pudo Establecer Conexion Con El Servidor: '. mysqli_connect_error();
}

$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$mensaje=$_POST["mensaje"];


    $sqlgrabar="INSERT INTO ayuda(nombre,correo,mensaje) values ('$nombre','$correo','$mensaje')";
    mysqli_query($link, $sqlgrabar);

?>