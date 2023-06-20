  <style>
    #lg-modal{
      width: 90% !important;
    }
  </style>
  <div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>Terman Merril <small> Aplicados</small></h1>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <button type="button" name="report" class="btn btn-success" data-toggle="modal" data-target="#ModalReport"><i class="fa fa-calendar" ></i> BUSCAR POR FECHA</button>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabla 1.0 <small>Alumnos que ya aplicaron esta prueba.</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="table-responsive">
                      <table id="tabla_alumnos" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Nombre </th>
                            <th>Usuario</th>
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

          <!-- modal terman merril -->
          <div class="modal fade" id="viewStudent">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header modal-header-success">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel"><span class="fa fa-cogs"></span><strong> Resultado Terman Merril</strong> </h4>
                    </div>
                <div class="modal-body">
                <div id="tabla_resultado_final"></div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-md" id="imprimir" onClick="javascript:void(0)"><span class="fa fa-print"></span> Imprimir</button>
                  <button type="button" class="btn btn-warning btn-md" data-dismiss="modal">Salir</button>
                </div>
                </div>
              </div>
            </div>
          </div>
          <!-- fin de modal terman merril -->
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

      <!-- Modal Report-->
                    <div class="modal fade" id="ModalReport" role="dialog">
                        <div class="modal-dialog modal-lg" id="lg-modal">
                            <div class="modal-content">
                                <div class="modal-header modal-header-success">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h3><i class="glyphicon glyphicon-calendar"></i> Buscar Alumnos que aplicaron esta prueba.</h3>
                                </div>
                                <div class="modal-body">
                                    <div id="message" style="display:block;width:90%;margin:1%;float:center;position:fixed;z-index:10003 !important; "></div>
                                    <div class="well" style="overflow: auto">
                                      <div class="col-md-6">
                                        <blockquote>
                                          Usa el siguiente selector y elige entre las opciones o personaliza tu búsqueda.
                                        </blockquote>
                                      </div>
                                      <div class="col-md-6">
                                        <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                          <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                          <span> </span> <b class="caret"></b>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                    <div id="show_table"></div>                    
                            </div><!-- /.modal-content -->
                        </div>
                    </div>

                    <!-- Fin modal -->

    <script>
    $(document).ready(function(){
      show_table();
    });

    function porcentaje_avance(valor){ 
    var porcentaje 
    porcentaje = valor 
    return porcentaje 
}

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
              "url" : "_include/php/actions/json_data_table.php?app=01",
              },
              "columns" : [
              {"data" : 'nombre'},
              {"data" : 'usuario'},
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
          "data" : 'porcentaje',
                "render":function (avance) {
                  var porcentaje = porcentaje_avance(avance);

                  if (porcentaje>=100) {
                    return '<span class="label label-success">Completado '+porcentaje+'%  </span>';
                  }else if(porcentaje>1 && porcentaje<100){
                    return '<span class="label label-warning">Avanzado '+porcentaje+'% </span>';
                  }else if(porcentaje==0){
                    return '<span class="label label-danger">No Iniciado </span>';
                  }
                  
                }
          //"defaultContent" : 
        },
        {
          "data" : 'porcentaje',
                "render" : function(valor){
                  var porcentaje = valor;

                  var btn_3 = '<button type="button" class="eliminar btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteStudent" title="Eliminar"><i class="fa fa-trash"></i></button>';
                  
                  if (porcentaje>=100) {

                    var btn_1 ='<button type="button" class="ver_perfil btn btn-default btn-sm" data-toggle="modal" data-target="#viewStudent" title="Ver Resultado"><i class="fa fa-info-circle"></i></button>';
                    var btn_2 = '<button type="button" onclick="" class="descarga_excel btn btn-success btn-sm" title="Exportar Resultado"><i class="fa fa-file-excel-o"></i></button>'; 
                  }else{
                    var btn_1 ='<button type="button" class="btn btn-default btn-sm disabled" title="Ver Resultado"><i class="fa fa-info-circle"></i></button>';
                    var btn_2 = '<button type="button" class="btn btn-success btn-sm disabled" title="Exportar Resultado"><i class="fa fa-file-excel-o"></i></button>'; 
                    }
                  
                  return '<div class="btn-group">'+btn_1+btn_2+btn_3+'</div>'
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
      ver_resultados("#tabla_alumnos tbody",tabla);
      descarga_excel("#tabla_alumnos tbody",tabla);
       
    }

    function eliminar(tbody, tabla){
            //console.log(table);
                    $(tbody).on("click","button.eliminar", function(){
                     var datos = tabla.row($(this).parents("tr")).data();
                     var id =  $("#id_student").val(datos.ID),
                     names = $("#shown").html("<p>"+datos.nombre+"</p>");
                    });
                  };
    function ver_resultados(tbody, tabla){
            //console.log(table);
                    $(tbody).on("click","button.ver_perfil", function(){
                     var datos = tabla.row($(this).parents("tr")).data();
                     resultado_alumno(datos.ID);
                    });
                  };
     function descarga_excel(tbody, tabla){
            //console.log(table);
                    $(tbody).on("click","button.descarga_excel", function(){
                     var datos = tabla.row($(this).parents("tr")).data();
                     resultado_alumno(datos.ID);
                     setTimeout(function() {tableToExcel('imprime_excel', 'Resultado Alumno');}, 3000); // Esperar 3 segundos para q carguen los datos del alumno y procede a descragar el excel..
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
                            url:"_include/php/actions/action_apps_root_crud.php?app1_delete=student",
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
    function resultado_alumno(data_info){
        $.ajax({
                 type: "POST",
                 url: "_include/modules/app1_resultado/app1_resultados.php?us="+data_info,
              }).done(function( data ) {
                $('#tabla_resultado_final').html(data);
              });  
    } 
    </script>
    
    <script>
    $(document).ready(function(){
        $("#imprimir").click(function(){
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = { mode : mode, popClose : close};
            $("div#tabla_resultado_final").printArea(options);
        });
    });

    
    var tableToExcel = (function() {
    var uri = 'data:application/vnd.ms-excel;base64,'
      , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
      , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
      , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
    return function(table, name) {
      if (!table.nodeType) table = document.getElementById(table)
      var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
      window.location.href = uri + base64(format(template, ctx))
    }
  })();
    </script>
          <!--fin inprimir-->

   

   <!-- bootstrap-daterangepicker -->
    

    <script>
      $(document).ready(function() {
        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          var inicio_rec = start.format('DD/MM/YYYY');
          var fin_rec = end.format('DD/MM/YYYY');
          $('#reportrange span').html(inicio_rec+' - '+fin_rec);

          $.ajax({
                 type: "POST",
                 url: "_include/php/actions/buscar.php?f1="+inicio_rec+'&f2='+fin_rec,
              }).done(function( data ) {
                $('#show_table').html(data);
              });

        };

        var optionSet1 = {
          //startDate: moment().subtract(29, 'days'),
          startDate: moment(),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '31/12/2050',
          dateLimit: {
            days: 365
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Hoy': [moment(), moment()],
            'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Hace 7 Dias': [moment().subtract(6, 'days'), moment()],
            'Hace 30 Dias': [moment().subtract(29, 'days'), moment()],
            'Este Mes': [moment().startOf('month'), moment().endOf('month')],
            'Hace un Mes': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'DD/MM/YYYY',
          separator: ' a ',
          locale: {
            applyLabel: 'Aplicar',
            cancelLabel: 'Limpiar',
            fromLabel: 'De',
            toLabel: 'a',
            customRangeLabel: 'Personalizar',
            daysOfWeek: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            firstDay: 1
          }
        };
        //$('#reportrange span').html(moment().subtract(29, 'days').format('D MMMM, YYYY') + ' - ' + moment().format('D MMMM, YYYY'));
        //$('#reportrange span').html(moment().format('DD/MM/YYYY') + ' - ' + moment().format('DD/MM/YYYY'));
        $('#reportrange span').html('DD/MM/YYYY'+ ' - ' +'DD/MM/YYYY');//  moment().format());
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
      });
    </script>

    

    
    <!-- /bootstrap-daterangepicker -->       