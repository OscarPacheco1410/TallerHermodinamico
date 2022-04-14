<?php
error_reporting(0);
date_default_timezone_set("America/Mexico_City");
$fecha=date("Y-m-d");


if($_POST)
{
  $nombre=$_POST['nombre'];
  $fecha=$_POST['fecha'];
  $peso=$_POST['peso'];
  $talla=$_POST['talla'];

  $hb = $_POST['hb'];
  $sc=$_POST['sc'];
  $ph=$_POST['ph'];
  $hb=$_POST['hb'];
  $po=$_POST['po'];
  $pco=$_POST['pco'];
  $so=$_POST['so'];
  $lactato=$_POST['lactato'];
  $haco=$_POST['haco'];

  $pgs=$_POST['pgs'];
  $fio=$_POST['fio'];
  $paco=$_POST['paco'];
  $pao=$_POST['pao'];
  $sao=$_POST['sao'];

  $svo=$_POST['svo'];
  $pvo=$_POST['pvo'];

}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="CSS/estilo.css">



  <meta charset="utf-8">
  <title>Formulario</title>

  <link rel="icon" type="image/x-icon" href="formulario.ico">
</head>

<body><br>
  <div class="container">
    <center>
      <P class="encabezado">HOSPITAL REGIONAL DE ALTA ESPECIALIDAD DE IXTAPALUCA<br> UNIDAD DE CUIDADOS INTENSIVOS</p>
      <p class="encabezado">TALLER HERMODINÁMICO</p>
    </center>
    <hr>
    <div class="form-control">
      <form target="_blank" action="tabla.php" method="post" onsubmit="return checkSubmit();">
        <table class="table">
          <tr>
            <th colspan="7">Nombre:<br> <input onkeypress="soloLetras(event);" class="form-control" type="text" name="nombre" id="nombre" autocomplete="off"></th>
            <th colspan="3">Fecha:<br> <input class="form-control" type="date" name="fecha" autocomplete="off" value="<?php echo ($fecha); ?>"></th>

          </tr>

          <tr>
            <th colspan="6">Peso:<input onkeypress="soloNum(event);" class="form-control" type="text" name="peso" autocomplete="off" id="numeros"></th>
            <th colspan="2">Talla:<input class="form-control" type="text" name="talla" autocomplete="off"></th>
            <th>SC: <input onkeypress="soloNum(event);" class="form-control" type="text" name="sc" autocomplete="off" id="numeros"></th>
            <th>HB: <input onkeypress="soloNum(event);" class="form-control" type="text" name="hb" autocomplete="off" id="numeros"></th>
          </tr>
          <tr>
            <th>
              <center>Gasometría<br>Arterial</center>
            </th>
            <th>PH<input onkeypress="soloNum(event);" class="form-control" id="numeros" type="text" name="ph" autocomplete="off" id="ph"></th>
            <th>PO<sub>2</sub> <input onkeypress="soloNum(event);" class="form-control" id="numeros" type="text" name="pao" autocomplete="off"></th>
            <th>pCO<sub>2</sub> <input onkeypress="soloNum(event);" class="form-control" id="numeros" type="text" name="paco" autocomplete="off"></th>
            <th>SO<sub>2</sub> <input onkeypress="soloNum(event);" class="form-control" id="numeros" type="text" name="sao" autocomplete="off"></th>
            <th>Lactato <input onkeypress="soloNum(event);" class="form-control" id="numeros" type="text" name="lactato" autocomplete="off"></th>
            <th>HCO<sub>3</sub> <input onkeypress="soloNum(event);" class="form-control" id="numeros" type="text" name="haco" autocomplete="off"></th>
            <th colspan="3" rowspan="2">Diagnóstico<textarea class="form-control" id="numeros" name="diagnostico" rows="4" cols="50" autocomplete="off"></textarea></th>

          </tr>
          <tr>
            <th>
              <center>Gasometría <br> Venosa</center>
            </th>
            <th>PH<input onkeypress="soloNum(event);" class="form-control" id="numeros" type="text" name="ph_" autocomplete="off"></th>
            <th>PO<sub>2</sub> <input onkeypress="soloNum(event);" class="form-control" id="numeros" type="text" name="pvo" autocomplete="off"></th>
            <th>pCO<sub>2</sub> <input onkeypress="soloNum(event);" class="form-control" id="numeros" type="text" name="pco_" autocomplete="off"></th>
            <th>SO<sub>2</sub> <input onkeypress="soloNum(event);" class="form-control" id="numeros" type="text" name="svo" autocomplete="off"></th>
            <th>Lactato <input onkeypress="soloNum(event);" class="form-control" id="numeros" type="text" name="lactato_" autocomplete="off"></th>
            <th>HCO<sub>3</sub> <input onkeypress="soloNum(event);" class="form-control" type="text" name="haco_" autocomplete="off id="numeros""></th>
          </tr>
          <tr>
            <th>PGS:<input onkeypress="soloNum(event);" class="form-control" type="text" name="pgs" placeholder="PGS" autocomplete="off" id="numeros"></th>
            <th>FIO<sub>2</sub>:<input onkeypress="soloNum(event);" class="form-control" type="text" name="fio"  placeholder="FiO2" autocomplete="off" id="numeros"></th>
          </tr>
        </table>


    </div>



    <hr>
    <center>
    <input type="submit" class="btn btn-outline-primary btn-lg" name="calcular" value="Calcular">
    <a class="btn btn-outline-danger btn-lg" onClick="location.reload();" href="index.php" name="limpiar" value="Limpiar">Limpiar Datos</a>
    </center>

    </form>

    <br>
    <div>


    <br>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="JS/ValidarCal.js" type="text/javascript"></script>
<script src="JS/ValidarNum.js" type="text/javascript"></script>
<script src="JS/TextArea.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</html>
