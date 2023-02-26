<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Contactos y servicios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icons/bootstrap-icons.css">
    <link rel="shortcut icon" href="images/favicon-32x32.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <?php include("menu2.php");?>
        <div class="row">
            <h1></h1>
            <!--esta tarjeta la usamos para las llamadas -->
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <a href="llamadas.php" class="btn btn-muted">
                        <img class="card-img-top" src="imagenes/llamar.png" alt="llamar">
                        <h1>Llamar</h1>
                    </a>
                </div>
            </div>
            <!--esta tarjeta la usamos para los contactos -->
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <a href="contactos.php" class="btn btn-muted">
                        <img class="card-img-top" src="imagenes/agenda.png" alt="llamar">
                        <h1>Contactos</h1>
                    </a>
                </div>
            </div>
            <!--esta tarjeta la usamos para las fechas -->
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <a href="agenda.php" class="btn btn-muted">
                        <img class="card-img-top" src="imagenes/fecha.png" alt="llamar">
                        <h1>Agenda</h1>
                    </a>
                </div>
            </div>
        </div>
        <?php include("pie.php");?>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script>
</body>

</html>