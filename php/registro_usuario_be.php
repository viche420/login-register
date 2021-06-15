<?php

  include 'conexion_be.php';

 $nombre= $_POST['nombre'];
 $apellido= $_POST['apellido'];
 $correo=$_POST['correo'];
 $contrasena=$_POST['contrasena'];
 $usuario=$_POST['usuario'];
 
    $query= "INSERT INTO cliente(nombre, apellido, correo, contrasena, usuario)
              VALUES('$nombre', '$apellido', '$correo', '$contrasena', '$usuario')";


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