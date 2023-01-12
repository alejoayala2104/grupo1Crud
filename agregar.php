<?php
include("conecta.php");
$con=conectar();

$id = $POST['id'];
$nombre = $POST['nomusu'];
$apellido = $POST['apeusu'];
$fecha = $POST['fecnacusu'];
$comuna = $POST['comunausu'];

$sql="INSERT into usuarios VALUES('$id', '$nombre', '$apellido', '$fecha', '$comuna')";
$query = mysqli_query($con, $sql);
?>