<!doctype html>
<html lang="es">

<head>

    <?php require("headLink.php") ?>

    <!-- Estilos CSS ESTA PAGINA -->
    <link rel="stylesheet" href="css/user.css">

    <!-- Chart.js Graficas -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Mi perfil</title>

</head>

<body>

    <?php include("headerReg.php") ?>

    <div class="container-fluid" id="contenido1">

        <div class="row">

            <h2 class="letra1 text-center">Reporte general</h2>

        </div>

        <div class="row">

            <div class="col-6 col-md-2" id="contenedor2">

                <img id="userImg" src="img/user2.svg" alt="">

            </div>

            <div class="col col-md-2" id="contenedor2">

                <h2 id="userName" class="letra1">Kevin andres</h2>

            </div>

            <div class="col-12 col-md-8">

                <canvas id="myChart" width="100%" height=""></canvas>

                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                            datasets: [{
                                label: '# of Votes',
                                data: [12, 19, 3, 5, 2, 3],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    '#ff931f',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 4
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                </script>

            </div>

            <div class="col-12" id="">
                <br>
                
            </div>

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
                crossorigin="anonymous"></script>

</body>

</html>