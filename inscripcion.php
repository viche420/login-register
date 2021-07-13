<?php
include 'conexion_be.php'
$cursoelegido = $_POST['cursoelegido'];
$fechainicio = $_POST['fechainicio'];
$horario  =  $_POST['horario'];
$nivel = $_POST['nivel'];

$query="INSERT INTO curso (cursoelegido, fechainicio, horario, nivel)
            VALUES ('$cursoelegido','$fechainicio','$horario','$nivel')";
            $ejecutar = mysqli_query($conexion, $query);

            if($ejecutar) {
                echo '
                <script>
                    alert("Usuario almacenado exitosamente");
                    window.location= "../index.php";
                </script>
        
                ';
            } else { '
                <script>
                    alert("Intentalo de nuevo, usuario no almacenado");
                    window.location= "../index.php";
                </script>
                ';
            }
            
        mysqli_close($conexion);









?>