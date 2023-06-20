<?php
session_start();
    include ("../php/actions/functions_view.php");
    $id = $_SESSION["session_student"];
    $time=4; //4
?>
<div id="contador" class="reloj" style="display:block;width:100%;margin-left:70%;float:right;position:fixed;z-index:10003 !important; "></div>
<!--temporizador de cuestionarios-->

<div id="message" style="display:block;top:12%;width:30%;margin:20%;position:fixed;z-index:1 !important; ">
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div id="session" class="x_title">
                  <h2>Serie X <small>Sistema de pruebas Psicométricas</small></h2>
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
                        <h3>SERIE X</h3>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12" id="bloque_preguntas">
                        <br>
                    
                        <!--Formulario serie 10-->
                        <form name="preguntas" id="preguntas" method="post">
                            <!--/---------------------------------- Pregunta 1 ----------------------------------/-->
        					<?=preguntas_serie10("1", "8,7,6,5,4,3", "1", "21");?>
                            <!--/---------------------------------- Pregunta 2 ----------------------------------/-->
                            <?=preguntas_serie10("2", "3,8,13,18,23,28", "2", "22");?>
                            <!--/---------------------------------- Pregunta 3 ----------------------------------/-->
                            <?=preguntas_serie10("3", "1,2,4,8,16,32", "3", "23");?>
                            <!--/---------------------------------- Pregunta 4 ----------------------------------/-->
                            <?=preguntas_serie10("4", "8,8,6,6,4,4", "4", "24");?>
                            <!--/---------------------------------- Pregunta 5 ----------------------------------/-->
                            <?=preguntas_serie10("5", "11 3/4,12,12 1/4,12 1/2,12 3/4", "5", "25");?>
                            <!--/---------------------------------- Pregunta 6 ----------------------------------/-->
                            <?=preguntas_serie10("6", "8,9,12,13,16,17", "6", "26");?>
                            <!--/---------------------------------- Pregunta 7 ----------------------------------/-->
                            <?=preguntas_serie10("7", "16,8,4,2,1,1/2", "7", "27");?>
                            <!--/---------------------------------- Pregunta 8 ----------------------------------/-->
                            <?=preguntas_serie10("8", "31.3,40.3,49.3,58.3,67.3,76.3", "8", "28");?>
                            <!--/---------------------------------- Pregunta 9 ----------------------------------/-->
                            <?=preguntas_serie10("9", "3,5,4,6,5,7", "9", "29");?>
                            <!--/---------------------------------- Pregunta 10 ----------------------------------/-->
                            <?=preguntas_serie10("10", "7,11,15,16,20,24,25,2", "10", "30");?>
                            <!--/---------------------------------- Pregunta 11 ----------------------------------/-->
                            <?=preguntas_serie10("11", "1/25,1/5,1,5", "11", "31");?>        					 					
                            
        					
                            <div class="form-group"> &nbsp;</div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                  <div class="col-md-12 col-sm-12 col-xs-12" align="center">
                                    <button type="button" class="btn btn-success" onClick="lanzar_formulario('true',<?=$id?>);">Enviar <span class="fa fa-thumbs-o-up"></span> </button>
                                  </div>
                                </div>
                        </form>
                            
                        <!--//Formulario serie 1-->

                    </div>
                    </div>
              </div>
            </div>


<script type="text/javascript">

function lanzar_formulario(status,id_us){ 
       $.post("_include/php/actions/action.php?sesion=10",
       $("#preguntas").serialize(),
       
        function(datos){
            //console.log(datos);
        if (status == 'true') {
        $("#message").html("<div class='alert alert-success' role='alert'><strong><h2><i class='fa fa-warning'></i> Felicidades!</h2></strong> Has concluído con esta prueba. <br> Para continuar y ver tu resultado final presiona el Boton Finalizar.<div align='right'><button onClick='resultado_iq("+id_us+")' class='btn btn-sm btn-dark'>Finalizar <samp class='fa fa-arrow-circle-o-right'></samp></button></div></div>"); 
        $("#bloque_preguntas").html("<h1><i class='fa fa-thumbs-o-up'></i> Tus respuestas han sido enviadas.<br><br><br><br><br><br><br><br><br></h1>");
        $(".reloj").removeAttr("id");
        $("#enlazar").removeAttr("onclick");
        $("#proceso").html("Completo 100%");
        }else{
        
        $("#message").html("<div class='alert alert-danger' role='alert'><strong><h2><i class='fa fa-warning'></i> Oh no!</h2></strong> Tu tiempo se ha agotado, pero tus respuestas contestadas se han enviado automáticamente. <br> Se ha concluído la prueba.<br> Para continuar final presiona el Boton Finalizar.<div align='right'><button onClick='resultado_iq("+id_us+")' class='btn btn-sm btn-info'>Finalizar <samp class='fa fa-arrow-circle-o-right'></samp></button></div></div>"); 
        $("#bloque_preguntas").html("<h1><i class='fa fa-warning'></i> Tiempo agotado.<br><br><br><br><br><br><br><br><br></h1>");
        $("#enlazar").removeAttr("onclick");
        $("#proceso").removeClass();
        $("#proceso").attr("class", "label label-success pull-right"); 
        $("#proceso").html("Completo 100%");
               
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
                        lanzar_formulario('false',<?=$id?>);
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
    
