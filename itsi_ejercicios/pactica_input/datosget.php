<?php
if (isset($_GET['cedula'])){
    $cedula=$_GET['cedula'];
    $nombre=$_GET['nom'];
    echo "CEDULA=".$cedula."<br>";
    echo "NOMBRE=".$nombre."<br>";
}
?>