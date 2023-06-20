<?php
session_start();
include "functions_view.php";
$id_alumno = $_SESSION["session_student"];


if (isset($_GET["success"]) && $_GET["success"] == "data") {

// ISC id
respuesta_alum($id_alumno, 2, $_POST["11"],$_POST["12"],$_POST["13"],$_POST["14"],$_POST["15"],$_POST["16"],$_POST["17"],$_POST["18"],$_POST["19"],$_POST["20"]);
// IIA id
respuesta_alum($id_alumno, 3, $_POST["21"],$_POST["22"],$_POST["33"],$_POST["24"],$_POST["25"],$_POST["26"],$_POST["27"],$_POST["28"],$_POST["29"],$_POST["30"]);
// IER id
respuesta_alum($id_alumno, 4, $_POST["31"],$_POST["32"],$_POST["33"],$_POST["34"],$_POST["35"],$_POST["36"],$_POST["37"],$_POST["38"],$_POST["39"],$_POST["40"]);
// LAE id
respuesta_alum($id_alumno, 5, $_POST["41"],$_POST["42"],$_POST["43"],$_POST["44"],$_POST["45"],$_POST["46"],$_POST["47"],$_POST["48"],$_POST["49"],$_POST["50"]);
// LG id 
respuesta_alum($id_alumno, 6, $_POST["1"],$_POST["2"],$_POST["3"],$_POST["4"],$_POST["5"],$_POST["6"],$_POST["7"],$_POST["8"],$_POST["9"],$_POST["10"]);
// LT id
respuesta_alum($id_alumno, 7, $_POST["51"],$_POST["52"],$_POST["53"],$_POST["54"],$_POST["55"],$_POST["56"],$_POST["57"],$_POST["58"],$_POST["59"],$_POST["60"]);

echo "ok";

} else if (isset($_GET["success"]) && $_GET["success"] == "result"){
	?>
	
	<br>
	<div class="form-group col-xs-12 col-xs-12 text-muted well well-sm no-shadow">
                  
                  <div class="col-md-4 col-sm-4 col-xs-12">
                   <span class="fa fa-user" aria-hidden="true"></span> <b>NOMBRE: </b> <?=info_tbl_usuarios("../..", "us", $id_alumno);?>
                  </div>
                  
                  <div class="col-md-3 col-sm-3 ">
                  	<?=info_tbl_usuarios("../..", "sexo", $id_alumno);?>
                  </div>
				  
				  <div class="col-md-5 col-sm-5 col-xs-12">
                    <span class="fa fa-graduation-cap"></span> <b>CARRERA: </b> <?=info_tbl_usuarios("../..", "car", $id_alumno);?>
                  </div>
              </div>
	<div class="col col-md-12 col-sm-12 col-xs-12" align="justify">
		<blockquote>
			<p>
				Estos son los datos obtenidos segun tus respuestas, se obtienen los resultados de la siguiente manera:
			</p>
		</blockquote>
	</div>
	<div class="col col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
                      <table id="tabla_resultados_app3" class="table table-striped table-bordered">
                        <thead>
                          <tr>
							<th colspan="4">Tabla 1.0 (Puntuación y nivel obtenido por carreras). <small>Segun tus respuestas</small></th>
						  </tr>
                          <tr>
                          	<th>#</th>
                            <th>Carrera</th>
                            <th>Puntuaje</th>
                            <th>Nivel</th>                            
                          </tr>
                        </thead>
                        <tbody>
                        	<?=opcion_carrera_result("../",$id_alumno, "table");?>
                        </tbody>
                        
                      </table>
                    </div>
	</div><br>
	<div class="col col-md-12 col-sm-12 col-xs-12" align="justify">
		<blockquote>
				Resultados Obtenidos con respecto al nivel.<br>
				<span class='badge bg-red pull-left'>BAJO&nbsp;</span> &nbsp;&nbsp;&nbsp;Al parecer tu perfil no se orienta hacia esta carrera. <br>
				<span class='badge bg-orange pull-left'>MEDIO</span> &nbsp;&nbsp;&nbsp;Tienes varias de las habilidades e intereses necesarios para esta carrera.<br>
				<span class='badge bg-green pull-left'>&nbsp;ALTO&nbsp;</span> &nbsp;&nbsp;&nbsp;Pareces tener el perfil adecuado para esta carrera. Te recomendamos investigar más sobre su campo profesional para confirmar tu orientación.<br>
				
		</blockquote>
	</div>

	<?php
	opcion_carrera_result("../",$id_alumno,"");
}

?>