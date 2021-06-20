<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="tfe";

$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("NO HAY CONEXION: ".mysqli_connect_error());
}

?>