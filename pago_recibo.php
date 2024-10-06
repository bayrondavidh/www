<?php

$servername = "	sql308.infinityfree.com";
$username = "if0_37394148"; 
$password = "qEhycdTh0saN"; 
$dbname ="if0_37394148_pago_recibo";



$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}



$docente_id= $_POST['docente_id'];
$factura_id = $_POST['factura_id'];
$docente_nombre = $_POST['docente_nombre'];
$factura_nombre= $_POST['factura_nombre'];
$factura_mes = $_POST['factura_mes'];
$docente_dispositivo = $_POST['docente_dispositivo'];
$factura_aporte = $_POST['factura_aporte'];
$docente_fecha = $_POST['docente_fecha'];

$sql = "INSERT INTO tareaphp (docente_id, factura_id, docente_nombre, factura_nombre, factura_mes, docente_dispositivo, factura_aporte, docente_fecha) VALUES ('$docente_id', '$factura_id', '$docente_nombre', '$factura_nombre', '$factura_mes' ,'$docente_dispositivo' , '$factura_aporte','$docente_fecha')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

$conn->close();


