<?php
error_reporting(0);

if($_POST)
{
  $nombre=$_POST['nombre'];
  $fecha=$_POST['fecha'];
  $peso=$_POST['peso'];
  $talla=$_POST['talla'];


  $diagnostico=$_POST['diagnostico'];
  $hb = $_POST['hb'];
  $sc=$_POST['sc'];
  $ph=$_POST['ph'];
  $ph_=$_POST['ph_'];
  $hb=$_POST['hb'];
  $po=$_POST['po'];
  $pco=$_POST['pco'];
  $pco_=$_POST['pco_'];
  $so=$_POST['so'];
  $lactato=$_POST['lactato'];
  $lactato_=$_POST['lactato_'];
  $haco=$_POST['haco'];
  $haco_=$_POST['haco_'];

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
    <link rel="stylesheet" href="estilo.css">

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Tabla de Datos</title>
    <link rel="icon" type="image/x-icon" href="impresora.ico">
    
  </head>
  <body>
    <div id="text" class="container">

      <center>
        <P class="encabezado">HOSPITAL REGIONAL DE ALTA ESPECIALIDAD DE IXTAPALUCA<br> UNIDAD DE CUIDADOS INTENSIVOS</p>
        <p class="encabezado">TALLER HERMODINÁMICO</p>
      </center>

      <div class="form-control">
        <form id="form1" target="_blank" action="tabla.php" method="post">
          <table class="table">
            <tr>
              <th colspan="7">Nombre:<br> <input onkeypress="soloLetras(event);" class="form-control" type="text" disabled value="<?php echo ($nombre); ?>" name="nombre" id="nombre"></th>
              <th colspan="3">Fecha:<br> <input class="form-control" type="date" name="fecha" autocomplete="off" disabled value="<?php echo ($fecha); ?>"></th>

            </tr>

            <tr>
              <th colspan="6">Peso:<input class="form-control" type="text" name="peso" disabled value="<?php echo ("$peso kg"); ?>"></th>
              <th colspan="2">Talla:<input class="form-control" type="text" name="talla" disabled value="<?php echo ($talla); ?>"></th>
              <th>SC: <input class="form-control" type="text" name="sc" disabled value="<?php echo ($sc); ?>"></th>
              <th>HB: <input class="form-control" type="text" name="hb" disabled value="<?php echo ($hb); ?>"></th>
            </tr>
            <tr>
              <th>
                <center>Gasometría<br>Arterial</center>
              </th>
              <th>PH<input onkeypress="soloNum(event);" class="form-control" type="text" name="ph" disabled value="<?php echo ($ph); ?>"></th>
              <th>PO<sub>2</sub> <input class="form-control" type="text" name="pao" disabled value="<?php echo ($pao); ?>"></th>
              <th>pCO<sub>2</sub> <input class="form-control" type="text" name="paco" disabled value="<?php echo ($paco); ?>"></th>
              <th>SO<sub>2</sub> <input class="form-control" type="text" name="sao" disabled value="<?php echo ($sao); ?>"></th>
              <th>Lactato <input class="form-control" type="text" name="lactato" disabled value="<?php echo ($lactato); ?>"></th>
              <th>HCO<sub>3</sub> <input class="form-control" type="text" name="haco" disabled value="<?php echo ($haco); ?>"></th>
              <th colspan="3" rowspan="2">Diagnóstico<textarea oninput="auto_grow(this)" class="form-control text-justify" rows="5" cols="80" name="diagnostico" disabled><?php echo ($diagnostico); ?></textarea></th>

            </tr>
            <tr>
              <th>
                <center>Gasometría <br> Venosa</center>
              </th>
              <th>PH<input class="form-control" type="text" name="ph_" disabled value="<?php echo ($ph_); ?>"></th>
              <th>PO<sub>2</sub> <input class="form-control" type="text" name="pvo" disabled value="<?php echo ($pvo); ?>"></th>
              <th>pCO<sub>2</sub> <input class="form-control" type="text" name="pco_" disabled value="<?php echo ($pco_); ?>"></th>
              <th>SO<sub>2</sub> <input class="form-control" type="text" name="svo" disabled value="<?php echo ($svo); ?>"></th>
              <th>Lactato <input class="form-control" type="text" name="lactato_" disabled value="<?php echo ($lactato_); ?>"></th>
              <th>HCO<sub>3</sub> <input class="form-control" type="text" name="haco_" disabled value="<?php echo ($haco_); ?>"></th>
            </tr>


            </div>

    <table class="table table-hover">
      <tr>
        <th class="table-success" colspan="6">
          <center>
            <h5>Respiratorio</h5>
          </center>
        </th>
      </tr>
      <tr>
        <th>Presión Inspirada de O<sub>2</sub> (PIO<sub>2</sub>)</th>
        <th colspan="3"><?php echo "$pgs x $fio / 100"; ?></th>
        <th>112 mmHg</th>
        <th><?php
        $resultado="";
          $resultado_pio=$pgs*$fio/100;
          echo(round($resultado_pio,4));
         ?></th>
      </tr>
      <tr>
        <th>Presión Alveolar de O<sub>2</sub> (PAO<sub>2</sub>)</th>
        <th colspan="3"><?php
         echo ("$resultado_pio - $paco"); ?></th>
        <th>62-78 mmHg</th>
        <th>
          <?php
          $resultado_pao=$resultado_pio - $paco;
           echo (round($resultado_pao,4));?></th>
      </tr>
      <tr>
        <th>Gradiente Alveolo Arterial O<sub>2</sub> GA-aO<sub>2</sub></th>
        <th colspan="3"><?php
         echo ("$resultado_pao - $pao"); ?></th>
        <th>Con FIO<sub>2</sub> 21%<20 </th>
        <th><?php
        $resultado_gaa=$resultado_pao - $pao;
        echo (round($resultado_gaa,4)); ?></th>
      </tr>

      <tr>
        <th>Consumo Capilar de Oxigeno</th>
        <th colspan="3">
          <?php echo "($hb x 1.34)+($pao x 0.0031)";?>
        </th>
        <th>16-20 ml/O<sub>2</sub></th>
        <th><?php $resultado_cco=($hb * 1.34)+($pao * 0.0031);
        echo (round($resultado_cco,4)); ?></th>
      </tr>
      <tr>
        <th>Consumo Arterial de Oxígeno</th>
        <th colspan="3"><?php echo "($hb x 1.34 x $sao) + ($pao x 0.0031)"; ?></th>
        <th>14-19 ml/O<sub>2</sub></th>
        <th><?php
        $resultado_cao=($hb * 1.34 * $sao) + ($pao * 0.0031);
          echo (round($resultado_cao,4));?></th>
      </tr>
      <tr>
        <th>Consumo Venoso de Oxígeno</th>
        <th colspan="3"><?php echo ("($hb x 1.34 x $svo)+($pvo x 0.0031)"); ?></th>
        <th>11-16 ml/O<sub>2</sub></th>
        <th><?php
        $resultado_cvo=($hb * 1.34 * $svo)+($pvo * 0.0031);
        echo (round($resultado_cvo,4));?></th>
      </tr>
      <tr>
        <th>Diferencia Arteriavenosa D a-vO<sub>2</sub></th>
        <th colspan="3"><?php echo (round($resultado_cao,4)); echo (" - "); echo ($resultado_cvo);?></th>
        <th>4-5 ml</th>
        <th><?php $resultado_davo=$resultado_cao - $resultado_cvo;
        echo (round($resultado_davo,4)); ?></th>
      </tr>
      <tr>
        <th>Cortos Circuitos/Shunts</th>
        <th colspan="3"><?php echo ("($resultado_cco - "); echo (round($resultado_cao,4)); echo(")/($resultado_cco - $resultado_cvo) x 100"); ?></th>
        <th> <15% </th>
        <th><?php $resultado_ccs=($resultado_cco - $resultado_cao)/($resultado_cco - $resultado_cvo) * 100;
        echo (round($resultado_ccs,4)); ?></th>
      </tr>
      <tr>
        <th>Extracción de Oxígeno</th>
        <th colspan="3"><?php echo (round($resultado_davo,4)); echo (" / "); echo (round($resultado_cao,4)); echo(" x 100"); ?></th>
        <th> <20% </th>
        <th><?php $resultado_eo=$resultado_davo / $resultado_cao * 100;
        echo (round($resultado_eo,4)); ?></th>
      </tr>
      <tr>
        <th>Índice Respiratorio</th>
        <th colspan="3"><?php echo (round($resultado_davo,4)); echo (" / $pao"); ?></th>
        <th> <1 </th>
        <th><?php $resultado_ir=$resultado_davo/$pao;
        echo (round($resultado_ir,4)); ?></th>
      </tr>
      <tr>
        <th class="table-dark" colspan="6">
          <center>
            <h5>Hermodinámico</h5>
          </center>
        </th>
      </tr>
      <tr>
        <th>Gasto Cardiaco</th>
        <th colspan="3"><?php  echo ("125 x $sc/8.5 x "); echo (round($resultado_davo,4)); echo (" x ("); echo (round($resultado_davo,4)); echo(" x 100/"); echo (round($resultado_davo,4)); echo(")/ "); echo (round($resultado_cao,4));?></th>
        <th>4-6 lt/min</th>

        <th><?php $resultado_gc=125 * $sc/8.5 * $resultado_davo * ($resultado_davo * 100/ $resultado_davo)/ $resultado_cao;
        echo (round($resultado_gc,4)); ?></th>
      </tr>
      <tr>
        <th>Índice Cardiaco</th>
        <th colspan="3"><?php echo (round($resultado_gc,4)); echo "/$sc"; ?></th>
        <th>2.5-3 lt/min</th>
        <th><?php $resultado_ic=$resultado_gc/$sc;
        echo (round($resultado_ic,4)); ?></th>
      </tr>
      <tr>
        <th colspan="4"><center>Presión Venosa Central</center></th>
        <th>0-12 mmHg</th>
        <th>Resultado</th>
      </tr>
      <tr>
        <th colspan="4"><center>Presión de Oclusión de la APP (POaP)</center></th>
        <th>8-12 mmHg</th>
        <th>Resultado</th>
        <th></th>
      </tr>

    </table><hr><br>
    <div class="d-grid gap-2">
  <button onclick="Guardar()" class="btn btn-warning" type="button" id="imprimir">Imprimir/Guardar</button>
</div>
<br>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
</svg>

<div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
  <div>
  <label>Nota: En caso que el botón no funcione oprime <kbd>Ctrl + P</kbd> para guardar y/o imprimir el archivo.</label>
  </div>
</div>

</div>
  </body>
  <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="ValidarCal.js" type="text/javascript"></script>
  <script src="TextArea.js" type="text/javascript"></script>
  <script src="pdf.js" type="text/javascript"></script>
</html>
