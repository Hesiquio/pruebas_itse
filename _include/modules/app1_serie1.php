<?php
session_start();
    include ("../php/actions/functions_view.php");
    $id = $_SESSION["session_student"];
    register_us_app1($id);
    $time=2;
?>
<div id="contador" class="reloj" style="display:block;width:100%;margin-left:70%;float:right;position:fixed;z-index:10003 !important; "></div>
<!--temporizador de cuestionarios-->

<div id="message" style="display:block;top:12%;width:30%;margin:20%;position:fixed;z-index:1 !important; ">
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div id="session" class="x_title">
                  <h2>Serie I <small>Sistema de pruebas Psicométricas</small></h2>
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
                        <h3>SERIE I</h3>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12" id="bloque_preguntas">
                        <br>
                    
                        <!--Formulario serie 1-->
                            <form name="preguntas" id="preguntas" method="post">
                            <!--/---------------------------------- Pregunta 1 ----------------------------------/-->
                            <?=preguntas_serie1("1","LA GASOLINA SE EXTRAE DE:","GRANO","PETROLEO","TREMENTINA","SEMILLAS");?>
                            
                            <!--/---------------------------------- Pregunta 2 ----------------------------------/-->
                            <?=preguntas_serie1("2","UNA TONELADA TIENE:","1000 kg.","2000 kg.","3000 kg.","4000 kg.");?>
                            
                            <!--/---------------------------------- Pregunta 3 ----------------------------------/-->
                            <?=preguntas_serie1("3","LA MAYORÍA DE NUESTRAS EXPORTACIONES SALEN POR:","MAZATLÁN","VERACRUZ","PROGRESO","ACACULCO");?>
                            
                            <!--/---------------------------------- Pregunta 4 ----------------------------------/-->
                            <?=preguntas_serie1("4","EL NERVIO ÓPTICO SIRVE PARA:","VER","OÍR","PROBAR","SENTIR");?>
                            
                            <!--/---------------------------------- Pregunta 5 ----------------------------------/-->
                            <?=preguntas_serie1("5","EL CAFÉ ES UNA ESPECIE DE:","CORTEZA","FRUTO","HOJAS","RAÍZ");?>
                            
                            <!--/---------------------------------- Pregunta 6 ----------------------------------/-->
                            <?=preguntas_serie1("6","EL JAMÓN ES CARNE DE:","CARNERO","VACA","GALLINA","CERDO");?>
                            
                            <!--/---------------------------------- Pregunta 7 ----------------------------------/-->
                            <?=preguntas_serie1("7","LA LARINGE ESTÁ EN:","ABDOMEN","CABEZA","GARGANTA","ESPALDA");?>
                            
                            <!--/---------------------------------- Pregunta 8 ----------------------------------/-->
                            <?=preguntas_serie1("8","LA GUILLOTINA CAUSA LA:","MUERTE","ENFERMEDAD","FIEBRE","MALESTAR");?>

                            <!--/---------------------------------- Pregunta 9 ----------------------------------/-->
                            <?=preguntas_serie1("9","LA GRUA SE USA PARA:","PERFORAR","CORTAR","LEVANTAR","EXPRIMIR");?>

                            <!--/---------------------------------- Pregunta 10 ----------------------------------/-->
                            <?=preguntas_serie1("10","UNA FIGURA DE SEIS LADOS SE LLAMA:","PENTÁGONO","PARALELOGRAMO","HEXÁGONO","TRAPECIO");?>
                            
                            <!--/---------------------------------- Pregunta 11 ----------------------------------/-->
                            <?=preguntas_serie1("11","EL KILOWAT MIDE:","LLUVIA","VIENTO","ELECTRICIDAD","PRESIÓN");?>

                            <!--/---------------------------------- Pregunta 12 ----------------------------------/-->
                            <?=preguntas_serie1("12","LA PAUSA SE UTILIZA EN:","AGRICULTURA","MÚSICA","FOTOGRAFÍA","ESTENOGRAFÍA");?>

                            <!--/---------------------------------- Pregunta 13 ----------------------------------/-->
                            <?=preguntas_serie1("13","LAS ESMERALDAS SON:","AZULES","VERDES","ROJAS","AMARILLAS");?>

                            <!--/---------------------------------- Pregunta 14 ----------------------------------/-->
                            <?=preguntas_serie1("14","EL METRO ES APROXIMADAMENTE IGUAL A:","UN PIE","UNA PULGADA","UNA YARDA","UNA MILLA");?>

                            <!--/---------------------------------- Pregunta 15 ----------------------------------/-->
                            <?=preguntas_serie1("15","LAS ESPONJAS SE OBTIENEN DE: ","ANIMALES","HIERBAS","BOSQUES","MINAS");?>

                            <!--/---------------------------------- Pregunta 16 ----------------------------------/-->
                            <?=preguntas_serie1("16","FRAUDE ES UN TÉRMINO UTILIZADO EN:","MEDICINA","TEOLOGÍA","LEYES","PEDAGOGÍA");?>
                            
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
       $.post("_include/php/actions/action.php?sesion=01",
       $("#preguntas").serialize(),
       
// onClick='next_serie(2)'
        function(datos){
        if (status == 'true') {
        $("#message").html("<div class='alert alert-success' role='alert'><strong><h2><i class='fa fa-warning'></i> Exito!</h2></strong> Tus respuestas han sido enviadas exitosamente. <br> Para continuar presiona el siguiente Boton.<div align='right'><button onclick='instruccion(2)' class='btn btn-sm btn-dark'>Continuar <samp class='fa fa-arrow-circle-o-right'></samp></button></div></div>"); 
        $("#bloque_preguntas").html("<h1><i class='fa fa-thumbs-o-up'></i> Tus respuestas han sido enviadas.<br><br><br><br><br><br><br><br><br></h1>");
        $(".reloj").removeAttr("id");
        $("#proceso").removeClass();
        $("#proceso").attr('class', 'label label-warning pull-right');
        $("#proceso").html("Avance 10%");
        $(".app1").removeAttr("id");

        }else{
        
        $("#message").html("<div class='alert alert-danger' role='alert'><strong><h2><i class='fa fa-warning'></i> Oh no!</h2></strong> Tu tiempo se ha agotado, pero tus respuestas contestadas se han enviado automáticamente. <br> Para continuar presiona el siguiente Boton.<div align='right'><button onclick='instruccion(2)' class='btn btn-sm btn-info'>Continuar <samp class='fa fa-arrow-circle-o-right'></samp></button></div></div>"); 
        $("#bloque_preguntas").html("<h1><i class='fa fa-warning'></i> Tiempo agotado.<br><br><br><br><br><br><br><br><br></h1>");
        $("#proceso").removeClass();
        $("#proceso").attr('class', 'label label-warning pull-right');
        $("#proceso").html("Avance 10%");
        $(".app1").removeAttr("id");

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
    }/*
    else{
            document.getElementById('restante').innerHTML='<span class="element">' + dias + ' dias</span><span class="element">' + horas + ' horas</span><span class="element">' + minutos + ' minutos</span><span class="element">' + segundos + ' segundos</span>'
    }*/
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