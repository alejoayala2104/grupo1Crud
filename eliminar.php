<!DOCTYPE html>
<html lang="es">

<head>
  <title>Borrar registros de la base de datos</title>
</head>
<body>

<div>
  <h1>Borrar un registro</h1>
  <br>
  <?php
    include "conexion.php";
    $conexion = conexion();
    if(! $_POST) {
  ?>
      <form method="POST" action="borrar.php">
        Nombre<br>
        <?php
          //Creamos la sentencia SQL y la ejecutamos
          $ssql="select nombre from clientes order by nombre";
          $result = $conexion->query($ssql);
        
          echo '<select name="nombre">';
          //Mostramos los registros en forma de menú desplegable
          while ($row = $result->fetch_array()) {
            echo '<option>'.$row["nombre"];
          }
          $result->free_result();
        ?>
        </select>
        <br>
        <input TYPE="submit" value="Borrar">
      </form>
  <?php
    } else {
      // Recibimos los datos del formulario
      $nombre = $_POST["nombre"];

      //Creamos la sentencia SQL
      $ssql = "delete from clientes where nombre='$nombre'";

      // Ejecutamos la sentencia de borrado
      if($conexion->query($ssql)) {
        echo '<p>Contacto borrado con éxito</p>';
      } else {
        echo '<p>Hubo un error al borrar el contaco: ' . $conexion->error . '</p>';
      }
    }
    $conexion->close();
  ?>
  <p>
    <a href="borrar.php">Borrar otro registro</a>
  </p>
  <p>
    <a href="actualizar.php">Actualizar</a>
  </p>
  <p>
    <a href="seleccionar.php">Listar</a>
  </p>
</div>

</body>
</html>