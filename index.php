<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Uno</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <nav>
        <a href="index.php" class="link_activo">Agregar</a>
        <a href="modificar.php">Modificar </a>
        <a href="consultar.php">Consultar </a>
        <a href="eliminar.php">Eliminar </a>
    </nav>
    
    <table>
        <tr>
            <th>Formulario</th>
        </tr>
        <tr>
            <td>
                <form action="agregar.php" method="POST">

                    <label class="flabel">Identificación</label>
                    <input type="number" name="id" id="id" required min="0" class="ftxt" placeholder="Identificación">
                    
                    <label class="flabel">Nombres</label>
                    <input type="text" name="Nombre" id="Nombre" required class="ftxt" placeholder="Nombre">
                    
                    <label class="flabel">Apellidos</label>
                    <input type="text" name="apellido" id="apellido" required class="ftxt" placeholder="Apellido">
            
                    <label class="flabel">Fecha de Nacimiento</label>
                    <input type="date" name="fecha" id="fecha" required class="ftxt" >
            
                    <label class="flabel">Dirección</label>
                    <select name="comunas" id="comunas" class="ftxt">
                        <option value="1">Comuna uno</option>
                        <option value="2">Comuna dos</option>
                        <option value="3">Comuna tres</option>
                        <option value="4">Comuna cuatro</option>
                        <option value="5">Comuna cinco</option>
                        <option value="6">Comuna seis</option>
                        <option value="7">Comuna siete</option>
                        <option value="8">Comuna ocho</option>
                        <option value="9">Comuna nueve</option>
                        <option value="10">Comuna diez</option>
                        <option value="11">Comuna once</option>
                        <option value="12">Comuna doce</option>
                    </select>
            
                    <input type=submit value=Agregar class="fboton">

           
                </form>
            </td>
        </tr>
    </table>



</body>
</html>