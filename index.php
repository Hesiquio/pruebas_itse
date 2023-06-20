<?php
#########################################################################
#########################################################################
#
# index.php (Home de la aplicación): Aca se manipulará todo el sistema.
# 
# 
#########################################################################

/**
  * Inicializa función session_start(); para cookies sessions..
  */ 
	session_start();
/**
 * 	Declaración de variable session para volcar..
 */
	$SID = session_id();
/**
 * Zona Honoraria..
 */
	date_default_timezone_set('America/Merida');
/**
 * Se declara a incluir Indexación de directorios.
 */
	include ("ini.php");
	include $php."actions/functions_view.php";

/**
 * Conexion a DATABASE 
 */
	#include ($php."conexionDB.php");
	/*include_once ($html."header.php");
	  include_once ($html."body.php");
	  include_once ($html."footer.php");*/

/**
 *  Desde estas lineas empieza la visualizacion de la APP, con ayuda de Framework de CSS de Bootstrap v3.3.7
 */	
  // Condicional para verificar si exite una sesion activa la cual hará el redirecionamiento automatico a la home de la APP
	if (isset($_SESSION["session_root"])) {
		 #Condicionar los privilegios  para presentar la app al usuario.

		include_once ($html."root.php");
	
	}elseif (isset($_SESSION["session_student"]) || isset($_SESSION["session_guest"])) {
		
		
		include_once ($html."student.php");

	}else{
	
		/**
		 * En caso contrario 
		 */
		
		include ($mod."login.html");
	}


?>