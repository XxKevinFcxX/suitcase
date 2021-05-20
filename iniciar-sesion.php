<!doctype html>
<html lang="es">

<head>

    <?php require("headLink.php") ?>

    <!-- Estilos CSS ESTA PAGINA-->
    <link rel="stylesheet" href="css/iniciar-sesion.css">

    <title>Iniciar sesion</title>

</head>

<body>

    <?php include("header.php") ?>

    <div class="container-fluid" id="contenido1">

        <div class="row">

            <div class="col-12 col-lg-6 imagenIniciar-sesion">
                <img src="img/Iniciar-sesion.svg" alt="">
            </div>

            <div class="col-12 col-lg-6">

                <h2 id="Text-Iniciar-sesion">Iniciar sesion</h2>

                <form action="validar.php" method="POST">

                    <input class="campo-formulario" type="text" name="Correo" placeholder=" Correo">
                    <input class="campo-formulario" type="text" name="Contraseña" placeholder=" Contraseña">

                    <input id="Iniciar-sesion" type="submit" value="Iniciar sesion">

                </form>

            </div>

        </div>



    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>