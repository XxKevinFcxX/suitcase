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
                <img class="animate__bounceIn" src="img/error.svg" alt="">
            </div>

            <div class="col-12 col-lg-6">

                <h2 id="Text-Iniciar-sesion">Iniciar sesion</h2>

                <form action="validar.php" method="POST">

                    <input class="campo-formulario" type="text" name="Correo" placeholder=" Correo">
                    <input class="campo-formulario" type="text" name="Contraseña" placeholder=" Contraseña">

                    <input id="Iniciar-sesion" type="submit" value="Iniciar sesion">

                </form>

                <div class="animate__bounceIn">
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </symbol>
                    </svg>

                    <div class="alert mesajeError d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                            <use xlink:href="#exclamation-triangle-fill" />
                        </svg>
                        <div>
                            Opps ha ocurrido un error contraseña o correo no valido
                        </div>
                    </div>
                </div>


            </div>

        </div>



    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>