<?php
include('controllers/conectardb.php');
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($conn, "select ID from usuario where ID = '$user_check' ");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);


$login_session = $row['ID'];



/*para control de sesión*/

/*$statement = $conexion->prepare('SELECT * FROM usuario WHERE nombre1 = :usuario AND DNI = :password');
$statement->execute(array(':usuario' => $usuario, ':password' => $password));
$resultado = $statement->fetch();

if ($resultado['admin'] === 1) {
   $_SESSION['usuario'] = "admin";
} else {
   $_SESSION['usuario'] = "user";
}*/

/*Fin control sesión*/


if (!isset($_SESSION['login_user'])) {
   header("location:../index.php");
}
