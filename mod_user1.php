<!DOCTYPE html>
<html>

<head>
    <?php include("head.php") ?>
</head>

<body>
    <?php include("menu.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <h3>Modificar registros del usuario</h3>
                <br>
                <form action="mod_user2.php" method="post">
                    <div class="mb-3">
                        <label for="txtced" class="form-label">Digite el id del usuario</label>
                        <input type="number" required name="txtced" id="txtced" class="form-control" min="0">
                    </div>
                    
                    <input type="submit" value="Buscar" class="btn btn-success">
                </form>
            </div>
            <div class="col"></div>
        </div>



    </div>
    <!--Fin contenderor-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>