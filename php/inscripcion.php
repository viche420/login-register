<?php
include 'conexion_be.php';

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
                    alert("Te has inscripto correctamente");
                    window.location= "../index.php";
                </script>
        
                ';
            } else { '
                <script>
                    alert("error de inscripcion");
                    window.location= "../index.php";
                </script>
              
                ';
            }
            
           mysqli_close($conexion);









?>