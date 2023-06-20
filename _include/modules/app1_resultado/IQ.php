
<?php
session_start();
include "../../php/db/conexionDB.php";

if(isset($_SESSION)){
  $id_alumno = $_GET["alu"];

  $consultaralumno = $con->prepare("SELECT app1_res_fin AS Resultado, app1_nivel_txt AS Nivel FROM tbl_app1_res_us WHERE us_id = '".$id_alumno."';");
  $consultaralumno->execute();

  $print = $consultaralumno->fetch();

  $Res = $print["Resultado"];
  $Nivel = $print["Nivel"];

}

?>
<style type="text/css">
canvas {
        width: 50%;
        height: auto;
    }
</style>
  
  <div class="col col-md-12 col-sm-12 col-xs-12" align="center">
    <div class="sidebar-widget">
      <h1>Tu resultado en el test de IQ es: <b><span id="restitle" class="gauge-value"><?=$Res;?></span></b></h1>
      <h2>Nivel Obtenido: <b><?=$Nivel;?></b></h2>
      <canvas  width="500" height="320" id="foo2" class=""></canvas>
      <div class="goal-wrapper">
        <b><span class="gauge-value pull-left">IQ &nbsp;</span></b>
        <h2><span id="gauge-text2" class="gauge-value pull-left"><?=$Res;?></span></h2>
        <h2><span id="goal-text2" class="goal-value pull-right">IQ Max. 112</span></h2>
      </div>
    </div>
  </div>


<!-- gauge.js -->
    <script>
      var opts = {
        lines: 12,
        angle: 0,
        lineWidth: 0.4,
        pointer: {
          length: 0.75,
          strokeWidth: 0.042,
          color: '#1D212A'
        },
        limitMax: 'false',
        colorStart: '#1ABC9C',
        colorStop: '#1ABC9C',
        strokeColor: '#F0F3F3',
        generateGradient: true
      };
      /*var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 100;
      gauge.animationSpeed = 32;
      gauge.set(80);
      gauge.setTextField(document.getElementById("gauge-text"));*/

      var target = document.getElementById('foo2'),
          gauge = new Gauge(target).setOptions(opts);


      gauge.maxValue = 112;
      gauge.animationSpeed = 35;
      gauge.set(<?=$Res;?>);
      gauge.setTextField(document.getElementById("gauge-text2"));
      
      gaugevalue= new Gauge(target).setOptions(opts);

      gaugevalue.maxValue = 112;
      gaugevalue.animationSpeed = 35;
      gaugevalue.set(<?=$Res;?>);
      gaugevalue.setTextField(document.getElementById("restitle"));
    </script>
    <!-- /gauge.js -->      
 