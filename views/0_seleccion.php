<?php
include('../session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="../views/assets_login/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../views/assets_login/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../views/assets_login/css/form-elements.css">
    <link rel="stylesheet" href="../views/assets_login/css/style.css">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" type="image/png" href="../views/assets/img/favicon.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../views/assets_login/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../views/assets_login/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../views/assets_login/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../views/assets_login/ico/apple-touch-icon-57-precomposed.png">



</head>

<!-- <body background="views\assets_login\img\backgrounds/1.png"> -->

<body background="">

    <!-- Top content -->
    <div class="top-content">

        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong></strong></h1>
                        <div>
                            Usuario: <b><?php echo $_SESSION['login_user']; ?>
                        </div>
                        <div>
                            <p><a href="../logout.php">Cerrar sesión</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">

                        <div class="form-top-center">

                            <a href="../views/a1_alta.php" class="btn btn-primary btn-lg btn-block">McDonald's reclamaciones</a>

                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">

                        <div class="form-top-center">

                            <a href="../views/c1_codificaciones.php" class="btn btn-primary btn-lg btn-block">Gestor McDonald's reclamaciones</a>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="../views/assets_login/js/jquery-1.11.1.min.js"></script>
    <script src="../views/assets_login/bootstrap/js/bootstrap.min.js"></script>
    <script src="../views/assets_login/js/jquery.backstretch.min.js"></script>
    <script src="../views/assets_login/js/scripts.js"></script>

</body>

</html>