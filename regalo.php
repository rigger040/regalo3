<?php

include "regalo.html";

$nombre = null;
$apellido = null;
$cedula = null; 

if(isset($_GET['nombre']) and isset($_GET['apellido']) and isset($_GET['cedula'])){

        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $cedula = $_GET['cedula'];
        
        echo "Nombre: $nombre <br> Apellido: $apellido <br> Cedula: $cedula";
}
