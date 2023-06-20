<?php
session_start();
$id_alumno = $_SESSION["session_student"];

include "../php/actions/functions_view.php";
include "../php/db/conexionDB.php";
    // verificar si este test ya fue contestado anteriormente

    $consultar = $con -> prepare("SELECT us_id FROM tbl_res_pg_app3 WHERE us_id = '".$id_alumno."';");
    $consultar->execute();

    $contarfilas = $consultar->rowCount();

    if ($contarfilas>=5) {
        ?>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div  class="x_title">
                      <h2>Oh no.! <small>solo es una advertencia</small></h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                       <h1><i class='fa fa-thumbs-o-up'></i></h1> 
                       <blockquote> 
                            <h1>Tus respuestas han sido enviadas hace unos momentos.<br>
                                Puedes dirigirte al panel principal de Inicio para ver tus Resultados<br>
                                <small><a href="" class="btn btn-link">Panel Principal</a></small>
                            </h1>
                        </blockquote>
                        <br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        <?php
    }else{
?>

<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div id="txtSpan" class="x_title">
                  <h2>Test de Orientación Vocacional <small>Responde todas las preguntas</small></h2>
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
                            Instituto Tecnológico Superior De Escárcega<br>Programa Institucional De Tutorías<br>Test de Orientación Vocacional
						  </b>
                        </h4><br/>
                      </div>
                      <div class="col col-md-2 col-sm-2 col-xs-2">
                        <img src="assets/bootstrap/images/itse.png" width="150" class="img-responsive">
                      </div>
                    </div>
                    <div id="instruccion">
                    <div class="col-md-12 col-lg-12 col-sm-12" align="justify">
                    	<blockquote>
                    		El presente test vocacional tiene como finalidad conocer la concordancia entre tus características personales, aptitudes, habilidades, intereses y las exigencias que presenta la carrera, por lo que es necesario que selecciones entre las opciones <b>SI</b> o <b>No</b> según te identifiques para conocer si la carrera que elegiste es la adecuada.

                    	</blockquote>
                    </div>

                    <div class="col-md-12 col-lg-12 col-sm-12" id="bloque_preguntas">
                        <br>
                    <div id="message" style="display:block;width:70%;margin:1%;float:center;position:fixed;z-index:10013 !important; "></div>
                        <!--Formulario test vocacional-->
                        <form name="preguntas" id="preguntas" method="post">
                            
        					<?=preguntas_test_vocacional();?>

        					
			                <div class="form-group">
							</div>
			                <div class="ln_solid"></div>
			                <div class="form-group" >
                                
			                  <div id="btns" class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
			                    <button type="submit" class="btn btn-success">Enviar <span class="fa fa-thumbs-o-up"></span></button>
			                  </div>
			                </div>
                        </form>
                            
                        <!--//Formulario serie 1-->

                    </div>
                    </div>
              </div>
            </div>
        <script type="text/javascript">
    $(document).ready(function(){

                 var ap = "<label style='color: #ED1C22; font-size:12px;'><i class='fa fa-remove'></i>";
                 var ci = "</label>";
                 var txt = " Elige una opción. ";

                 $("#message").hide();
                 $("#preguntas").validate({
                     event: "focus",
                     rules: {
                    '1':{ required:true },
                    '2':{ required:true },
                    '3':{ required:true },
                    '4':{ required:true },
                    '5':{ required:true },
                    '6':{ required:true },
                    '7':{ required:true },
                    '8':{ required:true },
                    '9':{ required:true },
                    '10':{ required:true },
                    '11':{ required:true },
                    '12':{ required:true },
                    '13':{ required:true },
                    '14':{ required:true },
                    '15':{ required:true },
                    '16':{ required:true },
                    '17':{ required:true },
                    '18':{ required:true },
                    '19':{ required:true },
                    '20':{ required:true },
                    '21':{ required:true },
                    '22':{ required:true },
                    '23':{ required:true },
                    '24':{ required:true },
                    '25':{ required:true },
                    '26':{ required:true },
                    '27':{ required:true },
                    '28':{ required:true },
                    '29':{ required:true },
                    '30':{ required:true },
                    '31':{ required:true },
                    '32':{ required:true },
                    '33':{ required:true },
                    '34':{ required:true },
                    '35':{ required:true },
                    '36':{ required:true },
                    '37':{ required:true },
                    '38':{ required:true },
                    '39':{ required:true },
                    '40':{ required:true },
                    '41':{ required:true },
                    '42':{ required:true },
                    '43':{ required:true },
                    '44':{ required:true },
                    '45':{ required:true },
                    '46':{ required:true },
                    '47':{ required:true },
                    '48':{ required:true },
                    '49':{ required:true },
                    '50':{ required:true },
                    '51':{ required:true },
                    '52':{ required:true },
                    '53':{ required:true },
                    '54':{ required:true },
                    '55':{ required:true },
                    '56':{ required:true },
                    '57':{ required:true },
                    '58':{ required:true },
                    '59':{ required:true },
                    '60':{ required:true },
                    '61':{ required:true },
                    '62':{ required:true },
                    '63':{ required:true },
                    '64':{ required:true },
                    '65':{ required:true },
                    '66':{ required:true },
                    '67':{ required:true },
                    '68':{ required:true },
                    '69':{ required:true },
                    '70':{ required:true }
                    '71':{ required:true },
                    '72':{ required:true },
                    '73':{ required:true },
                    '74':{ required:true },
                    '75':{ required:true },
                    '76':{ required:true },
                    '77':{ required:true },
                    '78':{ required:true },
                    '79':{ required:true },
                    '80':{ required:true }

                     },
                     messages: {
                         '1': ap+txt+ci,
                         '2': ap+txt+ci,
                         '3': ap+txt+ci,
                         '4': ap+txt+ci,
                         '5': ap+txt+ci,
                         '6': ap+txt+ci,
                         '7': ap+txt+ci,
                         '8': ap+txt+ci,
                         '9': ap+txt+ci,
                         '10': ap+txt+ci,
                         '11' : ap+txt+ci,
                         '12' : ap+txt+ci,
                         '13' : ap+txt+ci,
                         '14' : ap+txt+ci,
                         '15' : ap+txt+ci,
                         '16' : ap+txt+ci,
                         '17' : ap+txt+ci,
                         '18' : ap+txt+ci,
                         '19' : ap+txt+ci,
                         '20' : ap+txt+ci,
                         '21': ap+txt+ci,
                         '22': ap+txt+ci,
                         '23': ap+txt+ci,
                         '24': ap+txt+ci,
                         '25': ap+txt+ci,
                         '26': ap+txt+ci,
                         '27': ap+txt+ci,
                         '28': ap+txt+ci,
                         '29': ap+txt+ci,
                         '30': ap+txt+ci,
                         '31': ap+txt+ci,
                         '32': ap+txt+ci,
                         '33': ap+txt+ci,
                         '34': ap+txt+ci,
                         '35': ap+txt+ci,
                         '36': ap+txt+ci,
                         '37': ap+txt+ci,
                         '38': ap+txt+ci,
                         '39': ap+txt+ci,
                         '40': ap+txt+ci,
                         '41': ap+txt+ci,
                         '42': ap+txt+ci,
                         '43': ap+txt+ci,
                         '44': ap+txt+ci,
                         '45': ap+txt+ci,
                         '46': ap+txt+ci,
                         '47': ap+txt+ci,
                         '48': ap+txt+ci,
                         '49': ap+txt+ci,
                         '50': ap+txt+ci,
                         '51': ap+txt+ci,
                         '52': ap+txt+ci,
                         '53': ap+txt+ci,
                         '54': ap+txt+ci,
                         '55': ap+txt+ci,
                         '56': ap+txt+ci,
                         '57': ap+txt+ci,
                         '58': ap+txt+ci,
                         '59': ap+txt+ci,
                         '60': ap+txt+ci,
                         '61': ap+txt+ci,
                         '62': ap+txt+ci,
                         '63': ap+txt+ci,
                         '64': ap+txt+ci,
                         '65': ap+txt+ci,
                         '66': ap+txt+ci,
                         '67': ap+txt+ci,
                         '68': ap+txt+ci,
                         '69': ap+txt+ci,
                         '70': ap+txt+ci,
                         '71': ap+txt+ci,
                         '72': ap+txt+ci,
                         '73': ap+txt+ci,
                         '74': ap+txt+ci,
                         '75': ap+txt+ci,
                         '76': ap+txt+ci,
                         '77': ap+txt+ci,
                         '78': ap+txt+ci,
                         '79': ap+txt+ci,
                         '80': ap+txt+ci
                     },
                     debug: true,
                     errorElement: "span",
                     submitHandler: function(form){
                                     $("#message").show();
                                     $("#message").html("<div class='alert alert-warning' role='alert' align='justify'><strong><i class='fa fa-cog'></i> Procesando: </strong> Espere un momento..</div>"); 
                                      
                   $.ajax({
                             type: "post",
                             url:"_include/php/actions/action_app3.php?success=data",
                             contentType: "application/x-www-form-urlencoded",
                             processData: true,
                             data: $("#preguntas").serialize(),
                             success: function(msg){
                                console.log(msg);

                                if (msg == 'ok') {

                                    $("#message").html("<div class='alert alert-success' role='alert'><strong><i class='fa fa-check'></i> Exito! </strong> Se han registrado tus respuestas, has concluido el cuestionario.</div>");
                                       
                                       
                                       setTimeout(function() {
                                        $("#message").fadeOut('fast');
                                        $("#instruccion").html("<h1><i class='fa fa-thumbs-o-up'></i> Tus respuestas han sido enviadas.<br><br><br><br><br></h1>");
                                        show_resultado_app3();
                                        $("#proces_app3").removeClass();
                                        $("#proces_app3").attr("class", "label label-success pull-right");
                                        $("#proces_app3").html("Completo 100%");
                                        $(".apptres").removeAttr("id");
                                        $(".apptres").removeAttr("href");
                                        $("#txtSpan").html("<h2>Test de Orientación Vocacional <small>Tu resultado</small></h2><div class='clearfix'></div>");

                                     }, 3000);
                                       
                                       

                                }                   
                             }                       
                         });
                     },
                 });
          });

    
    
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
    <?php
    }
    ?>