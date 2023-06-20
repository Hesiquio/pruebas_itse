
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h1>Configuración & Registros</h1>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search"></div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><span class="fa fa-users"></span> Administradores <small>Lista de admnistradores de esta APP</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="btn btn-success active" data-toggle="modal" data-target="#NewAdmin"><i class="fa fa-plus" ></i> Agregar Nuevo</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <!--<button type="button" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> Agregar Nuevo</button>-->
                </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table id="tabla_administradores" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Nombre </th>
                                <th>Sexo</th>
                                <th>Usuario</th>
                                <th>Tipo Usuario</th>
                                <th>Estado</th>
                                <th>Acción</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><span class="fa fa-cog"></span> Configuración <small>Clave de Registro</small></h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class='alert alert-warning-alt' role='alert' align='justify'><strong> <i class='fa fa-key'></i> </strong>La clave de Regitro es una clave que se le proporciona al alumno como un requisito para el registro al sistema de Pruebas ITSE.</div>
                    <div id="tbl_acceso_registro">

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7 col-sm-12 col-xs-12">
            <!--<div class="x_panel">
              <div class="x_title">
                <h2><span class="fa fa-cog"></span> Configuración <small>Estado de los Alumnos</small></h2>

                <div class="clearfix"></div>
              </div>
              <div class="x_content">

              </div>
            </div>-->
        </div>

    </div>

</div>

<!-- Datatables -->

<!-- modal add admin -->
<div class="modal fade" id="NewAdmin">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header modal-header-success">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><span class="fa fa-edit"></span> <strong>Agregar</strong> </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Agregar nuevo usuario</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div id="msg_info2" style="display:block;width:90%;margin:1%;position:fixed;z-index:10003 !important; "></div>
                                <form class="form-horizontal form-label-left input_mask" method="post" id="form_add" name="form_add">

                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                        <label>Nombre completo:</label>
                                        <label for="nombre_new"></label><input class="form-control has-feedback-left" id="nombre_new" name="nombre_new" placeholder="Nombre" value="" type="text" onkeyup="this.value=this.value.toUpperCase();" autocomplete="off">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>Sexo:</label>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>
                                                <input type="radio" class="flat" id="sexo_new" value="H" name="sexo_new" checked> Hombre
                                            </label>
                                        </div>

                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>
                                                <input type="radio" class="flat" id="sexo_new" value="M" name="sexo_new" > Mujer
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                        <label>Usuario (Alias):</label>
                                        <label for="usuario_new"></label><input class="form-control has-feedback-left" id="usuario_new" maxlength="10" name="usuario_new" placeholder="Nombre de usuario" type="text" onkeyup="this.value=this.value.toUpperCase();" autocomplete="off">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                        <div class="input-group">
                                            <label for="pass_login"></label><input type="password" name="pass_login" id="pass_login" class="form-control" placeholder="Contraseña" maxlength="8" autocomplete="off">
                                            <span class="input-group-btn docs-tooltip" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Mostrar / Ocultar Contraseña">
                                  <button class="btn btn-success" type="button" id="change"><span id="changeclass" class="fa fa-eye"></span></button>
                                  </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12 col-sm-12 col-xs-12">Tipo de usuario:</label>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label for="rol_new"></label><select name="rol_new" id="rol_new" class="form-control">
                                                <option value="">Seleccione un tipo de usuario</option>
                                                <option value="1"> ADMINISTRADOR</option>
                                                <option value="2"> INVITADO</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>Estado:</label>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>
                                                <input type="radio" class="flat" id="estado_new" value="1" name="estado_new" checked> Activar
                                            </label>
                                        </div>

                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>
                                                <input type="radio" class="flat" id="estado_new" value="0" name="estado_new" > Bloquear
                                            </label>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                            <button type="button" class="btn btn-warning btn-md" data-dismiss="modal"><span class="fa fa-remove"></span> Cancelar</button>
                                            <button type="submit" class="btn btn-success btn-md"><span class="fa fa-check"></span> Guardar </button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin de modal -->

<!-- modal editar admin -->
<div class="modal fade" id="viewUpdateAdmin">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header modal-header-success">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><span class="fa fa-edit"></span> <strong>Editar</strong> </h4>
            </div>
            <div class="modal-body">


                <div id="contenedor_form">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin de modal -->
<!--////////////////- - -  Modal Eliminar contacto registrado - - -//////////////////-->
<div class="modal fade" id="deleteUsModal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header modal-header-danger">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">¿Eliminar?</h4>
            </div>
            <div class="modal-body">
                <div id="success" style="display:block;width:90%;margin:1%;position:fixed;z-index:10003 !important; "></div>
                <strong>Eliminar al Administrador: </strong>
                <div id="shown" align="center"></div>
                <hr>
                <form method="post" name="delete-form" id="delete-form">
                    <input type="hidden" name="id_us" id="id_us">
                    <div class="row">
                        <div class="col-md-6" align="center">
                            <input type="submit" class="btn btn-success"  value="SI" />
                        </div>
                        <div class="col-md-6" align="center">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- fin modal-->


<!--////////////////- - -  Modal Editar Clave de Registro de alumnos - - -//////////////////-->
<div class="modal fade" id="cv_reg" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header modal-header-warning">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center"><span class="fa fa-key"></span> Editar Clave</h4>
            </div>
            <div class="modal-body">
                <div id="success_cv" style="display:block;width:90%;margin:1%;position:fixed;z-index:10003 !important; "></div>
                <strong>Escriba la nueva clave de registro sin espacios. </strong>
                <hr>
                <form method="post" name="edit_cv" id="edit_cv">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="cv_registro_a"></label><input type="text" name="cv_registro_a" id="cv_registro_a" class="form-control" placeholder="Escriba nueva clave" onkeyup="this.value=this.value.toUpperCase();">
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="row">
                        <div class="col-md-6" align="center">
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="fa fa-remove"></span> Cancelar</button>
                        </div>
                        <div class="col-md-6" align="center">
                            <button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- fin modal-->


<script>
    $(document).ready(function(){
        show_table();
        mostrarTbl_clave();
    });

    function porcentaje_avance(valor){
        var porcentaje
        porcentaje = valor
        return porcentaje
    }

    function mostrarTbl_clave(){
        $.ajax({
            type: "POST",
            url: "_include/php/actions/table_cv_reg.php?cv=show",
        }).done(function( data ) {
            $('#tbl_acceso_registro').html(data);
        });
    }

    function show_table(){
        var tabla = $("#tabla_administradores").DataTable({

            "iDisplayLength": 5,

            "language": {
                //"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                "url": "assets/bootstrap/js/Spanish.json"
            },
            "destroy" : true,
            "ajax" : {
                "method" : "POST",
                "url" : "_include/php/actions/json_data_table.php?tbl=us",
            },
            "columns" : [
                {"data" : 'nombre'},
                {
                    "data" : "sexo",
                    "render" : function (sexo){
                        if (sexo === 'H' ){var icon ='fa-male'; var title = 'Hombre'; var color="green";}
                        else {var icon ='fa-female'; var title = 'Mujer'; var color="orange";}

                        return '<span class="badge bg-'+color+' pull-right"><i class=" fa '+icon+'"></i></span> '+title;
                    }
                },
                {"data" : "alias"},
                {"data" : "rol"},
                {
                    "data" : 'estado',
                    "render":function (st) {

                        if (st!=1) {
                            return '<span class="label label-danger"><i class="fa fa-lock"></i>&nbsp;&nbsp;BLOQUEADO&nbsp;</span>';
                            //return '<button class="btn btn-danger btn-xs"><i class="fa fa-lock"></i>&nbsp;&nbsp;BLOQUEADO&nbsp;</button>';
                        }else {
                            return '<span class="label label-success"><i class="fa fa-unlock"></i>&nbsp;&nbsp;&nbsp;&nbsp;ACTIVO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>';
                            //return '<button class="btn btn-primary btn-xs"><i class="fa fa-unlock"></i>&nbsp;&nbsp;&nbsp;&nbsp;ACTIVO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>';

                        }

                    }
                    //"defaultContent" :
                },
                {
                    "data" : 'ID',
                    "render" : function(valor){

                        var btn_2 = '<button type="button" class="eliminar btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteUsModal" title="Eliminar"><i class="fa fa-trash"></i></button>';



                        var btn_1 ='<button type="button" onclick="form_admin('+valor+')" class="btn btn-default btn-sm" data-toggle="modal" data-target="#viewUpdateAdmin" title="Ver Resultado"><i class="fa fa-edit"></i></button>';

                        return '<div class="btn-group">'+btn_1+btn_2+'</div>'
                    }
                }
            ],

            dom: "Bfrtip",
            buttons: [

                {
                    extend: "copy",
                    text: '<i class="fa fa-files-o"></i> Copiar',
                    className: "btn-sm",
                    titleAttr : "Copiar tabla"
                },
                {
                    extend: "pdf",
                    text: '<i class="fa fa-file-pdf-o"></i> PDF',
                    className: "btn-sm",
                    titleAttr : "Exportar PDF"
                },
                {
                    extend: "csv",
                    text: '<i class="fa fa-file-o"></i> CSV',
                    className: "btn-sm",
                    titleAttr : "Exportar CSV"
                },
                {
                    extend: "excel",
                    text: '<i class="fa fa-file-excel-o"></i> Excel',
                    className: "btn-sm",
                    titleAttr : "Exportar Excel"
                },
                {
                    extend: "print",
                    text: '<i class="fa fa-print"></i> Imprimir',
                    className: "btn-sm",
                    titleAttr : "Imprimir Tabla"
                }
            ],
            //responsive: true

        });

        eliminar("#tabla_administradores tbody",tabla);
    }

    function eliminar(tbody, tabla){
        //console.log(table);
        $(tbody).on("click","button.eliminar", function(){
            var datos = tabla.row($(this).parents("tr")).data();
            var id =  $("#id_us").val(datos.ID),
                names = $("#shown").html("<p>"+datos.nombre+"</p>");
        });
    }


</script>
<script type="text/javascript">
    // ELIMINA UN ADMIN EN MODAL
    $(document).ready(function(){
        $("#success").hide();
        $("#delete-form").validate({
            event: "focus",
            rules: {

            },
            messages:{

            },
            debug: true,
            errorElement: "span",
            submitHandler: function(form){
                $("#success").show();
                $("#success").html("<div class='alert alert-warning-alt' role='alert' align='justify'><strong> <i class='fa fa-cog'></i> </strong> Procesando...</div>");

                $.ajax({
                    type: "post",
                    url:"_include/php/actions/action_apps_root_crud.php?delete=us",
                    contentType: "application/x-www-form-urlencoded",
                    processData: true,
                    data: $("#delete-form").serialize(),
                    success: function(msg){
                        if (msg==='ok') {

                            $("#success").html("<div class='alert alert-success-alt' role='alert'><strong><i class='fa fa-check'></i> Exito! </strong> El usuario ha sido eliminado.</div>");
                            setTimeout(function() {$("#success").fadeOut('fast');
                                $('#deleteUsModal').modal('hide');
                                $('body').removeClass('modal-open');
                                $('.modal-backdrop').remove();}, 2000);
                            show_table();

                        }
                        if (msg==='false') {

                            $("#success").html("<div class='alert alert-danger-alt' role='alert'><strong><i class='fa fa-remove'></i> Error! </strong> Imposible eliminar este usuario.</div>");
                            setTimeout(function() {$("#success").fadeOut('fast');$('#deleteUsModal').modal('hide');}, 3000);
                        }
                    }
                });
            },
        });
    });

</script>
<script type="text/javascript">
    // EDITAR CLAVE DE REGISTRO DE ALUMNOS
    $(document).ready(function(){
        var ap = "<label style='color: #ED1C22; font-size:12px;'><i class='fa fa-remove'></i>";
        var ci = "</label>";
        $("#success_cv").hide();
        $("#edit_cv").validate({
            event: "focus",
            rules: {
                cv_registro_a : "required"
            },
            messages:{
                cv_registro_a : ap+" Escriba una clave"+ci
            },
            debug: true,
            errorElement: "span",
            submitHandler: function(form){
                $("#success_cv").show();
                $("#success_cv").html("<div class='alert alert-warning-alt' role='alert' align='justify'><strong> <i class='fa fa-cog'></i> </strong> Procesando...</div>");

                $.ajax({
                    type: "post",
                    url:"_include/php/actions/table_cv_reg.php?cv=edit",
                    contentType: "application/x-www-form-urlencoded",
                    processData: true,
                    data: $("#edit_cv").serialize(),
                    success: function(msg){
                        console.log(msg);
                        if (msg==='ok') {

                            $("#success_cv").html("<div class='alert alert-success-alt' role='alert'><strong><i class='fa fa-check'></i> Exito! </strong> Se ha cambiado la clave de registro de alumnos exitosamente.</div>");
                            setTimeout(function() {$("#success_cv").fadeOut('fast');
                                $('#cv_reg').modal('hide');
                                $('body').removeClass('modal-open');
                                $('.modal-backdrop').remove();}, 2000);
                            mostrarTbl_clave();

                        }
                    }
                });
            },
        });
    });

</script>
<script type="text/javascript">
    // AGREGAR UN USUARIO EN MODAL
    $(document).ready(function(){

        const ap = "<label style='color: #ED1C22; font-size:12px;'><i class='fa fa-remove'></i>";
        const ci = "</label>";
        const txt = " Elige una opción. ";

        $("#msg_info2").hide();
        $("#form_add").validate({
            event: "focus",
            rules: {
                nombre_new: "required",
                rol_new: "required",
                usuario_new: "required",
                pass_login : "required"
            },
            messages:{
                nombre_new: ap+" Escribe el nombre completo del usuario"+ci,
                rol_new: ap+" Elige el rol del usuario"+ci,
                usuario_new: ap+" Escribe un nombre de usuario"+ci,
                pass_login: ap+" Agregue una Contraseña"+ci
            },
            debug: true,
            errorElement: "span",
            submitHandler: function(form){
                $("#msg_info2").show();
                $("#msg_info2").html("<div class='alert alert-warning-alt' role='alert' align='justify'><strong> <i class='fa fa-cog'></i> </strong> Procesando...</div>");


                $.ajax({
                    type: "post",
                    url:"_include/php/actions/action_apps_root_crud.php?add=usad",
                    contentType: "application/x-www-form-urlencoded",
                    processData: true,
                    data: $("#form_add").serialize(),
                    success: function(msg){
                        //console.log(msg);
                        if (msg=='ok') {

                            $("#msg_info2").html("<div class='alert alert-success-alt' role='alert'><strong><i class='fa fa-check'></i> Exito! </strong> El usuario ha sido registrado exitosamente.</div>");
                            setTimeout(function() {$("#msg_info2").fadeOut('fast');
                                $('#NewAdmin ').modal('hide');
                                $('body').removeClass('modal-open');
                                $('.modal-backdrop').remove();}, 2000);
                            show_table();

                        }
                        if (msg=='false') {

                            $("#msg_info2").html("<div class='alert alert-danger-alt' role='alert'><strong><i class='fa fa-remove'></i> Error! </strong> el nombre de usuario ingresado ya esta siendo usado por otra persona.</div>");
                            setTimeout(function() {$("#msg_info2").fadeOut('fast');/*$('#NewAdmin ').modal('hide');*/}, 3000);
                        }
                    }
                });
            },
        });
    });

</script>

<script type="text/javascript">
    // mostrar contraseÃ±a insertada diferentes inputs

    var conteo = 0  //Definimos la Variable

    $("#change").click(function() { //Funcion del Click
        if(conteo === 0) { //Si la variable es igual a 0
            conteo = 1; //La cambiamos a 1
            $('#pass_login').removeAttr("type", "password"); //Removemos el atributo de Tipo ContraseÃ±a
            $("#pass_login").prop("type", "text"); //Agregamos el atributo de Tipo Texto(Para que se vea la ContraseÃ±a escribida)
            $("#changeclass").removeClass("fa fa-eye"); //Removemos una clase (la imagen del ojo por defecto)
            $("#changeclass").addClass("fa fa-eye-slash"); //Agregamos una Nueva Clase (la imagen del ojo nueva)
        }else{ //En caso contrario
            conteo = 0; //La cambiamos a 0
            $('#pass_login').removeAttr("type", "text"); //Removemos el atributo de Tipo Texto
            $("#pass_login").prop("type", "password"); //Agregamos el atributo de Tipo ContraseÃ±a
            $("#changeclass").removeClass("fa fa-eye-slash"); //Removemos una clase (la imagen del ojo nueva)
            $("#changeclass").addClass("fa fa-eye"); //Agregamos una Nueva Clase (la imagen del ojo por defecto)
        } //Cierre del Else
    }); //Cierre de la funcion Click

    var counter = 0;
    $("#changer").click(function() { //Funcion del Click
        if(counter == 0) { //Si la variable es igual a 0
            counter = 1; //La cambiamos a 1
            $('#pass_reg').removeAttr("type", "password"); //Removemos el atributo de Tipo ContraseÃ±a
            $("#pass_reg").prop("type", "text"); //Agregamos el atributo de Tipo Texto(Para que se vea la ContraseÃ±a escribida)
            $("#changerclass").removeClass("fa fa-eye"); //Removemos una clase (la imagen del ojo por defecto)
            $("#changerclass").addClass("fa fa-eye-slash"); //Agregamos una Nueva Clase (la imagen del ojo nueva)
        }else{ //En caso contrario
            counter = 0; //La cambiamos a 0
            $('#pass_reg').removeAttr("type", "text"); //Removemos el atributo de Tipo Texto
            $("#pass_reg").prop("type", "password"); //Agregamos el atributo de Tipo ContraseÃ±a
            $("#changerclass").removeClass("fa fa-eye-slash"); //Removemos una clase (la imagen del ojo nueva)
            $("#changerclass").addClass("fa fa-eye"); //Agregamos una Nueva Clase (la imagen del ojo por defecto)
        } //Cierre del Else
    }); //Cierre de la funcion Click

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

<script>
    function form_admin(data_info){
        $.ajax({
            type: "POST",
            //url: "_include/modules/app3_resultado/app3_resultado_us.php?us="+data_info,
            url: "_include/forms/form_update.php?us="+data_info,
        }).done(function( data ) {
            $('#contenedor_form').html(data);
        });
    };



</script>

<?php
