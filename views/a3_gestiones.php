<?php
include('../session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    McDonald's
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <!--<img src="../assets/img/icono.png">-->
          </div>
        </a>
        <a href="#" class="simple-text logo-normal">
          McDonald's
        </a>
        <div>
         Usuario: <b><?php echo $_SESSION['login_user']; ?>
        </div>
        <div>
        <p><a href="../logout.php">Cerrar sesión</a></p>
        </div>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">        
          <li>            
            <a href="./a1_alta.php">
              <!--<i class="nc-icon nc-badge"></i>-->
              <p>Alta Contacto</p>
            </a>
          </li>
          <li>
            <a href="./a2_buscar_contacto.php">
              <!--<i class="nc-icon nc-badge"></i>-->
              <p>Buscar Contacto</p>
            </a>
          </li>
          <li   class="active ">
            <a href="./a3_gestiones.php">
              <!--<i class="nc-icon nc-badge"></i>-->
              <p>Gestiones</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">Alta</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">  
</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                
              </div>
              <div class="card-body">
                <form action="../models/a1_malta.php" method="post">
                
                  <div class="row">                    
                    <!-- inserción de usuario de sesión -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label></label>
                        <input type="hidden" class="form-control" placeholder="" value="<?php echo $_SESSION['login_user']; ?>" name="usuario">
                      </div>
                    </div>
                  </div>
                  
                  <h6>Gestiones</h6>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Primer nombre</label>
                        <input type="text" class="form-control" placeholder="" value="" name="nombre1" required="required">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Segundo nombre</label>
                        <input type="text" class="form-control" placeholder="" value="" name="nombre2">
                      </div>
                    </div>
                  
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Primer apellido</label>
                        <input type="text" class="form-control" placeholder="" value="" name="apellido1" required="required">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Segundo apellido</label>
                        <input type="text" class="form-control" placeholder="" value="" name="apellido2">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Documento Identidad</label>
                        <input type="number" class="form-control" placeholder="" value="" name="dni" required="required">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Nacionalidad</label>
                        <select class="form-control" name="nacionalidad" id="nacionalidad">
                          <option value="0">Seleccione:</option>
                          <?php
                              require_once ('../controllers/conectardb.php');
                              $query = $conn -> query ("SELECT * FROM nacionalidad");
                              while ($valores = mysqli_fetch_array($query)) {
                               echo '<option value="'.$valores[ID].'">'.$valores[DESCRIPCION].'</option>';
                              }
                            ?>
                        </select>
                      </div>
                    </div>
        
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Telefono</label>
                        <input type="number" class="form-control" placeholder="" value="" name="telefono1">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Telefono opcional</label>
                        <input type="number" class="form-control" placeholder="" value="" name="telefono2">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Codigo postal</label>
                        <input type="text" class="form-control" placeholder="" value="" name="codigopostal">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Ciudad</label>
                        <input type="text" class="form-control" placeholder="" value="" name="ciudad">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Dirección</label>
                        <input type="text" class="form-control" placeholder="" value="" name="direccion">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="" value="" name="email">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Idioma</label>
                        <select class="form-control" name="idioma" id="idioma">
                          <option value="0">Seleccione:</option>
                          <?php
                              require_once ('../controllers/conectardb.php');
                              $query = $conn -> query ("SELECT * FROM idioma");
                              while ($valores = mysqli_fetch_array($query)) {
                               echo '<option value="'.$valores[ID].'">'.$valores[DESCRIPCION].'</option>';
                              }
                            ?>
                        </select>
                      </div>
                    </div>                    
                  </div>   

                  <h6>Alta de gestión</h6>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Tipo de gestión</label>
                        <select class="form-control" name="tipogestion" id="tipogestion">
                          <option value="0">Seleccione:</option>
                          <?php
                              require_once ('../controllers/conectardb.php');
                              $query = $conn -> query ("SELECT * FROM nivel_1");
                              while ($valores = mysqli_fetch_array($query)) {
                               echo '<option value="'.$valores[ID].'">'.$valores[DESCRIPCION].'</option>';
                              }
                            ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Próximo objetivo</label>
                        <select class="form-control" name="proximoobjetivo" id="proximoobjetivo">
                          <option value="0">Seleccione:</option>
                          <?php
                              require_once ('../controllers/conectardb.php');
                              $query = $conn -> query ("SELECT * FROM gestion_estado");
                              while ($valores = mysqli_fetch_array($query)) {
                               echo '<option value="'.$valores[ID].'">'.$valores[DESCRIPCION].'</option>';
                              }
                            ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Canal de entrada</label>
                        <select class="form-control" name="canalentrada" id="canalentrada">
                          <option value="0">Seleccione:</option>
                          <?php
                              require_once ('../controllers/conectardb.php');
                              $query = $conn -> query ("SELECT * FROM canal_entrada");
                              while ($valores = mysqli_fetch_array($query)) {
                               echo '<option value="'.$valores[ID].'">'.$valores[DESCRIPCION].'</option>';
                              }
                            ?>
                        </select>
                      </div>
                    </div>
                  </div>              
                  
                  <h6>Estado de la gestión</h6>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Estado</label>
                        <select class="form-control" name="estadogestion" id="estadogestion">
                          <option value="0">Seleccione:</option>
                          <?php
                              require_once ('../controllers/conectardb.php');
                              $query = $conn -> query ("SELECT * FROM gestion_estado");
                              while ($valores = mysqli_fetch_array($query)) {
                               echo '<option value="'.$valores[ID].'">'.$valores[DESCRIPCION].'</option>';
                              }
                            ?>
                        </select>
                      </div>
                    </div>                    
                  </div>  

                  <h6>Codificación</h6>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Codifiación nivel 1</label>
                        <!--<input type="text" class="form-control" placeholder="" value="" name="codificacionnivel1">-->
                        <!--<select class="form-control" name="codificacionnivel1" id="codificacionnivel1">
                          <option value="0">Seleccione:</option>
                          <?php
                              /*require_once ('../controllers/conectardb.php');
                              $query = $conn -> query ("SELECT * FROM nivel_1");
                              while ($valores = mysqli_fetch_array($query)) {
                               echo '<option value="'.$valores[ID].'">'.$valores[DESCRIPCION].'</option>';
                              }*/
                            ?>
                        </select>-->
                        <select name="codificacionnivel1" id="codificacionnivel1" class="form-control input-md">
                              <option value="0">Seleccione:</option>
                              <?php 
                              require_once ('../controllers/conectardb.php');
                              $query = $conn -> query ("SELECT * FROM nivel_1");
                              while ($row = $query->fetch_assoc()) { ?>
                                  <option value="<?php echo $row['ID']; ?>"><?php echo $row['DESCRIPCION']; ?></option>
                              <?php } ?>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Codificación nivel 2</label>
                        <select name="codificacionnivel2" id="codificacionnivel2" class="form-control input-md">
                        <option value="0">Seleccione:</option>
                         </select>
                        <!--<div id="select2lista"></div> -->
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Codificación nivel 3</label>
                        <select name="codificacionnivel3" id="codificacionnivel3" class="form-control input-md">
                              <option value="0">Seleccione:</option>
                              <?php 
                              require_once ('../controllers/conectardb.php');
                              $query = $conn -> query ("SELECT DISTINCT * FROM nivel_3");
                              while ($row = $query->fetch_assoc()) { ?>
                                  <option value="<?php echo $row['ID']; ?>"><?php echo $row['DESCRIPCION']; ?></option>
                              <?php } ?>
                          </select>
                        <!--<div id="select2lista"></div> -->
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Codificación nivel 4</label>
                        <select name="codificacionnivel4" id="codificacionnivel4" class="form-control input-md">
                              <option value="0">Seleccione:</option>
                              <?php 
                              require_once ('../controllers/conectardb.php');
                              $query = $conn -> query ("SELECT DISTINCT * FROM nivel_4");
                              while ($row = $query->fetch_assoc()) { ?>
                                  <option value="<?php echo $row['ID']; ?>"><?php echo $row['DESCRIPCION']; ?></option>
                              <?php } ?>
                          </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Comentarios codificación</label>
                        <textarea class="form-control textarea" name="comentarioscodificacion"></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Generar Alta</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="#" target="_blank">By Edward</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
</body>

<!-- funcion javascript para llamar nivel 2 a partir de nivel 1-->

<!-- 
<script type="text/javascript">
	$(document).ready(function(){
		
    $('#codificacionnivel1').val(0);
		recargarLista();

		$('#codificacionnivel1').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"../models/a1_malta_obtener_nivel_2.php",
			data:"continente=" + $('#codificacionnivel1').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script> -->

<script language="javascript">
        $(document).ready(function () {
            $("#codificacionnivel1").change(function () {

                //$('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');

                $("#codificacionnivel1 option:selected").each(function () {
                    id_departamento_ = $(this).val();
                    $.post("../models/a1_malta_obtener_nivel_2.php", {id_departamento: id_departamento_}, function (data) {
                        $("#codificacionnivel2").html(data);
                    });
                });
            })
        }); 
        </script>
<script  language="javascript">
        $(document).ready(function () {
            $("#codificacionnivel1").change(function () {

                //$('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');

                $("#codificacionnivel1 option:selected").each(function () {
                    id_departamento_ = $(this).val();
                    $.post("../models/a1_malta_obtener_nivel_3.php", {id_departamento: id_departamento_}, function (data) {
                        $("#codificacionnivel2").html(data);
                    });
                });
            })
        }); 
        // prueba con nivel 2 para mostrar id en nivel 1
        /*$(document).ready(function () {
            $("#codificacionnivel2").change(function () {

                //$('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');

                $("#codificacionnivel2 option:selected").each(function () {
                    id_departamento_ = $(this).val();
                    $.post("../models/a1_malta_obtener_nivel_2.php", {id_departamento: id_departamento_}, function (data) {
                        $("#codificacionnivel1").html(data);
                    });
                });
            })
        });*/

       
    </script>

</html>