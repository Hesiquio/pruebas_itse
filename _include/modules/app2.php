<?php
session_start();
include '../php/actions/functions_view.php';
$id = $_SESSION["session_student"];
?>
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
<div class="">

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><i class="fa fa-bars"></i> Cuestionario <small>Lee cuidadosamente y reponde a critério</small></h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <div align="center">
          <img src="assets/bootstrap/images/banner02.jpg" class="img-responsive" alt="FORMA A">
        </div>
        
        <div class="" role="tabpanel" data-example-id="togglable-tabs">
          <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Instrucciones</a>
            </li>
            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Cuestionario</a>
            </li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <h4><b><i class="fa fa-info-circle"></i> INSTRUCCIONES</b></h4>
              </div>
              <div align="justify" class="col-md-12 col-sm-12 col-xs-12">
                <blockquote>
                  <p>Dentro de esta evaluación hay cierto número de preguntas. Con ellas se quiere conocer sus actividades y sus intereses. No hay respuestas <b>“Buenas”</b> ni <b>“Malas”</b> porque cada quien puede poseer sus propios puntos de vista. Para que se pueda obtener mayor cantidad de información de sus resultados, usted deberá tratar de responder exacta y sinceramente.
                  </footer>
                </blockquote>
                <blockquote>
                  <p>
                  Hay tres respuestas posibles para cada pregunta. lea los siguientes ejemplos y ponga sus contestaciones. Si su respuesta es <b>(a)</b> seleccione dentro del circulo de la izquierda; si su respuesta en <b>(b)</b> seleccione el círculo del centro; si su respuesta es <b>(c)</b> elija el circulo que se encuentra a la derecha.
                </p>
                </blockquote>
                <blockquote>
                  <h4><b><i class="fa fa-bookmark-o"></i> Ejemplo:</b></h4>
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <p>1.- Me gusta ver juegos deportivos entre equipos: </p>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="" value="" name="p01" > a) Si
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="" value="option2" name="p01" checked > b) En ocaciones
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="" value="option2" name="p01" > c) No
                    </label>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <p>2.- Prefiero la gente que es: </p>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="" value="" name="p02" checked > a) Reservada
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="" value=""  name="p02" > b) Intermedia
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="" value=""  name="p02" > c) No
                    </label>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <p>3.- El dinero trae la felicidad: </p>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id=""  name="p03" > a) Si (Cierto)
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="" name="p03" > b) Intermedio
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="" name="p03" checked > c) No (Falso)
                    </label>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <p>4.- Mujer es a niña como gato es a: </p>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="" name="p04" checked > a) Gatito
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="" name="p04" > b) Perro
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label class="to_do">
                      <input type="radio" class="flat" id="" name="p04" > c) Niño
                    </label>
                  </div>

                </blockquote>
              </div>
              
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
              <!-- Fomulario del cuestionario -->
              <br />
              <form name="form_app2" id="form_app2" class="form-horizontal form-label-left input_mask">

                <div class="form-group col-xs-12 col-xs-12 text-muted well well-sm no-shadow">
                  
                  <div class="col-md-5 col-sm-5 col-xs-12">
                    <span class="fa fa-graduation-cap"></span> <b>CARRERA: </b> <?=info_tbl_usuarios("..", "car", $id);?>
                  </div>
                  
                  <div class="col-md-4 col-sm-4 col-xs-12">
                   <span class="fa fa-user" aria-hidden="true"></span> <b>NOMBRE: </b> <?=info_tbl_usuarios("..", "us", $id);?>
                  </div>
                  
                  <div class="col-md-3 col-sm-3 "><?=info_tbl_usuarios("..", "sexo", $id);?>
                    <select name="sexo" id="sexo" class="form-control">
                      <option value="">-- Seleciona Sexo--</option>
                      <option value="H"> HOMBRE</option>
                      <option value="M"> MUJER</option>
                    </select>
                  </div>

                </div>
                <br><br>
                <div id="preguntas">
                <!-- //////////////////// PREGUNTA 1 //////////////////// -->
                <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>1.- ENTENDI PERFECTAMENTE LAS INSTRUCCIONES DE ESTE CUESTIONARIO: </b> 
                    <span for="1X[]" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p1" value="SI" name="1X[]"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p1" value="EN DUDA" name="1X[]"> B) EN DUDA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p1" value="NO"  name="1X[]"> C) NO
                    </label>
                  </div>
                  
                  <!-- //////////////////// PREGUNTA 2 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>2.- ESTOY DISPUESTO A CONTESTAR CADA PREGUNTA TAN SINCERAMENTE COMO ME SEA POSIBLE: </b> 
                    <span for="2X[]" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p2" value="SI"  name="2X[]"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p2" value="EN DUDA" name="2X[]"> B) EN DUDA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p2" value="NO"  name="2X[]"> C) NO
                    </label>
                  </div>
                  
                  <!-- //////////////////// PREGUNTA 3 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>3.- PREFERIRIA TENER UNA CASA: </b>
                  <span for="3A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p3"  name="3A"  value="2"> A) EN UNA ZONA POBLADA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p3"  name="3A"  value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p3"  name="3A"  value="0"> C) ISLADA EN UN BOSQUE
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 4 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>4.- YO TENGO LA ENERGIA SUFICIENTE PARA ENFRENTARME A MIS DIFICULTADES </b>
                  <span for="4A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p4"  name="4A"  value="2"> A) SIEMPRE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p4"  name="4A"  value="1"> B) GENERALMENTE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p4"  name="4A"  value="0"> C) POCAS VECES
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 5 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>5.- ME SIENTO UN POCO NERVIOSO ANTE LOS ANIMALES SALVAJES, AUNQUE ESTÉN ENJAULADOS: </b>
                  <span for="5A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p5"  name="5A"  value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p5"  name="5A"  value="0"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p5"  name="5A"  value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 6 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>6.- EVITO CRITICAR A LAS PERSONAS Y A SUS IDEAS: </b>
                  <span for="6B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" name="6B" id="p6" value="0"> A) SIEMPRE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" name="6B" id="p6" value="1"> B) A VECES
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" name="6B" id="p6" value="2"> C) NUNCA
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 7 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>7.- YO HAGO OBSERVACIONES SARCASTICAS A LAS PERSONAS QUE CREO QUE SE LAS MERECEN:</b>
                  <span for="7B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" name="7B" id="p7" value="2"> A) SIEMPRE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat"  name="7B" id="p7" value="1"> B) A VECES
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" name="7B" id="p7" value="0"> C) NUNCA
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 8 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>8.- YO PREFIERO LA MÚSICA SEMICLÁSICA QUE LAS CANCIONES POPULARES: </b>
                  <span for="8A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat"  name="8A" id="p8" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" name="8A" id="p8" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat"  name="8A" id="p8" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 9 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>9.- SI YO VIERA PELEAR A LOS NIÑOS DE MI VECINO:</b>
                  <span for="9B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p9"  name="9B"  value="0"> A) DEJARIA QUE SE ARREGLARAN SOLOS
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" name="9B" id="p9" value="1"> B) NO SABRIA QUE HACER
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat"  name="9B" id="p9" value="2"> C) INTENTARIA RECONCILIARLOS
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 10 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>10.- EN LAS REUNIONES SOCIALES: </b>
                  <span for="10A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p10"  name="10A"  value="2"> A) ME HAGO NOTAR
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p10"  name="10A" value="1"> B) NO SE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input type="radio" class="flat" id="p10"  name="10A"  value="0"> C) PREFIERO PERMANECER A DISTANCIA
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 11 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>11.- YO PREFERIRIA SER:</b>
                    <span for="11B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="11B" type="radio" class="flat" id="p11" value="0"> A) INGENIERO CONSTRUCTOR
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="11B" type="radio" class="flat" id="p11" value="1"> B) INDECISO 
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="11B" type="radio" class="flat" id="p11" value="2"> C) ESCRITOR DE GUINES (DRAMATURGO)
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 12 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>12.- YO PREFIERO DETENERME A OBSERVAR A UN ARTISTA PINTANDO QUE ESCUCHAR A UNA PERSONA DISCUTIENDO VIOLENTAMENTE: </b>
                  <span for="12B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="12B" type="radio" class="flat" id="p12" value="2"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="12B" type="radio" class="flat" id="p12" value="1"> B) NO SE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="12B" type="radio" class="flat" id="p12" value="0"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 13 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>13.- CASI SIEMPRE PUEDO TOLERAR A LA GENTE VANIDOSA QUE SE CREE LA GRAN COSA:</b>
                  <span for="13A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="13A" type="radio" class="flat" id="p13" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="13A" type="radio" class="flat" id="p13" value="1"> B) EN DUDA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="13A" type="radio" class="flat" id="p13" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 14 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>14.- CUANDO UN HOMBRE ES DESHONESTO, CASI SIEMPRE LO PUEDES NOTAR EN SU CARA: </b>
                  <span for="14B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="14B" type="radio" class="flat" id="p14" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="14B" type="radio" class="flat" id="p14" value="1"> B) EN DUDA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="14B" type="radio" class="flat" id="p14" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 15 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>15.- SERÍA MEJOR QUE LAS VACACIONES FUERAN MÁS LARGAS Y QUE TODOS TUVIERAN QUE TOMARLAS: </b>
                  <span for="15B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="15B" type="radio" class="flat" id="p15" value="0"> A) DE ACUERDO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="15B" type="radio" class="flat" id="p15" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="15B" type="radio" class="flat" id="p15" value="2"> C) EN DESACUERDO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 16 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>16.- YO PREFIERO DETENERME A OBSERVAR A UN ARTISTA PINTANDO QUE ESCUCHAR A UNA PERSONA DISCUTIENDO VIOLENTAMENTE: </b>
                  <span for="16A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="16A" type="radio" class="flat" id="p16" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="16A" type="radio" class="flat" id="p16" value="1"> B) EN DUDA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="16A" type="radio" class="flat" id="p16" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 17 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>17.- YO HABLO SOBRE MIS SENTIMIENTOS:</b>
                  <span for="17A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="17A" type="radio" class="flat" id="p17" value="2"> A) SI LO ES NECESARIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="17A" type="radio" class="flat" id="p17" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="17A" type="radio" class="flat" id="p17" value="0"> C) CADA QUE TENGO LA OPORTUNIDAD
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 18 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>18.- EN OCACIONES TENGO LA SENSACIÓN DE UN VAGO PELIGRO, O UN MIEDO SÚBITO POR RAZONES QUE NO COMPRENDO: </b>
                  <span for="18B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="18B" type="radio" class="flat" id="p18" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="18B" type="radio" class="flat" id="p18" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="18B" type="radio" class="flat" id="p18" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 19 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>19.- CUANDO ME REGAÑAN POR ALGO QUE NO HICE, NO ME SIENTO CULPABLE: </b>
                  <span for="19B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="19B" type="radio" class="flat" id="p19" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="19B" type="radio" class="flat" id="p19" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="19B" type="radio" class="flat" id="p19" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 20 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>20.- CON DINERO PUEDO COMPRAR CASI TODO: </b>
                  <span for="20A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="20A" type="radio" class="flat" id="p20" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="20A" type="radio" class="flat" id="p20" value="1"> B) DUDOSO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="20A" type="radio" class="flat" id="p20" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 21 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>21.- EN MIS DECISIONES INFLUYEN MIS: </b>
                  <span for="21A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="21A" type="radio" class="flat" id="p21" value="0"> A) MIS EMOCIONES
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="21A" type="radio" class="flat" id="p21" value="1"> B) MIS SENTIMIENTOS Y RAZON POR IGUAL
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="21A" type="radio" class="flat" id="p21" value="2"> C) MIS RAZONAMIENTOS
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 22 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>22.- LA MAYORIA DE LAS PERSONAS SERIAN MAS FELICES SI SE RELACIONARAN MAS CON SUS SEMEJANTES E HICIERAN LO MISMO QUE OTROS </b>
                  <span for="22B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="22B" type="radio" class="flat" id="p22" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="22B" type="radio" class="flat" id="p22" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="22B" type="radio" class="flat" id="p22" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 23 //////////////////// -->
                <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>23.- CUANDO ME VEO EN UN ESPEJO, ALGUNAS VECES CONFUNDO CUAL ES LA DERECHA Y CUAL ES LA IZQUIERDA:</b>
                  <span for="23A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="23A" type="radio" class="flat" id="p23" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="23A" type="radio" class="flat" id="p23" value="1"> B) EN DUDA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="23A" type="radio" class="flat" id="p23" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 24 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>24.- CUANDO ESTOY PLATICANDO ME GUSTA: </b>
                  <span for="24A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="24A" type="radio" class="flat" id="p24" value="0"> A) DECIR LAS COSAS TAL Y COMO SE ME OCURREN
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="24A" type="radio" class="flat" id="p24" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="24A" type="radio" class="flat" id="p24" value="2"> C) ORGANIZAR PRIMERO MIS PENSAMIENTOS 
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 25 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>25.- CUANDO ALGO EN VERDAD ME PONE FURIOSO, POR LO GENERAL ME CALMO RAPIDAMENTE: </b>
                  <span for="25B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="25B" type="radio" class="flat" id="p25" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="25B" type="radio" class="flat" id="p25" value="1"> B) EN DUDA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="25B" type="radio" class="flat" id="p25" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 26 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>26.- SI YO TUVIERA EL MISMO SUELDO Y HORARIO, ME GUSTARÍA MÁS TRABAJAR COMO: </b>
                  <span for="26A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="26A" type="radio" class="flat" id="p26" value="0"> A) CARPINTERO O COCINERO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="26A" type="radio" class="flat" id="p26" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="26A" type="radio" class="flat" id="p26" value="2"> C) MESERO EN UN BUEN RESTAURANTE
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 27 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>27.- YO SOY APTO PARA: </b>
                  <span for="27A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="27A" type="radio" class="flat" id="p27" value="0"> A) ALGUNOS POCOS EMPLEOS
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="27A" type="radio" class="flat" id="p27" value="1"> B) VARIOS EMPLEOS
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="27A" type="radio" class="flat" id="p27" value="2"> C) MUCHOS EMPLEOS
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 28 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>28.- "PALA" ES A "CAVAR" COMO "CUCHILLO" ES A: </b>
                  <span for="28B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="28B" type="radio" class="flat" id="p28" value="0"> A) AFILADO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="28B" type="radio" class="flat" id="p28" value="1"> B) CORTAR
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="28B" type="radio" class="flat" id="p28" value="0"> C) PUNTIAGUDO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 29 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>29.- A VECES NO PUEDO DORMIR PORQUE UNA IDEA ME DA VUELTAS EN LA CABEZA</b>
                  <span for="29A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="29A" type="radio" class="flat" id="p29" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="29A" type="radio" class="flat" id="p29" value="1"> B) DUDOSO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="29A" type="radio" class="flat" id="p29" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 30 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>30.- EN MI VIDA PRIVADA, CASI SIEMPRE ALCANZO LAS METAS QUE ME PROPONGO </b>
                  <span for="30A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="30A" type="radio" class="flat" id="p30" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="30A" type="radio" class="flat" id="p30" value="1"> B) DUDOSO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="30A" type="radio" class="flat" id="p30" value="0"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 31 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>31.- CUANDO UNA LEY ES ANTICUADA DEBE SER CAMBIADA:</b>
                  <span for="31B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="31B" type="radio" class="flat" id="p31" value="0"> A) SOLO DESPUÉS DE UNA DISCUSIÓN CONSIDERABLE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="31B" type="radio" class="flat" id="p31" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="31B" type="radio" class="flat" id="p31" value="2"> C) RAPIDAMENTE
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 32 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>32.- ME DISGUSTA TRABAJAR EN UN PROYECTO EN EL QUE SE TOMAN MEDIDAS RÁPIDAS QUE AFECTAN A OTROS</b>
                  <span for="32B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="32B" type="radio" class="flat" id="p32" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="32B" type="radio" class="flat" id="p32" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="32B" type="radio" class="flat" id="p32" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 33 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>33.- LA MAYORIA DE LA GENTE QUE CONOZCO ME CONSIDERA COMO UN CONVERSADOR AGRADABLE.</b>
                  <span for="33A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="33A" type="radio" class="flat" id="p33" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="33A" type="radio" class="flat" id="p33" value="1"> B) INDECISO 
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="33A" type="radio" class="flat" id="p33" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 34 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>34.- CUANDO VEO A PERSONAS DESALIÑADAS Y DESASEADAS, YO: </b>
                  <span for="34B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="34B" type="radio" class="flat" id="p34" value="0"> A) LAS ACEPTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="34B" type="radio" class="flat" id="p34" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="34B" type="radio" class="flat" id="p34" value="2"> C) ME DISGUSTO
                     </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 35 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>35.- ME SIENTO UN POCO APENADO SI DE REPENTE ME CONVIERTO EN EL CENTRO DE ATENCIÓN EN UNA REUNIÓN SOCIAL.</b>
                  <span for="35A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="35A" type="radio" class="flat" id="p35" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="35A" type="radio" class="flat" id="p35" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="35A" type="radio" class="flat" id="p35" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 36 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>36.- SIEMPRE ME GUSTA PARTICIPAR EN REUNIONES CONCURRIDAS, POR EJEMPLO: UNA FIESTA, UN MITIN. </b>
                  <span for="36A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="36A" type="radio" class="flat" id="p36" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="36A" type="radio" class="flat" id="p36" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="36A" type="radio" class="flat" id="p36" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 37 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>37.- EN LA ESCUELA PREFIERO (O PREFERI):</b>
                  <span for="37B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="37B" type="radio" class="flat" id="p37" value="2"> A) LA MUSICA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="37B" type="radio" class="flat" id="p37" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="37B" type="radio" class="flat" id="p37" value="0"> C) LOS TRABAJOS MANUALES
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 38 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>38.- CUANDO ESTOY ENCARGADO DE HACER ALGO, YO INSISTO EN QUE SE SIGAN MIS INSTRUCCIONES O BIEN RENUNCIO: </b>
                  <span for="38X" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="38X" type="radio" class="flat" id="p38" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="38X" type="radio" class="flat" id="p38" value="0"> B) A VECES
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="38X" type="radio" class="flat" id="p38" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 39 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>39.- PARA LOS PADRES ES MÁS IMPORTANTE:</b>
                  <span for="39B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="39B" type="radio" class="flat" id="p39" value="2"> A) AYUDAR A SUS NIÑOS A DESARROLLAR SUS AFECTOS
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="39B" type="radio" class="flat" id="p39" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="39B" type="radio" class="flat" id="p39" value="0"> C) ENSEÑAR A SUS NIÑOS COMO CONTROLAR SUS EMOCIONES
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 40 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>40.- EN UNA TAREA DE GRUPO, YO MÁS BIEN TRATARÍA DE: </b>
                  <span for="40B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="40B" type="radio" class="flat" id="p40" value="2"> A) IMPONER ACUERDOS
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="40B" type="radio" class="flat" id="p40" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="40B" type="radio" class="flat" id="p40" value="0"> C) HACER APUNTES Y VER QUE SE OBEDEZCAN LAS REGLAS 
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 41 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>41.- DE VEZ EN CUANDO SIENTO LA NECESIDAD DE REALIZAR ACTIVIDADES FÍSICAS RUDAS O PESADAS </b>
                  <span for="41A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="41A" type="radio" class="flat" id="p41" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="41A" type="radio" class="flat" id="p41" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="41A" type="radio" class="flat" id="p41" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 42 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>42.- PREFERIRIA JUNTARME CON GENTE BIEN EDUCADA A JUNTARME CON INDIVIDUOS TOSCOS Y REBELDES.</b>
                  <span for="42A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="42A" type="radio" class="flat" id="p42" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="42A" type="radio" class="flat" id="p42" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="42A" type="radio" class="flat" id="p42" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 43 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>43.- ME SIENTO MUY AFLIGIDO CUANDO LA GENTE ME CRITICA EN PÚBLICO. </b>
                  <span for="43B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="43B" type="radio" class="flat" id="p43" value="2"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="43B" type="radio" class="flat" id="p43" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="43B" type="radio" class="flat" id="p43" value="0"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 44 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>44.- CUANDO EL JEFE (O EL MAESTRO) ME LLAMA: </b>
                  <span for="44B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="44B" type="radio" class="flat" id="p44" value="0"> A) VEO UNA OPORTUNIDAD PARA HABLAR DE COSAS QUE ME INTERESAN
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="44B" type="radio" class="flat" id="p44" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="44B" type="radio" class="flat" id="p44" value="2"> C) TEMO HABER HECHO ALGO 
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 45 //////////////////// -->
                <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>45.- LO QUE ESTE MUNDO NECESITA SON:  </b>
                  <span for="45A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="45A" type="radio" class="flat" id="p45" value="0"> A) CIUDADANOS FIRMES Y SERIOS
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="45A" type="radio" class="flat" id="p45" value="1"> B) NO SE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="45A" type="radio" class="flat" id="p45" value="2"> C) “IDEALISTAS” CON PLANES DE MEJORARLO 
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 46 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>46.- EN TODO LO QUE LEO, ESTOY SIEMPRE PENDIENTE DE LAS INTENCIONES PROPAGANDISTAS.</b>
                  <span for="46A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="46A" type="radio" class="flat" id="p46" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="46A" type="radio" class="flat" id="p46" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="46A" type="radio" class="flat" id="p46" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 47 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>47.- DE ADOLESCENTE PARTICIPE EN LOS DEPORTES ESCOLARES: </b>
                  <span for="47B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="47B" type="radio" class="flat" id="p47" value="2"> A) POCAS VECES
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="47B" type="radio" class="flat" id="p47" value="1"> B) FRECUENTEMENTE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="47B" type="radio" class="flat" id="p47" value="0"> C) MUY FRECUENTEMENTE 
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 48 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>48.- YO CONSERVO MI CUARTO BIEN ARREGLADO, CON CADA COSA EN SU LUGAR.  </b>
                  <span for="48A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="48A" type="radio" class="flat" id="p48" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="48A" type="radio" class="flat" id="p48" value="1"> B) ALGUNAS VECES
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="48A" type="radio" class="flat" id="p48" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 49 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>49.- A VECES ME PONGO TENSO E INQUIETO CUANDO PIENSO EN LOS SUCESOS DEL DÍA.</b>
                  <span for="49B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="49B" type="radio" class="flat" id="p49" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="49B" type="radio" class="flat" id="p49" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="49B" type="radio" class="flat" id="p49" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 50 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>50.- A VECES DUDO QUE LA GENTE CON LA QUE HABLO SE INTERESE REALMENTE EN LO QUE DIGO. </b>
                  <span for="50B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="50B" type="radio" class="flat" id="p50" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="50B" type="radio" class="flat" id="p50" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="50B" type="radio" class="flat" id="p50" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 51 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>51.- SI TUVIERA QUE ESCOGER, PREFERIRÍA SER: </b>
                  <span for="51A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="51A" type="radio" class="flat" id="p51" value="0"> A) GUARDABOSQUES
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="51A" type="radio" class="flat" id="p51" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="51A" type="radio" class="flat" id="p51" value="2"> C) MAESTRO DE ESCUELA
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 52 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>52.- EN SANTOS Y CUMPLEAÑOS: </b>
                  <span for="52A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="52A" type="radio" class="flat" id="p52" value="2"> A) ME GUSTA HACER REGALOS PERSONALES
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="52A" type="radio" class="flat" id="p52" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="52A" type="radio" class="flat" id="p52" value="0"> C) CREO QUE ES UN POCO MOLESTO COMPRAR REGALOS
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 53 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>53.- “CANSADO” ES A “TRABAJO” COMO “ORGULLO” ES A: </b>
                  <span for="53B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="53B" type="radio" class="flat" id="p53" value="0"> A) SONRRISA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="53B" type="radio" class="flat" id="p53" value="1"> B) EXITO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="53B" type="radio" class="flat" id="p53" value="0"> C) FELICIDAD
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 54 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>54.- ¿CUÁL DE LAS SIGUIENTES PALABRAS ES DE CLASE DISTINTA A LAS OTRAS?</b>
                  <span for="54B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="54B" type="radio" class="flat" id="p54" value="0"> A) VELA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="54B" type="radio" class="flat" id="p54" value="1"> B) LUNA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="54B" type="radio" class="flat" id="p54" value="0"> C) LUZ ELECTRICA
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 55 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>55.- HE SIDO ABANDONADO POR MIS AMIGOS:</b>
                  <span for="55A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="55A" type="radio" class="flat" id="p55" value="2"> A) CASI NUNCA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="55A" type="radio" class="flat" id="p55" value="0"> B) OCASIONALMENTE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="55A" type="radio" class="flat" id="p55" value="0"> C) MUY A MENUDO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 56 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>56.- YO TENGO ALGUNAS CUALIDADES POR LO QUE ME SIENTO SUPERIOR A LA MAYORÍA DE LA GENTE. </b>
                  <span for="56B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="56B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="56B" type="radio" class="flat" id="" value="1"> B) DUDOSO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="56B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 57 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>57.- CUANDO ME ENOJO, YO ME ESFUERZO POR OCULTAR MIS SENTIMIENTOS A LOS DEMAS.</b>
                  <span for="57B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="57B" type="radio" class="flat" id="" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="57B" type="radio" class="flat" id="" value="1"> B) A VECES
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="57B" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 58 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>58.- ME GUSTA ASISTIR A ESPECTÁCULOS, O IR A FIESTAS: </b>
                  <span for="58A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="58A" type="radio" class="flat" id="" value="2"> A) MAS DE UNA VEZ A LA SEMANA (MAS DE LO NORMAL)
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="58A" type="radio" class="flat" id="" value="1"> B) UNA VEZ A LA SEMANA (LO NORMAL)
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="58A" type="radio" class="flat" id="" value="0"> C) MENOS DE UNA VEZ A LA SEMANA (LO MENOS NORMAL)
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 59 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>59.- PIENSO QUE SUFICIENTE LIBERTAN ES MÁS IMPORTANTE QUE LAS BUENAS COSTUMBRES Y EL RESPETO A LA LEY. </b>
                  <span for="59B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="59B" type="radio" class="flat" id="" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="59B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="59B" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 60 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>60.- EN PRESENCIA DE PERSONAS DE MAYOR EXPERIENCIA, EDAD O POSICIÓN, TIENDO A PERMANECER CALLADO.</b>
                  <span for="60A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="60A" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="60A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="60A" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 61 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>61.- SE ME HACE DIFÍCIL HABLAR O RECITAR FRENTE A UN GRUPO NUMEROSO </b>
                  <span for="61A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="61A" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="61A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="61A" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 62 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>62.- CUANDO ESTOY EN UN LUGAR EXTRAÑO, TENGO UN BUEN SENTIDO DE LA ORIENTACION (ENCUENTRO FÁCILMENTE DONDE ESTA EL NORTE, SUR, ESTE Y OESTE. </b>
                  <span for="62B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="62B" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="62B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="62B" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 63 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>63.- SI ALGUIEN SE ENOJA CONMIGO, YO: </b>
                  <span for="63A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="63A" type="radio" class="flat" id="" value="0"> A) TRATO DE CALMARLO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="63A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="63A" type="radio" class="flat" id="" value="2"> C) ME IRRITO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 64 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>64.- CUANDO LEO UN ARTÍCULO TENDENCIOSO O INJUSTO EN UNA REVISTA TIENDO A OLVIDARLO, MÁS QUE SENTIR GANAS DE “DEVOLVERLES EL GOLPE” </b>
                  <span for="64A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="64A" type="radio" class="flat" id="" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="64A" type="radio" class="flat" id="" value="1"> B) DUDOSO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="64A" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 65 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>65.- TIENDO A OLVIDAR MUCHAS COSAS TRIVIALES Y SIN IMPORTANCIA, COMO NOMBRES DE CALLES O DE TIENDAS. </b>
                  <span for="65B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="65B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="65B" type="radio" class="flat" id="" value="1"> B) ALGUNAS VECES
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="65B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 66 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>66.- ME GUSTARÍA LLEVAR LA VIDA DE UN VETERINARIO, CURANDO Y OPERANDO ANIMALES. </b>
                  <span for="66A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="66A" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="66A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="66A" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 67 //////////////////// -->
                <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>67.- YO COMO MIS ALIMENTOS CON PLACER, AUNQUE NO SIEMPRE TAN CUIDADOSA Y APROPIADAMENTE COMO ALGUNAS PERSONAS.</b>
                  <span for="67A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="67A" type="radio" class="flat" id="" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="67A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="67A" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 68 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>68.- ALGUNAS VECES NO TENGO GANAS DE VER A NADIE: </b>
                  <span for="68B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="68B" type="radio" class="flat" id="" value="0"> A) RARAS VECES
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="68B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="68B" type="radio" class="flat" id="" value="2"> C) MUY FRECUENTEMENTE 
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 69 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>69.- A VECES LAS PERSONAS ME DICEN QUE MUESTRO DE MANERA DEMASIADO CLARA MI AGITACION. </b>
                  <span for="69B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="69B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="69B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="69B" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 70 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>70.- DE ADOLESCENTE, SI MI OPINIÓN ERA DISTINTA A LA DE MIS PADRES, YO POR LO GENERAL: </b>
                  <span for="70A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="70A" type="radio" class="flat" id="" value="2"> A) LA MANTENIA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="70A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="70A" type="radio" class="flat" id="" value="0"> C) ACEPTABA LA AUTORIDAD DE MIS PADRES
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 71 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>71.- ME GUSTARÍA TENER UNA OFICINA PARA MÍ, QUE NO FUERA COMPARTIDA CON OTRA PERSONA. </b>
                  <span for="71B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="71B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="71B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="71B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 72 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>72.- PREFERIRIA DISFRUTAR LA VIDA DISCRETAMENTE A MI MANERA, MAS QUE SER ADMIRADO POR MIS EXITOS. </b>
                  <span for="72B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="72B" type="radio" class="flat" id="" value="2"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="72B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="72B" type="radio" class="flat" id="" value="0"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 73 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>73.- ME SIENTO MADURO EN LA MAYORÍA DE MIS ACTOS:</b>
                  <span for="73A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="73A" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="73A" type="radio" class="flat" id="" value="1">B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="73A" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 74 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>74.- CUANDO LA GENTE ME CRITICA ME ENOJO, EN VEZ DE SENTIRME AYUDADO </b>
                  <span for="74B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="74B" type="radio" class="flat" id="" value="2"> A) FRECUENTEMENTE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="74B" type="radio" class="flat" id="" value="1"> B) OCACIONALMENTE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="74B" type="radio" class="flat" id="" value="0"> C) NUNCA
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 75 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>75.- ESTOY DISPUESTO A EXPRESAR MIS SENTIMIENTOS SOLO BAJO MI ESTRICTO CONTROL.</b>
                  <span for="75B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="75B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="75B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="75B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 76 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>76.- AL INVENTAR ALGO UTIL, PREFERIRIA:</b>
                  <span for="76A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="76A" type="radio" class="flat" id="" value="0"> A) PERFECCIONARLO EN EL LABORATORIO 
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="76A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="76A" type="radio" class="flat" id="" value="2"> C) VENDERSELO A LA GENTE 
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 77 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>77.- “SORPRESA” ES A “EXTRAÑO” COMO “MIEDO” ES A:</b>
                  <span for="77B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="77B" type="radio" class="flat" id="" value="0"> A) VALIENTE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="77B" type="radio" class="flat" id="" value="0"> B) ANSIOSO 
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="77B" type="radio" class="flat" id="" value="1"> C) TERRIBLE
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 78 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>78.- ¿CUÁL DE LAS SIGUIENTES FRACCIONES ES DISTINTA A LAS OTRAS DOS?  </b>
                  <span for="78B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="78B" type="radio" class="flat" id="" value="0"> A) 3/7
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="78B" type="radio" class="flat" id="" value="1"> B) 3/9
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="78B" type="radio" class="flat" id="" value="0"> C) 3/11
                     </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 79 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>79.- YO NO SE POR QUE, PERO ALUNAS PERSONAS COMO QUE ME IGNORAN O ME EVITAN.</b>
                  <span for="79A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="79A" type="radio" class="flat" id="" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="79A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="79A" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 80 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>80.- LAS PERSONAS ME TRATAN CON MENOS CONSIDERACIÓN DE LO QUE MERECEN MIS BUENAS INTENCIONES. </b>
                  <span for="80A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="80A" type="radio" class="flat" id="" value="0"> A) A MENUDO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="80A" type="radio" class="flat" id="" value="1"> B) EN OCACIONES
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="80A" type="radio" class="flat" id="" value="2"> C) NUNCA
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 81 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>81.- EN UN GRUPO, ME MOLESTA QUE SE DIGAN ALBURES O GROSERÍAS AUN CUANDO NO HAYA MUJERES DELANTE.</b>
                  <span for="81B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="81B" type="radio" class="flat" id="" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="81B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="81B" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 82 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>82.- YO TENGO INDUDABLEMENTE MENOS AMIGOS QUE LA MAYORÍA DE LA GENTE. </b>
                  <span for="82A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="82A" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="82A" type="radio" class="flat" id="" value="1"> B) EN DUDA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="82A" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 83 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>83.- DETESTARÍA ESTAR EN UN LUGAR DONDE NO HUBIERA MUCHAS PERSONAS CON QUIEN PLATICAR.</b>
                  <span for="83A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="83A" type="radio" class="flat" id="" value="2"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="83A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="83A" type="radio" class="flat" id="" value="0"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 84 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>84.- LAS PERSONAS DICEN QUE SOY DESCUIDADO A VECES, AUNQUE ELLAS ME CONSIDEREN SIMPÁTICO. </b>
                  <span for="84B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="84B" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="84B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="84B" type="radio" class="flat" id="" value="2"> A) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 85 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>85.- EN DISTINTAS OCASIONES DE MI VIDA SOCIAL HE EXPERIMENTADO MIEDO AL PUBLICO. </b>
                  <span for="85A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="85A" type="radio" class="flat" id="" value="0"> A) FRECUENTEMENTE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="85A" type="radio" class="flat" id="" value="1"> B) EN OCASIONES
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="85A" type="radio" class="flat" id="" value="2"> C) CASI NUNCA 
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 86 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>86.- CUANDO ESTOY EN UN GRUPO PEQUEÑO, ME AGRADA PERMANECER EN SILENCIO Y MEJOR DEJAR QUE OTROS HABLEN.</b>
                  <span for="86A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="86A" type="radio" class="flat" id="" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="86A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="86A" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 87 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>87.- YO PREFIERO LEER </b>
                  <span for="87B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="87B" type="radio" class="flat" id="" value="0"> A) UNA NARRACION REALISTA DE BATALLAS MILITARES O POLITICAS
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="87B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="87B" type="radio" class="flat" id="" value="2"> C) UNA NOVELA SENTIMENTAL E IMAGINATIVA
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 88 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>88.- CUANDO LA GENTE MANDONA TRATA DE IMPONERSE, YO HAGO EXACTAMENTE LO CONTRARIO DE LO QUE ELLAS QUIEREN. </b>
                  <span for="88A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="88A" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="88A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="88A" type="radio" class="flat" id="" value="0"> C) NO 
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 89 //////////////////// -->
                <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>89.- ES UNA REGLA QUE MIS JEFES O LOS MIEMBROS DE MI FAMILIA ME CONSIDEREN CULPABLE SOLO SI EXISTE UNA RAZÓN REAL.</b>
                  <span for="89A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="89A" type="radio" class="flat" id="" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="89A" type="radio" class="flat" id="" value="1"> B) EN INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="89A" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 90 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>90.- ME DESAGRADA LA MANERA COMO ALGUNAS PERSONAS OBSERVAN CON DESCARO O SIN RECATO A OTRAS, EN LAS CALLES O EN LAS TIENDAS. </b>
                  <span for="90B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="90B" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="90B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="90B" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 91 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>91.- EN UN VIAJE LARGO, PREFERIRIA: </b>
                  <span for="91B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="91B" type="radio" class="flat" id="" value="2"> A) LEER ALGO SERIO PERO INTERESANTE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="91B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="91B" type="radio" class="flat" id="" value="0"> C) PLATICAR CON EL PASAJERO DE JUNTO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 92 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>92.- EN UNA SITUACION QUE PUEDE VOLVERSE PELIGROSA, YO CREO CONVENIENTE HACER RUIDO Y ESCANDALO, AUNQUE SE PIERDA LA SERENIDAD Y LA CORTESIA. </b>
                  <span for="92A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="92A" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="92A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="92A" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 93 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>93.- SI MIS CONOCIDOS ME TRATAN MAL Y ME DEMUESTRAN QUE LES DISGUSTO: </b>
                  <span for="93B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="93B" type="radio" class="flat" id="" value="0"> A) ME IMPORTA POCO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="93B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="93B" type="radio" class="flat" id="" value="2"> C) ME PONGO TRISTE
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 94 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>94.- LAS ALABANZAS Y LOS CUMPLIDOS QUE ME DICEN, ME DESAGRADAN. </b>
                  <span for="94B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="94B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="94B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="94B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 95 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>95.- ME GUSTARIA MAS BIEN TENER UN TRABAJO CON:</b>
                  <span for="95A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="95A" type="radio" class="flat" id="" value="0"> A) UN SUELDO FIJO Y SEGURO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="95A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="95A" type="radio" class="flat" id="" value="2"> C) UN SUELDO BASTANTE ALTO, QUE DEPENDERIA DE MI CONSTANTE PERSUASION A GENTE QUE ME DESAGRADA
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 96 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>96.- PARA MANTENERME INFORMADO YO PREFIERO: </b>
                  <span for="96B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="96B" type="radio" class="flat" id="" value="0"> A) DISCUTIR LOS ASUNTOS CON LAS PERSONAS
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="96B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="96B" type="radio" class="flat" id="" value="2"> C) LEER LOS REPORTES NOTICIOSOS DIARIOS
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 97 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>97.- ME GUSTA TOMAR PARTE ACTIVA EN ASUNTOS SOCIALES, COMITES, ETC.</b>
                  <span for="97B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="97B" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="97B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="97B" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 98 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>98.- EN EL DESEMPEÑO DE UNA TEREA, NO ESTOY SATISFECHO HASTA QUE NO SE HAYA REALIZADO CON ATENCIÓN EL MÁS MÍNIMO DETALLE </b>
                  <span for="98A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="98A" type="radio" class="flat" id="" value="2"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="98A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="98A" type="radio" class="flat" id="" value="0"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 99 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>99.- A VECES PEQUEÑAS CONTRARIEDADES ME IRRITAN DEMASIADO</b>
                  <span for="99B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="99B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="99B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="99B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 100 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>100.- YO SIEMPRE DUERMO PROFUNDO, NUNCA HABLO NI CAMINO DURMIENDO </b>
                  <span for="100B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="100B" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="100B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="100B" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 101 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>101.- SERIA MUY INTERESANDO TRABAJAR EN UNA EMPRESA</b>
                  <span for="101A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="101A" type="radio" class="flat" id="" value="2"> A) HABLANDO CON LOS CLIENTES
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="101A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="101A" type="radio" class="flat" id="" value="0"> C) LLEVANDO LAS CUENTAS Y EL ARCHIVO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 102 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>102.- “TAMAÑO” ES A “LONGITUD” COMO “DESHONESTIDAD” ES A: </b>
                  <span for="102B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="102B" type="radio" class="flat" id="" value="0"> A) PRISION
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="102B" type="radio" class="flat" id="" value="0"> B) PECADO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="102B" type="radio" class="flat" id="" value="1"> C) ROBO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 103 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>103.- AB ES A DC COMO SR ES A: </b>
                  <span for="103B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="103B" type="radio" class="flat" id="" value="0"> A) QP
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="103B" type="radio" class="flat" id="" value="1"> B) PQ
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="103B" type="radio" class="flat" id="" value="2"> C) TU
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 104 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>104.- CUANDO LA GENTE NO ES RAZONABLE: </b>
                  <span for="104A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="104A" type="radio" class="flat" id="" value="2"> A) ME QUEDO CALLADO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="104A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="104A" type="radio" class="flat" id="" value="0"> C) LOS DESPRECIO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 105 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>105.- SI ALGUIEN HABLA EN VOZ ALTA CUANDO ESTOY ESCUCHANDO MUSICA:</b>
                  <span for="105A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="105A" type="radio" class="flat" id="" value="2"> A) PUEDO CONCENTRARME EN LA MUSICA Y NO ME MOLESTA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="105A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="105A" type="radio" class="flat" id="" value="0"> C) ACABAN CON MI PLACER Y ME MOLESTO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 106 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>106.- CREO QUE ESTOY BIEN DESCRITO COMO: </b>
                  <span for="106B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="106B" type="radio" class="flat" id="" value="0"> A) EDUCADO Y TRANQUILO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="106B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="106B" type="radio" class="flat" id="" value="2"> C) ENERGETICO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 107 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>107.- ASISTO A REUNIONES SOCIALES SÓLO CUANDO TENGO QUE HACERLA, DE OTRA MANERA TRATO DE EVITARLA </b>
                  <span for="107A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="107A" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="107A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="107A" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 108 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>108.- SER PRECAVIDO Y ESPERA POCO ES MEJOR QUE SER OPTIMISTA Y ESPERAR SIEMPRE EL EXITO </b>
                  <span for="108A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="108A" type="radio" class="flat" id="" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="108A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="108A" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 109 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>109.- CUANDO PIENSO EN LAS DIFICULTADES DE MI TRABAJO</b>
                  <span for="109B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="109B" type="radio" class="flat" id="" value="2"> A) TRATO DE PLANTEARLAS ANTICIPADAMENTE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="109B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="109B" type="radio" class="flat" id="" value="0"> C) SUPONGO QUE PODRÉ MANEJARLAS CUANDO SE PRESENTEN
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 110 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>110.- PARA MI ES FACIL INCORPORARME CON LAS PERSONAS EN UNA REUNION SOCIAL </b>
                  <span for="110A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="110A" type="radio" class="flat" id="" value="2"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="110A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="110A" type="radio" class="flat" id="" value="0"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 111 //////////////////// -->
                <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>111.- CUANDO UN POCO DE DIPLOMACIA Y PERSUASION SON NECESARIAS PARA QUE LA GENTE ACTUE, YO GENERALMENTE SOY EL PRIMERO EN FOMENTARLAS</b>
                  <span for="111A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="111A" type="radio" class="flat" id="" value="2"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="111A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="111A" type="radio" class="flat" id="" value="0"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 112 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>112.- SERIA MUY INTERESANTE SER. </b>
                  <span for="112B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="112B" type="radio" class="flat" id="" value="2"> A) ORIENTADOR PROFESIONAL DE MUCHACHOS QUE TRATAN DE ENCONTRAR SU CARRERA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="112B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="112B" type="radio" class="flat" id="" value="0"> C) INGENIERO MECANICO INDUSTRIAL
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 113 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>113.- SI ESTOY COMPLETAMENTE SEGURO DE QUE UNA PERSONA ES INJUSTA O EGOÍSTA, SE LO DIGO, AUNQUE ME TRAIGA PROBLEMAS </b>
                  <span for="113A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="113A" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="113A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="113A" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 114 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>114.- A VECES YO HAGO OBSERVACIONES TONTAS EN BROMA SOLO PARA QUE LAS PERSONAS SE SORPRENDAN Y VER QUÉ ES LO QUE ME DICE </b>
                  <span for="114A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="114A" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="114A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="114A" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 115 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>115.- ME GUSTARÍA SER REPORTERO DE TEATRO, ÓPERA, CONCIERTOS </b>
                  <span for="115B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="115B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="115B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="115B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 116 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>116.- YO NUNCA SIENTO LA NECESIDAD DE HACER GARABATOS, NI PONERME NERVIOSO CUANDO ESTOY EN UNA REUNION </b>
                  <span for="116B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="116B" type="radio" class="flat" id="" value="2"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="116B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="116B" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 117 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>117.- SI ALGUIEN ME DICE ALGO, QUE SE QUE ES FALSO, YO MUY PROBABLEMENTE ME DIGA</b>
                  <span for="117A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="117A" type="radio" class="flat" id="" value="2"> A) EL ES UN EMBUSTERO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="117A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="117A" type="radio" class="flat" id="" value="0"> C) APARENTEMENTE EL ESTA MAL INFORMADO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 118 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>118.- YO SIENTO QUE ME VAN A CASTIGAR, AUN CUANDO NO HE HECHO NADA MALO </b>
                  <span for="118B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="118B" type="radio" class="flat" id="" value="2"> A) A MENUDO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="118B" type="radio" class="flat" id="" value="1"> B) OCASIONALMENTE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="118B" type="radio" class="flat" id="" value="0"> C) NUNCA
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 119 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>119.- LA IDEA DE QUE LAS ENFERMEDADES TIENEN CAUSAS FANTASTICAS COMO MENTALES, ES MUY EXAGERADA</b>
                  <span for="119B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="119B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="119B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="119B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 120 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>120.- LA POMPA Y EL ESPLENDOR DE CUALQUIER CEREMONIA ESTATAL SON DOS COSAS QUE DEBEN CONSERVARSE.</b>
                  <span for="120A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="120A" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="120A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="120A" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 121 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>121.- ME MOLESTA QUE LAS PERSONAS PIENSEN QUE SOY DEMASIADO DIFERENTE O MUY POCO CONVENCIONAL</b>
                  <span for="121B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="121B" type="radio" class="flat" id="" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="121B" type="radio" class="flat" id="" value="1"> B) INDECISO 
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="121B" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 122 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>122.- EN LA ELABORACION DE ALGUNA COSA, MAS BIEN YO TRABAJARIA</b>
                  <span for="122B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="122B" type="radio" class="flat" id="" value="0"> A) EN EQUIPO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="122B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="122B" type="radio" class="flat" id="" value="2"> C) POR MI PROPIA CUENTA
                     </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 123 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>123.- EN ALGUNOS MOMENTOS ME ES DIFICIL EVITAR UN SENTIMIENTO DE LASTIMA HACIA MI MISMO</b>
                  <span for="123A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="123A" type="radio" class="flat" id="" value="0"> A) A MENUDO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="123A" type="radio" class="flat" id="" value="1"> B) EN OCASIONES
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="123A" type="radio" class="flat" id="" value="2"> C) NUNCA
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 124 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>124.- A MENUDO ME ENOJO DEMASIADO RÁPIDO CON LA GENTE. </b>
                  <span for="124B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="124B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="124B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="124B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 125 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>125.- YO PUEDO CAMBIAR VIEJOS HABITOS SIN DIFICULTAD Y SIN VOLVER A ELLOS</b>
                  <span for="125B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="125B" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="125B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="125B" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 126 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>126.- SI LOS SALARIOS FUERAN LOS MISMOS, PREFERIRIA SER: </b>
                  <span for="126A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="126A" type="radio" class="flat" id="" value="2"> A) ABOGADO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="126A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="126A" type="radio" class="flat" id="" value="0"> C) NAVEGANTE O PILOTO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 127 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>127.- “MEJOR” ES A “PEOR” COMO “MÁS LENTO” ES A: </b>
                  <span for="127B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="127B" type="radio" class="flat" id="" value="0"> A) RAPIDO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="127B" type="radio" class="flat" id="" value="0"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="127B" type="radio" class="flat" id="" value="1"> C) MAS VELOZ
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 128 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>128.- ¿CUÁLES DE LAS SIGUIENTES LETRAS DEBER IR AL FINAL DE ESTA LISTA: XOOOOXXOOOXXX? </b>
                  <span for="128B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="128B" type="radio" class="flat" id="" value="0"> A) OXXX
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="128B" type="radio" class="flat" id="" value="1"> B) OOXX
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="128B" type="radio" class="flat" id="" value="0"> C) XOOO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 129 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>129.- CUANDO SE LLEGA LA HORA DE ALGO QUE YO HABÍA PLANEADO ANTICIPADO, A VES NO SIENTO GANAS DE IR. </b>
                  <span for="129A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="129A" type="radio" class="flat" id="" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="129A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="129A" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 130 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>130.- YO PUEDO TRABAJAR CON CUIDADO EN MUCHAS COSAS, SIN SER MOLESTADO POR LAS PERSONAS QUE HACEN RUIDO A MI ALREDEDOR.</b>
                  <span for="130A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="130A" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="130A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="130A" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 131 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>131.- A VECES PLATICO A PERSONAS DESCONOCIDAS, COSAS QUE ME PARECEN IMPORTANTES, AUNQUE NO ME LAS PREGUNTEN.</b>
                  <span for="131B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="131B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="131B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="131B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 132 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>132.- YO PASO MUCHO TIEMPO LIBRE PLATICANDO CON AMIGOS SOBRE REUNIONES SOCIALES EN LAS QUE NOS DIVERTIMOS EN EL PASADO. </b>
                  <span for="132A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="132A" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="132A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="132A" type="radio" class="flat" id="" value="0"> C) NO 
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 133 //////////////////// -->
                <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>133.- ME AGRADA HACER COSAS TEMERARIAS Y ATREVIDAS NADA MAS POR GUSTO. </b>
                  <span for="133A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="133A" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="133A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="133A" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 134 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>134.- LA ESCENA DE UN CUARTO DESARREGLADO ME MOLESTA.</b>
                  <span for="134B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="134B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="134B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="134B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 135 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>135.- ME CONSIDERO UNA PERSONA MUY SOCIABLE CON LA QUE ES FACIL LLEVARSE.</b>
                  <span for="135A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="135A" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="135A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="135A" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 136 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>136. EN MI TRATO SOCIAL:  </b>
                  <span for="136A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="136A" type="radio" class="flat" id="" value="2"> A) DEMUESTRO MIS EMOCIONES COMO QUIERO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="136A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="136A" type="radio" class="flat" id="" value="0"> C) ME GUARDO MIS EMOCIONES 
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 137 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>137. ME GUSTA LA MUSICA:</b>
                  <span for="137B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="137B" type="radio" class="flat" id="" value="2"> A) ALEGRE, LIGERA Y ANIMADA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="137B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="137B" type="radio" class="flat" id="" value="0"> C) EMOTIVA Y SENTIMENTAL 
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 138 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>138. YO ADMIRO MÁS LA BELLEZA DE UN HERMOSO POEMA QUE LA BELLEZA DE UN ARMA BIEN HECHA . </b>
                  <span for="138B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="138B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="138B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="138B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 139 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>139. SI NADIE SE DA CUENTA DE UNA BUENA OBSERVACION MIA: </b>
                  <span for="139A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="139A" type="radio" class="flat" id="" value="0"> A) NO LE DOY IMPORTANCIA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="139A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="139A" type="radio" class="flat" id="" value="2"> C) REPITO LA FRASE PARA QUE LA GENTE PUEDA ESCUCHARLA NUEVAMENTE 
                    </label>
                  </div>
<!-- ////////////////////////////////// PREGUNTA 140 /////////////////////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>140. ME GUSTARÍA TRABAJAR COMO VIGILANTE CON CRIMINALES QUE ESTUVIERAN EN LIBERTAD BAJO PALABRA.  </b>
                  <span for="140B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="140B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="140B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="140B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 141 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>141. UNO DEBE TENER CUIDADO AL MEZCLARSE CON TODO DA CLASE DE EXTRAÑOS, POR EL PELIGRO DE UNA INFECCION.:</b>
                  <span for="141B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="141B" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="141B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="141B" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 142 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>142. EN UN VIAJE AL EXTRANJERO, YO PREFERIRÍA I EN UN “TOUR” PLANEADO CON UN CONDUCTOR DE VIAJES EXPERIMENTADO, QUE PLANEAR POR MÍ MISMO LOS LUGARES QUE DESEARÍA VISITAR.</b>
                  <span for="142A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="142A" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="142A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="142A" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 143//////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>143. ME CONSIDERAN, ACERTADAMENTE, COMO UNA PERSONA TRABAJADORA Y DE MEDIANO EXITO.</b>
                  <span for="143B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="143B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="143B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="143B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 144 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>144. SI LAS PERSONAS ABUSAN DE M AMISTAD, NO LO RESIENTO Y LO OLVIDO PRONTO. </b>
                  <span for="144B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="144B" type="radio" class="flat" id="" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="144B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="144B" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 145 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>145. SI SE DESARROLLA UNA DISCUSIÓN ACALORADA ENTRE LOS MIEMBROS DE UN GRUPO, YO:</b>
                  <span for="145A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="145A" type="radio" class="flat" id="" value="2"> A) QUISIERA VER UN GANADOR
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="145A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="145A" type="radio" class="flat" id="" value="0"> C) DESEARIA QUE SE CALMARAN RAPIDAMENTE
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 146 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>146. ME GUSTA HACER MIS PLANES YO SOLO, SIN QUE NADIE ME INTERRUMPA PARA ACONSEJARME. </b>
                  <span for="146B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="146B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="146B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="146B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 147 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>147. A VECES DEJO QUE MIS ACCIONES SE VEAN INFLUIDAS POR MIS CELOS.</b>
                  <span for="147A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="147A" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="147A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="147A" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 148 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>148. YO CREO FIRMEMENTE QUE “EL JEFE PUDIERA NO TENER RAZÓN, PERO SIEMPRE TENDRÁ LA RAZÓN POR SER EL JEFE </b>
                  <span for="148A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="148A" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="148A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="148A" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 149 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>149. ME PONGO TENSO CUANDO PIENSO EN TODAS LAS COSAS QUE ME AQUEJAN. </b>
                  <span for="149B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="149B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="149B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="149B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 150 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>150. NO ME DESCONCIERTA QUE LA GENTE ME GRITE LO QUE TENGO QUE HACER CUANDO ESTOY JUGANDO. </b>
                  <span for="150B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="150B" type="radio" class="flat" id="" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="150B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="150B" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 151 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>151. PREFERIRIA LA VIDA DE: </b>
                  <span for="151A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="151A" type="radio" class="flat" id="" value="0"> A) UN ARTISTA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="151A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="151A" type="radio" class="flat" id="" value="2"> C) SECRETARIO DE UN CLUB SOCIAL
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 152 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>152. ¿CUÁL DE LAS SIGUIENTES PALABRAS NO CORRESPONDEN A LAS OTRAS DOS?.</b>
                  <span for="152B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="152B" type="radio" class="flat" id="" value="0"> A) ALGUNO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="152B" type="radio" class="flat" id="" value="1"> B) UNOS
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="152B" type="radio" class="flat" id="" value="2"> C) MUCHOS
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 153 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>153. “LLAMA” ES A “COLOR” COMO “ROSA” ES A: </b>
                  <span for="153B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="153B" type="radio" class="flat" id="" value="0"> A) ESPINA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="153B" type="radio" class="flat" id="" value="1"> B) PETALO ROJO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="153B" type="radio" class="flat" id="" value="2"> C) PERFUME
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 154 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>154. TENGO SUEÑOS TAN INTENSOS QUE ME INQUIETAN CUANDO DUERMO </b>
                  <span for="154A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="154A" type="radio" class="flat" id="" value="0"> A) A MENUDO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="154A" type="radio" class="flat" id="" value="1"> B) EN OCASIONES
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="154A" type="radio" class="flat" id="" value="2"> C) CASI NUNCA
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 155 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>155. AUNQUE LAS PROBABILIDADES DE QUE ALGO TENGA ÉXITO ESTÉN COMPLETAMENTE EN CONTRA, SIGO PENSANDO EN ACEPTAR EL RIESGO </b>
                  <span for="155X" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="155X" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="155X" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="155X" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 156 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>156. ME AGRADA SABER BIEN LO QUE EL GRUPO TIENE QUE HACER PARA QUE ASÍ SEA YO EL QUE MANDA. </b>
                  <span for="156B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="156B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="156B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="156B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 157 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>157. PREFERIRIA VESTIRME SENCILLA Y CORRECTAMENTE, Y NO CON UN ESTILO PECULIAR Y LLAMATIVO. </b>
                  <span for="157A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="157A" type="radio" class="flat" id="" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="157A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="157A" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 158 //////////////////// -->
                <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>158. ME LLAMA MAS LA ATENCION PASAR UNA TARDE CON UN PASATIEMPO TRANQUILO QUE EN UNA FIESTA ANIMADA.</b>
                  <span for="158A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="158A" type="radio" class="flat" id="" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="158A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="23A" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 159 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>159. NO HAGO CASO A LAS SUGERENCIAS BIEN INTENCIONADAS DE LOS DEMÁS, AUNQUE PIENSO QUE DEBERÍA. </b>
                  <span for="159B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="159B" type="radio" class="flat" id="" value="0"> A) A OCASIONES 
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="159B" type="radio" class="flat" id="" value="1"> B) CASI NUNCA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="159B" type="radio" class="flat" id="" value="2"> C) NUNCA 
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 160 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>160. SIEMPRE MI CRITERIO PARA CUALQUIER DECISIÓN SE BASA EN LOS PRINCIPIOS DEL BIEN Y EL MAL. </b>
                  <span for="160B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="160B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="160B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="160B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 161 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>161. ME DISGUSTA UN POCO QUE UN GRUPO ME OBSERVE CUANDO TRABAJO. </b>
                  <span for="161A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="161A" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="161A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="161A" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 162 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>162. DEBIDO A QUE NO SIEMPRE ES POSIBLE OBTENER LAS COSAS POR MEDIO DE MÉTODOS GRADUALES Y   RAZONABLES, A VECES ES NECESARIO USAR LA FUERZA. </b>
                  <span for="162B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="162B" type="radio" class="flat" id="" value="0"> A) CIERTO 
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="162B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="162B" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 163 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>163. EN LA ESCUELA PREFIERO (O PREFERI): </b>
                  <span for="163B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="163B" type="radio" class="flat" id="" value="2"> A) ESPAÑOL Y LITERATURA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="163B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="163B" type="radio" class="flat" id="" value="0"> C) ARITMETICA Y MATEMATICAS
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 164 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>164. A VECES ME CAUSA PROBLEMAS EL QUE LA GENTE HABLE MAL DE MÍ A MIS ESPALDAS, SIN TENER RAZÓN. </b>
                  <span for="164A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="164A" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="164A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="164A" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 165 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>165. PLATICAR CON LA GENTE CONVENCIONAL, COMUN Y CORRIENTE: </b>
                  <span for="165B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="165B" type="radio" class="flat" id="" value="0"> A) ES A MENUDO INTERESANTE E IMPORTANTE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="165B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="165B" type="radio" class="flat" id="" value="2"> C) ME MOLESTA PORQUE DICEN COSAS TONTAS Y SUPERFICIALES
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 166 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>166. ALGUNAS COSAS ME ENOJAN TANTO QUE PREFIERO NO HABLAR DE ELLAS. </b>
                  <span for="166B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="166B" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="166B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="166B" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 167 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>167. ES MUY IMPORTANTE EN LA EDUCACIÓN: </b>
                  <span for="167A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="167A" type="radio" class="flat" id="" value="2"> A) DAR SUFICIENTE AFECTO A LOS NIÑOS
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="167A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="167A" type="radio" class="flat" id="" value="0"> C) QUE LOS NIÑOS APRENDAN HABITOS Y ACTITUDES CONVENIENTES
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 168//////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>168. LA GENTE ME CONSIDERA UNA PERSONA ESTABLE, SIN PERTURBACIONES, ANTE LAS ALTAS Y BAJAS DE LA VIDA. </b>
                  <span for="168B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="168B" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="168B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO 
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="168B" type="radio" class="flat" id="" value="2"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 169 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>169. PIENSO QUE LA SOCIEDAD DEBER CREAR NUEVAS COSTUMBRES POR RAZONES MODERNAS Y ELIMINAR VIEJAS COSTUMBRES O SIMPLE TRADICIONES. </b>
                  <span for="169A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="169A" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="169A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="169A" type="radio" class="flat" id="" value="0"> C) NO
                     </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 170 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>170. YO PIENSO QUE EN EL MUNDO ACTUAL ES MAS IMPORTANTE RESOLVER: </b>
                  <span for="170A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="170A" type="radio" class="flat" id="" value="0"> A) LOS ASUNTOS SOBRE MORALIDAD
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="170A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="170A" type="radio" class="flat" id="" value="2"> C) LAS DIFICULTADES POLITICAS
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 171 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>171. YO APRENDO MEJOR: </b>
                  <span for="171B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="171B" type="radio" class="flat" id="" value="2"> A) LEYENDO UN LIBRO BIEN ESCRITO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="171B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="171B" type="radio" class="flat" id="" value="0"> C) PARTICIPANDO EN UNA DISCUSION DE GRUPO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 172 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>172. PREFIERO GUIARME YO MISMO EN LUGAR DE ACTUAR SEGUN LAS REGLAS APROBADAS. </b>
                  <span for="172A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="172A" type="radio" class="flat" id="" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="172A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="172A" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 173 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>173. PREFIERO ESPERAR HASTA QUE ESTOY SEGURO QUE ES CORRECTO LO QUE PIENSO DECIR, ANTES DE EXPONER MIS RAZONES. </b>
                  <span for="173A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="173A" type="radio" class="flat" id="" value="2"> A) SIEMPRE
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="173A" type="radio" class="flat" id="" value="1"> B) EN GENERAL
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="173A" type="radio" class="flat" id="" value="0"> C) SOLAMENTE SI ES POSIBLE
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 174//////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>174. ALGUNAS COSAS QUE NO TIENEN IMPORTANCIA, “ME PONEN LOS NERVIOS DE PUNTA </b>
                  <span for="174B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="174B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="174B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="174B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 175 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>175. POCAS VECES DIGO COSAS QUE PIENSO SIN REFLEXIONAR Y QUE DESPUÉS TENGO QUE LAMENTAR GRANDEMENTE. </b>
                  <span for="175B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="175B" type="radio" class="flat" id="" value="0"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="175B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="175B" type="radio" class="flat" id="" value="2"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 176 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>176. SI ME PIDIERAN QUE TRABAJARA EN UNA OBRA DE CARIDAD: </b>
                  <span for="176A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="176A" type="radio" class="flat" id="" value="2"> A) ACEPTAR
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="176A" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="176A" type="radio" class="flat" id="" value="0"> C) DIRIA CON CORTESIA QUE ESTOY OCUPADO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 177 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>177. ¿CUAL DE LAS SIGUIENTES PALABRAS ES DISTINTA A LAS OTRAS DOS? </b>
                  <span for="177B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                       <input name="177B" type="radio" class="flat" id="" value="1"> A) ANCHO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="177B" type="radio" class="flat" id="" value="0"> B) ZIGZAG
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="177B" type="radio" class="flat" id="" value="0"> C) DERECHO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 178 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>178. “PRONTO” ES A “NUNCA”, COMO “CERCA” ES A: </b>
                  <span for="178B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="178B" type="radio" class="flat" id="" value="1"> A) NADA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="178B" type="radio" class="flat" id="" value="0"> B) LEJOS
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="178B" type="radio" class="flat" id="" value="0"> C) FUERA
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 179 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>179. CUANDO COMENTO UNA TORPEZA SOCIAL, YO PUEDO OLVIDARLA PRONTO. </b>
                  <span for="179A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                     <input name="179A" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="179A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="179A" type="radio" class="flat" id="" value="0"> C) NO  
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 180 //////////////////// -->
                <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>180. ME RECONOCEN COMO UN “HOMBRE DE IDEAS” PORQUE SIEMPRE SE ME OCURREN ALGUNAS CUANDO HAY ALGÚN PROBLEMA.  </b>
                  <span for="180X" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="180X" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="180X" type="radio" class="flat" id="" value="0"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="180X" type="radio" class="flat" id="" value="0"> C) NO 
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 181//////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>181. YO CREO QUE ME MUESTRO MAS: </b>
                  <span for="181B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="181B" type="radio" class="flat" id="" value="2"> A) ANIMADO EN REUNIONES  DE CRITICA Y PROTESTA
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="181B" type="radio" class="flat" id="" value="1"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="181B" type="radio" class="flat" id="" value="0"> C) TOLERANTE A LOS DECEOS DE OTRA PERSONA
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 182 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>182. ME CONSIDERAN COMO UNA PERSONA MUY ENTUSIASTA. </b>
                  <span for="182A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="182A" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="182A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="182A" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 183 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>183. PREFIERO UN TRABAJO CON VARIEDAD, VIAJES Y CAMBIOS, AUNQUE TENGA RIESGOS  </b>
                  <span for="183A" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="183A" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="183A" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="183A" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 184 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>184. SOY UNA PERSONA BASTANTE ESTRICTA QUE INSISTE SIEMPRE EN HACER LAS COSAS TAN CORRECTAMENTE COMO SEA POSIBLE. </b>
                  <span for="184B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="184B" type="radio" class="flat" id="" value="2"> A) CIERTO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="184B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="184B" type="radio" class="flat" id="" value="0"> C) FALSO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 185 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>185. ME AGRADAN LOS TRABAJOS QUE REQUIEREN CONCENTRACION Y HABILIDADES PRECISAS. </b>
                  <span for="185B" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="185B" type="radio" class="flat" id="" value="2"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="185B" type="radio" class="flat" id="" value="1"> B) INTERMEDIO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="185B" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 186 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>186. ME CONSIDERO UN TIPO ENERGÉTICO QUE SE MANTIENE ACTIVO. </b>
                  <span for="186X" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="186X" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="186X" type="radio" class="flat" id="" value="0"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="186X" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                  <!-- //////////////////// PREGUNTA 187 //////////////////// -->
                  <div class="col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
                    <b>187. ESTOY SEGURO DE HABER CONTESTADO CORRECTAMENTE, Y DE NO HABER DEJADO NINGUNA PREGUNTA SIN CONTESTAR. </b>
                  <span for="187X" generated="true" class="error"></span>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="187X" type="radio" class="flat" id="" value="0"> A) SI
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="187X" type="radio" class="flat" id="" value="0"> B) INDECISO
                    </label>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <label>
                      <input name="187X" type="radio" class="flat" id="" value="0"> C) NO
                    </label>
                  </div>
                </div>

                  

                <div id="message" style="display:block;width:70%;margin:1%;float:center;position:fixed;z-index:10003 !important; "></div>
                <div class="form-group">


                </div>
                <div class="ln_solid"></div>
                <div class="form-group" >
                  <div id="btns" class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                    <button type="submit" class="btn btn-success">Enviar <span class="fa fa-thumbs-o-up"></span></button>
                  </div>
                </div>

              </form>

              <!-- / fin del furmulario / -->
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>


          <!-- PNotify -->
    <script>
      $(document).ready(function() {
        new PNotify({
          title: "Nota: ",
          type: "warning",
          text: "Lee cuidadosamente las instrucciones y realiza el cuestonario tratando de responder con sinceridad.",
          nonblock: {
              nonblock: false
          },
          addclass: 'warning',
          styling: 'bootstrap3',
          hide: true,
          before_close: function(PNotify) {
            PNotify.update({
              title: PNotify.options.title + " - Advertencia",
              before_close: true
            });

            PNotify.queueRemove();

            return false;
          }
        });

      });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){

                 var ap = "<label style='color: #ED1C22; font-size:12px;'><i class='fa fa-remove'></i>";
                 var ci = "</label>";
                 var txt = " Elige una opción. ";

                 $("#message").hide();
                 $("#form_app2").validate({
                     event: "focus",
                     rules: {
                         sexo: "required",

                    '1X[]':{ required:true },
                    '2X[]':{ required:true },
                    '3A':{ required:true, number: true },
                    '4A':{ required:true, number: true },
                    '5A':{ required:true, number: true },
                    '6B':{ required:true, number: true },
                    '7B':{ required:true, number: true },
                    '8A':{ required:true, number: true },
                    '9B':{ required:true, number: true },
                    '10A':{ required:true, number: true },
                    '11B':{ required:true, number: true },
                    '12B':{ required:true, number: true },
                    '13A':{ required:true, number: true },
                    '14B':{ required:true, number: true },
                    '15B':{ required:true, number: true },
                    '16A':{ required:true, number: true },
                    '17A':{ required:true, number: true },
                    '18B':{ required:true, number: true },
                    '19B':{ required:true, number: true },
                    '20A':{ required:true, number: true },
                    '21A':{ required:true, number: true },
                    '22B':{ required:true, number: true },
                    '23A':{ required:true, number: true },
                    '24A':{ required:true, number: true },
                    '25B':{ required:true, number: true },
                    '26A':{ required:true, number: true },
                    '27A':{ required:true, number: true },
                    '28B':{ required:true, number: true },
                    '29A':{ required:true, number: true },
                    '30A':{ required:true, number: true },
                    '31B':{ required:true, number: true },
                    '32B':{ required:true, number: true },
                    '33A':{ required:true, number: true },
                    '34B':{ required:true, number: true },
                    '35A':{ required:true, number: true },
                    '36A':{ required:true, number: true },
                    '37B':{ required:true, number: true },
                    '38X':{ required:true, number: true },
                    '39B':{ required:true, number: true },
                    '40B':{ required:true, number: true },
                    '41A':{ required:true, number: true },
                    '42A':{ required:true, number: true },
                    '43B':{ required:true, number: true },
                    '44B':{ required:true, number: true },
                    '45A':{ required:true, number: true },
                    '46A':{ required:true, number: true },
                    '47B':{ required:true, number: true },
                    '48A':{ required:true, number: true },
                    '49B':{ required:true, number: true },
                    '50B':{ required:true, number: true },
                    '51A':{ required:true, number: true },
                    '52A':{ required:true, number: true },
                    '53B':{ required:true, number: true },
                    '54B':{ required:true, number: true },
                    '55A':{ required:true, number: true },
                    '56B':{ required:true, number: true },
                    '57B':{ required:true, number: true },
                    '58A':{ required:true, number: true },
                    '59B':{ required:true, number: true },
                    '60A':{ required:true, number: true },
                    '61A':{ required:true, number: true },
                    '62B':{ required:true, number: true },
                    '63A':{ required:true, number: true },
                    '64A':{ required:true, number: true },
                    '65B':{ required:true, number: true },
                    '66A':{ required:true, number: true },
                    '67A':{ required:true, number: true },
                    '68B':{ required:true, number: true },
                    '69B':{ required:true, number: true },
                    '70A':{ required:true, number: true },
                    '71B':{ required:true, number: true },
                    '72B':{ required:true, number: true },
                    '73A':{ required:true, number: true },
                    '74B':{ required:true, number: true },
                    '75B':{ required:true, number: true },
                    '76A':{ required:true, number: true },
                    '77B':{ required:true, number: true },
                    '78B':{ required:true, number: true },
                    '79A':{ required:true, number: true },
                    '80A':{ required:true, number: true },
                    '81B':{ required:true, number: true },
                    '82A':{ required:true, number: true },
                    '83A':{ required:true, number: true },
                    '84B':{ required:true, number: true },
                    '85A':{ required:true, number: true },
                    '86A':{ required:true, number: true },
                    '87B':{ required:true, number: true },
                    '88A':{ required:true, number: true },
                    '89A':{ required:true, number: true },
                    '90B':{ required:true, number: true },
                    '91B':{ required:true, number: true },
                    '92A':{ required:true, number: true },
                    '93B':{ required:true, number: true },
                    '94B':{ required:true, number: true },
                    '95A':{ required:true, number: true },
                    '96B':{ required:true, number: true },
                    '97B':{ required:true, number: true },
                    '98A':{ required:true, number: true },
                    '99B':{ required:true, number: true },
                    '100B':{ required:true, number: true },
                    '101A':{ required:true, number: true },
                    '102B':{ required:true, number: true },
                    '103B':{ required:true, number: true },
                    '104A':{ required:true, number: true },
                    '105A':{ required:true, number: true },
                    '106B':{ required:true, number: true },
                    '107A':{ required:true, number: true },
                    '108A':{ required:true, number: true },
                    '109B':{ required:true, number: true },
                    '110A':{ required:true, number: true },
                    '111A':{ required:true, number: true },
                    '112B':{ required:true, number: true },
                    '113A':{ required:true, number: true },
                    '114A':{ required:true, number: true },
                    '115B':{ required:true, number: true },
                    '116B':{ required:true, number: true },
                    '117A':{ required:true, number: true },
                    '118B':{ required:true, number: true },
                    '119B':{ required:true, number: true },
                    '120A':{ required:true, number: true },
                    '121B':{ required:true, number: true },
                    '122B':{ required:true, number: true },
                    '123A':{ required:true, number: true },
                    '124B':{ required:true, number: true },
                    '125B':{ required:true, number: true },
                    '126A':{ required:true, number: true },
                    '127B':{ required:true, number: true },
                    '128B':{ required:true, number: true },
                    '129A':{ required:true, number: true },
                    '130A':{ required:true, number: true },
                    '131B':{ required:true, number: true },
                    '132A':{ required:true, number: true },
                    '133A':{ required:true, number: true },
                    '134B':{ required:true, number: true },
                    '135A':{ required:true, number: true },
                    '136A':{ required:true, number: true },
                    '137B':{ required:true, number: true },
                    '138B':{ required:true, number: true },
                    '139A':{ required:true, number: true },
                    '140B':{ required:true, number: true },
                    '141B':{ required:true, number: true },
                    '142A':{ required:true, number: true },
                    '143B':{ required:true, number: true },
                    '144B':{ required:true, number: true },
                    '145A':{ required:true, number: true },
                    '146B':{ required:true, number: true },
                    '147A':{ required:true, number: true },
                    '148A':{ required:true, number: true },
                    '149B':{ required:true, number: true },
                    '150B':{ required:true, number: true },
                    '151A':{ required:true, number: true },
                    '152B':{ required:true, number: true },
                    '153B':{ required:true, number: true },
                    '154A':{ required:true, number: true },
                    '155X':{ required:true, number: true },
                    '156B':{ required:true, number: true },
                    '157A':{ required:true, number: true },
                    '158A':{ required:true, number: true },
                    '159B':{ required:true, number: true },
                    '160B':{ required:true, number: true },
                    '161A':{ required:true, number: true },
                    '162B':{ required:true, number: true },
                    '163B':{ required:true, number: true },
                    '164A':{ required:true, number: true },
                    '165B':{ required:true, number: true },
                    '166B':{ required:true, number: true },
                    '167A':{ required:true, number: true },
                    '168B':{ required:true, number: true },
                    '169A':{ required:true, number: true },
                    '170A':{ required:true, number: true },
                    '171B':{ required:true, number: true },
                    '172A':{ required:true, number: true },
                    '173A':{ required:true, number: true },
                    '174B':{ required:true, number: true },
                    '175B':{ required:true, number: true },
                    '176A':{ required:true, number: true },
                    '177B':{ required:true, number: true },
                    '178B':{ required:true, number: true },
                    '179A':{ required:true, number: true },
                    '180X':{ required:true, number: true },
                    '181B':{ required:true, number: true },
                    '182A':{ required:true, number: true },
                    '183A':{ required:true, number: true },
                    '184B':{ required:true, number: true },
                    '185B':{ required:true, number: true },
                    '186X':{ required:true, number: true },
                    '187X':{ required:true, number: true }

                     },
                     messages: {
                         sexo: ap+" Selecciona tu sexo. "+ci,
                         '1X[]': ap+txt+ci,
                         '2X[]': ap+txt+ci,
                         '3A': ap+txt+ci,
                         '4A': ap+txt+ci,
                         '5A': ap+txt+ci,
                         '6B': ap+txt+ci,
                         '7B': ap+txt+ci,
                         '8A': ap+txt+ci,
                         '9B': ap+txt+ci,
                         '10A': ap+txt+ci,
                         '11B' : ap+txt+ci,
                         '12B' : ap+txt+ci,
                         '13A' : ap+txt+ci,
                         '14B' : ap+txt+ci,
                         '15B' : ap+txt+ci,
                         '16A' : ap+txt+ci,
                         '17A' : ap+txt+ci,
                         '18B' : ap+txt+ci,
                         '19B' : ap+txt+ci,
                         '20A' : ap+txt+ci,
                         '21A': ap+txt+ci,
                        '22B': ap+txt+ci,
                        '23A': ap+txt+ci,
                        '24A': ap+txt+ci,
                        '25B': ap+txt+ci,
                        '26A': ap+txt+ci,
                        '27A': ap+txt+ci,
                        '28B': ap+txt+ci,
                        '29A': ap+txt+ci,
                        '30A': ap+txt+ci,
                        '31B': ap+txt+ci,
                        '32B': ap+txt+ci,
                        '33A': ap+txt+ci,
                        '34B': ap+txt+ci,
                        '35A': ap+txt+ci,
                        '36A': ap+txt+ci,
                        '37B': ap+txt+ci,
                        '38X': ap+txt+ci,
                        '39B': ap+txt+ci,
                        '40B': ap+txt+ci,
                        '41A': ap+txt+ci,
                        '42A': ap+txt+ci,
                        '43B': ap+txt+ci,
                        '44B': ap+txt+ci,
                        '45A': ap+txt+ci,
                        '46A': ap+txt+ci,
                        '47B': ap+txt+ci,
                        '48A': ap+txt+ci,
                        '49B': ap+txt+ci,
                        '50B': ap+txt+ci,
                        '51A': ap+txt+ci,
                        '52A': ap+txt+ci,
                        '53B': ap+txt+ci,
                        '54B': ap+txt+ci,
                        '55A': ap+txt+ci,
                        '56B': ap+txt+ci,
                        '57B': ap+txt+ci,
                        '58A': ap+txt+ci,
                        '59B': ap+txt+ci,
                        '60A': ap+txt+ci,
                        '61A': ap+txt+ci,
                        '62B': ap+txt+ci,
                        '63A': ap+txt+ci,
                        '64A': ap+txt+ci,
                        '65B': ap+txt+ci,
                        '66A': ap+txt+ci,
                        '67A': ap+txt+ci,
                        '68B': ap+txt+ci,
                        '69B': ap+txt+ci,
                        '70A': ap+txt+ci,
                        '71B': ap+txt+ci,
                        '72B': ap+txt+ci,
                        '73A': ap+txt+ci,
                        '74B': ap+txt+ci,
                        '75B': ap+txt+ci,
                        '76A': ap+txt+ci,
                        '77B': ap+txt+ci,
                        '78B': ap+txt+ci,
                        '79A': ap+txt+ci,
                        '80A': ap+txt+ci,
                        '81B': ap+txt+ci,
                        '82A': ap+txt+ci,
                        '83A': ap+txt+ci,
                        '84B': ap+txt+ci,
                        '85A': ap+txt+ci,
                        '86A': ap+txt+ci,
                        '87B': ap+txt+ci,
                        '88A': ap+txt+ci,
                        '89A': ap+txt+ci,
                        '90B': ap+txt+ci,
                        '91B': ap+txt+ci,
                        '92A': ap+txt+ci,
                        '93B': ap+txt+ci,
                        '94B': ap+txt+ci,
                        '95A': ap+txt+ci,
                        '96B': ap+txt+ci,
                        '97B': ap+txt+ci,
                        '98A': ap+txt+ci,
                        '99B': ap+txt+ci,
                        '100B': ap+txt+ci,
                        '101A': ap+txt+ci,
                        '102B': ap+txt+ci,
                        '103B': ap+txt+ci,
                        '104A': ap+txt+ci,
                        '105A': ap+txt+ci,
                        '106B': ap+txt+ci,
                        '107A': ap+txt+ci,
                        '108A': ap+txt+ci,
                        '109B': ap+txt+ci,
                        '110A': ap+txt+ci,
                        '111A': ap+txt+ci,
                        '112B': ap+txt+ci,
                        '113A': ap+txt+ci,
                        '114A': ap+txt+ci,
                        '115B': ap+txt+ci,
                        '116B': ap+txt+ci,
                        '117A': ap+txt+ci,
                        '118B': ap+txt+ci,
                        '119B': ap+txt+ci,
                        '120A': ap+txt+ci,
                        '121B': ap+txt+ci,
                        '122B': ap+txt+ci,
                        '123A': ap+txt+ci,
                        '124B': ap+txt+ci,
                        '125B': ap+txt+ci,
                        '126A': ap+txt+ci,
                        '127B': ap+txt+ci,
                        '128B': ap+txt+ci,
                        '129A': ap+txt+ci,
                        '130A': ap+txt+ci,
                        '131B': ap+txt+ci,
                        '132A': ap+txt+ci,
                        '133A': ap+txt+ci,
                        '134B': ap+txt+ci,
                        '135A': ap+txt+ci,
                        '136A': ap+txt+ci,
                        '137B': ap+txt+ci,
                        '138B': ap+txt+ci,
                        '139A': ap+txt+ci,
                        '140B': ap+txt+ci,
                        '141B': ap+txt+ci,
                        '142A': ap+txt+ci,
                        '143B': ap+txt+ci,
                        '144B': ap+txt+ci,
                        '145A': ap+txt+ci,
                        '146B': ap+txt+ci,
                        '147A': ap+txt+ci,
                        '148A': ap+txt+ci,
                        '149B': ap+txt+ci,
                        '150B': ap+txt+ci,
                        '151A': ap+txt+ci,
                        '152B': ap+txt+ci,
                        '153B': ap+txt+ci,
                        '154A': ap+txt+ci,
                        '155X': ap+txt+ci,
                        '156B': ap+txt+ci,
                        '157A': ap+txt+ci,
                        '158A': ap+txt+ci,
                        '159B': ap+txt+ci,
                        '160B': ap+txt+ci,
                        '161A': ap+txt+ci,
                        '162B': ap+txt+ci,
                        '163B': ap+txt+ci,
                        '164A': ap+txt+ci,
                        '165B': ap+txt+ci,
                        '166B': ap+txt+ci,
                        '167A': ap+txt+ci,
                        '168B': ap+txt+ci,
                        '169A': ap+txt+ci,
                        '170A': ap+txt+ci,
                        '171B': ap+txt+ci,
                        '172A': ap+txt+ci,
                        '173A': ap+txt+ci,
                        '174B': ap+txt+ci,
                        '175B': ap+txt+ci,
                        '176A': ap+txt+ci,
                        '177B': ap+txt+ci,
                        '178B': ap+txt+ci,
                        '179A': ap+txt+ci,
                        '180X': ap+txt+ci,
                        '181B': ap+txt+ci,
                        '182A': ap+txt+ci,
                        '183A': ap+txt+ci,
                        '184B': ap+txt+ci,
                        '185B': ap+txt+ci,
                        '186X': ap+txt+ci,
                        '187X': ap+txt+ci

                      
                     },
                     debug: true,
                     errorElement: "span",
                     submitHandler: function(form){
                                     $("#message").show();
                                     $("#message").html("<div class='alert alert-warning' role='alert' align='justify'><strong><i class='fa fa-cog'></i> Procesando: </strong> Espere un momento..</div>"); 
                                      
                   $.ajax({
                             type: "post",
                             url:"_include/php/actions/action_app2.php",
                             contentType: "application/x-www-form-urlencoded",
                             processData: true,
                             data: $("#form_app2").serialize(),
                             success: function(msg){

                                if (msg == 'ok') {

                                    $("#message").html("<div class='alert alert-success' role='alert'><strong><i class='fa fa-check'></i> Exito! </strong> Se han registrado tus respuestas, has concluido el cuestionario.</div>");
                                       
                                       
                                       setTimeout(function() {
                                        $("#message").fadeOut('fast');
                                        $("#preguntas").html("");
                                        $("#btns").html("<h1><i class='fa fa-thumbs-o-up'></i> Tus respuestas han sido enviadas.<br><br><br><br><br></h1>");
                                        $("#proces").html("Completo 100%");

                                     }, 3000);
                                       $(".appdos").removeAttr("id");
                                       

                                }                   
                             }                       
                         });
                     },
                 });
          });
</script>
