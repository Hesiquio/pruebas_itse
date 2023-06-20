<?php
include("../db/conexionDB.php");

if (isset($_GET["cv"]) && $_GET["cv"] == "show") {
	
	$query = $con -> prepare("SELECT rol_nombre ,rol_cv_txt FROM tbl_roles WHERE rol_id = 3 ;");
    $query->execute();

    $data_roles = $query -> fetch();

    ?>
    <table  id="tbl_clave" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>
            Tipo Registro
          </th>
          <th>
            Clave Registro
          </th>
          <th>
            Acción
          </th>
        </tr>
      </thead>
      <tbody>
        <tr align="center">
          <td>
            <?=$data_roles["rol_nombre"];?>
          </td>
          <td>
            <b><?=$data_roles["rol_cv_txt"];?></b>
          </td>
          <td>
            <a href="#" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#cv_reg"><i class="fa fa-exchange"></i> Cambiar</a>
          </td>
        </tr>
      </tbody>
    </table>
  <?php
}
if (isset($_GET["cv"]) && $_GET["cv"] == "edit") {
	
	$query = $con -> prepare("UPDATE tbl_roles  SET rol_cv_txt = '".$_POST["cv_registro_a"]."'  WHERE rol_id = 3 ;");
    $query->execute();

    echo "ok";
}
   
?>