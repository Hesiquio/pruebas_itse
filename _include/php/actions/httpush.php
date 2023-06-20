<?php
session_start();
$id_user = 2;
if (isset($_GET["p"])  && $_GET["p"] == 'true') {
require_once('../db/conexionDB.php');
set_time_limit(0); //Establece el número de segundos que se permite la ejecución de un script.
$fecha_ac = isset($_POST['timestamp']) ? $_POST['timestamp']:0;
$row = null;
$fecha_bd = $row['not_timestamp'];

while( $fecha_bd <= $fecha_ac )
	{	

		$query = $con->prepare("SELECT not_timestamp FROM tbl_notificaciones WHERE us_id = '".$id_user."' AND not_status = '1' ORDER BY not_timestamp DESC LIMIT 1;" );
		$query->execute();#        = mysql_fetch_array($con);

		$ro  = $query -> fetch();
		
		usleep(100000);//anteriormente 10000
		clearstatcache();
		$fecha_bd  = strtotime($ro['not_timestamp']);
	}
	
	$query2 = $con->prepare(" SELECT * FROM tbl_notificaciones WHERE us_id = '".$id_user."' AND not_status = '1' ORDER BY not_timestamp DESC LIMIT 1 ;" );
	$query2->execute();
while($row=$query2->fetch())
{
	$ar["timestamp"]          = strtotime($row['not_timestamp']);	
	$ar["mensaje"] 	 		  = $row['not_mensaje'];	
	$ar["id"] 		          = $row['not_id'];	
	$ar["status"]           = $row['not_status'];	
	$ar["tipo"]           = $row['rol_id'];	
}
$dato_json   = json_encode($ar);
echo $dato_json;
}

if (isset($_GET["m"])  && $_GET["m"] == 'true') {
require_once('functions_view.php');
	//echo "algo aca";
	notification("../", "view", 0, $id_user);  //("../", "create", "app_crear o ver", "id_usuario")
}

?>