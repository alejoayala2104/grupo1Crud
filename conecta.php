<?php
    function conectar(){
        $bd = mysqli_connect("localhost","root","","grupo1db");
        if (!$bd){
            echo "<h3>Error de conexión</h3>Base de datos usuarios no diponible";
            return NULL;
        }
        else{
            return $bd;
        }
    }
?>