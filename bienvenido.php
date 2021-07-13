<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LOS PEDA</title>
   <link rel="stylesheet" href="assets/css/estilos2.css">
</head>

<body>

      <h1>LOS PEDA</h1>
      
      <div class=h2>
         <h2>Inscripcion a cursos</h2>
     </div>


      <div class="cursos">
           <!-- <form method="post">-->
            <form action="php/inscripcion.php" id="curso" method="POST" class="curso">
                  <label for="curso">Elegir el curso:</label>
               <select id="cursoelegido" name="cursoelegido">
                  <option value="Programacion">Programacion</option>
                  <option value="Diseño UX/UI">Diseño UX/UI</option>
                  <option value="Data Science">Data Science</option>
                  <option value="Marketing Digital">Marketing Digital</option>
               </select>
                  <label for="start">Fecha de inicio:</label>
                  <input type="date" id="fechainicio" name="fechainicio" value="2021-07-08" min="2021-01-01" max="2021-12-31">
                  <label for="horario ">Elegir el horario:</label>
                  <input type="time" name="horario" value="15:11:00" max="22:30:00" min="10:00:00" step="1">
                  <label for="Nivel">Elegir el nivel:</label>
                  <select id="nivel" name="nivel">
                        <option value="Inicial">Inicial</option>
                        <option value="Intermedio">Intermedio</option>
                        <option value="Avanzado ">Avanzado</option>
                  </select>
                  <button id=BOTON >INSCRIBIRME</button>

                     <!--<input type="button" value="Inscribirse" id="BOTON">-->
            </form>
         </div>

                     <div class="contacto">
                           <form action="php/consulta.php" id="contacto" method="POST" class="contacto">
                                    <h2>Contacto</h2>
                                 <input type="text" name="nombre" placeholder="Nombre">
                                 <input type="email" name="correo" placeholder="Correo">
                                 <input type="text" name="telefono" placeholder="Teléfono">
                                 <textarea name="mensaje" placeholder= "Escriba aqui su mensaje"></textarea>
                                    <button id=BOTON >CONSULTAR</button> 
                           </form>
                     </div>

   <script src="../assets/js/script2.js"></script>
   

</body>

</html>