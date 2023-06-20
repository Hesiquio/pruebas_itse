<?php
session_start();
    include ("../php/actions/functions_view.php");
    $id = $_SESSION["session_student"];
    $time=5;
?>
<div id="contador" class="reloj" style="display:block;width:100%;margin-left:70%;float:right;position:fixed;z-index:10003 !important; "></div>
<!--temporizador de cuestionarios-->

<div id="message" style="display:block;top:12%;width:30%;margin:20%;position:fixed;z-index:1 !important; ">
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div id="session" class="x_title">
                  <h2>Serie V <small>Sistema de pruebas Psicométricas</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="col col-md-12 col-sm-12 col-xs-12">
                      <div class="col col-md-2 col-sm-2 col-xs-2">
                        <img src="assets/bootstrap/images/logo.png" width="150" class="img-responsive">
                      </div>
                      <div class="col col-md-8 col-sm-8 col-xs-8" align="center">
                        <h4>
                          <b>
                            El Instituto Tecnológico Superior de Escárcega <br> Sistema de Pruebas Psicométricas.
                          </b>
                        </h4><br/>
                      </div>
                      <div class="col col-md-2 col-sm-2 col-xs-2">
                        <img src="assets/bootstrap/images/itse.png" width="150" class="img-responsive">
                      </div>
                    </div>
                    <div id="instruccion">
                    <div class="col-md-12 col-lg-12 col-sm-12" align="center">
                        <br>
                        <h3>SERIE V</h3>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12" id="bloque_preguntas">
                        <br>
                    
                        <!--Formulario serie 5-->
                        <form name="preguntas" id="preguntas" method="post">
                            <!--/---------------------------------- Pregunta 1 ----------------------------------/-->
        					<?=preguntas_serie5("1", "A 2  POR 5 PESOS ¿CUÁNTOS LÁPICES PUEDEN COMPRAR CON 50 PESOS?");?>

        					<!--/---------------------------------- Pregunta 2 ----------------------------------/-->
                            <?=preguntas_serie5("2", "¿CUÁNTAS HORAS TARDARÁ; UN AUTOMOVIL EN RECORRER 660 KILÓMETROS A LA VELOCIDAD DE 60 KILÓMETROS POR HORA?");?>
        					
                            <!--/---------------------------------- Pregunta 3 ----------------------------------/-->
                            <?=preguntas_serie5("3", "SI UN HOMBRE GANA $200.00 DIARIOS Y GASTA  $140.00 ¿CUÁNTOS DÍAS TARDARÁ EN AHORRAR $3,000.00?");?>
        					
                            <!--/---------------------------------- Pregunta 4 ----------------------------------/-->
                            <?=preguntas_serie5("4", "SI DOS PASTELES CUESTAN $600.00 ¿CUÁNTOS PESOS  CUESTA LA SEXTA PARTE DEL PASTEL?");?>
        					
                            <!--/---------------------------------- Pregunta 5 ----------------------------------/-->
                            <?=preguntas_serie5("5", "¿CUÁNTAS VECES MAS ES 2 X 3 X 4 X 6 QUE 3 X 4?");?>
        					
                            <!--/---------------------------------- Pregunta 6 ----------------------------------/-->
                            <?=preguntas_serie5("6", "¿CUÁNTO ES EL 15 POR CIENTO DE $120.00?");?>
        					
                            <!--/---------------------------------- Pregunta 7 ----------------------------------/-->
                            <?=preguntas_serie5("7", "EL 4 POR CIENTO DE $1,000.00 ES IGUAL AL 8 POR  CIENTO ¿DE QUÉ CANTIDAD?");?>
        					
                            <!--/---------------------------------- Pregunta 8 ----------------------------------/-->
                            <?=preguntas_serie5("8", "LA CAPACIDAD DE UN REFRIGERADOR RECTANGULAR ES  DE 48 METROS CUBICOS SI TIENE SEIS METROS DE LARGO POR CUATRO DE ANCHO ¿CUÁL ES SU ALTURA?");?>
        					
                            <!--/---------------------------------- Pregunta 9 ----------------------------------/-->
                            <?=preguntas_serie5("9", "SI 7 HOMBRES HACEN UN POZO DE 40 METROS EN 2  DíAS ¿CUÁNTOS SE NECESITAN PARA HACERLO EN MEDIO DÍA?");?>
        					
                            <!--/---------------------------------- Pregunta 10 ----------------------------------/ -->
                            <?=preguntas_serie5("10", "(A) TIENE $180.00, (B) TIENE 2/3 DE LO QUE TIENE  (A) Y (C) TIENE 1/2 DE LO QUE TIENE (B).¿CUÁNTO TIENEN TODOS JUNTOS?");?>
        					
                            <!--/---------------------------------- Pregunta 11 ----------------------------------/ -->
                            <?=preguntas_serie5("11", "SI UN HOMBRE CORRE 100 METROS EN 10 SEGUNDOS, ¿CUÁNTOS METROS RECORRERA COMO PROMEDIO EN 1/5 DE SEGUNDO?");?>

                            <!--/---------------------------------- Pregunta 12 ----------------------------------/-->
        					<?=preguntas_serie5("12", "UN HOMBRE GASTA 1/4 DE SU SUELDO EN CASA Y  ALIMENTO, 4/8 EN OTROS GASTOS. ¿QUÉ TANTO POR CIENTO DE SU SUELDO AHORRA?");?>
        					
        					<div class="form-group"> &nbsp;</div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                  <div class="col-md-12 col-sm-12 col-xs-12" align="center">
                                    <button type="button" class="btn btn-success" onClick="lanzar_formulario('true');">Enviar <span class="fa fa-thumbs-o-up"></span> </button>
                                  </div>
                                </div>
                        </form>
                            
                        <!--//Formulario serie 1-->

                    </div>
                    </div>
              </div>
            </div>


<script type="text/javascript">

function lanzar_formulario(status){ 
       $.post("_include/php/actions/action.php?sesion=05",
       $("#preguntas").serialize(),
       
        function(datos){
            console.log(datos);
        if (status == 'true') {
        $("#message").html("<div class='alert alert-success' role='alert'><strong><h2><i class='fa fa-warning'></i> Exito!</h2></strong> Tus respuestas han sido enviadas exitosamente. <br> Para continuar presiona el siguiente Boton.<div align='right'><button onClick='instruccion(6)' class='btn btn-sm btn-dark'>Continuar <samp class='fa fa-arrow-circle-o-right'></samp></button></div></div>"); 
        $("#bloque_preguntas").html("<h1><i class='fa fa-thumbs-o-up'></i> Tus respuestas han sido enviadas.<br><br><br><br><br><br><br><br><br></h1>");
        $(".reloj").removeAttr("id");
        $("#enlazar").removeAttr("onclick");
        $("#proceso").html("Avance 50%");
        }else{
        
        $("#message").html("<div class='alert alert-danger' role='alert'><strong><h2><i class='fa fa-warning'></i> Oh no!</h2></strong> Tu tiempo se ha agotado, pero tus respuestas contestadas se han enviado automáticamente. <br> Para continuar presiona el siguiente Boton.<div align='right'><button onClick='instruccion(6)' class='btn btn-sm btn-info'>Continuar <samp class='fa fa-arrow-circle-o-right'></samp></button></div></div>"); 
        $("#bloque_preguntas").html("<h1><i class='fa fa-warning'></i> Tiempo agotado.<br><br><br><br><br><br><br><br><br></h1>");
        $("#enlazar").removeAttr("onclick");
        $("#proceso").html("Avance 50%");        
        }

        }
       
    );
}
            
function countdown(id){
    var fecha=new Date('<?=temporizer_time("Y", $time);?>','<?=temporizer_time("m", $time);?>','<?=temporizer_time("d", $time);?>','<?=temporizer_time("H", $time);?>','<?=temporizer_time("i", $time);?>','<?=temporizer_time("s", $time);?>')
    var hoy=new Date()
    var dias=0
    var horas=0
    var minutos=0
    var segundos=0

    if (fecha>hoy){
            var diferencia=(fecha.getTime()-hoy.getTime())/1000
            dias=Math.floor(diferencia/86400)
            diferencia=diferencia-(86400*dias)
            horas=Math.floor(diferencia/3600)
            diferencia=diferencia-(3600*horas)
            minutos=Math.floor(diferencia/60)
            diferencia=diferencia-(60*minutos)
            segundos=Math.floor(diferencia)

                    var min = minutos;
                    var seg = segundos;
                    if (min < 1 && seg < 1) {
                        lanzar_formulario();
                    };
                    

            document.getElementById(id).innerHTML='<span class="element">' + minutos + ':' + segundos + '</span>'

            if (dias>0 || horas>0 || minutos>0 || segundos>0){
                    setTimeout("countdown(\"" + id + "\")",1000);
            }
    }
}


window.onLoad = countdown('contador');
</script>
    <script type="text/javascript">
    // iCheck
    $(document).ready(function() {
        if ($("input.flat")[0]) {
            $(document).ready(function () {
                $('input.flat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });
        }
    });
    // /iCheck

    </script>
