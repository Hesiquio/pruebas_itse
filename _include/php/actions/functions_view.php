<?php




/// function info_tbl_usuarios();

	function info_tbl_usuarios($dir, $campo_imprimir, $id_us){
		//include "../php/db/conexionDB.php";
		//include "_include/php/db/conexionDB.php";
		include $dir."/php/db/conexionDB.php";

		$sql = $con -> prepare("SELECT us_nombre AS nombreUser, car_nombre AS Carrera, us_genero AS sexo FROM tbl_usuarios 
								INNER JOIN tbl_carreras ON tbl_usuarios.car_id = tbl_carreras.car_id
								AND us_id = '".$id_us."';");
		$sql->execute();

		$campo = $sql->fetch();
		if ($campo_imprimir == "us") {
			echo $campo["nombreUser"]; 
		}else if ($campo_imprimir == "car") {
			echo $campo["Carrera"];
			
		}elseif ($campo_imprimir == "2nom") {
			$expl = explode(' ', $campo["nombreUser"]);
			// --- A R R E G L O ---
            // Verifica si el índice [1] existe antes de usarlo. Si no existe, usa una cadena vacía.
			$dos_nombres = $expl[0] . (isset($expl[1]) ? " ".$expl[1] : ""); // <-- ¡ARREGLADO!
            // Si quieres los dos primeros, no necesitas la verificación.
            // Si el nombre es "Hesiquio", $expl[1] no existe, pero con el operador ternario,
            // si no existe, solo concatenamos una cadena vacía.
			//codigo antiguo modificado el 16 de octubre por sebastian y hesiquio
			//$dos_nombres = $expl[0]." ".$expl[1];
			$dos_nombres = ucwords(strtolower($dos_nombres));
			echo $dos_nombres;
		}elseif ($campo_imprimir == "1nom") {
			$expl = explode(' ', $campo["nombreUser"]);
			$un_nombre = $expl[0];
			$un_nombre = ucwords(strtolower($un_nombre));
			echo($un_nombre);
		}elseif ($campo_imprimir == "sexo") {
			$sexo = $campo["sexo"];
			if ($sexo == "H"){
				$gen = "<i class='fa fa-male'></i> <b>SEXO</b>: MASCULINO";
			}else{
				$gen = "<i class='fa fa-female'></i> <b>SEXO</b>: FEMENINO";
			}
			echo $gen; 
		}elseif ($campo_imprimir == "sex") {
			return $campo["sexo"];
		}

		
	}

  function alert_welcome($id_user, $show){
    include "_include/php/db/conexionDB.php";
      date_default_timezone_set('America/Merida');
    $hoy = date("Y-m-d");
    if ($show == "true") {
      $query = $con ->prepare("SELECT ses_fecha FROM tbl_sessiones_temp WHERE us_id = '".$id_user."' AND ses_fecha = '".$hoy."';");
      $query -> execute();

      $totSess = $query -> rowCount();

      return $totSess;
      
    }else{
      $query = $con ->prepare("DELETE FROM tbl_sessiones_temp WHERE us_id = '".$id_user."';");
      $query -> execute();
    }
    
  }

  function modules_admin($id_user){
    include "_include/php/db/conexionDB.php";
      $query = $con->prepare("SELECT tbl_roles.rol_nombre AS Rol, tbl_usuarios.rol_id AS IDRol 
                            FROM tbl_usuarios
                            INNER JOIN tbl_roles ON tbl_usuarios.rol_id = tbl_roles.rol_id
                            AND tbl_usuarios.us_id = '".$id_user."' ");
    $query->execute();

    $data = $query->fetch();

    if ($data["IDRol"] == 1) {
         ?>
              <div class="menu_section">

                <ul class="nav side-menu">



                </ul>
              </div>
         <?php
       }

  }

  function notification($dir, $accion, $app_in, $us_id){  //("../", "create", "app_crear o ver", "id_usuario") 
    include $dir."db/conexionDB.php";
    date_default_timezone_set('America/Merida');
    $ahora = date("Y-m-d H:i:s");
    
    if ($app_in == 1) {
      $app = "Terman Merril";
    }elseif ($app_in == 2) {
      $app = "Factores FP";
    }elseif ($app_in == 3) {
      $app = "Orientación Vocacional";
    }else{
      $app = "N/A";
    }

    $mensaje = "Felicitaciones por concluir el Test <b>".$app."</b>.";
     
    if ($accion == "create"){

        $cons = $con->prepare("SELECT rol_id FROM tbl_usuarios WHERE us_id = '".$us_id."';");
        $cons->execute();
        $ROL = $cons->fetch();

        $query = $con -> prepare("INSERT INTO tbl_notificaciones SET us_id = '".$us_id."', 
                                                                      not_mensaje = '".$mensaje."', 
                                                                      not_timestamp = '".$ahora."', 
                                                                      rol_id = '".$ROL["rol_id"]."' ;");
        $query -> execute();
    }elseif ($accion == "view") {

      $query = $con->prepare("SELECT us_id, not_mensaje, not_timestamp FROM tbl_notificaciones WHERE  us_id = '".$us_id."' AND not_status = 1 ;");
      $query->execute();
        while ($li = $query->fetch()) {
        
      
      ?>
          <li>
            <a>
              <span class="image"><img src="assets/bootstrap/images/admin.png" alt="Profile Image" /></span>
              <span>
                <span>Administrador</span>
                <span class="time"><?=$li["not_timestamp"];?></span>
              </span>
              <span class="message">
                <?=$li["not_mensaje"];?>
              </span>
            </a>
          </li>
      <?php
      }
    
    }elseif ($accion == "counter") {
      $query = $con->prepare("SELECT us_id, not_mensaje, not_timestamp FROM tbl_notificaciones WHERE  us_id = '".$us_id."' AND not_status = 1 ;");
      $query->execute();

      $contador = $query->rowCount();
      echo($contador);
    }
  }

    function app1_data($id_user,$data){
        include '_include/php/db/conexionDB.php';
        $Porc_total = 0;
        $consultaavance = $con->prepare("SELECT app1_avance AS avance FROM tbl_app1_res_us WHERE us_id = '".$id_user."';"); // consulta del avance
        $consultaavance->execute(); // ejecuta la consulta..
        if($consultaavance!=false){ //para validar si existe el arreglo en nuevas versiones de php
            $avance = $consultaavance->fetchColumn();
            $Porc_total = $avance/10;
        }
          $next = $Porc_total+1; // Aprueba la sesion terminada para continuar al siguiente por instruccion;

          if ($Porc_total>0 && $Porc_total<100) {
            $porcentaje = $Porc_total."0";
            $texto = "No has completado la prueba, para obtener un resultado debes completarla en su totalidad al 100%.";
            $button = '<button href="#" onclick="next_serie('.$next.')" class="btn btn-warning"><i class="fa fa-refresh"></i> Continuar</button>';
            $menunav = '<a id="enlazar" href="#" onclick="next_serie('.$next.')"><i class="fa fa-paste"></i> Terman Merril <span id="proceso" class="label label-warning pull-right">Continuar '.$porcentaje.'%</span></a>';
              
          }
          if ($Porc_total==10){
            $porcentaje = $Porc_total."0";
            $texto = "Felicidades prueba completada.";
            $button = '<button href="#" data-toggle="modal" data-target="#result" class="btn btn-info" onclick="resultado_iq('.$id_user.',\'true\')"> Ver Resultado <i class="fa fa-eye"></i></button>';
            $menunav = '<a id="enlazar" href="#" data-toggle="modal" data-target="#finally"><i class="fa fa-paste"></i> Terman Merril <span id="proceso" class="label label-success pull-right">Concluído '.$porcentaje.'%</span></a>';
          }
          if($Porc_total==0){
              $porcentaje = $Porc_total;
              $texto = "Esta prueba no ha sido iniciada, puedes iniciarla en cuanto te lo autoricen.";
              $button = '<button href="#" id="app0'.$next.'" class="btn btn-success">Iniciar Prueba <i class="fa fa-child"></i></button>';
              $menunav = '<a href="#" id="app1" class="app1"><i class="fa fa-paste"></i> Terman Merril <span id="proceso" class="label label-info pull-right">Iniciar</span></a>';
          }
          
        if ($data == "menu") {
            echo $menunav;
        }else{
          ?>
        <div class="">
            <div class="progress progress_sm" style="width: 100%;">
              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?=$porcentaje;?>"></div>
            </div>
            <small><b><?=$porcentaje;?>% Completado</b></small>
          </div>
        </div>
        <div class="divider"></div>
        <p>
            <?=$texto;?>
          <!--No has completado la prueba, para obtener tu resultado debes completarla en su totalidad del 100%.-->
        </p>
        <div class="col col-xs-12" align="center">
            <?=$button;?>
          <!--<a href="#" id="app01" class="btn btn-warning"><i class="fa fa-refresh"></i> Terminar</a>-->
        </div>
        <?php  
        }
        
    }

    function avatar($id)
    {
      include '_include/php/db/conexionDB.php';

      $query = $con-> prepare("SELECT us_genero FROM tbl_usuarios WHERE us_id = '".$id."';");
      $query->execute();

      $genero = $query->fetch();
      if ($genero["us_genero"]=='H') {
        $avatar = "male1.png";
      }else{
        $avatar = "female2.png";
      }
      echo $avatar;
    }

	function preguntas_serie1($num,$pregunta,$a,$b,$c,$d){
        ?><div class="row">
      <hr>
        <div class="col col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
        <b><?=$num?>.- <?=$pregunta;?></b>
        </div>
        <div class="col col-md-3 col-sm-12 col-xs-12">
            <label>
                <input class="flat" type="radio" name="<?=$num;?>" value="a" /> A) <?=$a;?>
            </label>
        </div>
        <div class="col col-md-3 col-sm-12 col-xs-12">
            <label>
                <input class="flat" type="radio" name="<?=$num;?>" value="b" /> B) <?=$b;?>
            </label>
        </div>
        <div class="col col-md-3 col-sm-12 col-xs-12">
            <label>
                <input class="flat" type="radio" name="<?=$num;?>" value="c" /> C) <?=$c;?>
            </label>
        </div>
        <div class="col col-md-3 col-sm-12 col-xs-12">
            <label>
                <input class="flat" type="radio" name="<?=$num;?>" value="d" /> D) <?=$d;?>
            </label>
        </div>
      </div>
        <?php
    }
    function preguntas_serie2($num,$pregunta,$a,$b,$c){
        ?>
        <div class="col col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
        <b><?=$num?>.- <?=$pregunta;?></b>
        </div>
        <div class="col col-md-4 col-sm-12 col-xs-12">
            <label>
                <input class="flat" type="radio" name="<?=$num;?>" value="a" /> A) <?=$a;?>
            </label>
        </div>
        <div class="col col-md-4 col-sm-12 col-xs-12">
            <label>
                <input class="flat" type="radio" name="<?=$num;?>" value="b" /> B) <?=$b;?>
            </label>
        </div>
        <div class="col col-md-4 col-sm-12 col-xs-12">
            <label>
                <input class="flat" type="radio" name="<?=$num;?>" value="c" /> C) <?=$c;?>
            </label>
        </div>
        <?php
    }
    
    function preguntas_serie3($num, $pregunta){
      ?><div class="row">
      <hr>            
          <div class="col col-md-5 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
          <b><?=$num;?>.- <?=$pregunta;?></b>
          </div>
          <div class="col col-md-1 col-sm-12 col-xs-12">
              <label>ES:</label>
          </div>
          <div class="col col-md-3 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="radio" name="<?=$num;?>" value="i" /> IGUAL
              </label>
          </div>
          <div class="col col-md-3 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="radio" name="<?=$num;?>" value="o" /> OPUESTO
              </label>
          </div>
      </div> 
      <?php
    } 

    function preguntas_serie4($num, $pregunta, $r1, $r2, $r3, $r4, $r5){
      
      ?><div class="row">
      <hr>            
          <div class="col col-md-12 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
          <b><?=$num;?>.- <?=$pregunta;?></b>
          </div>
          <div class="col col-md-2 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="checkbox" name="<?=$num;?>[]" value="a" /> A) <?=$r1?>
              </label>
          </div>
          <div class="col col-md-2 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="checkbox" name="<?=$num;?>[]" value="b" /> B) <?=$r2?>
              </label>
          </div>
          <div class="col col-md-2 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="checkbox" name="<?=$num;?>[]" value="c" /> C) <?=$r3?>
              </label>
          </div>
          <div class="col col-md-2 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="checkbox" name="<?=$num;?>[]" value="d" /> D) <?=$r4?>
              </label>
          </div>
          <div class="col col-md-2 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="checkbox" name="<?=$num;?>[]" value="e" /> E) <?=$r5?>
              </label>
          </div>
      </div>

       <?php 
    }

    function preguntas_serie5($num, $pregunta){
      ?><div class="row">
      <hr>            
          <div class="col col-md-8 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
          <b><?=$num;?>.- <?=$pregunta;?></b>
          </div>
          <div class="col col-md-4 col-sm-12 col-xs-12">
              <label>
                  <input class="form-control" type="text" name="<?=$num;?>" placeholder="Responde Aquí" autocomplete="off" />
              </label>
          </div>
      </div> 

      <?php
    }   

    function preguntas_serie6($num, $pregunta){
      ?><div class="row">
      <hr>            
          <div class="col col-md-6 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
          <b><?=$num;?>.- <?=$pregunta;?></b>
          </div>
          <div class="col col-md-2 col-sm-12 col-xs-12">
              <label>TU RESPUESTA ES:</label>
          </div>
          <div class="col col-md-2 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="radio" name="<?=$num;?>" value="si" /> SI
              </label>
          </div>
          <div class="col col-md-2 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="radio" name="<?=$num;?>" value="no" /> NO
              </label>
          </div>
      </div> 
      <?php
    }

    function preguntas_serie8($num, $pregunta){
      ?><div class="row">
      <hr>            
          <div class="col col-md-5 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
          <b><?=$num;?>.- <?=$pregunta;?></b>
          </div>
          <div class="col col-md-1 col-sm-12 col-xs-12">
              <label>ES:</label>
          </div>
          <div class="col col-md-3 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="radio" name="<?=$num;?>" value="v" /> VERDADERO
              </label>
          </div>
          <div class="col col-md-3 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="radio" name="<?=$num;?>" value="f" /> FALSO
              </label>
          </div>
      </div> 
      <?php
    }  

    function preguntas_serie9($num, $r1, $r2, $r3, $r4, $r5){
      ?><div class="row">
      <hr>            
          <div class="col col-md-1 col-sm-12 col-xs-12 ">
            <span class="badge bg-green"><b><?=$num;?></b></span>
          </div>
          <div class="col col-md-2 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="radio" name="<?=$num;?>" value="a" /> A) <?=$r1?>
              </label>
          </div>
          <div class="col col-md-2 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="radio" name="<?=$num;?>" value="b" /> B) <?=$r2?>
              </label>
          </div>
          <div class="col col-md-2 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="radio" name="<?=$num;?>" value="c" /> C) <?=$r3?>
              </label>
          </div>
          <div class="col col-md-2 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="radio" name="<?=$num;?>" value="d" /> D) <?=$r4?>
              </label>
          </div>
          <div class="col col-md-2 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="radio" name="<?=$num;?>" value="e" /> E) <?=$r5?>
              </label>
          </div>
      </div>

       <?php 
    } 

    function preguntas_serie10($num, $secuencia, $r1, $r2){

      $excluir = explode(",", $secuencia);
      $val = 0;
      $listado=array();
      
      ?><div class="col col-md-12 col-sm-12 col-xs-12">
      <hr> 
          <div class="col col-md-2 col-sm-12 col-xs-12 ">
            <span class="badge bg-green"><b>Ejercicio <?=$num;?></b></span>
          </div>           
          <div align="justify" class="col col-md-5 col-sm-12 col-xs-12 "> 
			  <b><h2><?php foreach ($excluir as $valor) {
				  $listado = '<span class="badge badge-success"> '.$valor.' </span> , ';
				  echo $listado;
			  }?></h2></b>
          </div>
          <div class="col col-md-1 col-sm-12 col-xs-12">
              <label>
                  <input class="form-control" type="text" name="<?=$r1;?>" autocomplete="off" />
              </label>
          </div>
          <div align="center" class="col col-md-1 col-sm-12 col-xs-12">
              <label>
                  <b><h2>,</h2></b>
              </label>
          </div>
          <div class="col col-md-1 col-sm-12 col-xs-12">
              <label>
                  <input class="form-control" type="text" name="<?=$r2;?>" autocomplete="off" />
              </label>
          </div>
      </div>

       <?php 
    }                        
                            
    function temporizer_time($data,$ses)
    {
      date_default_timezone_set('America/Merida');


    $fecha_actual = date("d/m/Y H:i:s");

    $partes = explode(' ', $fecha_actual);

    $dmy = explode('/', $partes[0]);
    
    $dia = $dmy[0];
    
    $mes = (int)$dmy[1];
    
    $meses = $mes-1;
    
    $anio = $dmy[2];
    
    $h = explode(':', $partes[1]);
    
    $hora = $h[0];
    
    $minuto = $h[1]+$ses;
    
    $segundo = $h[2];
    
        if ($data == 'Y') {
              $showData = $anio;
          }elseif ($data == 'm') {
              $showData = $meses;
          }elseif ($data == 'd') {
              $showData = $dia;
          }elseif ($data == 'H') {
              $showData = $hora;
          }elseif ($data == 'i') {
              $showData = $minuto;
          }elseif ($data == 's') {
              $showData = $segundo;
          }  

          echo($showData);
    }    

    function app2_data($id_user, $enlace){
    include "_include/php/db/conexionDB.php";
    // verificar  si el alumno ya contesto la prueba factores..
    $ver = $con->prepare("SELECT us_id FROM tbl_app2_rangos WHERE us_id = '".$id_user."';");
    $ver->execute();
    
    $numfile = $ver -> rowCount();
    
    if ($numfile>=1){
      if($enlace == 'menu'){
        ?>
        <a href="#" data-toggle="modal" data-target="#finally"><i class="fa fa-inbox"></i> Factores <span class="label label-success pull-right">Concluído 100%</span></a>
        <?php
      }else{
      ?>
      <a class="btn btn-info"  data-toggle="modal" data-target="#finally"><i class="fa fa-check"></i> Prueba Concluída</a>
      <?php
      }
      
    }else{
      if($enlace == 'menu'){
        ?>
        <a href="#" id="app2" class="appdos"><i class="fa fa-inbox"></i> Factores <span id="proces" class="label label-info pull-right">Iniciar</span></a> 
        <?php
      }else{
      ?>
      <button type="button" id="app02" class="btn btn-success">Iniciar Prueba <i class="fa fa-child"></i></button type="button">
      <?php
      }
    }
    
  }

  function app3_data($id_user, $enlace){
    include "_include/php/db/conexionDB.php";
    // verificar  si el alumno ya contesto el test de orientacion vocacional..
    $ver = $con->prepare("SELECT us_id FROM tbl_res_pg_app3 WHERE us_id = '".$id_user."';");
    $ver->execute();
    
    $numfile = $ver -> rowCount();
    
    if ($numfile>=5){
      if($enlace == 'menu'){
        ?>
        <a href="#" data-toggle="modal" data-target="#finally"><i class="fa fa-edit"></i> Test Vocacional <span class="label label-success pull-right">Concluído 100%</span></a>
        <?php
      }else{
      ?>
      <img src="assets/bootstrap/images/vocacion_like.png" alt="..." class="img-circle profile_img">
      <br>
      <div class="col col-xs-12" align="center">
        <div class="divider"></div>
          <p>
            Felicitaciones, has concluído esta prueba, presiona el boton abajo para ver tu resultado. 
          </p>
          <button type="button" onclick="show_resultado_app3()"data-toggle="modal" data-target="#result_app3" class="btn btn-info">Ver Resultado <i class="fa fa-eye"></i></button>
      </div>
      <?php
      }
      
    }else{
      if($enlace == 'menu'){
        ?>
        <a href="#" id="app3" class="apptres"><i class="fa fa-edit"></i> Test Vocacional <span id="proces_app3" class="label label-info pull-right">Iniciar</span></a>
        <?php
      }else{
      ?>
      <img src="assets/bootstrap/images/vocacional.jpg" alt="..." class="img-circle profile_img">
      <br>
      <div class="col col-xs-12" align="center">
        <div class="divider"></div>
          <p>
            No has Iniciado esta prueba, pregunta a tu aplicador si estas apto para iniciarla. 
          </p>
          <button type="button" id="app03" class="btn btn-success">Iniciar Prueba <i class="fa fa-child"></i></button>
      </div>
      <?php
      }
    }
    
  }

  function gfactoresResultados($id_us, $obj){
    include '_include/php/db/conexionDB.php';

    $select = $con -> prepare("SELECT rangoa AS A, rangob AS B, rangoc AS C, rangoe AS E, 
                                      rangof AS F, rangog AS G, rangoh AS H, rangoi AS I, 
                                      rangol AS L, rangom AS M, rangon AS N, rangoo AS O, 
                                      rangoq1 AS Q1, rangoq2 AS Q2, rangoq3 AS Q3, rangoq4 AS Q4 
                               FROM tbl_app2_rangos WHERE us_id = '".$id_us."';");
    $select ->execute();

    $data = $select->fetch();

    if ($obj == '0'){
      $resultado = "10, 10, 10, 10, 10, 10, 10, 10,10, 10, 10, 10, 10, 10, 10, 10";
      //$resultado = $data["A"]+1, $data["B"]+1, $data["C"]+1, $data["E"]+1, $data["F"]+1, $data["G"]+1, $data["H"]+1, $data["I"]+1, $data["L"]+1, $data["M"]+1, $data["N"]+1, $data["O"]+1, $data["Q1"]+1, $data["Q2"]+1, $data["Q3"]+1, $data["Q4"]+1;
    }else{
      // aca empieza lo bueno
      $sex = $con->prepare("SELECT us_genero AS genero FROM tbl_usuarios WHERE us_id = '".$id_us."';"); 
      $sex ->execute();

      $rows = $select->rowCount();

      if ($rows == 0) {
        $resultado = "0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0";  
       } else{

       

      $sexo = $sex->fetch();

      //@$sexo = 'M' mujer;
      //@$sexo = 'H' hombre;

      $a = $data["A"]; $b = $data["B"]; $c = $data["C"]; $e = $data["E"]; $f = $data["F"];
      $g = $data["G"]; $h = $data["H"]; $i = $data["I"]; $l = $data["L"]; $m = $data["M"];
      $n = $data["N"]; $o = $data["O"]; $q1 = $data["Q1"]; $q2 = $data["Q2"];
      $q3 = $data["Q3"]; $q4 = $data["Q4"];

      switch($sexo["genero"]){
      case 'M':
        if($a >= 0 and $a <= 5) $PA = 1;
        if($a == 6) $PA = 2;
        if($a >= 7 and $a <= 8) $PA = 3;
        if($a == 9) $PA = 4;
        if($a >= 10 and $a <= 11) $PA = 5;
        if($a == 12) $PA = 6;
        if($a == 13) $PA = 7;
        if($a == 14) $PA = 8;
        if($a == 15) $PA = 9;
        if($a >= 16 and $a <= 20) $PA = 10;
        
        if($b >= 0 and $b <= 2) $PB = 1;
        if($b == 3) $PB = 2;
        if($b == 4) $PB = 3;
        if($b == 5) $PB = 4;
        if($b == 6) $PB = 5;
        if($b == 7) $PB = 6;
        if($b == 8) $PB = 7;
        if($b == 9) $PB = 8;
        if($b == 10) $PB = 9;
        if($b >= 11 and $b <= 13) $PB = 10;
        
        if($c >= 0 and $c <= 12) $PC = 1;
        if($c == 13) $PC = 2;
        if($c == 14) $PC = 3;
        if($c >= 15 and $c <= 17) $PC = 4;
        if($c >= 18 and $c <= 19) $PC = 5;
        if($c == 20) $PC = 6;
        if($c >= 21 and $c <= 22) $PC = 7;
        if($c == 23) $PC = 8;
        if($c >= 24 and $c <= 25) $PC = 9;
        if($c == 26) $PC = 10;
        
        if($e >= 0 and $e <= 4) $PE = 1;
        if($e == 5) $PE = 2;
        if($e == 6) $PE = 3;
        if($e >= 7 and $e <= 8) $PE = 4;
        if($e >= 9 and $e <= 10) $PE = 5;
        if($e >= 11 and $e <= 12) $PE = 6;
        if($e >= 13 and $e <= 14) $PE = 7;
        if($e >= 15 and $e <= 16) $PE = 8;
        if($e == 17) $PE = 9;
        if($e >= 18 and $e <= 26) $PE = 10;
        
        if($f >= 0 and $f <= 3) $PF = 1;
        if($f >= 4 and $f <= 6) $PF = 2;
        if($f >= 7 and $f <= 8) $PF = 3;
        if($f >= 9 and $f <= 10) $PF = 4;
        if($f >= 11 and $f <= 12) $PF = 5;
        if($f >= 13 and $f <= 14) $PF = 6;
        if($f >= 15 and $f <= 16) $PF = 7;
        if($f == 17) $PF = 8;
        if($f >= 18 and $f <= 21) $PF = 9;
        if($f >= 22 and $f <= 26) $PF = 10;
        
        if($g >= 0 and $g <= 7) $PG = 1;
        if($g == 8)  $PG = 2;
        if($g == 9)  $PG = 3;
        if($g >= 10 and $g <= 11) $PG = 4;
        if($g >= 12 and $g <= 13) $PG = 5;
        if($g >= 14 and $g <= 15) $PG = 6;
        if($g == 16)  $PG = 7;
        if($g == 17)  $PG = 8;
        if($g == 18)  $PG = 9;
        if($g >= 19 and $g <= 20) $PG = 10;
        
        if($h >= 0 and $h <= 5) $PH = 1;
        if($h >= 6 and $h <= 7) $PH = 2;
        if($h >= 8 and $h <= 9) $PH = 3;
        if($h >= 10 and $h <= 12) $PH = 4;
        if($h >= 13 and $h <= 14) $PH = 5;
        if($h >= 15 and $h <= 16) $PH = 6;
        if($h >= 17 and $h <= 20) $PH = 7;
        if($h >= 21 and $h <= 23) $PH = 8;
        if($h == 24)  $PH = 9;
        if($h >= 25 and $h <= 26) $PH = 10;
        
        if($i >= 0 and $i <= 3) $PI = 1;
        if($i >= 4 and $i <= 5) $PI = 2;
        if($i == 6)  $PI = 3;
        if($i == 7)  $PI = 4;
        if($i >= 8 and $i <= 10) $PI = 5;
        if($i >= 11 and $i <= 12) $PI = 6;
        if($i >= 13 and $i <= 14) $PI = 7;
        if($i == 15)  $PI = 8;
        if($i == 16)  $PI = 9;
        if($i >= 17 and $i <= 20) $PI = 10;
        
        if($l >= 0 and $l <= 4) $PL = 1;
        if($l == 5)  $PL = 2;
        if($l == 6)  $PL = 3;
        if($l == 7)  $PL = 4;
        if($l == 8)  $PL = 5;
        if($l >= 9 and $l <= 10) $PL = 6;
        if($l == 11)  $PL = 7;
        if($l >= 12 and $l <= 13) $PL = 8;
        if($l == 14)  $PL = 9;
        if($l >= 15 and $l <= 20) $PL = 10;
        
        if($m >= 0 and $m <= 6) $PM = 1;
        if($m >= 7 and $m <= 8) $PM = 2;
        if($m == 9)  $PM = 3;
        if($m == 10)  $PM = 4;
        if($m >= 11 and $m <= 13) $PM = 5;
        if($m >= 14 and $m <= 15) $PM = 6;
        if($m == 16)  $PM = 7;
        if($m >= 17 and $m <= 18) $PM = 8;
        if($m >= 19 and $m <= 20) $PM = 9;
        if($m >= 21 and $m <= 26) $PM = 10;
        
        if($n >= 0 and $n <= 5) $PN = 1;
        if($n >= 6 and $n <= 7) $PN = 2;
        if($n == 8)  $PN = 3;
        if($n == 9)  $PN = 4;
        if($n == 10)  $PN = 5;
        if($n >= 11 and $n <= 12) $PN = 6;
        if($n == 13)  $PN = 7;
        if($n == 14)  $PN = 8;
        if($n == 15)  $PN = 9;
        if($n >= 16 and $n <= 20) $PN = 10;
        
        if($o >= 0 and $o <= 2) $PO = 1;
        if($o == 3)  $PO = 2;
        if($o >= 4 and $o <= 5) $PO = 3;
        if($o >= 6 and $o <= 8) $PO = 4;
        if($o >= 9 and $o <= 10) $PO = 5;
        if($o == 11)  $PO = 6;
        if($o >= 12 and $o <= 13) $PO = 7;
        if($o == 14)  $PO = 8;
        if($o >= 15 and $o <= 16 ) $PO = 9;
        if($o >= 17 and $o <= 26) $PO = 10;
        
        if($q1 >= 0 and $q1 <= 3) $PQ1 = 1;
        if($q1 >= 4 and $q1 <= 5) $PQ1 = 2;
        if($q1 >= 6 and $q1 <= 7) $PQ1 = 3;
        if($q1 >= 8 and $q1 <= 9) $PQ1 = 4;
        if($q1 >= 10 and $q1 <= 11) $PQ1 = 5;
        if($q1 == 12)  $PQ1 = 6;
        if($q1 >= 13 and $q1 <= 14) $PQ1 = 7;
        if($q1 == 15)  $PQ1 = 8;
        if($q1 == 16)  $PQ1 = 9;
        if($q1 >= 17 and $q1 <= 20) $PQ1 = 10;
        
        if($q2 >= 0 and $q2 <= 5) $PQ2 = 1;
        if($q2 == 6)  $PQ2 = 2;
        if($q2 >= 7 and $q2 <= 8) $PQ2 = 3;
        if($q2 == 9)  $PQ2 = 4;
        if($q2 >= 10 and $q2 <= 11) $PQ2 = 5;
        if($q2 == 12) $PQ2 = 6;
        if($q2 >= 13 and $q2 <= 14) $PQ2 = 7;
        if($q2 >= 15 and $q2 <= 16) $PQ2 = 8;
        if($q2 == 17)  $PQ2 = 9;
        if($q2 >= 18 and $q2 <= 20) $PQ2 = 10;
        

        if($q3 >= 0 and $q3 <= 4) $PQ3 = 1;
        if($q3 >= 5 and $q3 <= 6) $PQ3 = 2;
        if($q3 >= 7 and $q3 <= 9) $PQ3 = 3;
        if($q3 >= 10 and $q3 <= 11) $PQ3 = 4;
        if($q3 == 12)  $PQ3 = 5;
        if($q3 >= 13 and $q3 <= 15) $PQ3 = 6;
        if($q3 == 16)  $PQ3 = 7;
        if($q3 == 17)  $PQ3 = 8;
        if($q3 == 18)  $PQ3 = 9;
        if($q3 >= 19 and $q3 <= 20) $PQ3 = 10;
        
        if($q4 >= 0 and $q4 <= 2) $PQ4 = 1;
        if($q4 == 3)  $PQ4 = 2;
        if($q4 == 4)  $PQ4 = 3;
        if($q4 >= 5 and $q4 <= 6) $PQ4 = 4;
        if($q4 >= 7 and $q4 <= 8) $PQ4 = 5;
        if($q4 >= 9 and $q4 <= 10) $PQ4 = 6;
        if($q4 >= 11 and $q4 <= 12) $PQ4 = 7;
        if($q4 >= 13 and $q4 <= 15) $PQ4 = 8;
        if($q4 >= 16 and $q4 <= 17) $PQ4 = 9;
        if($q4 >= 18 and $q4 <= 26) $PQ4 = 10;
        
        break;
      case 'H':
        if($a >= 0 and $a <= 3) $PA = 1;
        if($a >= 4 and $a <= 5) $PA = 2;
        if($a >= 6 and $a <= 7) $PA = 3;
        if($a == 8) $PA = 4;
        if($a >= 9 and $a <= 10) $PA = 5;
        if($a >= 11 and $a <= 12) $PA = 6;
        if($a == 13) $PA = 7;
        if($a >= 14 and $a <= 15) $PA = 8;
        if($a >= 16 and $a <= 17) $PA = 9;
        if($a >= 18 and $a <= 20) $PA = 10;
        
        if($b >= 0 and $b <= 1) $PB = 1;
        if($b == 2) $PB = 2;
        if($b >= 3 and $b <= 4) $PB = 3;
        if($b == 5) $PB = 4;
        if($b == 6) $PB = 5;
        if($b == 7) $PB = 6;
        if($b == 8) $PB = 7;
        if($b == 9) $PB = 9;
        if($b >= 10 and $b <= 13) $PB = 10;
        
        if($c >= 0 and $c <= 9) $PC = 1;
        if($c >= 10 and $c <= 12) $PC = 2;
        if($c >= 13 and $c <= 14) $PC = 3;
        if($c >= 15 and $c <= 17) $PC = 4;
        if($c >= 18 and $c <= 19) $PC = 5;
        if($c >= 20 and $c <= 21) $PC = 6;
        if($c >= 22 and $c <= 23) $PC = 7;
        if($c == 24) $PC = 8;
        if($c == 25) $PC = 9;
        if($c == 26) $PC = 10;
        
        if($e >= 0 and $e <= 5) $PE = 1;
        if($e == 6) $PE = 2;
        if($e == 7) $PE = 3;
        if($e >= 8 and $e <= 9) $PE = 4;
        if($e >= 10 and $e <= 11) $PE = 5;
        if($e >= 12 and $e <= 13) $PE = 6;
        if($e >= 14 and $e <= 15) $PE = 7;
        if($e >= 16 and $e <= 18) $PE = 8;
        if($e >= 19 and $e <= 20) $PE = 9;
        if($e >= 21 and $e <= 26) $PE = 10;
        
        if($f >= 0 and $f <= 4) $PF = 1;
        if($f >= 5 and $f <= 6) $PF = 2;
        if($f >= 7 and $f <= 8) $PF = 3;
        if($f >= 9 and $f <= 10) $PF = 4;
        if($f >= 11 and $f <= 13) $PF = 5;
        if($f >= 14 and $f <= 15) $PF = 6;
        if($f >= 16 and $f <= 17) $PF = 7;
        if($f >= 18 and $f <= 20) $PF = 8;
        if($f >= 21 and $f <= 22) $PF = 9;
        if($f >= 23 and $f <= 26) $PF = 10;
        
        if($g >= 0 and $g <= 8) $PG = 1;
        if($g == 9)  $PG = 2;
        if($g >= 10 and $g <= 11) $PG = 3;
        if($g == 12)  $PG = 4;
        if($g >= 13 and $g <= 14) $PG = 5;
        if($g >= 15 and $g <= 16) $PG = 6;
        if($g == 17)  $PG = 7;
        if($g == 18)  $PG = 8;
        if($g == 19)  $PG = 9;
        if($g == 20)  $PG = 10;
        
        if($h >= 0 and $h <= 6) $PH = 1;
        if($h == 7)  $PH = 2;
        if($h >= 8 and $h <= 10) $PH = 3;
        if($h >= 11 and $h <= 13) $PH = 4;
        if($h >= 14 and $h <= 17) $PH = 5;
        if($h >= 18 and $h <= 19) $PH = 6;
        if($h >= 20 and $h <= 22) $PH = 7;
        if($h >= 23 and $h <= 24) $PH = 8;
        if($h == 25)  $PH = 9;
        if($h == 26)  $PH = 10;
        
        if($i >= 0 and $i <= 1) $PI = 1;
        if($i >= 2 and $i <= 3) $PI = 2;
        if($i == 4)  $PI = 3;
        if($i == 5)  $PI = 4;
        if($i >= 6 and $i <= 7) $PI = 5;
        if($i >= 8 and $i <= 9) $PI = 6;
        if($i == 10)  $PI = 7;
        if($i >= 11 and $i <= 12) $PI = 8;
        if($i == 13)  $PI = 9;
        if($i >= 14 and $i <= 20) $PI = 10;
        
        if($l >= 0 and $l <= 2) $PL = 1;
        if($l == 3)  $PL = 2;
        if($l >= 4 and $l <= 5) $PL = 3;
        if($l >= 6 and $l <= 7) $PL = 4;
        if($l >= 8 and $l <= 9) $PL = 5;
        if($l == 10)  $PL = 6;
          if($l >= 11 and $l <= 12) $PL = 7;
        if($l >= 13 and $l <= 14) $PL = 8;
        if($l == 15)  $PL = 9;
        if($l >= 16 and $l <= 20) $PL = 10;
        
        if($m >= 0 and $m <= 6) $PM = 1;
        if($m == 7)  $PM = 2;
        if($m >= 8 and $m <= 9) $PM = 3;
        if($m == 10)  $PM = 4;
        if($m >= 11 and $m <= 12) $PM = 5;
        if($m >= 13 and $m <= 14) $PM = 6;
        if($m >= 15 and $m <= 16) $PM = 7;
        if($m == 17) $PM = 8;
        if($m == 18) $PM = 9;
        if($m >= 19 and $m <= 26) $PM = 10;
        
        if($n >= 0 and $n <= 5) $PN = 1;
        if($n == 6)  $PN = 2;
        if($n >= 7 and $n <= 8) $PN = 3;
        if($n >= 9 and $n <= 10) $PN = 4;
        if($n == 11)  $PN = 5;
        if($n == 12)  $PN = 6;
        if($n >= 13 and $n <= 14) $PN = 7;
        if($n == 15)  $PN = 8;
        if($n >= 16 and $n <= 17) $PN = 9;
        if($n >= 18 and $n <= 20) $PN = 10;
        
        if($o >= 0 and $o <= 3) $PO = 1;
        if($o >= 4 and $o <= 5) $PO = 2;
        if($o == 6)  $PO = 3;
        if($o == 7)  $PO = 4;
        if($o >= 8 and $o <= 10) $PO = 5;
        if($o == 11)  $PO = 6;
        if($o >= 12 and $o <= 14) $PO = 7;
        if($o >= 15 and $o <= 16) $PO = 8;
        if($o >= 17 and $o <= 19) $PO = 9;
        if($o >= 20 and $o <= 26 ) $PO = 10;
        
        if($q1 >= 0 and $q1 <= 4) $PQ1 = 1;
        if($q1 >= 5 and $q1 <= 6) $PQ1 = 2;
        if($q1 == 7)  $PQ1 = 3;
        if($q1 >= 8 and $q1 <= 9) $PQ1 = 4;
        if($q1 == 10)  $PQ1 = 5;
        if($q1 >= 11 and $q1 <= 12) $PQ1 = 6;
        if($q1 >= 13 and $q1 <= 14) $PQ1 = 7;
        if($q1 == 15)  $PQ1 = 8;
        if($q1 == 16)  $PQ1 = 9;
        if($q1 >= 17 and $q1 <= 20) $PQ1 = 10;
        
        if($q2 >= 0 and $q2 <= 3) $PQ2 = 1;
        if($q2 >= 4 and $q2 <= 5) $PQ2 = 2;
        if($q2 >= 6 and $q2 <= 7) $PQ2 = 3;
        if($q2 == 8)  $PQ2 = 4;
        if($q2 >= 9 and $q2 <= 10) $PQ2 = 5;
        if($q2 >= 11 and $q2 <= 12) $PQ2 = 6;
        if($q2 == 13)  $PQ2 = 7;
        if($q2 >= 14 and $q2 <= 15) $PQ2 = 8;
        if($q2 >= 16 and $q2 <= 17) $PQ2 = 9;
        if($q2 >= 18 and $q2 <= 20) $PQ2 = 10;
          
        if($q3 >= 0 and $q3 <= 5) $PQ3 = 1;
        if($q3 >= 6 and $q3 <= 8) $PQ3 = 2;
        if($q3 >= 9 and $q3 <= 10) $PQ3 = 3;
        if($q3 >= 11 and $q3 <= 12) $PQ3 = 4;
        if($q3 == 13)  $PQ3 = 5;
        if($q3 >= 14 and $q3 <= 15) $PQ3 = 6;
        if($q3 == 16)  $PQ3 = 7;
        if($q3 == 17)  $PQ3 = 8;
        if($q3 == 18)  $PQ3 = 9;
        if($q3 >= 19 and $q3 <= 20) $PQ3 = 10;
        
        if($q4 >= 0 and $q4 <= 1) $PQ4 = 1;
        if($q4 == 2)  $PQ4 = 2;
        if($q4 == 3)  $PQ4 = 3;
        if($q4 >= 4 and $q4 <= 5) $PQ4 = 4;
        if($q4 >= 6 and $q4 <= 7) $PQ4 = 5;
        if($q4 >= 8 and $q4 <= 9) $PQ4 = 6;
        if($q4 >= 10 and $q4 <= 11) $PQ4 = 7;
        if($q4 >= 12 and $q4 <= 13) $PQ4 = 8;
        if($q4 >= 14 and $q4 <= 16) $PQ4 = 9;
        if($q4 >= 17 and $q4 <= 26) $PQ4 = 10;
          
        break;  
      default:
        break;
      }
 
    $resultado = $PA.",". $PB.",". $PC.",". $PE.",". $PF.",". $PG.",". $PH.",". $PI.",". $PL.",". $PM.",". $PN.",". $PO.",". $PQ1.",". $PQ2.",". $PQ3.",". $PQ4;
    }
  }

    return $resultado;
     
  }                    

  function register_us_app1($id_user){
    include '../php/db/conexionDB.php';
	
    // verificar si no hay registros (del alumno) exitentes de la app1 en la db.
    /**
     * Zona Horaria..
     */
      date_default_timezone_set('America/Merida');

    //$verificar = $con -> prepare("SELECT us_id FROM tbl_serie1_app1 WHERE us_id = '".$id_user."';"); 
    //$verificar -> execute();
    //$contarExis = $verificar -> rowCount();
	
	$verificar = $con->prepare("SELECT us_id FROM tbl_serie1_app1 WHERE us_id = :id_user");
	$verificar->bindParam(':id_user', $id_user);
	$verificar->execute();
	$contarExis = $verificar->rowCount();

    if ($contarExis >= 1) {
       ## echo "not";
    } else {
        for ($i=1; $i <=10 ; $i++) { 
            $insertion = $con -> prepare("INSERT INTO tbl_serie".$i."_app1 SET us_id = '".$id_user."';");
            $insertion -> execute();
        }
        $hoy = date("Y-m-d H:i:s");
        $register = $con->prepare("INSERT INTO tbl_app1_res_us SET us_id = '".$id_user."', app1_fec_inicio = '".$hoy."' ");
        $register->execute();
    }
  }

  function NivelCI($resultadoAlum, $evento){
    // Obtener la edad mental del alumno con respecto al puntuaje obtenido del las 10 series de la prueba termal merril

     $resultadoEM = 0;
    if ($resultadoAlum<=44) { $resultadoEM = 132; }
    if ($resultadoAlum==45) { $resultadoEM = 133; }
    if ($resultadoAlum==46) { $resultadoEM = 134; }
    if ($resultadoAlum==47) { $resultadoEM = 135; }
    if ($resultadoAlum>=48 && $resultadoAlum<=49) { $resultadoEM = 136; }
    if ($resultadoAlum==50) { $resultadoEM = 137; }
    if ($resultadoAlum==51) { $resultadoEM = 138; }
    if ($resultadoAlum==52) { $resultadoEM = 139; }
    if ($resultadoAlum==53) { $resultadoEM = 140; }
    if ($resultadoAlum==54) { $resultadoEM = 141; }
    if ($resultadoAlum==55) { $resultadoEM = 142; }
    if ($resultadoAlum==56) { $resultadoEM = 143; }
    if ($resultadoAlum==57) { $resultadoEM = 144; }
    if ($resultadoAlum==58) { $resultadoEM = 145; }
    if ($resultadoAlum==59) { $resultadoEM = 146; }
    if ($resultadoAlum>=60 && $resultadoAlum<=61) { $resultadoEM = 147; }
    if ($resultadoAlum==62) { $resultadoEM = 148; }
    if ($resultadoAlum==63) { $resultadoEM = 149; }
    if ($resultadoAlum==64) { $resultadoEM = 150; }
    if ($resultadoAlum==65) { $resultadoEM = 151; }
    if ($resultadoAlum==66) { $resultadoEM = 152; }
    if ($resultadoAlum==67) { $resultadoEM = 153; }
    if ($resultadoAlum>=68 && $resultadoAlum<=69) { $resultadoEM = 154; }
    if ($resultadoAlum==70) { $resultadoEM = 155; }
    if ($resultadoAlum==71) { $resultadoEM = 156; }
    if ($resultadoAlum==72) { $resultadoEM = 157; }
    if ($resultadoAlum>=73 && $resultadoAlum<=74) { $resultadoEM = 158; }
    if ($resultadoAlum==75) { $resultadoEM = 159; }
    if ($resultadoAlum==76) { $resultadoEM = 160; }
    if ($resultadoAlum>=77 && $resultadoAlum<=78) { $resultadoEM = 161; }
    if ($resultadoAlum>=79 && $resultadoAlum<=80) { $resultadoEM = 162; }
    if ($resultadoAlum==81) { $resultadoEM = 163; }
    if ($resultadoAlum==82) { $resultadoEM = 164; }
    if ($resultadoAlum==83) { $resultadoEM = 165; }
    if ($resultadoAlum>=84 && $resultadoAlum<=85) { $resultadoEM = 166; }
    if ($resultadoAlum==86) { $resultadoEM = 167; }
    if ($resultadoAlum>=87 && $resultadoAlum<=88) { $resultadoEM = 168; }
    if ($resultadoAlum>=89 && $resultadoAlum<=90) { $resultadoEM = 169; }
    if ($resultadoAlum==91) { $resultadoEM = 170; }
    if ($resultadoAlum>=92 && $resultadoAlum<=93) { $resultadoEM = 171; }
    if ($resultadoAlum==94) { $resultadoEM = 172; }
    if ($resultadoAlum>=95 && $resultadoAlum<=96) { $resultadoEM = 173; }
    if ($resultadoAlum==97) { $resultadoEM = 174; }
    if ($resultadoAlum>=98 && $resultadoAlum<=99) { $resultadoEM = 175; }
    if ($resultadoAlum==100) { $resultadoEM = 176; }
    if ($resultadoAlum>=101 && $resultadoAlum<=102) { $resultadoEM = 177; }
    if ($resultadoAlum==103) { $resultadoEM = 178; }
    if ($resultadoAlum==1040) { $resultadoEM = 179; }
    if ($resultadoAlum==105) { $resultadoEM = 180; }
    if ($resultadoAlum==106) { $resultadoEM = 181; }
    if ($resultadoAlum>=107 && $resultadoAlum<=108) { $resultadoEM = 182; }
    if ($resultadoAlum>=109 && $resultadoAlum<=110) { $resultadoEM = 183; }
    if ($resultadoAlum==111) { $resultadoEM = 184; }
    if ($resultadoAlum>=112 && $resultadoAlum<=113) { $resultadoEM = 185; }
    if ($resultadoAlum>=114 && $resultadoAlum<=115) { $resultadoEM = 186; }
    if ($resultadoAlum==116) { $resultadoEM = 187; }
    if ($resultadoAlum==117) { $resultadoEM = 188; }
    if ($resultadoAlum>=118 && $resultadoAlum<=119) { $resultadoEM = 189; }
    if ($resultadoAlum>=120 && $resultadoAlum<=121) { $resultadoEM = 190; }
    if ($resultadoAlum>=122 && $resultadoAlum<=123) { $resultadoEM = 191; }
    if ($resultadoAlum>=124 && $resultadoAlum<=125) { $resultadoEM = 192; }
    if ($resultadoAlum>=126 && $resultadoAlum<=127) { $resultadoEM = 193; }
    if ($resultadoAlum>=128 && $resultadoAlum<=129) { $resultadoEM = 194; }
    if ($resultadoAlum>=130 && $resultadoAlum<=131) { $resultadoEM = 195; }
    if ($resultadoAlum>=132 && $resultadoAlum<=133) { $resultadoEM = 196; }
    if ($resultadoAlum>=134 && $resultadoAlum<=135) { $resultadoEM = 197; }
    if ($resultadoAlum>=136 && $resultadoAlum<=137) { $resultadoEM = 198; }
    if ($resultadoAlum>=138 && $resultadoAlum<=139) { $resultadoEM = 199; }
    if ($resultadoAlum>=140 && $resultadoAlum<=141) { $resultadoEM = 200; }
    if ($resultadoAlum>=142 && $resultadoAlum<=143) { $resultadoEM = 201; }
    if ($resultadoAlum>=144 && $resultadoAlum<=145) { $resultadoEM = 202; }
    if ($resultadoAlum>=146 && $resultadoAlum<=147) { $resultadoEM = 203; }
    if ($resultadoAlum>=148 && $resultadoAlum<=149) { $resultadoEM = 204; }
    if ($resultadoAlum>=150 && $resultadoAlum<=151) { $resultadoEM = 205; }
    if ($resultadoAlum>=152 && $resultadoAlum<=153) { $resultadoEM = 206; }
    if ($resultadoAlum==154) { $resultadoEM = 207; }
    if ($resultadoAlum>=155 && $resultadoAlum<=156) { $resultadoEM = 208; }
    if ($resultadoAlum>=157 && $resultadoAlum<=158) { $resultadoEM = 209; }
    if ($resultadoAlum==159) { $resultadoEM = 210; }
    if ($resultadoAlum>=160 && $resultadoAlum<=161) { $resultadoEM = 211; }
    if ($resultadoAlum==162) { $resultadoEM = 212; }
    if ($resultadoAlum>=163 && $resultadoAlum<=164) { $resultadoEM = 213; }
    if ($resultadoAlum>=165 && $resultadoAlum<=166) { $resultadoEM = 214; }
    if ($resultadoAlum==167) { $resultadoEM = 215; }
    if ($resultadoAlum>=168 && $resultadoAlum<=169) { $resultadoEM = 216; }
    if ($resultadoAlum==170) { $resultadoEM = 217; }
    if ($resultadoAlum==171) { $resultadoEM = 218; }
    if ($resultadoAlum>=172 && $resultadoAlum<=173) { $resultadoEM = 219; }
    if ($resultadoAlum==174) { $resultadoEM = 220; }
    if ($resultadoAlum==175) { $resultadoEM = 221; }
    if ($resultadoAlum==176) { $resultadoEM = 222; }
    if ($resultadoAlum==177) { $resultadoEM = 223; }
    if ($resultadoAlum>=178 && $resultadoAlum<=179) { $resultadoEM = 224; }
    if ($resultadoAlum==180) { $resultadoEM = 225; }
    if ($resultadoAlum>=181 && $resultadoAlum<=182) { $resultadoEM = 226; }
    if ($resultadoAlum==183) { $resultadoEM = 227; }
    if ($resultadoAlum==184) { $resultadoEM = 228; }
    if ($resultadoAlum==185) { $resultadoEM = 229; }
    if ($resultadoAlum>=186 && $resultadoAlum<=187) { $resultadoEM = 230; }
    if ($resultadoAlum==188) { $resultadoEM = 231; }
    if ($resultadoAlum==189) { $resultadoEM = 232; }
    if ($resultadoAlum==190) { $resultadoEM = 233; }
    if ($resultadoAlum==191) { $resultadoEM = 234; }
    if ($resultadoAlum==192) { $resultadoEM = 235; }
    if ($resultadoAlum>=193 && $resultadoAlum<=194) { $resultadoEM = 236; }
    if ($resultadoAlum==195) { $resultadoEM = 237; }
    if ($resultadoAlum==196) { $resultadoEM = 238; }
    if ($resultadoAlum==197) { $resultadoEM = 239; }
    if ($resultadoAlum>=198 && $resultadoAlum<=199) { $resultadoEM = 240; }
    if ($resultadoAlum==200) { $resultadoEM = 241; }
    if ($resultadoAlum==201) { $resultadoEM = 242; }
    if ($resultadoAlum>=202 && $resultadoAlum<=203) { $resultadoEM = 243; }
    if ($resultadoAlum==204) { $resultadoEM = 244; }
    if ($resultadoAlum==205) { $resultadoEM = 245; }

      //////////////////////////  Aplicar la formula de calculo del CI
      /**********************************************************************
       * El resultado de la formula es para obtener el CI mediante tabla
       *
       *              Edad_mental
       *  CI =   ----------------------   X   100
       *          Edad Cronologica
       *
       **********************************************************************/
      $Edad_crono = 192; /// la edad cronologica es un 
      
      $Formula = (( $resultadoEM / $Edad_crono) * 100) ;

      $resFormula = round($Formula, 0, PHP_ROUND_HALF_UP); // Redondear el valor obtenido .5 + a entero 1; 
      //$resFormula = round($Formula, 0, PHP_ROUND_HALF_DOWN); // Redondear el valor obtenido .5 0 +  a entero - valor entero; 



    //Estos if generan que el puntaje total determine el coeficiente intelectual
  $ci=0;
  if($resFormula<=12){$ci=41;}
  if($resFormula==13){$ci=42;}
  if($resFormula>=14&&$resFormula<=15){$ci=43;}
  if($resFormula>=16&&$resFormula<=17){$ci=44;}
  if($resFormula==18){$ci=45;}
  if($resFormula>=19&&$resFormula<=20){$ci=46;}
  if($resFormula>=21&&$resFormula<=22){$ci=47;}
  if($resFormula==23){$ci=48;}
  if($resFormula>=24&&$resFormula<=25){$ci=49;}
  if($resFormula>=26&&$resFormula<=27){$ci=50;}
  if($resFormula==28){$ci=51;}
  if($resFormula>=29&&$resFormula<=30){$ci=52;}
  if($resFormula>=31&&$resFormula<=32){$ci=53;}
  if($resFormula==33){$ci=54;}
  if($resFormula>=34&&$resFormula<=35){$ci=55;}
  if($resFormula>=36&&$resFormula<=37){$ci=56;}
  if($resFormula==38){$ci=57;}
  if($resFormula>=39&&$resFormula<=40){$ci=58;}
  if($resFormula>=41&&$resFormula<=42){$ci=59;}
  if($resFormula==43){$ci=60;}
  if($resFormula>=44&&$resFormula<=45){$ci=61;}
  if($resFormula>=46&&$resFormula<=47){$ci=62;}
  if($resFormula>=48&&$resFormula<=49){$ci=63;}
  if($resFormula==50){$ci=64;}
  if($resFormula>=51&&$resFormula<=52){$ci=65;}
  if($resFormula>=53&&$resFormula<=54){$ci=66;}
  if($resFormula==55){$ci=67;}
  if($resFormula>=56&&$resFormula<=57){$ci=68;}
  if($resFormula>=58&&$resFormula<=59){$ci=69;}
  if($resFormula==60){$ci=70;}
  if($resFormula>=61&&$resFormula<=62){$ci=71;}
  if($resFormula>=63&&$resFormula<=64){$ci=72;}
  if($resFormula==65){$ci=73;}
  if($resFormula>=66&&$resFormula<=67){$ci=74;}
  if($resFormula>=68&&$resFormula<=69){$ci=75;}
  if($resFormula==70){$ci=76;}
  if($resFormula>=71&&$resFormula<=72){$ci=77;}
  if($resFormula>=73&&$resFormula<=74){$ci=78;}
  if($resFormula==75){$ci=79;}
  if($resFormula>=76&&$resFormula<=77){$ci=80;}
  if($resFormula>=78&&$resFormula<=79){$ci=81;}
  if($resFormula==80){$ci=82;}
  if($resFormula>=81&&$resFormula<=82){$ci=83;}
  if($resFormula>=83&&$resFormula<=84){$ci=84;}
  if($resFormula==85){$ci=85;}
  if($resFormula>=86&&$resFormula<=87){$ci=86;}
  if($resFormula>=88&&$resFormula<=89){$ci=87;}
  if($resFormula>=90&&$resFormula<=91){$ci=88;}
  if($resFormula==92){$ci=89;}
  if($resFormula>=93&&$resFormula<=94){$ci=90;}
  if($resFormula>=95&&$resFormula<=96){$ci=91;}
  if($resFormula==97){$ci=92;}
  if($resFormula>=98&&$resFormula<=99){$ci=93;}
  if($resFormula>=100&&$resFormula<=101){$ci=94;}
  if($resFormula==102){$ci=95;}
  if($resFormula>=103&&$resFormula<=104){$ci=96;}
  if($resFormula>=105&&$resFormula<=106){$ci=97;}
  if($resFormula==107){$ci=98;}
  if($resFormula>=108&&$resFormula<=109){$ci=99;}
  if($resFormula>=110&$resFormula<=111){$ci=100;}
  if($resFormula==112){$ci=101;}
  if($resFormula>=113&&$resFormula<=114){$ci=102;}
  if($resFormula>=115&&$resFormula<=116){$ci=103;}
  if($resFormula==117){$ci=104;}
  if($resFormula>=118&&$resFormula<=119){$ci=105;}
  if($resFormula>=120&&$resFormula<=121){$ci=106;}
  if($resFormula==122){$ci=107;}
  if($resFormula>=123&&$resFormula<=124){$ci=108;}
  if($resFormula>=125&&$resFormula<=126){$ci=109;}
  if($resFormula>=127&&$resFormula<=128){$ci=110;}
  if($resFormula==129){$ci=111;}
  if($resFormula>=130){$ci=112;}


  //Estos if generan que el puntaje total determine el nivel intelectual
  $nivel="";
  if($ci<=50){$nivel="DEFICIENTE";}
  if($ci>=51&&$ci<=61){$nivel="INFERIOR";}
  if($ci>=62&&$ci<=72){$nivel="TERMINO MEDIO BAJO";}
  if($ci>=73&&$ci<=83){$nivel="TERMINO MEDIO";}
  if($ci>=84&&$ci<=93){$nivel="TERMINO MEDIO ALTO";}
  if($ci>=94&&$ci<=104){$nivel="SUPERIOR";}
  if($ci>=105){$nivel="EXCELENTE";}


  if ($evento == 'Mental'){
    return  $resFormula;

  } else if ($evento == 'Nivel'){
    return $nivel;

  }else if ($evento == 'CI'){
    return $ci;

  }
  
  
  }

////////////////////ADMIND APP1///////////////////////

  function genero($sexo){
            $verificar = $sexo;
            if ($verificar == 'H' ){$icon ='fa-male'; $title = 'Hombre'; $color="white";}
            else {$icon ='fa-female'; $title = 'Mujer'; $color="white";}

            return '<span class="badge bg-'.$color.' pull-left"><i class=" fa '.$icon.'"></i></span> &nbsp;'.$title;
            }

function serie($id_us, $nserie){
 include '../../php/db/conexionDB.php';

$consulta = $con->prepare("SELECT s".$nserie."_app1_res AS Resultado FROM tbl_serie".$nserie."_app1 WHERE us_id = '".$id_us."';");
$consulta->execute();

$res = $consulta->fetch();

return $res["Resultado"];
}

function rs_alumno($id_us, $nserie, $tPreg){

 include '../../php/db/conexionDB.php';

  $campos = array();
  $valores = array();
  $camposcorrectos=array();
  $valoresCorrectos = array();
  $tpreguntas = $tPreg;
  $serie = "s".$nserie."_app1_p";
  $tabla = "tbl_serie".$nserie."_app1";
  $val = 1;

  for ($i=0; $i <$tpreguntas ; $i++) { 
    ////////// respuestas correctas //////

    $correctas = $con->prepare("SELECT ".$serie.$val." AS Res".$val."  FROM ".$tabla." WHERE us_id = 1; ");
    $correctas ->execute();
    $camposcorrectos[$i] = $correctas -> fetch(); // Se almacenan los datos conforme al recorrido.. 

        $valoresCorrectos[$i] = $camposcorrectos[$i]["Res".$val];

        ///////// respondidas por el alumno /////

    $select = $con->prepare("SELECT ".$serie.$val." AS Res".$val."  FROM ".$tabla." WHERE us_id = ".$id_us."; ");
    $select ->execute();

    $campos[$i] = $select -> fetch(); // Se almacenan los datos conforme al recorrido.. 

        $valores[$i] = $campos[$i]["Res".$val];

        if ($valores[$i]!==$valoresCorrectos[$i])  {
          $etiqueta = "<span class='badge bg-red pull-left'>";
        }else{
          $etiqueta = "<span class='badge bg-green pull-left'>";
        }

        echo $etiqueta."P".$val.": ".strtoupper($valores[$i])." </span>"; 
    $val++;

  }


  
}

function preguntas_test_vocacional(){

  include "../php/db/conexionDB.php";

  $query  = $con -> prepare ("SELECT pg_txt_preg AS preguntas, pg_id AS id  FROM tbl_preguntas_app3");
  #$query  = $con -> prepare ("SELECT pg_txt_preg AS preguntas, pg_id AS id  FROM tbl_preguntas_app3 ORDER BY rand(preguntas);");
  #$query  = $con -> prepare ("SELECT pg_txt_preg AS preguntas, pg_id AS id  FROM tbl_preguntas_app3 ORDER BY id ASC;");
  $query -> execute();
  $contador = 1;
  while ($row = $query -> fetch()) {
    $npreg = $row["id"];
    $question = $row["preguntas"];
    ?>
    <div class="row">
      <hr>            
          <div class="col col-md-8 col-sm-12 col-xs-12 text-muted well well-sm no-shadow">
          <b><?=$contador;?>.- <?=$question;?></b>
          </div>
          <div class="col col-md-1 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="radio" name="<?=$npreg;?>" value="1" /> SI
              </label>
          </div>
          <div class="col col-md-1 col-sm-12 col-xs-12">
              <label>
                  <input class="flat" type="radio" name="<?=$npreg;?>" value="0" /> NO
              </label>
          </div>
          <div class="col col-md-2 col-sm-12 col-xs-12">
              <span for="<?=$npreg?>" generated="true" class="error"></span>
          </div>
      </div>
    <?php
    #echo $row["id"]."-".utf8_encode($row["preguntas"])."<br>";
    $contador++;
  }
}


//////////////////////////// funtion respuesta_alumno() /////////////////////////////
// Enviar como parametros $id_us -> id del alumno,    /////////////////////////////
//              $id_car -> id de la carrera   /////////////////////////////
//              $r1 al $r10 -> repuestas    /////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////       
function respuesta_alum($id_us, $id_car, $r1,$r2,$r3,$r4,$r5,$r6,$r7,$r8,$r9,$r10){
  //include "../php/db/conexionDB.php";
  include '../db/conexionDB.php'; // incluir la conexion de la database

  $result = $r1+$r2+$r3+$r4+$r5+$r6+$r7+$r8+$r9+$r10; // suma de las rspuestas contestada por el alumno..

    // query para realizar la insercion el la tabla del alumno con respecto a las preguntas por carreras..
    $insert = $con->prepare("INSERT INTO tbl_res_pg_app3 
                          SET us_id = '".$id_us."',
                            car_id = '".$id_car."',
                            p1 ='".$r1."',
                            p2 ='".$r2."',
                            p3 ='".$r3."',
                            p4 ='".$r4."',
                            p5 ='".$r5."',
                            p6 ='".$r6."',
                            p7 ='".$r7."',
                            p8 ='".$r8."',
                            p9 ='".$r9."',
                            p10 ='".$r10."',
                            resultado = '".$result."' ;");
    $insert->execute(); 
}

////////////////////Function opcion_carrera_result ////////////////////////////////////
//  Funcion de la app3 muestra resultados del test de orientacion Vocacional        //
//                                          //
//////////////////////////////////////////////////////////////////////////////////////
  function opcion_carrera_result($dir,$id_us,$mostrar){
    // inclui la conexion a la base de datos
    //include "../db/conexionDB.php"; // original para alumnos
    include $dir."db/conexionDB.php";
    // query para seleccionar los resultados del alumno con respecto al  cuestionario contestado el cual fue almacenado en la base de datos
    $select = $con -> prepare("SELECT car_nombre AS carrera, car_sigla AS sigla, resultado AS resultadofinal 
                  FROM tbl_res_pg_app3
                  INNER JOIN tbl_usuarios ON tbl_res_pg_app3.us_id = tbl_usuarios.us_id
                  INNER JOIN tbl_carreras ON tbl_res_pg_app3.car_id = tbl_carreras.car_id
                  WHERE tbl_usuarios.us_id = '".$id_us."';");
    $select->execute();

    // Se declara las variables en arreglos las que almacenaran informacion recorida por medio del bucle while
    $Carrera = array(); // almacena el nombre de las carreras
    $respuestas = array(); // almacena el valor obtenido o puntos a favor de cada carrera
    $contador = 1;  // Esta variable solo sirve como contador de filas para enumerar en la tabla a mostrar.
    
    if ($mostrar == 'table') { 
    // si se pasa como parametro la frase table-> se lleva a cabo el recorrido del bucle while para llevar a cabo el muestreo del la tabla con los datos correspondientes
      
      while ($row = $select->fetch()) {
        
        // difinicion de la variable el cual optiene el valor obtienido en cada carrera, para que esto? para validar los niveles que la tabla mostrará 
        $resultante = $row["resultadofinal"]; 
        // para la validacio de los niveles se ha condicionado el valor obtendo con el valor para cada nivel.
        if ($resultante>1 && $resultante<=4){
          $nivel = "<span class='badge bg-red pull-left'>BAJO&nbsp;</span>";
        }else if ($resultante>4 && $resultante<=7){
          $nivel = "<span class='badge bg-orange pull-left'>MEDIO</span>";
        }else if ($resultante>7 && $resultante<=10){
          $nivel = "<span class='badge bg-green pull-left'>&nbsp;ALTO&nbsp;</span>";
        }
        // Se arrojan las filas que se an localizado por medio del bucle.
        ?>
          <tr>
            <td><?=$contador;?></td>
            <td><?=$row["carrera"];?></td>
            <td><?=$row["resultadofinal"];?></td>
            <td><?=$nivel;?></td>
          </tr>
        <?php
        // Estas variables que van recorriendo por medio del bucle almacenan cada uno de los valores obtenidos y las almacenan en las primera variables que se declararon en primera instancia.
        $Carrera[] = $row["carrera"];
        $respuestas[] = $row["resultadofinal"];
        // Contador ++ 
        $contador++;
      }
    }else{  
      // Este es el caso contrario de pasar el parametro con alguna frase diferente de "table" entonces ocurre lo que acontinuacion

      // Se lleva a cabo el recorrido del bucle para almacenar los datos en las variables de arreglo declaradas al principio de la funcion. 
      while ($row = $select->fetch()) {
        //$Carrera[] = $row["carrera"];
        $respuestas[] = $row["resultadofinal"];
        }

        // Esta variable obtiene el valor maximo obtenido de la lista de valores de cada carrera, se declara la funcion max() ydentro de ella la variable de arreglo $respuestas la cual como antes mencione almacena tadas los valores obtenidos de la carreras.
      $maximo_val = max($respuestas);

      // Ahora es necesario hacer una comparacion desde la base de datos con repecto a la carrera incrita por el alumno y al maximo valor de las lista de valores de las carreras  obtenidas mediante le cuestionario para asi despues poder definir si es la carrera adquirida es la correcta.

      $selection = $con -> prepare("SELECT resultado AS Res, tbl_carreras.car_id AS Carrera, car_nombre AS NombreCarrera, car_sigla AS SiglaCarrera
                    FROM tbl_res_pg_app3
                    INNER JOIN tbl_carreras ON tbl_res_pg_app3.car_id = tbl_carreras.car_id
                    WHERE us_id = '".$id_us."'
                    AND resultado = '".$maximo_val."';");
      $selection -> execute();
      // Se declara  variable para contar las filas arrojadas por medio de la consulta.  
      $cuentafilas = $selection->rowCount();
      // Solo es para pluralizar los textos si lo requiere.
      if ($cuentafilas>=2) {
        $txt = "Tus carreras mas apegadas son: ";
      }else{
        $txt = "Tu carrera mas apegada es: ";
      }
      // query sql para obtener la carrera que le alumno ha solicitado o adquirido
      $carAlum = $con->prepare("SELECT car_id AS Carrera FROM tbl_usuarios WHERE us_id = '".$id_us."';");
      $carAlum->execute();

      $carrera_alumno = $carAlum->fetch();

      $mensageMostrar= array();
      ?>
      <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th colspan="3">Tabla 2.0 (Tu Perfil  está orientado a las siguientes carreras). <small>Segun tus respuestas</small></th>
            </tr>
            <tr>
              <th>#</th>
              <th>Carrera</th>
              <th>Puntuación</th>
            </tr>
          </thead>
          <tbody>
      <?php
      $contar=1;
      while ($filas = $selection->fetch()) {
        if($carrera_alumno["Carrera"] !== $filas["Carrera"]){
          $mensageMostrar[] = "Por lo tanto el TEST de Orientación Vocacional ITSE considera que <b>NO</b> cuentas con el perfil adecuado para estudiar la carrera que has elegido. <br> Verifica la tabla 2.0 donde se muestra la o las carreras que son de acuerdo a tu perfil, con respecto a tus respuestas registras.<br><br>";
        }else{
          $mensageMostrar[] = "Por lo tanto el TEST de Orientación Vocacional ITSE considera que <b>SI</b> cuentas con el perfil adecuado para estudiar la carrera que has elegido para tu preparación profesional. <br> Verifica la tabla 2.0 donde se muestra la o las carreras que son de acuerdo a tu perfil, con respecto a tus respuestas registras.<br><br>";
        }

        $style_p = ($carrera_alumno["Carrera"] == $filas["Carrera"]) ?  $style = "<span class='badge bg-blue pull-left'>" : $style = "<span>" ;
        ?>
        
            <tr >
              <td><?=$contar;?></td>
              <td><?=$style_p.$filas["NombreCarrera"]?></span></td>
              <td><?=$filas["Res"]?></td>
            </tr>
          
        <?php
        $contar++;
      }
      ?>
          </tbody>
      </table>
      <br>
      <blockquote>
        <p>
      <?php
      echo $mensageMostrar[0];
      ?>
        </p>
      </blockquote>
      <?php
    }
  }

//////////////////////////// CLASE v_preg_res  /////////////////////////////////////
// Contenido: 2 funciones    
//            function respuesta ();
//            function preguntas_carreras();  
//             
////////////////////////////////////////////////////////////////////////////////////

  class v_preg_res {

  public static function respuesta($us_id,$campo,$car_id)  // recibe el parametro id del alumno el campo de la tabla en la base de datos y el id de la carrera
  {
    include '../../php/db/conexionDB.php'; // iniciar la conexion por medio de la inclusión 
    // Consulta de los campos de la tabla correspondiente en la base de datos
    $Res = $con -> prepare("SELECT p".$campo." AS Rs
                    FROM tbl_res_pg_app3 
                    WHERE us_id = '".$us_id."' 
                    AND car_id = '".$car_id."';");
    $Res -> execute();  // ejecucion del Query

    $respuesta  = $Res -> fetch(); // Fetchamos la fila con respacto a la consulta

    $resultado =  $respuesta["Rs"]; // definimos la variable para condicionar

    if ($resultado==1) { 
    // si en la tabla de la base de datos exite un valor true o 1 entonces es SI como respuesta para inprimir X en el campo SI de la tabla de muestra resultados.

      echo "<td>X</td>";
      echo "<td> </td>";

    }elseif ($resultado==0) {
      // si en la tabla de la base de datos exite un valor false o 0 entonces es NO como respuesta para inprimir X en el campo NO de la tabla de muestra resultados.
      
     echo "<td> </td>";
     echo "<td>X</td>";
      
    }


  }

  public static function preguntas_carreras($car_id,$id_usuario)
  {
    include '../../php/db/conexionDB.php';
    $id = $id_usuario;
    $preguntas = $con -> prepare("SELECT car_id AS id_car, pg_txt_preg  AS preg
                    FROM tbl_preguntas_app3 
                    WHERE car_id = '".$car_id."' 
                    ORDER BY pg_id ASC");
    $preguntas -> execute();

    $car = $con -> prepare("SELECT car_nombre AS Carrera, car_sigla AS Sigla
                  FROM tbl_carreras
                  WHERE car_id = '".$car_id."';");
    $car -> execute();

    $nombreCarrera = $car -> fetch();


    ?>
    <table class="table table-striped table-bordered">
      <head>
        <tr>
          <th colspan="4"><span class="fa fa-graduation-cap"></span> <?=$nombreCarrera["Carrera"];?>&nbsp;&nbsp;&nbsp;<small><?=$nombreCarrera["Sigla"];?></small></th>
        </tr>
        <tr>
          <th width="5%">#</th>
          <th width="85%">PREGUNTA</th>
          <th width="5%">SI</th>
          <th width="5%">NO</th>
        </tr>
      </head>
      <tbody>
        <?php
        $contador = 1;
        while ($filas_preg = $preguntas -> fetch()){
          ?>
          <tr>
            <td><?=$contador;?></td>
            <td><?=$filas_preg["preg"];?></td>
            <?=v_preg_res::respuesta($id,$contador,$filas_preg["id_car"]);?>
          </tr>
          <?php
          $contador++;
        }
        ?>
      </tbody>
    </table>
    <?php
  }
}



?>