<?php

/**
 * inicializar la variable session_start(); en este caso lo omitire ya que no será necesario
 */
#session_start();

 /**
  * incluir el file de la conexión a la base de datos.
  *
*	include("../db/conexionDB.php");*/


/**
 * Obtenemos la Zona Honoraria para llevar a cabo registros en tiempo real al efectuarse alguna actualizacion en la DB.
 */
    date_default_timezone_set('America/Merida');

/**
 * variables a imprimir dependiendo la situacion del caso 
 */
        
        #	$true = "ok";
        #	$duplicate = "replic";
        #	$false = "not";


        /************************************************************************************
			Funcion:	add_usuario();
			Accion:		Recoje las varibles enviadas mediante POST para registrar un nuevo
						usuario (alumno, invitado o administrador), por la cual su funcion
						es validar antes de ser registrado a la base de datos. 
		*************************************************************************************/	
		 function add_usuario($opcion, $curp ,$name, $pass, $esp, $cv_reg, $rol, $sexo){
        	include "../db/conexionDB.php";

        	if ($sexo == "") {
        		$sexo = "H";
        	}
        	// variable de impresion..
        	$true = "ok"; //Exito: Los datos proporcionados son validos para el registro en la DB. 
	        $duplicate = "replic"; // Error: La CURP como alias del alumno ya esta registrada en la DB. 
	        $false = "not"; // Error: La clave de registro proporconanda no es validada por el sistema, adquirirla con el administrador del sistema.

	        // Query SQL Consulta la CURP = al ALIAS del alumno proporcionada para el nuevo registro.

	        $consulta_curp = $con->prepare("SELECT us_alias FROM tbl_usuarios WHERE us_alias = '".$curp."';"); // Tomar en cuenta que el alias es igual a la clave curp del alumno o usuario que se registra.
	        $consulta_curp -> execute(); // ejecutar la consulta.
	         // Ahora es necesario saber  si la consulta esta arrojando un valor true o false para ello contabilizamos las filas que se estan ejecutando desde el query con la funcion rowCount().

	        $contador = $consulta_curp -> rowCount();

	        // Condicion para imprimir un resultado.

	        if ($contador >= 1) {  /// si hay uno o mas registros con la misma clave registrada imprimr error de duplicacion de Alias 
	        	echo $duplicate;
	        } else { // en caso contrario se continua con la validacion medianto otras consultas
	        	// consultar la clave de registro, es la clave proporcionada por el administrador del sistema puede variar si esta clave recibe una actualizacion,
	        	$consulta_claveReg = $con -> prepare("SELECT rol_cv_txt AS texto FROM tbl_roles WHERE rol_id = '".$rol."' AND rol_status = '1' ; ");
	        	$consulta_claveReg -> execute();

	        	// extraer la clave verificadora desde la DB misma que debe ser proporcionada por el administrador del sistema

	        	$clave_registro=$consulta_claveReg->fetch();

	        	// Ahora condicionar o verificar si la clave insertada es la perteneciente al registro existente en la DB
	        	if ($clave_registro["texto"] !== $cv_reg) {
	        		# Si la clave ingresada es diferente, imprimir Error: La clave de registro ingresada no es la proporcionada por el administrador
	        		echo $false;  
	        	} else {
	        		$md5Pass = md5(md5($pass));
	        		$f_act = date("Y-m-d H:i:s");
	        		// si la clave es la correcta procedera a ejecutar el registro del alumno
	        		$registrar = $con->prepare("INSERT INTO tbl_usuarios (us_nombre, us_genero, us_alias, us_password, car_id, rol_id, us_fec_reg, us_status) 
	        									VALUES('".$name."', '".$sexo."', '".$curp."', '".$md5Pass."', '".$esp."', '".$rol."', '".$f_act."', '1');");
	        		$registrar->execute();
	        		
	        		// verificar si el regirtro se realizó exitosamente
	        		$filaAfectada = $registrar -> rowCount();
	        		
	        		if ($filaAfectada>=1) {
										 	echo $true;
					} else {
					 	echo "IMPOSIBLE";
					}
	        	}
	        	
	        }
	    }

	    /************************************************************************************
			Funcion:	login_access();
			Accion:		Recoje las varibles enviadas mediante POST del login para validar el
						el usuario que intenta iniciar la sesion. 
		*************************************************************************************/	

		function login_access($clave, $pass){
			include '../db/conexionDB.php';
			 $hoy = date("Y-m-d");
			// variables de impresion
			$true = "ok";
			$false = "not";
			$locked = "blocked";
			$nopass= "failed";

			// Query para validar si el nombre de usuario o clave CURP  ingresado al fomulario login existe en la DB.

			$consultar_us = $con-> prepare("SELECT us_id AS ID, us_alias AS alias, us_status AS estado, us_password AS contrasenia, rol_id AS rol FROM tbl_usuarios
											WHERE us_alias = '".$clave."';");
			$consultar_us -> execute(); // ejetar el Query SQL



			$filaAfectada = $consultar_us -> rowCount();  // contar filas afectadas como prueba del resultado del Query SQL.

			// validar si la clave CURP o Alias ingresada, está resgitrado en la DB
			if ($filaAfectada>=1) { 
			// Si exite uno o mas registros con la clave ingresada ejetutar fetch() para obtener las variables desde la DB.
			  	$campo = $consultar_us -> fetch();
			  	if ($campo["estado"] >= 1){
			  		// Si el status del usuario es igual a uno entoces validar su contraseña 
			  		$contrasenia_post = md5(md5($pass));
			  			if ($campo["contrasenia"] == $contrasenia_post) {
			  				// si la contraseña ingresada es la misma perteneciente al usuario entonces
			  				# inicializar la session por tipo de rol ...
			  				#$root = ($campo["rol"] == 1) ?  session_start(); $_SESSION["session_root"] =: b ;
			  				#$retVal = (condition) ? a : b ;
			  				session_start();
			  				if ($campo["rol"] == 1 || $campo["rol"] == 2) { // pertenece al rol de admnistrador
			  					
			  					
			  					$_SESSION["session_root"] = $campo["ID"];
			  					$_SESSION["alias_us"] = $campo["alias"];
			  				}
			  				if ($campo["rol"] == 3) {// pertenece al rol de estudiante 
			  					
			  					#session_start();
			  					$_SESSION["session_student"] = $campo["ID"];
			  					$_SESSION["alias_us"] = $campo["alias"];

			  					// Realizar la nsertcion de la sesion del alumno para verificar las alertas
			  					$insert = $con -> prepare("INSERT INTO tbl_sessiones_temp 
			  													SET us_id = '".$campo["ID"]."',
			  														ses_fecha = '".$hoy."'; ");
			  					$insert ->execute();
			  				}
			  				
			  				echo $true;
			  			}else{
			  				// en caso contrario imprimir contraseña invalida.
			  				echo $nopass;
			  			}
			  	}else{
			  		// en caso contrario: es decir us_status = 0 imprimir usuario bloqueado temporalmente.
			  		echo $locked;
			  	}

			  } else {
			  	// en caso contrario: es decir no esta registro el dato ingresado como clave CURP o usuario  no existen registros del dato ingresado. 
			  	echo $false;
			  }
		}


        /**
         * Se determinará un menu de eventos.
         */

        $opcion = $_POST["data"];  // valida el tipo de usuario que esta realizando el registro

        // Data info: 1 formulario de login para ejecutar la funcion de inicio de session
        // Data info: 2 fomulario registro de un alumno desde invitado.
        // Data info: 3 fomulario registro de un alumno o usuario invitado-admin desde formulario form_reg.


        switch ($opcion) {
        	case '1':
        		# ejecutamos la function login_access();
        		login_access($_POST["curp_login"], $_POST["pass_login"]);

        		break;
        	case '2':
        		# ejecutamos la function add_alumno();
        		#add_alumno($opcion, $_POST["curp_reg"], $_POST["nombre_reg"], $_POST["pass_reg"], $_POST["carrera_reg"], $_POST["cv_reg"]);
        		
        		break;
        	case '3':
        		# ejecutamos la function add_alumno();
        		add_usuario($opcion, $_POST["curp_reg"], $_POST["nombre_reg"], $_POST["pass_reg"], $_POST["carrera_reg"], $_POST["cv_reg"], $_POST["rol"], $_POST["sexo"]);
        		
        		break;		
        	
        	default:
        		# code...
        		break;
        }

 ?>