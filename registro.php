<!doctype html>
<html lang="es">

<head>

    <?php require("headLink.php") ?>

    <!-- Estilos CSS ESTA PAGINA-->
    <link rel="stylesheet" href="css/registro.css">

    <title>Registro</title>

</head>

<body>

    <?php include("header.php") ?>

    <div class="container-fluid" id="contenido1">

        <div class="row">

            <div class="col-12 col-lg-6 imagenRegistro">
                <img src="img/Registro.svg" alt="">
            </div>

            <div class="col-12 col-lg-6">

                <h2 id="Text-Registro">Registro</h2>

                <form method="POST" action="registro.php">

                    <input class="campo-formulario" type="text" name="Nombre" placeholder=" Nombre">
                    <input class="campo-formulario" type="email" name="Correo" placeholder=" Correo">
                    <input class="campo-formulario" type="password" name="Contraseña" placeholder="Contraseña">

                    <input id="Registrarme" type="submit" value="Registrarme" name="Registrarme">

                </form>

                <?php

                 if (isset($_POST['Registrarme'])) {
                    include("DB/abrir_conexion.php");

                    $nombre = $_POST['Nombre'];
                    $correo = $_POST['Correo'];
                    $contraseña = $_POST['Contraseña'];
                    $fecha = date("Y/m/d");

                    $consulta = mysqli_query($conexion, " SELECT * FROM $tabla_db1 where UserCorreo = '" . $correo . "' ");

                    $fila = mysqli_num_rows($consulta);

                    if ($fila == 1) {

                ?>

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
                                    Opps parece que este correo ya esta registrado
                                </div>
                            </div>
                        </div>

                <?php

                    } else if ($fila == 0) {

                        $conexion->query("INSERT INTO $tabla_db1 (UserId, UserNombre, UserCorreo, UserContraseña, UserRegiFecha) values (' ','$nombre','$correo','$contraseña','$fecha')");

                ?>

                        <div class="animate__bounceIn">
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">

                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />

                                </symbol>

                            </svg>

                            <div class="alert mesajeOk d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                    <use xlink:href="#check-circle-fill" />
                                </svg>
                                <div>
                                    Se a registrado correctamente, ya puede iniciar sesion
                                </div>
                            </div>
                        </div>
                <?php
                    }

                    include("DB/cerrar_conexion.php");
                 }
                ?>

            </div>

        </div>



    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>