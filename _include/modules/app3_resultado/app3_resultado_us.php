<?php 
//include '../../php/db/conexionDB.php';
include '../../php/actions/functions_view.php';
$id = $_GET["us"];

?>

				<div class="panel-group" aling="center">
					<table width="100%">
						<tr>
							<td width="30%">
								<div align="left"><img src="assets/bootstrap/images/logo.png" class="img-responsive" width="160" height="80">
								</div>
							</td>
							<td width="40%">
								<div align="center"><strong>INSTITUTO TECNOLÓGICO SUPERIOR DE ESCÁRCEGA <br> 
								PROGRAMA INSTITUCIONAL DE TUTORÍAS <br> 
								TEST DE ORIENTACIÓN VOCACIONAL</strong>
								</div>
							</td>
							<td width="30%">
								<div align="right">
									<img src="assets/bootstrap/images/itse.png" class="img-responsive" width="160" height="75">
								</div>
							</td>
						</tr>
					</table>	
				</div>
				<br><br>
                 <div class="form-group col-md-12 col-sm-12 col-xs-12">
	                <h2><span class="fa fa-info-circle"></span> Resultados Perfíl del Alumno.</h2>
	             </div>
				<br>
				<div class="form-group col-xs-12 col-xs-12 text-muted well well-sm no-shadow">
                  
                  <div class="col-md-4 col-sm-4 col-xs-12">
                   <span class="fa fa-user" aria-hidden="true"></span> <b>NOMBRE: </b> <?=info_tbl_usuarios("../..", "us", $id);?>
                  </div>
                  
                  <div class="col-md-3 col-sm-3 ">
                  	<?=info_tbl_usuarios("../..", "sexo", $id);?>
                  </div>

                  <div class="col-md-5 col-sm-5 col-xs-12">
                    <span class="fa fa-graduation-cap"></span> <b>CARRERA: </b> <?=info_tbl_usuarios("../..", "car", $id);?>
                  </div>
                 
                 </div>
                 <br>

                 <div class="col col-md-12 col-sm-12 col-xs-12">
                 	<?=v_preg_res::preguntas_carreras(2, $id);?>
                 </div>
                 <div class="col col-md-12 col-sm-12 col-xs-12">
                 	<?=v_preg_res::preguntas_carreras(3, $id);?>
                 </div>
                 <div class="col col-md-12 col-sm-12 col-xs-12">
                 	<?=v_preg_res::preguntas_carreras(4, $id);?>
                 </div>
                 <div class="col col-md-12 col-sm-12 col-xs-12">
                 	<?=v_preg_res::preguntas_carreras(5, $id);?>
                 </div>
                 <div class="col col-md-12 col-sm-12 col-xs-12">
                 	<?=v_preg_res::preguntas_carreras(6, $id);?>
                 </div>
                 <div class="col col-md-12 col-sm-12 col-xs-12">
                 	<?=v_preg_res::preguntas_carreras(7, $id);?>
                 </div>

                 <div class="col col-md-12 col-sm-12 col-xs-12" align="justify">
                 	<blockquote>
                 		<span class="fa fa-info-circle"></span> NOTA:<br>Cabe señalar que se ha considerado contemplar las preguntas de manera aleatoria, con la finalidad de que el estudiante conteste todas las cuestiones y tenga un panorama de las diversas acciones que se realizan en las diversas carreras. Los datos que se obtengan arrojaran los resultados de la siguiente manera:

                 	</blockquote>
					<blockquote>
							Resultados Obtenidos con respecto al nivel.<br>
							<span class='badge bg-red pull-left'>BAJO&nbsp;</span> &nbsp;&nbsp;&nbsp;Al parecer tu perfil no se orienta hacia esta carrera. <small>Si tiene entre 1-4 respuestas SI</small><br>
							<span class='badge bg-orange pull-left'>MEDIO</span> &nbsp;&nbsp;&nbsp;Tienes varias de las habilidades e intereses necesarios para esta carrera. <small>Si tiene entre 5-7 respuestas SI</small><br>
							<span class='badge bg-green pull-left'>&nbsp;ALTO&nbsp;</span> &nbsp;&nbsp;&nbsp;Pareces tener el perfil adecuado para esta carrera. Te recomendamos investigar más sobre su campo profesional para confirmar tu orientación. <small>Si tiene entre 8-10 respuestas SI</small><br>

					</blockquote>
				</div>
                 <div class="col col-md-12 col-sm-12 col-xs-12">
					<div class="table-responsive">
			                      <table id="tabla_resultados_app3" class="table table-striped table-bordered">
			                        <thead>
			                          <tr>
										<th colspan="4">Tabla - Puntuación y nivel obtenido por carreras. <small> Segun las respuestas del alumno</small></th>
									  </tr>
			                          <tr>
			                          	<th>#</th>
			                            <th>Carrera</th>
			                            <th>Puntuaje</th>
			                            <th>Nivel</th>
			                          </tr>
			                        </thead>
			                        <tbody>
			                        	<?=opcion_carrera_result("../../php/",$id, "table");?>
			                        </tbody>

			                      </table>
			                    </div>
				</div>
				<div class="col col-md-12 col-sm-12 col-xs-12">
					<blockquote>
						Por lo tanto se considera que el/la estudiante (SI / NO) cuenta con el perfil adecuado para estudiar la carrera que ha elegido para su preparación profesional.
					</blockquote>
				</div>
				<br>



