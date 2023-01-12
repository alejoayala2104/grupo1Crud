<!DOCTYPE html>
<html>
<head>
    <?php include("head.php") ?>
</head>

<body>
    <?php include("menu.php"); ?>
    <div class="container">
        <br>
        <h3>Resultado de la modificación</h3>
        <?php
            include("conecta.php");
            $bd = conectar();
          
            mysqli_begin_transaction($bd);
            $ced = $_GET["txtced"];
            $nom = $_GET["txtnom"];
            $ape = $_GET["txtape"];
            $fec = $_GET["txtfec"];
            $tel = $_GET["txttel"];
            $ced_original = $_GET["txtced_original"];

            $sql = "update usuarios set id = '$ced', nomusu = '$nom', apeusu = '$ape', fecnacusu='$fec', comunausu = '$tel' where id = '$ced_original' ";
            // echo $sql;

            $res = mysqli_query($bd,$sql);

            if (!$res){
                echo "<div class='alert alert-danger' role='alert'><b>Error</b><br>Registro no modificado!!<br>" . mysqli_errno($bd) ." - " . mysqli_error($bd) . "</div>";
                mysqli_rollback($bd);
            }
            else {
                echo "<div class='alert alert-success' role='alert'><b>Información</b><br>Registro Modificado con éxito!!</div>";
                mysqli_commit($bd);
            }
            mysqli_close($bd);
        ?>

    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>