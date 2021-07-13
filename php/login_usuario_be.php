<?php
$conexion = mysqli_connect("localhost", "root", "", "login-register");

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

  $validar_login = mysqli_query($conexion, "SELECT * FROM cliente WHERE correo='$correo' and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    header("location: http://localhost/login-register/bienvenido.php ");
    exit;
}else{
    echo '
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../index.php";
        </script>
    ';
    exit;
}

