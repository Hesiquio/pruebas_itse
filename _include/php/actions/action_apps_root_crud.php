<?php

	function Eliminar_fila($tabla, $campo_id, $id)
	{
		include ("../db/conexionDB.php");

		//QUERY de consulta SQL

		$query = $con->prepare("DELETE FROM ".$tabla." WHERE ".$campo_id." = '".$id."';");
		$query -> execute();

	}

	function Edit_admin($us_id, $name, $sex, $us, $t_us, $status){
		include ("../db/conexionDB.php");
		if ($us_id == 1) {
			echo "false";
		}else{
		$query = $con->prepare("UPDATE tbl_usuarios SET us_nombre = '".$name."',
														us_genero = '".$sex."',
														us_alias = '".$us."',
														rol_id = '".$t_us."',
														us_status = '".$status."'  
								WHERE us_id = '".$us_id."';");
		$query -> execute();

		echo "ok";
		}
	}

	function Edit_adminus($us_id, $name, $sex, $us){
		include ("../db/conexionDB.php");
		if ($us_id == 1) {
			echo "false";
		}else{
		$query = $con->prepare("UPDATE tbl_usuarios SET us_nombre = '".$name."',
														us_genero = '".$sex."',
														us_alias = '".$us."' 
								WHERE us_id = '".$us_id."';");
		$query -> execute();

		echo "ok";
		}
	}
	
	function Eliminar_fila_ad($tabla, $campo_id, $id)
	{
		include ("../db/conexionDB.php");

		//QUERY de consulta SQL

		if ($id == 1) {
			echo "false";
		}else{
		$query = $con->prepare("DELETE FROM ".$tabla." WHERE ".$campo_id." = '".$id."';");
		$query -> execute();

		echo "ok";
		}
		
		

	}

	function Add_admin($name, $sex, $us, $t_us, $status, $pass){
		date_default_timezone_set('America/Merida');
		include ("../db/conexionDB.php");
		$hoy = date("Y-m-d H:i:s");

		$select = $con ->prepare("SELECT us_alias FROM tbl_usuarios WHERE us_alias = '".$us."';");
		$select->execute();

		$cont = $select->rowCount();

		if ($cont>=1) {
			echo "false";
		}else{

			$query = $con->prepare("INSERT INTO tbl_usuarios SET us_nombre = '".$name."',
														us_genero = '".$sex."',
														us_alias = '".$us."',
														us_password = '".md5(md5($pass))."',
														rol_id = '".$t_us."',
														car_id = '1',
														us_fec_reg = '".$hoy."',
														us_status = '".$status."';");
			$query -> execute();

			echo "ok";
		}
		
	}


	if (isset($_GET["app2_delete"]) && $_GET["app2_delete"] == "student") {
		# code...
	
	Eliminar_fila("tbl_app2_rangos", "us_id", $_POST["id_student"]);
	Eliminar_fila("tbl_app2_resultados", "us_id", $_POST["id_student"]);
	
	echo "ok";
	
	}else if (isset($_GET["app1_delete"]) && $_GET["app1_delete"] == "student") {
		
		$serie = 1;
		//$tbl_nombre = "tbl_serie".."_app1";
		
		for ($i=0; $i <10 ; $i++) { 
			Eliminar_fila("tbl_serie".$serie."_app1", "us_id", $_POST["id_student"]);
			$serie++;
		}

		Eliminar_fila("tbl_app1_res_us", "us_id", $_POST["id_student"]);
		echo "ok";
		

	}else if (isset($_GET["app3_delete"]) && $_GET["app3_delete"] == "student") {
		Eliminar_fila("tbl_res_pg_app3", "us_id", $_POST["id_student"]);
		echo "ok";
	}else if (isset($_GET["delete"]) && $_GET["delete"] == "us") {
		Eliminar_fila_ad("tbl_usuarios", "us_id", $_POST["id_us"]);

	}elseif (isset($_GET["edit"]) && $_GET["edit"] == "usad") {
		# Edit_admin($us_id, $name, $sex, $us, $t_us, $status)
		Edit_admin($_POST["us_id"], $_POST["nombre"], $_POST["sexo"], $_POST["usuario"], $_POST["rol"], $_POST["estado"]);

	}elseif (isset($_GET["add"]) && $_GET["add"] == "usad") {
		# Edit_admin($us_id, $name, $sex, $us, $t_us, $status)
		Add_admin($_POST["nombre_new"], $_POST["sexo_new"], $_POST["usuario_new"], $_POST["rol_new"], $_POST["estado_new"], $_POST["pass_login"]);
	}elseif (isset($_GET["edit"]) && $_GET["edit"] == "perfil") {
		# Edit_admin($us_id, $name, $sex, $us, $t_us, $status)
		Edit_adminus($_POST["us_id"], $_POST["nombre"], $_POST["sexo"], $_POST["usuario"]);

	}

?>