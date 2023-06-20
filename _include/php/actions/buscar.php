<?php

$fecha1 =  $_GET["f1"];
$fecha1 = explode("/", $fecha1);

$fecha_ini = $fecha1[2]."-".$fecha1[1]."-".$fecha1[0]." 00:00:00";

$fecha2 =  $_GET["f2"];
$fecha2 = explode("/", $fecha2);

$fecha_fin = $fecha2[2]."-".$fecha2[1]."-".$fecha2[0]." 23:59:59";

	function body_table($f1, $f2){
		include "../db/conexionDB.php";
		include 'functions_view.php';

		$query = $con->prepare("SELECT tbl_usuarios.us_id AS ID, 
												us_nombre AS nombre, 
												us_genero AS sexo, 
												car_sigla AS carrera, 
												app1_fec_inicio AS fecha,
												app1_avance AS porcentaje,
												us_alias AS usuario,
												app1_res_fin AS CI,
												app1_puntuacion AS puntos,
												app1_nivel_txt AS nivel

								FROM tbl_usuarios
								INNER JOIN tbl_carreras ON tbl_usuarios.car_id = tbl_carreras.car_id
								INNER JOIN tbl_app1_res_us ON tbl_app1_res_us.us_id = tbl_usuarios.us_id
								WHERE tbl_app1_res_us.app1_fec_inicio BETWEEN '".$f1."' AND '".$f2."' ORDER BY app1_fec_inicio ASC;");

		$query->execute();
		
		$counter=$query->rowCount();
		if ($counter>0) {
			
			$cont = 1;
			while ($filas=$query->fetch()) {

				?>
				<tr>
					<td><?=$cont;?></td>
					<td><?=$filas["nombre"]?></td>
					<td><?=$filas["usuario"]?></td>
					<td><?=genero($filas["sexo"]);?></td>
					<td><?=$filas["carrera"]?></td>
					<td><?=$filas["CI"]?></td>
					<td><?=$filas["nivel"]?></td>
					<td><?=$filas["puntos"]?></td>
					<td><?=serie($filas["ID"], 1)?></td>
					<td><?=serie($filas["ID"], 2)?></td>
					<td><?=serie($filas["ID"], 3)?></td>
					<td><?=serie($filas["ID"], 4)?></td>
					<td><?=serie($filas["ID"], 5)?></td>
					<td><?=serie($filas["ID"], 6)?></td>
					<td><?=serie($filas["ID"], 7)?></td>
					<td><?=serie($filas["ID"], 8)?></td>
					<td><?=serie($filas["ID"], 9)?></td>
					<td><?=serie($filas["ID"], 10)?></td>
				</tr>
				<?php
				$cont++;
			}
		}else{
			?>
			<tr>
				<td colspan="18" align="center"><b>LA CONSULTA DE FECHAS NO HA AROJADO RESULTADOS.</b></td>
			</tr>
			<?php
		}
	}


?>

	<table class="table table-striped table-bordered" id="tbl_resultados">
		<thead>
			<tr bgcolor="#20B2AA" style="color:#FFFFFF">
				<th colspan="8">RESULTADOS</th>
				<th colspan="10">PUNTUACION POR SERIE</th>
			</tr>
			<tr>
				<th>#</th>
				<th>NOMBRE</th>
				<th>USUARIO</th>
				<th>SEXO</th>
				<th>CARRERA</th>
				<th>CI</th>
				<th>NIVEL</th>
				<th>PUNTUJE</th>
				<th>S1</th>
				<th>S2</th>
				<th>S3</th>
				<th>S4</th>
				<th>S5</th>
				<th>S6</th>
				<th>S7</th>
				<th>S8</th>
				<th>S9</th>
				<th>S10</th>
			</tr>
		</thead>
		<tbody>
			<?=body_table($fecha_ini,$fecha_fin);?>
		</tbody>
	</table>

<div class="col-md-12" align="center">
  <button type="submit" name="buscar" class="btn btn-success btn-md" onclick="tableToExcel('tbl_resultados', 'Resultados X Alumno')" value="Generar"><span class="fa fa-file-excel-o"></span> Exportar</button> 
</div>