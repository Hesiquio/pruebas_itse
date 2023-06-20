<?php

include("../db/conexionDB.php");

if (isset($_GET["app"]) && $_GET["app"] == 02) {
			
			$selection = $con ->prepare("SELECT tbl_usuarios.us_id AS ID, us_nombre AS nombre, us_genero AS sexo, car_sigla AS carrera, fec_term AS fecha
								FROM tbl_usuarios
								INNER JOIN tbl_carreras ON tbl_usuarios.car_id = tbl_carreras.car_id
								INNER JOIN tbl_app2_rangos ON tbl_app2_rangos.us_id = tbl_usuarios.us_id;"
								);

			$selection->execute();
			while ($row = $selection->fetch(PDO::FETCH_ASSOC)) {
				$array["data"][] = $row; 
			}

			echo json_encode($array);

}elseif (isset($_GET["app"]) && $_GET["app"] == 01) {

			$selection = $con ->prepare("SELECT tbl_usuarios.us_id AS ID, 
												us_nombre AS nombre, 
												us_genero AS sexo, 
												car_sigla AS carrera, 
												app1_fec_inicio AS fecha,
												app1_avance AS porcentaje,
												us_alias AS usuario
								FROM tbl_usuarios
								INNER JOIN tbl_carreras ON tbl_usuarios.car_id = tbl_carreras.car_id
								INNER JOIN tbl_app1_res_us ON tbl_app1_res_us.us_id = tbl_usuarios.us_id;"
								);

			$selection->execute();
			while ($row = $selection->fetch(PDO::FETCH_ASSOC)) {
				$array["data"][] = $row; 
			}

			echo json_encode($array);

}elseif (isset($_GET["app"]) && $_GET["app"] == 03) {

			$selection = $con -> prepare("SELECT tbl_usuarios.us_nombre AS nombre,
												   tbl_usuarios.us_genero AS sexo,
											       tbl_carreras.car_nombre AS carrera,
											       tbl_res_pg_app3.us_id AS ID
											       FROM tbl_usuarios
											       INNER JOIN tbl_carreras ON tbl_usuarios.car_id = tbl_carreras.car_id
											       INNER JOIN tbl_res_pg_app3 ON tbl_res_pg_app3.us_id = tbl_usuarios.us_id
											       GROUP BY ID;");

			$selection->execute();
			while ($row = $selection->fetch(PDO::FETCH_ASSOC)) {
				$array["data"][] = $row; 
			}

			echo json_encode($array);

}elseif (isset($_GET["tbl"]) && $_GET["tbl"] == "us") {

			$selection = $con -> prepare("SELECT tbl_usuarios.us_nombre AS nombre,
												   tbl_usuarios.us_genero AS sexo,
											       tbl_roles.rol_nombre AS rol,
											       tbl_usuarios.us_id AS ID,
											       tbl_usuarios.us_alias AS alias,
											       tbl_usuarios.us_status AS estado
											       FROM tbl_usuarios
											       INNER JOIN tbl_roles ON tbl_usuarios.rol_id = tbl_roles.rol_id
											       AND tbl_usuarios.rol_id BETWEEN '1' AND '2';");

			$selection->execute();
			while ($row = $selection->fetch(PDO::FETCH_ASSOC)) {
				$array["data"][] = $row; 
			}

			echo json_encode($array);

}

?>