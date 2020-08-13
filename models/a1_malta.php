<?php
require_once("../controllers/conectardb.php");

$dni = $_POST['dni'];
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$direccioncasa = $_POST['direccioncasa'];
$celular = $_POST['celular'];
$direccionoficina = $_POST['direccionoficina'];
$tipooficina = $_POST['tipooficina'];
$observacion = $_POST['observacion'];
$usuario = $_POST['usuario'];


$sql_validar = "SELECT DNI FROM cliente WHERE DNI = 'dni'";
$resultado = $conn->query($sql_validar);
$res = $resultado->fetch_assoc();
if (strlen($res['dni']) > 0) {
    echo "<script>alert('Ya existe el cliente')</script>\n";
    echo "<script>location.href='../views/2_clientes.php';</script>";
} else {
    if (strlen($dni) == 0) {
        echo "<script>alert('Debe digitar el DNI')</script>";
        echo "<script>location.href='../views/2_clientes.php';</script>";
    } else {
        $sql = "INSERT INTO cliente (DNI, nombre1, nombre2, apellido1, apellido2, direccionCasa, direccionOficina,  tipoOficina, celular, observaciones, usuario)
                VALUES ('$dni','$nombre1','$nombre2','$apellido1','$apellido2','$direccioncasa','$direccionoficina', '$tipooficina','$celular','$observacion', '$usuario')";
        if ($conn->query($sql) == true) {
            echo "<script>alert('Nuevo cliente creado')</script>";
            echo "<script>location.href='../views/2_clientes.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
