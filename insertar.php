<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
  $consulta="INSERT INTO equipo (id_equipo,nombre,ciudad) VALUES ('14', 'Los Robertos', 'Torrent')";

  $resultado =$conexion->query($consulta);
  if (!$resultado)echo $conexion->error;

  $consulta="SELECT * FROM equipo ORDER BY id_equipo DESC LIMIT 1";
  $resultado= $conexion->query($consulta);


}

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
    <title></title>
  </head>
  <body>

    <div class="container">

      <nav>
  <div class="nav-wrapper">
    <a href="#" class="brand-logo">Logo</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="index.php">Lista Equipos</a></li>
      <li><a href="insertar.php">Insertar</a></li>

    </ul>
  </div>
  <table>
    <tr>
      <td>Id Equipo</td>
      <td>Nombre</td>
      <td>Ciudad</td>
    </tr>
    <?php
    foreach ($resultado as $jugador) {
      echo "<tr>";
      echo "<td>".$jugador{'id_equipo'}."</td>";
      echo "<td>".$jugador{'nombre'}."</td>";
      echo "<td>".$jugador{'ciudad'}."</td>";
      echo "</tr>";
    }
    ?>
  </table>
</nav>
  </div>
    <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
