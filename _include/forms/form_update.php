            <?php
            if (isset($_GET["us"]) && $_GET["us"] == $_GET["us"]) {
              
              include '../php/DB/conexionDB.php';

              $query = $con -> prepare ("SELECT tbl_usuarios.us_id AS ID, 
                                                tbl_usuarios.us_nombre AS Nombre, 
                                                tbl_usuarios.us_genero AS Sexo,
                                                tbl_usuarios.us_alias AS Usuario,
                                                tbl_usuarios.us_status AS Estado,
                                                tbl_roles.rol_nombre AS Rol,
                                                tbl_roles.rol_id AS IDRol 
                                          FROM tbl_usuarios 
                                          INNER JOIN tbl_roles ON tbl_usuarios.rol_id = tbl_roles.rol_id
                                          AND tbl_usuarios.us_id = '".$_GET["us"]."';");
              $query -> execute();

              $row = $query -> fetch();

              function checked($valor , $input){
                if ($valor == $input) {
                  $check = "checked";
                  return $check;
                }
              }

                function selected($rol , $input){
                if ($rol == $input) {
                  $select = "selected";
                  return $select;
                }
              }

              /*function status($stado , $input){
                if ($stado == $input) {
                  $check = "selected";
                  return $select;
                }
              }*/
              ?>

            <div id="msg_info" style="display:block;width:90%;margin:1%;float:center;position:fixed;z-index:10003 !important; "></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Formulario Editar: <?=$row["Nombre"];?></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form class="form-horizontal form-label-left input_mask" method="post" id="form_edit" name="form_edit">

                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                      <label>Nombre completo:</label>
                        <input type="hidden" name="us_id" value="<?=$row["ID"]?>">
                        <input class="form-control has-feedback-left" id="nombre" name="nombre" placeholder="Nombre" value="<?=$row["Nombre"]?>" type="text" onkeyup="javascript:this.value=this.value.toUpperCase();">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <label>Sexo:</label>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <label>
                            <input type="radio" class="flat" id="sexo" value="H" name="sexo" <?=checked($row["Sexo"] , "H")?> > Hombre
                          </label>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <label>
                            <input type="radio" class="flat" id="sexo" value="M" name="sexo" <?=checked($row["Sexo"] , "M")?> > Mujer
                          </label>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                      <label>Usuario (Alias):</label>
                        <input class="form-control has-feedback-left" id="usuario" name="usuario" placeholder="Nombre de usuario" value="<?=$row["Usuario"]?>" type="text" onkeyup="javascript:this.value=this.value.toUpperCase();">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="form-group">
                        <label class="col-md-12 col-sm-12 col-xs-12">Tipo de usuario:</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <select name="rol" id="rol" class="form-control">
                            <option value="">Seleccione un tipo de usuario</option>
                            <option value="1" <?=selected($row["IDRol"] , 1)?> >ADMINISTRADOR</option>
                            <option value="2" <?=selected($row["IDRol"] , 2)?> >INVITADO</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <label>Estado:</label>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <label>
                            <input type="radio" class="flat" id="estado" value="1" name="estado" <?=checked($row["Estado"] , "1")?> > Activar
                          </label>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <label>
                            <input type="radio" class="flat" id="estado" value="0" name="estado" <?=checked($row["Estado"] , "0")?> > Bloquear
                          </label>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-warning btn-md" data-dismiss="modal"><span class="fa fa-remove"></span> Cancelar</button>
                          <button type="submit" class="btn btn-success btn-md"><span class="fa fa-save"></span> Guardar Cambios</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            <script type="text/javascript">
            // EDITA UN USUARIO EN MODAL
              $(document).ready(function(){

                    var ap = "<label style='color: #ED1C22; font-size:12px;'><i class='fa fa-remove'></i>";
                     var ci = "</label>";
                     var txt = " Elige una opción. ";

                        $("#msg_info").hide();
                        $("#form_edit").validate({
                          event: "focus",
                            rules: {
                              nombre: "required",
                              rol: "required",
                              usuario: "required"
                            },
                            messages:{
                              nombre: ap+" Escribe el nombre completo del usuario"+ci,
                              rol: ap+" Elige el rol del usuario"+ci,
                              usuario: ap+" Escribe un nombre de usuario"+ci
                            },
                            debug: true,
                            errorElement: "span",
                            submitHandler: function(form){
                                            $("#msg_info").show();
                                            $("#msg_info").html("<div class='alert alert-warning-alt' role='alert' align='justify'><strong> <i class='fa fa-cog'></i> </strong> Procesando...</div>");  
                                            
                                            
                            $.ajax({
                              type: "post",
                                    url:"_include/php/actions/action_apps_root_crud.php?edit=usad",
                                    contentType: "application/x-www-form-urlencoded",
                                    processData: true,
                                    data: $("#form_edit").serialize(),
                                    success: function(msg){
                                      //console.log(msg);
                                        if (msg=='ok') {

                                        $("#msg_info").html("<div class='alert alert-success-alt' role='alert'><strong><i class='fa fa-check'></i> Exito! </strong> La información ha sido guardada exitosamente.</div>");
                                    setTimeout(function() {$("#msg_info").fadeOut('fast');
                                      $('#viewUpdateAdmin ').modal('hide');
                                      $('body').removeClass('modal-open');
                                      $('.modal-backdrop').remove();}, 1000);
                                    show_table();
                                    
                                      }
                                      if (msg=='false') {

                                        $("#msg_info").html("<div class='alert alert-danger-alt' role='alert'><strong><i class='fa fa-remove'></i> Error! </strong> Es imposible editar este usuario (Usuario ROOT).</div>");
                                    setTimeout(function() {$("#msg_info").fadeOut('fast');$('#viewUpdateAdmin ').modal('hide');}, 3000);
                                      }                           
                                    }                       
                                });
                            },
                        });
                });            
    
    </script>

            <script type="text/javascript">

    // iCheck
    $(document).ready(function() {
        if ($("input.flat")[0]) {
            $(document).ready(function () {
                $('input.flat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });
        }
    });
    // /iCheck
    </script>

            <?php
            }
            ?>