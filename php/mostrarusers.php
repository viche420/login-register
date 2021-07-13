<?php

$inc= include('conexion_be.php');

if ($inc) {
    $consulta  = "SELECT * FROM curso";
    $resultado = mysqli_query ($conexion, $consulta);

if ($resultado){
    while ($row = $resultado ->fetch_array()){
        $cursoelegido=$row ['cursoelegido'];
        $fechainicio=$row ['fechainicio'];
        $horario=$row ['horario'];
        $nivel=$row ['nivel'];   

        ?>

        <div>
        <h2><?php echo $cursoelegido; ?></h2>
        <div>
        <p>
        <b>Curso Elegido: </b><?php echo $cursoelegido ;?><br>
        <b>Fecha Inicio: </b> <?php echo $fechainicio; ?><br>
        <b>Horario: </b> <?php echo $horario; ?> <br>
        <b>Nivel: </b> <?php echo $nivel; ?> <br>
        </p>
        </div>
        </div>

        <?php
    }
}


?>