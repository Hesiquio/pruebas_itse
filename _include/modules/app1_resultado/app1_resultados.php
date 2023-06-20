<?php 
include '../../php/db/conexionDB.php';
include '../../php/actions/functions_view.php';
$id_usuario = $_GET["us"];

$query = $con->prepare("SELECT us_nombre AS alumno, us_genero AS sexo, us_alias AS usuario, car_nombre AS carrera, app1_puntuacion AS puntos, app1_res_fin AS ci, app1_nivel_txt AS nivel, app1_fec_inicio AS fecha
	FROM tbl_usuarios
	INNER JOIN tbl_carreras ON tbl_carreras.car_id = tbl_usuarios.car_id
	INNER JOIN tbl_app1_res_us ON tbl_app1_res_us.us_id = tbl_usuarios.us_id
	WHERE tbl_usuarios.us_id = '".$id_usuario."';");
$query->execute();

$rows = $query->fetch();


                     
?>
<table id="imprime_excel">
	<tr>
		<td>
<div class="panel-group" aling="center">
	<table width="100%">
		<tr>
			<td width="33%"><div align="left"><img src="assets/bootstrap/images/logo.png" class="img-responsive" width="160" height="80"></div></td>
			<td width="33%"><div align="center"><strong>INSTITUTO TECNOLÓGICO SUPERIOR DE ESCÁRCEGA</strong></div></td>
			<td width="33%"><div align="right"><img src="assets/bootstrap/images/itse.png" class="img-responsive" width="160" height="75"></div></td>
		</tr>
	</table>	
</div>
<br>
<table class="table table-striped table-bordered">
	<thead>
		<th width="65%">RESULTADO ALUMNO</th>
		<th width="35%">PUNTUACIÓN POR SERIE</th>
	</thead>
	<tbody>
		<td>
			<table class="table table-striped table-bordered">
				<tbody>
					<tr>
						<td><b>NOMBRE </b></td>
						<td><?=$rows["alumno"];?></td>
					</tr>
					<tr>
						<td><b>USUARIO </b></td>
						<td><?=$rows["usuario"];?></td>
					</tr>
					<tr>
						<td><b>SEXO </b></td>
						<td><?=genero($rows["sexo"]);?></td>
					</tr>
					<tr>
						<td><b>CARRERA </b></td>
						<td><?=$rows["carrera"];?></td>
					</tr>
					<tr>
						<td><b>C.I. </b></td>
						<td><b><?=$rows["ci"];?></b></td>
					</tr>
					<tr>
						<td><b>NIVEL </b></td>
						<td><?=$rows["nivel"];?></td>
					</tr>
					<tr>
						<td><b>FECHA & HORA INICIO: </b></td>
						<td><div id="dat"></div></td>
					</tr>
				</tbody>
			</table>
		</td>
		<td>
			<table class="table">
				<tbody>
					<tr>
						<td><b>SERIE I </b></td>
						<td><?=serie($id_usuario, 1)?></td>
					</tr>
					<tr>
						<td><b>SERIE II: </b></td>
						<td><?=serie($id_usuario, 2)?></td>
					</tr>
					<tr>
						<td><b>SERIE III </b></td>
						<td><?=serie($id_usuario, 3)?></td>
					</tr>
					<tr>
						<td><b>SERIE IV </b></td>
						<td><?=serie($id_usuario, 4)?></td>
					</tr>
					<tr>
						<td><b>SERIE V </b></td>
						<td><?=serie($id_usuario, 5)?></td>
					</tr>
					<tr>
						<td><b>SERIE VI </b></td>
						<td><?=serie($id_usuario, 6)?></td>
					</tr>
					<tr>
						<td><b>SERIE VII </b></td>
						<td><?=serie($id_usuario, 7)?></td>
					</tr>
					<tr>
						<td><b>SERIE VIII </b></td>
						<td><?=serie($id_usuario, 8)?></td>
					</tr>
					<tr>
						<td><b>SERIE IX </b></td>
						<td><?=serie($id_usuario, 9)?></td>
					</tr>
					<tr>
						<td><b>SERIE X </b></td>
						<td><?=serie($id_usuario, 10)?></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>TOTAL PUNTOS</th>
						<th><?=$rows["puntos"]?></th>
					</tr>
				</tfoot>
			</table>
		</td>
	</tbody>
</table>
<br>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th width="25%">SERIE</th>
			<th width="75%">RESPUESTAS <span class='badge bg-green'>CORRECTAS</span> <span class='badge bg-red'>INCORRECTAS</span></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>SERIE I</td>
			<td><?=rs_alumno($id_usuario, 1, 16)?></td>
		</tr>
		<tr>
			<td>SERIE II</td>
			<td><?=rs_alumno($id_usuario, 2, 11)?></td>
		</tr>
		<tr>
			<td>SERIE III</td>
			<td><?=rs_alumno($id_usuario, 3, 30)?></td>
		</tr>
		<tr>
			<td>SERIE VI</td>
			<td><?=rs_alumno($id_usuario, 4, 18)?></td>
		</tr>
		<tr>
			<td>SERIE V</td>
			<td><?=rs_alumno($id_usuario, 5, 12)?></td>
		</tr>
		<tr>
			<td>SERIE VI</td>
			<td><?=rs_alumno($id_usuario, 6, 20)?></td>
		</tr>
		<tr>
			<td>SERIE VII</td>
			<td><?=rs_alumno($id_usuario, 7, 20)?></td>
		</tr>
		<tr>
			<td>SERIE VIII</td>
			<td><?=rs_alumno($id_usuario, 8, 17)?></td>
		</tr>
		<tr>
			<td>SERIE IX</td>
			<td><?=rs_alumno($id_usuario, 9, 18)?></td>
		</tr>
		<tr>
			<td>SERIE X</td>
			<td><?=rs_alumno($id_usuario, 10, 11)?></td>
		</tr>
	</tbody>
</table>
</td>
	</tr>
</table>

<script type="text/javascript">
function Fecha(fech){
                  var datetime =fech.split(" ");
                  var fecha = datetime[0];
                  var myDate = new Date(fecha);
                  var impfecha = (myDate.getDate() + 1) + "/" + (myDate.getMonth() + 1) + "/" + myDate.getFullYear();
                  var hora = datetime[1];
                   $("#dat").html('<i class="fa fa-calendar"></i> '+impfecha+'<br> <i class="fa fa-clock-o"></i> '+ hora);
                   console.log(fech);
                };
                $(document).ready(function(){
                	Fecha('<?=$rows["fecha"];?>');
                });
                
</script>