<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Uno</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <table>
        <tr>
            <th>Formulario de Actualización de datos</th>
        </tr>
        <tr>
            <td>
                <form>

                    <label class="flabel">Identificación</label>
                    <input type="number" name="Id" id="Id" required min="0" class="ftxt">

                    <label class="flabel">Nombres</label>
                    <input type="text" name="Nombre" id="Nombre" required class="ftxt">

                    <label class="flabel">Nombres</label>
                    <input type="text" name="Nombre" id="Nombre" required class="ftxt">
            
                    <label class="flabel">Codigo Estudiantil</label>
                    <input type="number" name="txtCodigo" id="txtCodigo" required min="0" class="ftxt" placeholder="Código">
            
                    <label class="flabel">Documento de identificación</label>
                    <input type="number" name="txtId" id="txtId" required min="0" class="ftxt" placeholder="No Identificación">
            
                    <label class="flabel">Correo Electrónico</label>
                    <input type="email" name="txtCorreo" id="txtCorreo" required placeholder="nombre@dominio" class="ftxt" >
            
                    <label class="flabel">Celular</label>
                    <input type="number" name="txtCelular" id="txtCelular" required class="ftxt"placeholder="Número celular">
            
                    <input type=submit value=Agregar class="fboton">
                    <input type=button value=Modificar class="fboton">
                    <input type=button value=Eliminar class="fboton">
            
                </form>
            </td>
        </tr>
    </table>



</body>
</html>