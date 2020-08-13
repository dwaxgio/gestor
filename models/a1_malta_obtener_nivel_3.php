<?php
//require_once("../controllers/conectardb.php");

if (isset($_POST['id'])) :
	require_once("../controllers/conectardb.php");
	$id_departamento = $_POST['id'];
	//$user=new ApptivaDB();
	$queryM = "SELECT *
    from nivel_3 as n3 
    left join nivel_2 as n2 
    on n3.ID_NIVEL_2 = n2.ID 
    where n2.ID='$id_departamento'";

	$html = "<option value='0'>$id_departamento</option>";

	$resultadoM = $conn->query($queryM);
	foreach ($resultadoM  as $value)
		$html .= "<option value='" . $value[ID] . "'>" . $value[DESCRIPCION] . "</option>";
	echo $html;
endif;

/*if(isset($_POST['id'])):
	require_once("../controllers/conectardb.php");

	$queryM = 'SELECT *
    from nivel_3 as n3 
    left join nivel_2 as n2 
    on n3.ID_NIVEL_2 = n2.ID 
	where n2.ID='.$_POST['id'];	
	
	$u = $conn->query($queryM);

	$html="";
	foreach ($u as $value)
		$html.="<option value='".$value[ID]."'>".$value[DESCRIPCION]."</option>";
	echo $html;	
endif;*/

    /*$id_departamento = $_POST['id'];
	
	$queryM = "SELECT *
    from nivel_3 as n3 
    left join nivel_2 as n2 
    on n3.ID_NIVEL_2 = n2.ID 
    where n2.ID='$id_departamento'";

	$resultadoM = $conn->query($queryM);
	
	$html= "<option value='0'>$id_departamento</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
       $html.= "<option value='".$rowM[ID]."'>".$rowM[DESCRIPCION]."</option>";
       // $html.= "<option value='".$rowM['nivel_2.ID']."'>".$rowM['nivel_2.DESCRIPCION']."</option">;
	}
	
	echo $html;*/
