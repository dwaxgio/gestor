<?php/*
En caso de error al cargar en servidor (con el mensaje de los headers ya enviados en login) aplicar lo siguiente
<?php
ob_start();
?>
// al final del documento:
<?php
ob_end_flush();
?> */
include("controllers/conectardb.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    $myusername = mysqli_real_escape_string($conn, $_POST['username']);
    $mypassword = mysqli_real_escape_string($conn, $_POST['password']);
    //$sql = "SELECT * FROM usuario WHERE nombre1 = '$myusername' and dni = '$mypassword'";
    $sql = "SELECT * FROM usuario WHERE ID = '$myusername' and CONTRASENA = '$mypassword'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $active = $row['active'];
    $count = mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row
    if ($count == 1) {
        //session_register("myusername");
        $_SESSION['login_user'] = $myusername;
        header("location: views/0_seleccion.php");
    } else {
        //$error = "El usuario o la contraseña es invalido";
        //echo "<script type='text/javascript'>alert('$error');</script>";
        echo "<script type='text/javascript'>alert('Usuario o contraseña invalida');</script>";
    }
}
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
    <link rel="stylesheet" href="views/assets_login/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/assets_login/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="views/assets_login/css/form-elements.css">
    <link rel="stylesheet" href="views/assets_login/css/style.css">
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" type="image/png" href="views/assets/img/favicon.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="views/assets_login/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="views/assets_login/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="views/assets_login/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="views/assets_login/ico/apple-touch-icon-57-precomposed.png">
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
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><strong>Inicio de sesión</strong></h3>
                                <p><strong>Ingrese el nombre de usuario y contraseña:</strong></p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="" method="post" class="login-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Usuario</label>
                                    <input type="text" name="username" placeholder="Usuario..." class="form-username form-control" id="form-username">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Contraseña</label>
                                    <input type="password" name="password" placeholder="Contraseña..." class="form-password form-control" id="form-password">
                                </div>
                                <button type="submit" class="btn"><strong>Iniciar sesión</strong></button>
                            </form>
                            <!--<div><?php
                                        echo "<script type='text/javascript'>alert('$error');</script>";
                                        ?>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Javascript -->
    <script src="views/assets_login/js/jquery-1.11.1.min.js"></script>
    <script src="views/assets_login/bootstrap/js/bootstrap.min.js"></script>
    <script src="views/assets_login/js/jquery.backstretch.min.js"></script>
    <script src="views/assets_login/js/scripts.js"></script>
</body>
</html>