	<style>
    #lg-modal{
      width: 90% !important;
    }
  </style>
  <div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>Cuestionario 16 FP <small> Resultados</small></h1>
              </div>

              <!--<div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar..">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ir</button>
                    </span>
                  </div>
                </div>
              </div>-->
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabla 2.0 <small>Alumnos que repondieron.</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="table-responsive">
                      <table id="tabla_alumnos" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Nombre </th>
                            <th>Sexo</th>
                            <th>Carrera</th>
                            <th>Elaboró</th>
                            <th>Estatus</th>
                            <th>Acción</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Datatables -->

          <!-- modal muestra peril FP -->
          <div class="modal fade" id="viewStudent">
            <div class="modal-dialog" id="lg-modal">
              <div class="modal-content">
                <div class="modal-header modal-header-success">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel"><span class="fa fa-user"></span><strong> Perfíl FP</strong> </h4>
                    </div>
                <div class="modal-body">
                <div id="tabla_perfil"></div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-lg" id="imprimir" onClick="javascript:void(0)"><span class="fa fa-print"></span> Imprimir</button>
                  <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Salir</button>
                </div>
                </div>
              </div>
            </div>
          </div>
          <!-- fin de modal muestra perfil FP -->
          <!--////////////////- - -  Modal Eliminar contacto registrado - - -//////////////////-->        
      <div class="modal fade" id="deleteStudent" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header modal-header-danger">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">¿Eliminar?</h4>
              </div>
              <div class="modal-body">
                <div id="success" style="display:block;width:90%;margin:1%;float:center;position:fixed;z-index:10003 !important; "></div>
                <strong>Eliminar al usuario: </strong> 
                <div id="shown" align="center"></div>
                <hr>
                <form method="post" name="delete-form" id="delete-form">
                        <input type="hidden" name="id_student" id="id_student">
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

    <script>
    $(document).ready(function(){
      show_table();
    });

    function show_table(){
      var tabla = $("#tabla_alumnos").DataTable({

        "iDisplayLength": 5,

              "language": {
                      //"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                      "url": "assets/bootstrap/js/Spanish.json"
                  },
              "destroy" : true,
              "ajax" : {
              "method" : "POST",
              "url" : "_include/php/actions/json_data_table.php?app=02",
              },
              "columns" : [
              {"data" : 'nombre'},
              { 
          "data" : "sexo",
          "render" : function (sexo){
            var verificar = sexo;
            if (verificar === 'H' ){var icon ='fa-male'; var title = 'Hombre'; var color="green";}
            else {var icon ='fa-female'; var title = 'Mujer'; var color="orange";}

            return '<span class="badge bg-'+color+' pull-right"><i class=" fa '+icon+'"></i></span> '+title;
            }
        },
        {"data" : "carrera"},
        {
          "data" : 'fecha',
                "render" : function(fech){
                  var datetime =fech.split(" ");
                  var fecha = datetime[0];
                  var myDate = new Date(fecha);
                  var impfecha = (myDate.getDate() + 1) + "/" + (myDate.getMonth() + 1) + "/" + myDate.getFullYear();
                  var hora = datetime[1];
                  return '<i class="fa fa-calendar"></i> '+impfecha+'<br> <i class="fa fa-clock-o"></i> '+ hora;
                }
        },
        {
          "defaultContent" : '<span class="label label-success">100% Completado</span>'
        },
        {
          "data" : 'ID',
                "render" : function(id){
                  var us =id;
                  
                  return '<button onClick="show_perfil('+us+')" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#viewStudent" title="Ver Perfíl"><i class="fa fa-folder"></i> Ver </button>   <button type="button" class="eliminar btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteStudent" title="ELIMINAR" id="" ><i class=" fa fa-trash-o"></i> Eliminar</button>'
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

      eliminar("#tabla_alumnos tbody",tabla);
       
    }

    function eliminar(tbody, tabla){
            //console.log(table);
                    $(tbody).on("click","button.eliminar", function(){
                     var datos = tabla.row($(this).parents("tr")).data();
                     var id =  $("#id_student").val(datos.ID),
                     names = $("#shown").html("<p>"+datos.nombre+"</p>");
                     //console.log(datos);
                    });
                  };
     
    </script>
    <script type="text/javascript">
    // ELIMINA UN CONTACTO EN MODAL
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
                            url:"_include/php/actions/action_apps_root_crud.php?app2_delete=student",
                            contentType: "application/x-www-form-urlencoded",
                            processData: true,
                            data: $("#delete-form").serialize(),
                            success: function(msg){
                                if (msg=='ok') {

                                $("#success").html("<div class='alert alert-success-alt' role='alert'><strong><i class='fa fa-check'></i> Exito! </strong> El usuario ha sido eliminado.</div>");
                            setTimeout(function() {$("#success").fadeOut('fast');
                              $('#deleteStudent').modal('hide');
                              $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();}, 1000);
                            show_table();
                            
                              }
                              if (msg=='false') {

                                $("#success").html("<div class='alert alert-danger-alt' role='alert'><strong><i class='fa fa-remove'></i> Error! </strong> Imposible eliminar este usuario.</div>");
                            setTimeout(function() {$("#success").fadeOut('fast');$('#deleteStudent').modal('hide');}, 3000);
                              }                            
                            }                       
                        });
                    },
                });
        });            
    
    </script>

    <script>
    function show_perfil(data_info){
        $.ajax({
                 type: "POST",
                 url: "_include/modules/perfil_alumno.php?info="+data_info,
              }).done(function( data ) {
                  console.log(data);
                $('#tabla_perfil').html(data);
              });  
    } 
    </script>
    
    <script>
    $(document).ready(function(){
        $("#imprimir").click(function(){
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = { mode : mode, popClose : close};
            $("div#tabla_perfil_imprimir").printArea(options);
        });
    });
    </script>
          <!--fin inprimir-->