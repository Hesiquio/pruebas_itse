<?php
session_start();
    include ("../php/actions/functions_view.php");
    $id = $_SESSION["session_student"];
    $time=2;
?>
<div id="contador" class="reloj" style="display:block;width:100%;margin-left:70%;float:right;position:fixed;z-index:10003 !important; "></div>
<!--temporizador de cuestionarios-->

<div id="message" style="display:block;top:12%;width:30%;margin:20%;position:fixed;z-index:1 !important; ">
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div id="session" class="x_title">
                  <h2>Serie VI <small>Sistema de pruebas Psicométricas</small></h2>
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
                        <h3>SERIE VI</h3>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12" id="bloque_preguntas">
                        <br>
                    
                        <!--Formulario serie 6-->
                        <form name="preguntas" id="preguntas" method="post">
                            <!--/---------------------------------- Pregunta 1 ----------------------------------/-->
        					<?=preguntas_serie6("1", "LA HIGIENE ES ESENCIAL PARA LA SALUD");?>

        					<!--/---------------------------------- Pregunta 2 ----------------------------------/-->
                            <?=preguntas_serie6("2", "LOS TAQUIGRAFOS USAN MICROSCOPIO");?>
        					
                            <!--/---------------------------------- Pregunta 3 ----------------------------------/-->
                            <?=preguntas_serie6("3", "LOS TIRANOS SON JUSTOS CON SUS INFERIORES");?>
        					
                            <!--/---------------------------------- Pregunta 4 ----------------------------------/-->
                            <?=preguntas_serie6("4", "LAS PERSONAS DESAMPARADAS ESTÁN SUJETAS CON  FRECUENCIA A LA CARIDAD");?>
        					
                            <!--/---------------------------------- Pregunta 5 ----------------------------------/-->
                            <?=preguntas_serie6("5", "LAS PERSONAS VENERABLES SON POR LO COMUN  RESPETADAS");?>
        					
                            <!--/---------------------------------- Pregunta 6 ----------------------------------/-->
                            <?=preguntas_serie6("6", "ES EL ESCARBUTO UN MEDICAMENTO");?>
        					
                            <!--/---------------------------------- Pregunta 7 ----------------------------------/-->
                            <?=preguntas_serie6("7", "ES LA AMONESTACIÓN UNA CLASE DE INSTRUMENTO  MUSICAL" );?>
        					
                            <!--/---------------------------------- Pregunta 8 ----------------------------------/-->
                            <?=preguntas_serie6("8", "SON LOS COLORES OPACOS PREFERIDOS PARA LAS BANDAS  NACIONALES");?>
        					
                            <!--/---------------------------------- Pregunta 9 ----------------------------------/-->
                            <?=preguntas_serie6("9", "LAS COSAS MISTERIOSAS SON A VECES PAVOROSAS");?>
        					
                            <!--/---------------------------------- Pregunta 10 ----------------------------------/ -->
                            <?=preguntas_serie6("10", "LAS PERSONAS CONSCIENTES COMETEN ALGUNA VEZ ERRORES");?>
        					
                            <!--/---------------------------------- Pregunta 11 ----------------------------------/ -->
                            <?=preguntas_serie6("11", "SON CARNIVOROS LOS CARNEROS");?>

                            <!--/---------------------------------- Pregunta 12 ----------------------------------/-->
        					<?=preguntas_serie6("12", "SE DAN ASIGNATURAS A LOS CABALLOS");?>
                            <!--/---------------------------------- Pregunta 13 ----------------------------------/-->
                            <?=preguntas_serie6("13", "LAS CARTAS ANÓNIMAS LLEVAN ALGUNA FIRMA DE QUIEN  LAS ESCRIBE");?>
                            
                            <!--/---------------------------------- Pregunta 14 ----------------------------------/-->
                            <?=preguntas_serie6("14", "SON DISCONTINUOS LOS SONIDOS INTERMITENTES");?>
                            
                            <!--/---------------------------------- Pregunta 15 ----------------------------------/-->
                            <?=preguntas_serie6("15", "LAS ENFERMEDADES ESTIMULAN EL BUEN JUICIO");?>
                            
                            <!--/---------------------------------- Pregunta 16 ----------------------------------/-->
                            <?=preguntas_serie6("16", "SON SIEMPRE PERVERSOS LOS HECHOS PREMEDITADOS");?>
                            
                            <!--/---------------------------------- Pregunta 17 ----------------------------------/-->
                            <?=preguntas_serie6("17", "EL CONTACTO SOCIAL TIENDE A REDUCIR LA TIMIDEZ");?>
                            
                            <!--/---------------------------------- Pregunta 18 ----------------------------------/-->
                            <?=preguntas_serie6("18", "SON ENFERMAS LAS PERSONAS QUE TIENEN MAL CARÁCTER");?>
                            
                            <!--/---------------------------------- Pregunta 19 ----------------------------------/-->
                            <?=preguntas_serie6("19", "SE CARACTERIZA GENERALMENTE EL RENCOR POR LA  PERSISTENCIA");?>
                            
                            <!--/---------------------------------- Pregunta 20 ----------------------------------/-->
                            <?=preguntas_serie6("20", "METICULOSO QUIERE DECIR LO MISMO QUE CUIDADOSO");?>
                            
        					
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
       $.post("_include/php/actions/action.php?sesion=06",
       $("#preguntas").serialize(),
       
        function(datos){
            console.log(datos);
        if (status == 'true') {
        $("#message").html("<div class='alert alert-success' role='alert'><strong><h2><i class='fa fa-warning'></i> Exito!</h2></strong> Tus respuestas han sido enviadas exitosamente. <br> Para continuar presiona el siguiente Boton.<div align='right'><button onClick='instruccion(7)' class='btn btn-sm btn-dark'>Continuar <samp class='fa fa-arrow-circle-o-right'></samp></button></div></div>"); 
        $("#bloque_preguntas").html("<h1><i class='fa fa-thumbs-o-up'></i> Tus respuestas han sido enviadas.<br><br><br><br><br><br><br><br><br></h1>");
        $(".reloj").removeAttr("id");
        $("#enlazar").removeAttr("onclick");
        $("#proceso").html("Avance 60%");
        }else{
        
        $("#message").html("<div class='alert alert-danger' role='alert'><strong><h2><i class='fa fa-warning'></i> Oh no!</h2></strong> Tu tiempo se ha agotado, pero tus respuestas contestadas se han enviado automáticamente. <br> Para continuar presiona el siguiente Boton.<div align='right'><button onClick='instruccion(7)' class='btn btn-sm btn-info'>Continuar <samp class='fa fa-arrow-circle-o-right'></samp></button></div></div>"); 
        $("#bloque_preguntas").html("<h1><i class='fa fa-warning'></i> Tiempo agotado.<br><br><br><br><br><br><br><br><br></h1>");
        $("#enlazar").removeAttr("onclick");
        $("#proceso").html("Avance 60%");        
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
