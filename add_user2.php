<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php") ?>
</head>

<body>
    <?php include("menu.php"); ?>
    <div class="container">
        <br>
       <h3>Resultado de la inserción</h3>
        <?php
            include("conecta.php");
            $bd = conectar();

            $ced = $_POST["txtced"];
            $nom = $_POST["txtnom"];
            $ape = $_POST["txtape"];
            $fec = $_POST["txtfec"];
            $tel = $_POST["txttel"];

            $sql = "insert into usuarios values ('$ced','$nom','$ape','$fec','$tel')";
            // echo $sql;
            $res = "";
            try {
                $res = mysqli_query($bd,$sql);
            } catch (Exception $e) {
            }

            if (!$res){
                echo "<div class='alert alert-danger' role='alert'><b>Error</b><br>Registro no adicionado!!<br>" . mysqli_error($bd) . "</div>";
            }
            else {
                echo "<div class='alert alert-success' role='alert'><b>Información</b><br>Registro Adicionado con éxito!!</div>";
            }
            mysqli_close($bd);
        ?>


    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>