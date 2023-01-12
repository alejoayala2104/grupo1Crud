<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php") ?>
</head>
<body>
    <?php 
            include("menu.php");
            include("conecta.php");
            $bd = conectar();
    ?>    
    <div class="container">        
        <br>
        <h3>Listado de usuarios registrados</h3>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento</th>
                <th>Comuna</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "select id, nomusu, apeusu, fecnacusu, comunausu from usuarios order by nomusu";
                    $datos = mysqli_query($bd,$sql);
                    while ($arr = mysqli_fetch_array($datos)){
                        echo "<tr>";
                        echo "<td>$arr[0]</td>";
                        echo "<td>$arr[1]</td>";
                        echo "<td>$arr[2]</td>";
                        echo "<td>$arr[3]</td>";
                        echo "<td>$arr[4]</td>";
                        echo "</tr>";
                    }
                    mysqli_close($bd);
                ?>
            </tbody>
        </table>

        <br>
        <div id=divres></div>
    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/codigo.js"></script>
    
</body>
</html>