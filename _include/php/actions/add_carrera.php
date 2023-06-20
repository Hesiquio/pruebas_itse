<?php


function Add_admin($name,  $siglas, $car_tipo, $status, ){
    date_default_timezone_set('America/Merida');
    include ("../db/conexionDB.php");
    $hoy = date("Y-m-d H:i:s");

    $select = $con ->prepare("SELECT us_alias FROM tbl_carreras WHERE us_alias = '".$us."';");
    $select->execute();

    $cont = $select->rowCount();

    if ($cont>=1) {
        echo "false";
    }else{

        $query = $con->prepare("INSERT INTO tbl_carreras SET car_nombre = '".$name."',
													    
														car_siglas = '".$siglas."',
														car_tipo = '".$car_tipo."',
														car_id = '1',
														us_fec_reg = '".$hoy."',
														car_status = '".$status."';");
        $query -> execute();

        echo "ok";
    }

}
