<?php

//conectar a base de datos
$con = mysqli_connect("localhost", "root", "", "databaseuno");


//probrar conexcion
if(mysqli_connect_errno()) {
    echo"Algo fallo al conectarse" .mysqli_connect_error();
}else {
        echo"Conectado";
    }

?>