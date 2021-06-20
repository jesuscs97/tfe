<?php

$link = mysqli_connect('localhost', 'root', '','tfe');
if(!$link){
    echo'No Se Pudo Establecer Conexion Con El Servidor: '. mysqli_connect_error();
}

$modelo=$_POST["modelo"];
$marca=$_POST["marca"];
$numero=$_POST["N_Referencia"];


    $sqlgrabar="INSERT INTO maquinaria(Marca,Modelo,Numero_Referencia) values ('$marca','$modelo','$numero')";
    mysqli_query($link, $sqlgrabar);

?>