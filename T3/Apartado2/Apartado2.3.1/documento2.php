<?php
    session_start();
    echo "Nombre: ".$_SESSION["nombre"]." ".$_SESSION["apellidos"];
?>