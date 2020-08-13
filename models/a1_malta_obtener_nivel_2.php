<?php
require_once("../controllers/conectardb.php");

/*$continente=$_POST['continente'];

	$sql="SELECT n2.*
    from nivel_2 as n2 
    left join nivel_1 as n1 
    on n2.ID_NIVEL_1 = n1.ID 
    where n1.DESCRIPCION='$continente'";


	$result=mysqli_query($conn,$sql); // conn, sentencia sql

	$cadena="<label>SELECT 2 (" . $continente .")</label> 
			<select id='lista2' name='lista2'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
	}

    echo  $cadena."</select>"*/

    $id_departamento = $_POST['id_departamento'];
	
	$queryM = "SELECT n2.DESCRIPCION
    from nivel_2 as n2 
    left join nivel_1 as n1 
    on n2.ID_NIVEL_1 = n1.ID 
    where n1.ID='$id_departamento'";

	$resultadoM = $conn->query($queryM);
	
	$html= "<option value='0'>$id_departamento</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
       $html.= "<option value='".$rowM[ID]."'>".$rowM[DESCRIPCION]."</option>";
       // $html.= "<option value='".$rowM['nivel_2.ID']."'>".$rowM['nivel_2.DESCRIPCION']."</option">;
	}
	
	echo $html;
    ?>