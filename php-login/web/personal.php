<?php

$link = mysqli_connect('localhost', 'root', '','tfe');
if(!$link){
    echo'No Se Pudo Establecer Conexion Con El Servidor: '. mysqli_connect_error();
}

$nombre=$_POST["nombre"];
$DNI=$_POST["DNI"];
$N_Seg_Social=$_POST["N_Seg_Social"];


    $sqlgrabar="INSERT INTO `personal`(`id`, `nombre`, `DNI`, `N_Seg_Social`) VALUES ('[value-1]','$nombre','$DNI','$N_Seg_Social')";
    mysqli_query($link, $sqlgrabar);

?>