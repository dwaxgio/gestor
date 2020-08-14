<?php
/*$servername = 'sql106.byethost.com';
$username = 'b22_24233941';
$password = 'Dwaxgio123*';
$database = 'b22_24233941_prestamos';*/

/*
En caso de error al cargar en servidor (con el mensaje de los headers ya enviados en login) aplicar lo siguiente
<?php
ob_start();
?>
// al final del documento:
<?php
ob_end_flush();
?> */

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'gestor_contactos';


$conn = new mysqli($servername, $username, $password, $database); //Conectar a base de datos trabajando con objetos
   
//se valida si se conecta a la base de datos    
    
   /*//  Eliminar comentario para verificar conexion de db
    if($conn->connect_error)
    {
        die("Conexion errada".$conn->connect_error);//en caso de no conectar
    }
    else
    {
        echo "Conexion exitosa";//En caso de conexion correcta
         //echo "<script>location.href='../index.php';</script>";
    }  */
    
    /*NOTA: Ejecutar ubicando en el url del navegador este archivo, debe mostrar CONEXION EXITOSA si no presenta problemas, para verificar
    lo anterior, se puede hacer la prueba cambiando la clave , y al ejecutar el archivo debe arrojar un mensaje de error*/
   
    //$conectar->close(); //aca se esta cerrando la base de datos, no colocarlo
