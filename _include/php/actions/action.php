<?php
session_start();
$id_usuario = $_SESSION["session_student"];
include "../db/conexionDB.php";
include 'functions_view.php';
if (isset($_GET["sesion"]) && $_GET["sesion"] == '01') {

	$pregunta= array();
	$preg=1;

	for($i=0;$i<16;$i++){
		if (isset($_POST[$preg])){
			$pregunta[$i]=$_POST[$preg];
		}else{
			$pregunta[$i]="n";	
		}
		$columna="s1_app1_p".$preg;
		$serie1 = $con->prepare("UPDATE tbl_serie1_app1 SET ".$columna."='".$pregunta[$i]."' WHERE us_id='".$id_usuario."'");
		$serie1->execute();	
		$preg++;
	}


	$respcorr = $con -> prepare("SELECT * FROM tbl_serie1_app1 WHERE id_serie1_app1 = '1' AND us_id = '1';");
	$respcorr -> execute();

	$respactual = $con -> prepare("SELECT * FROM tbl_serie1_app1 WHERE us_id='".$id_usuario."'");
	$respactual -> execute();

	$puntaje=0;
	$index1=2;
	$index2=2;

	$row1 = $respcorr -> fetch();
	$row2 = $respactual -> fetch();

	for($i=0;$i<16;$i++){
		if ($row1[$index1] == $row2[$index2]) {
			$puntaje++;
		}	
		$index1++;
		$index2++;
	}

	$pserie1 = $con -> prepare ("UPDATE tbl_serie1_app1 SET s1_app1_res = '".$puntaje."', s1_app1_status = '1' WHERE us_id ='".$id_usuario."'");
	$pserie1 -> execute();

    $update = $con->prepare("UPDATE tbl_app1_res_us SET 
                                                    app1_avance = '10'
                                                    WHERE us_id = '".$id_usuario."';");
    $update -> execute();

}elseif (isset($_GET["sesion"]) && $_GET["sesion"] == "02") {
	$pregunta= array();
	$preg=1;

	for($i=0;$i<11;$i++){
		if (isset($_POST[$preg])){
			$pregunta[$i]=$_POST[$preg];
		}else{
			$pregunta[$i]="n";	
		}
		$columna="s2_app1_p".$preg;
		$serie2 = $con->prepare("UPDATE tbl_serie2_app1 SET ".$columna."='".$pregunta[$i]."' WHERE us_id='".$id_usuario."'");
		$serie2->execute();	
		$preg++;
	}


	$respcorr = $con -> prepare("SELECT * FROM tbl_serie2_app1 WHERE id_serie2_app1 = '1' AND us_id = '1';");
	$respcorr -> execute();

	$respactual = $con -> prepare("SELECT * FROM tbl_serie2_app1 WHERE us_id='".$id_usuario."'");
	$respactual -> execute();

	$puntaje=0;
	$index1=2;
	$index2=2;

	$row1 = $respcorr -> fetch();
	$row2 = $respactual -> fetch();

	for($i=0;$i<11;$i++){
		if ($row1[$index1] == $row2[$index2]) {
			$puntaje++;
		}	
		$index1++;
		$index2++;
	}

	$puntaje = $puntaje * 2;

	$pserie2 = $con -> prepare ("UPDATE tbl_serie2_app1 SET s2_app1_res = '".$puntaje."', s2_app1_status = '1' WHERE us_id ='".$id_usuario."'");
	$pserie2 -> execute();

    $update = $con->prepare("UPDATE tbl_app1_res_us SET 
                                                    app1_avance = '20'
                                                    WHERE us_id = '".$id_usuario."';");
    $update -> execute();

}elseif (isset($_GET["sesion"]) && $_GET["sesion"] == "03") {
	
	$pregunta = array();
    $preg = 1;

    for ($i = 0; $i < 30; $i++) {
        if (isset($_POST[$preg])) {
            $pregunta[$i] = $_POST[$preg];
        } else {
            $pregunta[$i] = "n";
        }
        $columna = "s3_app1_p" . $preg;
        $serie3 = $con->prepare("UPDATE tbl_serie3_app1 SET " . $columna . "='" . $pregunta[$i] . "' WHERE us_id='" . $id_usuario . "';");
        $serie3->execute();
        $preg++;
    }

    $respcorr = $con -> prepare("SELECT * FROM tbl_serie3_app1 WHERE id_serie3_app1 = '1' AND us_id = '1';");
	$respcorr -> execute();

	$respactual = $con -> prepare("SELECT * FROM tbl_serie3_app1 WHERE us_id='".$id_usuario."'");
	$respactual -> execute();

    $puntaje = 0;
    $incorr = 0;
    $index1 = 2;
    $index2 = 2;
    $row1 = $respcorr->fetch();
    $row2 = $respactual->fetch();
    for ($i = 0; $i < 30; $i++) {
        if ($row1[$index1] == $row2[$index2]) {
            $puntaje++;
        } else {
            $incorr++;
        }
        $index1++;
        $index2++;
    }
    $puntaje = $puntaje - $incorr;
    $pserie3 = $con -> prepare ("UPDATE tbl_serie3_app1 SET s3_app1_res = '".$puntaje."', s3_app1_status = '1' WHERE us_id ='".$id_usuario."'");
	$pserie3 -> execute();

    $update = $con->prepare("UPDATE tbl_app1_res_us SET 
                                                    app1_avance = '30'
                                                    WHERE us_id = '".$id_usuario."';");
    $update -> execute();

}elseif (isset($_GET["sesion"]) && $_GET["sesion"] == "04") {
    $preg = 1;
    $pregunta = array();

    for ($i = 0; $i < 18; $i++) {
        $pregunta[$i] = "";
    }
    for ($pre = 0; $pre < 18; $pre++) {
        if (isset($_POST[$preg])) {
            $numero = $_POST[$preg];
            $count = count($numero);
            for ($i = 0; $i < $count; $i++) {
                $pregunta[$pre].=$numero[$i];
            }
        } else {
            $pregunta[$pre] = "n";
        }
        $columna = "s4_app1_p" . $preg;
        $serie4 = $con->prepare("UPDATE tbl_serie4_app1 SET " . $columna . "='" . $pregunta[$pre] . "' WHERE us_id='" . $id_usuario . "'");
        $serie4->execute();
        $preg++;
    }

    $respcorr = $con -> prepare("SELECT * FROM tbl_serie4_app1 WHERE id_serie4_app1 = '1' AND us_id = '1';");
	$respcorr -> execute();

	$respactual = $con -> prepare("SELECT * FROM tbl_serie4_app1 WHERE us_id='".$id_usuario."'");
	$respactual -> execute();

    $puntaje = 0;
    $index1 = 2;
    $index2 = 2;
    $row1 = $respcorr->fetch();
    $row2 = $respactual->fetch();

    for ($i = 0; $i < 18; $i++) {
        if ($row1[$index1] == $row2[$index2]) {
            $puntaje++;
        }
        $index1++;
        $index2++;
    }
    $pserie4 = $con -> prepare ("UPDATE tbl_serie4_app1 SET s4_app1_res = '".$puntaje."', s4_app1_status = '1' WHERE us_id ='".$id_usuario."'");
	$pserie4 -> execute();

    $update = $con->prepare("UPDATE tbl_app1_res_us SET 
                                                    app1_avance = '40'
                                                    WHERE us_id = '".$id_usuario."';");
    $update -> execute();
}elseif (isset($_GET["sesion"]) && $_GET["sesion"] == "05") {
	$pregunta = array();
    $preg = 1;

    for ($i = 0; $i < 12; $i++) {
        if ($_POST[$preg]!=="") {
            $pregunta[$i] = $_POST[$preg];
        } else {
            $pregunta[$i] = "n";
        }
        $columna = "s5_app1_p" . $preg;
        $serie5 = $con->prepare("UPDATE tbl_serie5_app1 SET " . $columna . "='" . $pregunta[$i] . "' WHERE us_id='" . $id_usuario . "'");
        $serie5->execute();
        $preg++;
    }

    $respcorr = $con -> prepare("SELECT * FROM tbl_serie5_app1 WHERE id_serie5_app1 = '1' AND us_id = '1';");
	$respcorr -> execute();

	$respactual = $con -> prepare("SELECT * FROM tbl_serie5_app1 WHERE us_id='".$id_usuario."'");
	$respactual -> execute();

    $puntaje = 0;
    $index1 = 2;
    $index2 = 2;
    $row1 = $respcorr->fetch();
    $row2 = $respactual->fetch();
    for ($i = 0; $i < 12; $i++) {
        if ($row1[$index1] == $row2[$index2]) {
            $puntaje++;
        }
        $index1++;
        $index2++;
    }

    $puntaje = $puntaje * 2;
    $pserie5 = $con -> prepare ("UPDATE tbl_serie5_app1 SET s5_app1_res = '".$puntaje."', s5_app1_status = '1' WHERE us_id ='".$id_usuario."'");
	$pserie5 -> execute();

    $update = $con->prepare("UPDATE tbl_app1_res_us SET 
                                                    app1_avance = '50'
                                                    WHERE us_id = '".$id_usuario."';");
    $update -> execute();

}elseif (isset($_GET["sesion"]) && $_GET["sesion"] == "06") {
	$pregunta = array();
    $preg = 1;

    for ($i = 0; $i < 20; $i++) {
        if (isset($_POST[$preg])) {
            $pregunta[$i] = $_POST[$preg];
        } else {
            $pregunta[$i] = "n";
        }
        $columna = "s6_app1_p" . $preg;
        $serie6 = $con->prepare("UPDATE tbl_serie6_app1 SET " . $columna . "='" . $pregunta[$i] . "' WHERE us_id='" . $id_usuario . "'");
        $serie6->execute();
        $preg++;
    }

    $respcorr = $con -> prepare("SELECT * FROM tbl_serie6_app1 WHERE id_serie6_app1 = '1' AND us_id = '1';");
	$respcorr -> execute();

	$respactual = $con -> prepare("SELECT * FROM tbl_serie6_app1 WHERE us_id='".$id_usuario."'");
	$respactual -> execute();

    $puntaje = 0;
    $incorr = 0;
    $index1 = 2;
    $index2 = 2;
    $row1 = $respcorr->fetch();
    $row2 = $respactual->fetch();

    for ($i = 0; $i < 20; $i++) {
        if ($row1[$index1] == $row2[$index2]) {
            $puntaje++;
        } else {
            $incorr++;
        }
        $index1++;
        $index2++;
    }
    $puntaje = $puntaje - $incorr;
    $pserie6 = $con -> prepare ("UPDATE tbl_serie6_app1 SET s6_app1_res = '".$puntaje."', s6_app1_status = '1' WHERE us_id ='".$id_usuario."'");
	$pserie6 -> execute();

    $update = $con->prepare("UPDATE tbl_app1_res_us SET 
                                                    app1_avance = '60'
                                                    WHERE us_id = '".$id_usuario."';");
    $update -> execute();

}elseif (isset($_GET["sesion"]) && $_GET["sesion"] == "07") {
	
	$pregunta= array();
	$preg=1;

	for($i=0;$i<20;$i++){
		if (isset($_POST[$preg])){
			$pregunta[$i]=$_POST[$preg];
		}else{
			$pregunta[$i]="n";	
		}
		$columna="s7_app1_p".$preg;
		$serie7 = $con->prepare("UPDATE tbl_serie7_app1 SET ".$columna."='".$pregunta[$i]."' WHERE us_id='".$id_usuario."'");	
		$serie7->execute();
		$preg++;
	}

	$respcorr = $con -> prepare("SELECT * FROM tbl_serie7_app1 WHERE id_serie7_app1 = '1' AND us_id = '1';");
	$respcorr -> execute();

	$respactual = $con -> prepare("SELECT * FROM tbl_serie7_app1 WHERE us_id='".$id_usuario."'");
	$respactual -> execute();

	$puntaje=0;
	$index1=2;
	$index2=2;
	$row1 = $respcorr->fetch();
	$row2 = $respactual->fetch();

	for($i=0;$i<20;$i++){
		if ($row1[$index1] == $row2[$index2]) {
			$puntaje++;
		}
		$index1++;
		$index2++;
	}
	$pserie7 = $con->prepare("UPDATE tbl_serie7_app1 SET s7_app1_res='".$puntaje."', s7_app1_status = '1' WHERE us_id ='".$id_usuario."'");
	$pserie7->execute();

    $update = $con->prepare("UPDATE tbl_app1_res_us SET 
                                                    app1_avance = '70'
                                                    WHERE us_id = '".$id_usuario."';");
    $update -> execute();

}elseif (isset($_GET["sesion"]) && $_GET["sesion"] == "08") {
	$pregunta = array();
    $preg = 1;

    for ($i = 0; $i < 17; $i++) {
        if (isset($_POST[$preg])) {
            $pregunta[$i] = $_POST[$preg];
        } else {
            $pregunta[$i] = "n";
        }
        $columna = "s8_app1_p" . $preg;
        $serie8 = $con->prepare("UPDATE tbl_serie8_app1 SET " . $columna . "='" . $pregunta[$i] . "' WHERE us_id='" . $id_usuario . "'");
        $serie8->execute();
        $preg++;
    }

    $respcorr = $con -> prepare("SELECT * FROM tbl_serie8_app1 WHERE id_serie8_app1 = '1' AND us_id = '1';");
	$respcorr -> execute();

	$respactual = $con -> prepare("SELECT * FROM tbl_serie8_app1 WHERE us_id='".$id_usuario."'");
	$respactual -> execute();

    $puntaje = 0;
    $incorr = 0;
    $index1 = 2;
    $index2 = 2;
    $row1 = $respcorr->fetch();
    $row2 = $respactual->fetch();
    for ($i = 0; $i < 17; $i++) {
        if ($row1[$index1] == $row2[$index2]) {
            $puntaje++;
        } else {
            $incorr++;
        }
        $index1++;
        $index2++;
    }
    $puntaje = $puntaje - $incorr;

    $pserie8 = $con->prepare("UPDATE tbl_serie8_app1 SET s8_app1_res='".$puntaje."', s8_app1_status = '1' WHERE us_id ='".$id_usuario."'");
	$pserie8->execute();

    $update = $con->prepare("UPDATE tbl_app1_res_us SET 
                                                    app1_avance = '80'
                                                    WHERE us_id = '".$id_usuario."';");
    $update -> execute();

}elseif (isset($_GET["sesion"]) && $_GET["sesion"] == "09") {
	$pregunta = array();
    $preg = 1;

    for ($i = 0; $i < 18; $i++) {
        if (isset($_POST[$preg])) {
            $pregunta[$i] = $_POST[$preg];
        } else {
            $pregunta[$i] = "n";
        }
        $columna = "s9_app1_p" . $preg;
        $serie9 = $con->prepare("UPDATE tbl_serie9_app1 SET " . $columna . "='" . $pregunta[$i] . "' WHERE us_id='" . $id_usuario . "'");
        $serie9->execute();
        $preg++;
    }

    $respcorr = $con -> prepare("SELECT * FROM tbl_serie9_app1 WHERE id_serie9_app1 = '1' AND us_id = '1';");
	$respcorr -> execute();

	$respactual = $con -> prepare("SELECT * FROM tbl_serie9_app1 WHERE us_id='".$id_usuario."'");
	$respactual -> execute();

    $puntaje = 0;
    $index1 = 2;
    $index2 = 2;
    $row1 = $respcorr->fetch();
    $row2 = $respactual->fetch();

    for ($i = 0; $i < 18; $i++) {
        if ($row1[$index1] == $row2[$index2]) {
            $puntaje++;
        }
        $index1++;
        $index2++;
    }
    $pserie9 = $con->prepare("UPDATE tbl_serie9_app1 SET s9_app1_res='".$puntaje."', s9_app1_status = '1' WHERE us_id ='".$id_usuario."'");
	$pserie9->execute();

    $update = $con->prepare("UPDATE tbl_app1_res_us SET 
                                                    app1_avance = '90'
                                                    WHERE us_id = '".$id_usuario."';");
    $update -> execute();

}elseif (isset($_GET["sesion"]) && $_GET["sesion"] == "10") {
	
	$preg1=1;
	$preg2=21;

	for($i=0;$i<11;$i++){
		if ($_POST[$preg1]!== ""){
			$pregunta1=$_POST[$preg1];
		}else{
			$pregunta1="n";	
		}
		if ($_POST[$preg2]!== ""){
			$pregunta2=$_POST[$preg2];

		}else{
			$pregunta2="n";	

		}

		$pregactual=$pregunta1.$pregunta2;
		
        $columna="s10_app1_p".$preg1;
		
        $serie10 = $con->prepare("UPDATE tbl_serie10_app1 SET ".$columna."='".$pregactual."' WHERE us_id='".$id_usuario."'");
		$serie10->execute();
		
        $preg1++;
		$preg2++;
	}

	$respcorr = $con -> prepare("SELECT * FROM tbl_serie10_app1 WHERE id_serie10_app1 = '1' AND us_id = '1';");
	$respcorr -> execute();

	$respactual = $con -> prepare("SELECT * FROM tbl_serie10_app1 WHERE us_id='".$id_usuario."'");
	$respactual -> execute();

	$puntaje=0;
	$index1=2;
	$index2=2;
	$row1 = $respcorr->fetch();
	$row2 = $respactual->fetch();

	for($i=0;$i<11;$i++){
		if ($row1[$index1] == $row2[$index2]) {
			$puntaje++;
		}	
		$index1++;
		$index2++;
	}
	$puntaje=$puntaje*2;

	$pserie10 = $con->prepare("UPDATE tbl_serie10_app1 SET s10_app1_res='".$puntaje."', s10_app1_status = '1' WHERE us_id ='".$id_usuario."'");
	$pserie10->execute();

	

	$campos = array(); // Arreglo que almacenará el fetch () de cada campo seleccionado de  cada tabla
    $sumar = array(); // La variable almacenará un conjunto de campos fetchados en un arreglo.
    $val=1; // Valor inicial de conteo #se conoce la existencia de 10 tablas iniciando en 1 con relacion al bucle for(); $val++ incrementará en respecto al ciclo.

    for ($i=1; $i <=10 ; $i++) { 
        
        $tablas = $con->prepare("SELECT s".$i."_app1_res AS ResSerie".$i." FROM tbl_serie".$i."_app1 WHERE us_id = '".$id_usuario."';"); // consulta de seleccion del campo a sumar.
        $tablas-> execute(); //ejecuta la consulta..
        $campos[$i] = $tablas -> fetch(); // Se almacenan los datos conforme al recorrido.. 

        $sumar[$i] = $campos[$i]["ResSerie".$val]; // Conjunta las variables fecthadas por la consulta.
        $val++; // incremento de la variable.
        
      }
      $Porc_total = array_sum($sumar); // valor total de los resultados de todas las sessiones.

      $Nivel = NivelCI($Porc_total,"Nivel"); // retorna el nivel del Coheficiente Intelectual del alumno en palabras
      $CI = NivelCI($Porc_total, "CI"); // retorna el Valor obtenido  CI
      $edadMental = NivelCI($Porc_total, "Mental");

      //Cargar la grafica con puntuaje para el alumno con respecto a el volor obtenido de las sesiones presentadas.
    
    $update = $con->prepare("UPDATE tbl_app1_res_us SET 
                                                    app1_status = '1',
                                                    app1_res_fin = '".$CI."',
                                                    app1_nivel_txt = '".$Nivel."',
                                                    app1_edad_mental = '".$edadMental."',
                                                    app1_puntuacion = '".$Porc_total."',
                                                    app1_avance = '100'
                                                    WHERE us_id = '".$id_usuario."';");
    $update -> execute();

    //notification("../", "create", "1", $id_usuario);  //("../", "create", "app_crear o ver", "id_usuario") 


}

?>