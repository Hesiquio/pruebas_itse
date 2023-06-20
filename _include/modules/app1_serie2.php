<?php
session_start();
    include ("../php/actions/functions_view.php");
    $id = $_SESSION["session_student"];
    ##register_us_app1($id);
    $time=2;
?>
<div id="contador" class="reloj" style="display:block;width:100%;margin-left:70%;float:right;position:fixed;z-index:10003 !important; "></div>
<!--temporizador de cuestionarios-->
<div id="message" style="display:block;top:12%;width:30%;margin:20%;position:fixed;z-index:1 !important; ">
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div id="session" class="x_title">
                  <h2>Serie II <small>Sistema de pruebas Psicométricas</small></h2>
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
                        <h3>SERIE II</h3>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12" id="bloque_preguntas">
                        <br>
                    
                        <!--Formulario serie 2-->
                            <form name="preguntas" id="preguntas" method="post">
                            <!--/---------------------------------- Pregunta 1 ----------------------------------/-->
                            <?=preguntas_serie2("1","SI LA TIERRA ESTUVIERA MAS CERCA DEL SOL:","LAS ESTRELLAS  DESAPARECERIAN.","LOS MESES  SERIAN MAS LARGOS.","LA TIERRA ESTARIA MAS  CALIENTE.");?>
                            
                            <!--/---------------------------------- Pregunta 2 ----------------------------------/-->
                            <?=preguntas_serie2("2","LOS RAYOS DE UNA RUEDA ESTAN FRECUENTEMENTE HECHOS DE NOGAL POR QUE:","EL NOGAL ES FUERTE.","SE CORTA FACILMENTE.","SUS FRENOS NO SON BUENOS.");?>
                            
                            <!--/---------------------------------- Pregunta 3 ----------------------------------/-->
                            <?=preguntas_serie2("3","UN TREN SE DETIENE CON MAS DIFICULTAD QUE UN AUTOMOVIL. POR QUE:","TIENE MAS RUEDA.","ES MAS PESADO.","SUS FRENOS NO SON BUENOS.");?>
                            
                            <!--/---------------------------------- Pregunta 4 ----------------------------------/-->
                            <?=preguntas_serie2("4","EL DICHO \"A GOLPECITOS DE DERRIBA UN ROBLE\" QUIERE DECIR:","QUE LOS ROBLES SON DEBILES.","QUE SON MEJORES LOS GOLPES PEQUEÑOS.","QUE EL ESFUERZO CONSTANTE LOGRA RESULTADOS SORPRENDENTES.");?>
                            
                            <!--/---------------------------------- Pregunta 5 ----------------------------------/-->
                            <?=preguntas_serie2("5","EL DICHO \"UNA OLLA VIGILADA NUNCA HIERVE\" QUIERE DECIR:","QUE NO DEBEMOS VIGILARLA, CUANDO ESTE EN EL FUEGO.","QUE TARDA EN HERVIR.","QUE EL TIEMPO SE ALARGA CUANDO ESPERAMOS.");?>
                            
                            <!--/---------------------------------- Pregunta 6 ----------------------------------/-->
                            <?=preguntas_serie2("6","EL DICHO \"SIEMBRA PASTO MIENTRAS HAYA SOL\" QUIERE DECIR:","QUE EL PASTO SE SIEMBRA EN EL VERANO.","QUE DEBEMOS APROVECHAR NUESTRAS OPORTUNIDADES.","QUE EL PASTO NO DEBE CORTARSE EN LA NOCHE.");?>
                            
                            <!--/---------------------------------- Pregunta 7 ----------------------------------/-->
                            <?=preguntas_serie2("7","EL DICHO \"ZAPATERO A TUS ZAPATOS\" QUIERE DECIR:","QUE UN ZAPATERO NO DEBE ABANDONAR SUS ZAPATOS.","QUE LOS ZAPATEROS NO DEBEN ESTAR OCIOSOS.","QUE DEBEMOS TRABAJAR EN LO QUE PODEMOS HACER MEJOR.");?>
                            
                            <!--/---------------------------------- Pregunta 8 ----------------------------------/-->
                            <?=preguntas_serie2("8","EL DICHO \"LA CUÑA PARA QUE APRIETE TIENE QUE SER DEL MISMO PALO\" QUIERE DECIR:","QUE EL PALO SIRVE PARA APRETAR.","QUE LAS CUÑAS SIEMPRE SON DE MADERA.","NOS EXIGEN MAS LAS PERSONAS QUE NOS CONOCEN.");?>

                            <!--/---------------------------------- Pregunta 9 ----------------------------------/-->
                            <?=preguntas_serie2("9","UN ACORAZADO DE ACERO FLOTAN PORQUE:","LA MAQUINA LO HACE FLOTAR.","PORQUE TIENE GRANDES ESPACIOS HUECOS.","CONTIENE ALGO DE MADERA.");?>

                            <!--/---------------------------------- Pregunta 10 ----------------------------------/ -->
                            <?=preguntas_serie2("10","LAS PLUMAS DE LAS ALAS AYUDAN AL PAJARO A VOLAR PORQUE:","LAS ALAS OFRECEN UNA AMPLIA SUPERFICIE LIGERA.","MANTIENEN EL AIRE FUERA DEL CUERPO.","DISMINUYEN SU PESO.");?>
                            
                            <!--/---------------------------------- Pregunta 11 ----------------------------------/ -->
                            <?=preguntas_serie2("11","EL DICHO \"UNA GOLONDRINA NO HACE VERANO\" QUIERE DECIR:","QUE LAS GOLONDRINAS REGRESAN.","QUE UN SIMPLE DATO NO ES SUFICIENTE.","QUE LOS PAJAROS SE AGREGAN A NUESTROS PLACERES DE VERANO.");?>
                            
                            <div class="form-group"> &nbsp;
                            </div>
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
       $.post("_include/php/actions/action.php?sesion=02",
       $("#preguntas").serialize(),
       
        function(datos){
        if (status == 'true') {
        $("#message").html("<div class='alert alert-success' role='alert'><strong><h2><i class='fa fa-warning'></i> Exito!</h2></strong> Tus respuestas han sido enviadas exitosamente. <br> Para continuar presiona el siguiente Boton.<div align='right'><button onClick='instruccion(3)' class='btn btn-sm btn-dark'>Continuar <samp class='fa fa-arrow-circle-o-right'></samp></button></div></div>"); 
        $("#bloque_preguntas").html("<h1><i class='fa fa-thumbs-o-up'></i> Tus respuestas han sido enviadas.<br><br><br><br><br><br><br><br><br></h1>");
        $(".reloj").removeAttr("id");
        $("#proceso").html("Avance 20%");
        $("#enlazar").removeAttr("onclick");
        }else{
        
        $("#message").html("<div class='alert alert-danger' role='alert'><strong><h2><i class='fa fa-warning'></i> Oh no!</h2></strong> Tu tiempo se ha agotado, pero tus respuestas contestadas se han enviado automáticamente. <br> Para continuar presiona el siguiente Boton.<div align='right'><button onClick='instruccion(3)' class='btn btn-sm btn-info'>Continuar <samp class='fa fa-arrow-circle-o-right'></samp></button></div></div>"); 
        $("#bloque_preguntas").html("<h1><i class='fa fa-warning'></i> Tiempo agotado.<br><br><br><br><br><br><br><br><br></h1>");
        $("#proceso").html("Avance 20%");
        $("#enlazar").removeAttr("onclick");        
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
