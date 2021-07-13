<?php

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$query = "INSERT INTO contacto (nombre, correo, telefono, mensaje)
        VALUES('$nombre','$correo','$telefono','$mensaje')";


$ejecutar= mysqli_query($conexion, $query);
if($ejecutar) {
    echo '
    <script>
        alert("consulta enviada con exito");
        window.location= "../index.php";
    </script>
    ';
} else { '
    <script>
        alert("error al generar la consulta");
        window.location= "../index.php";
    </script>
    ';
}
mysqli_close($conexion);
?>
