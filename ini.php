<?php
#########################################################################
#########################################################################
#
# ini.php sites direccionamientos de la APP.
# 
# 
#########################################################################


/**
 * variables de directorios....
 */
	$assts = "assets/";
	$inc = "_include/";
	$css_app = $assts."bootstrap/css/";
	$js_app = $assts."bootstrap/js/";
	$img_app = $assts."bootstrap/images/";
	$build_css = $assts."build/css/";
	$build_js = $assts."build/js/";
	$src_css = $assts."src/scss/";
	$src_js = $assts."src/js/";

	$vendors = $assts."vendors/";

	$php = $inc."php/";
	$html = $inc."app/";
	$mod = $inc."modules/";
	$tables = $inc."tables/";
	$act = $inc."forms/";
	$class = $php."class_app.php";

	/**
	 * Condicion para matar la session del usuario 
	 */

	if (isset($_GET["cls"]) && $_GET["cls"] == "exit"){
		
		if (isset($_SESSION["session_root"])){ 
			
			unset($_SESSION["session_root"]);
		} 
		else{
			unset($_SESSION["session_student"]);
		} 
		
		unset($_SESSION["alias_us"]);
		header('Location: ?log');
	}

	?>