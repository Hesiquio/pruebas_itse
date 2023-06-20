
        /// lenguaje para datepicker

jQuery(function($){
      $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '&#x3c;Ant',
        nextText: 'Sig&#x3e;',
        currentText: 'Hoy',
        monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
        'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
        'Jul','Ago','Sep','Oct','Nov','Dic'],
        dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
        dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
        weekHeader: 'Sm',        
        yearRange: '1950:2025',
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''};
      $.datepicker.setDefaults($.datepicker.regional['es']);
      }); 

/// lanza el picker
$(document).ready(function() {
        var f = new Date();
         $("#fec_nac").datepicker({
             maxDate: new Date(f.getFullYear(), f.getMonth(), f.getDate()),});
        });




/// claculo de la CURP
function calculaRFCURP() {

    var formulario = document.forms['generate_curp'];
    
    var nombrecompleto = formulario['nombres'].value +' '+formulario['paterno'].value +' '+formulario['materno'].value;


    var paterno1st = formulario['paterno'].value; 

 

        paterno1st = paterno1st.replace("LAS","");
        paterno1st = paterno1st.replace("DEL","");
       
    var paterno  = paterno1st.replace("LA","");
        paterno = paterno.replace("DE","");
        paterno = paterno.replace("Y","");  
    
    while(paterno[0] == " "){
        paterno = paterno.substr(1, paterno.length - 1);
    }
   
    var materno1st = formulario['materno'].value;
    var materno1st = materno1st.replace("LAS","");
        materno1st = materno1st.replace("DEL","");
        materno1st = materno1st.replace("DE","");
       
    var materno  = materno1st.replace("LA","");
        materno = materno.replace("Y","");
               
    while(materno[0] == " "){
        materno = materno.substr(1, materno.length - 1);
    }
   
    var nombre = formulario['nombres'].value.toUpperCase();
    var op_paterno = paterno.length;
    var vocales = /^[aeiou]/i;
    var consonantes = /^[bcdfghjklmnñpqrstvwxyz]/i;
   
    var s1 = '';
    var s2 = '';
    var s8 = '';

    var i = 0;
    var x= true;
    var z = true;

    while(i < op_paterno){
        if((consonantes.test(paterno[i]) == true) & (x != false)){
            s1 = s1 + paterno[i];
            paterno = paterno.replace(paterno[i],"");
            x=false;
        }
       
        if((vocales.test(paterno[i]) == true) & (z != false)){
            s2 = s2 + paterno[i];
            paterno = paterno.replace(paterno[i],"");
            z=false;
        }
        i++;
    }

    var ix=0;
    var y = true;
    var nparteno = paterno.length;
   
    while(ix < nparteno){
        if((consonantes.test(paterno[ix]) == true) & (y != false)){
            s8 = s8 + paterno[ix];
            y=false;
        }
        ix++;
    }

    //calculos apellido materno
    var maternosize = materno.length;
    var j = 1;
    var s9 = '';
    var xm = true;
    var ym = true;
   
    while(j < maternosize){
        if((consonantes.test(materno[j]) == true) && (xm != false)){
            s9 = s9.replace(materno[j],"");
            xm = false;
        }
       
        if((consonantes.test(materno[j]) == true) && (ym != false)){
            s9 = s9 + materno[j];
            ym = false;
        }
       
        j++;
    }
   
    var nombresize = nombre.length;
    var im = 1;
    var s10= '';
    var wx = true;
    var wz = true;
   
    while(im < nombresize){
       
        if((consonantes.test(nombre[im]) == true)&& (wz != false)){
            s10 = s10 + nombre[im];
            nombre = nombre.replace(nombre[im],"");
            wz = false;
        }
        im++;
    }
    var s3 = materno[0]; //repetido
    var s4 = nombre[0]; //repetido


    var fecha = formulario["fec_nac"].value;
    var fechaSplit = fecha.split("/");
   
    var s5 = fechaSplit[2][2]+fechaSplit[2][3];
    var s6 = fechaSplit[1];
    var s7 = fechaSplit[0];

    var sex = formulario["sexo"].value;       

    var edo = formulario["Nacimiento"].value;
    // verificar las palabras antisonantes si de la siguiente lista se encuentra una? la primer vocal se sustituye por una X

    var antisonantes = ['CACA', 'BUEI','CAGA','CAKA','COGE','COJE','COJO','FETO',
        'JOTO','KACO','KAGO','CAGO','KOJO','KULO','CULO','LOCO','LOKO','MAMO',
          'MEAS','MION','MULA','BUEY','CACO','KOGE','LOCA','LOKA','MAME','MEAR',
          'MEON','MOCO','PEDA','PEDO','PUTA','PUTO','QULO','RUIN','PENE','RATA','COLA','VACA'];

      var verificar = s1+s2+s3+s4;

      for(p=0; p<antisonantes.length;p++){
          if(antisonantes[p] == verificar){
              var s2 = "X";
          }
      }
      //vefificar si alguna letra a utilizar el contiene una Ñ la cual debe ser sustituida por una X
      if (s1 === "Ñ") {
      s1 = "X";
      };
      if (s3 === "Ñ") {
      s3 = "X";
      };
      if (s4 === "Ñ") {
      s4 = "X";
      };

        var curprint = s1+s2+s3+s4+s5+s6+s7+sex+edo+s8+s9+s10;
        var curpinbox = s1+s2+s3+s4+s5+s6+s7; 
        var copiar = "copyCURP";

      $("#info").html("<div class='alert alert-warning-alt' role='alert' align='justify'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><div class='center'><strong><h4><p id='copyCURP'>"+curprint+"</p><h4><strong></div><div class='center'><i class='fa fa-info-circle'></i> <strong> NOTA: </strong> La CURP ha sido calculada, antes de usarla verificala ya que ésta será el medio por el cual accederas al sistema. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type='button' class='btn btn-round btn-info btn-xs' onclick='copiarAlPortapapeles(\"copyCURP\", \""+nombrecompleto+"\", \""+sex+"\",\""+curpinbox+"\")'><span class='fa fa-copy'> Copiar al portapapeles </span></button></div></div>");
}
// Function copiar al portapapeles para un mejor manejo de la impression de la curp
function copiarAlPortapapeles(id_elemento, nombre, sex, curp) {
  var aux = document.createElement("input");
  aux.setAttribute("value", document.getElementById(id_elemento).innerHTML);
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  document.body.removeChild(aux);
  ///////
  document.getElementById("generate_curp").reset();
  setTimeout(function() {
    //$("#info").fadeOut('fast');
    $("#nombre_reg").val(nombre);
    $("#sexo").val(sex);
    $("#curp_reg").val(curp);
    $('#CURP_GEN').modal('hide');
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();}, 1000);
}

// validacion del formulario de registrar un nuevo alumno

$(document).ready(function(){

                 var ap = "<label style='color: #ED1C22; font-size:12px;'><i class='fa fa-remove'></i>";
                 var ci = "</label>";
                 var txtcar = " Selecciona tu especialidad. ";
                 var txtreq = "Este campo es obligatorio.";

                 $("#message_reg").hide();
                 $("#form_reg").validate({
                     event: "focus",
                     rules: {
                        curp_reg: "required",
                        nombre_reg: "required",
                        pass_reg : "required",
                        carrera_reg : "required",
                        cv_reg : "required",


                     },
                     messages: {
                         curp_reg : ap+txtreq+ci,
                         nombre_reg: ap+txtreq+ci,
                         pass_reg : ap+txtreq+ci,
                         carrera_reg : ap+txtcar+ci,
                         cv_reg : ap+txtreq+ci,

                      
                     },
                     debug: true,
                     errorElement: "span",
                     submitHandler: function(form){
                                     $("#message_reg").show();
                                      $("#message_reg").html("<div class='alert alert-warning-alt' role='alert' align='justify'><strong><i class='fa fa-cog'></i> Procesando: </strong> Espere un momento..</div>");
                                  
                                    

                   $.ajax({
                             type: "post",
                             url:"_include/php/actions/functions_reglog.php",
                             contentType: "application/x-www-form-urlencoded",
                             processData: true,
                             data: $("#form_reg").serialize(),
                             success: function(msg){

                                if (msg == 'replic') {

                                    $("#message_reg").html("<div class='alert alert-danger-alt' role='alert'><strong><i class='fa fa-remove'></i> Error! </strong>La matricula Ingresada ya se encuentra registrada en el sistema, si crees que se trata de un error consultelo al administrador del sistema.</div>");
                                       setTimeout(function() {$("#message_reg").fadeOut('fast');}, 5000);

                                }
                                if (msg == 'not') {

                                    $("#message_reg").html("<div class='alert alert-danger-alt' role='alert'><strong><i class='fa fa-remove'></i> Error! </strong> La clave de registro ingresada no es la clave proporcionada por el administrador, favor de verificar o más bien contacte al administrador del sistema.</div>");
                                       setTimeout(function() {$("#message_reg").fadeOut('fast');}, 3000);

                                }
                                if (msg == 'ok'){

                                    $("#message_reg").html("<div class='alert alert-success-alt' role='alert'><strong><i class='fa fa-check'></i> Exito! </strong>Tu registro se ha realizado exitosamente. Serás redireccionado al Login de Acceso.</div>");
                                       document.getElementById("form_reg").reset();
                                       setTimeout(function() {
                                    $("#message_reg").fadeOut('fast');
                                    url = "#signin";
                                      location.href=url;
                                    }, 3000); 
                                }                    
                             }                       
                         });
                     },
                 });
          });

// validar formulario login 

$(document).ready(function(){

                 var ap = "<label style='color: #ED1C22; font-size:12px;'><i class='fa fa-remove'></i>";
                 var ci = "</label>";
                 var txtcurp = " Ingresa tu CURP. ";
                 var txtpass= " Ingresa tu contraseña. ";

                 $("#message_log").hide();
                 $("#form_login").validate({
                     event: "focus",
                     rules: {
                        curp_login: "required",
                        pass_login: "required",


                     },
                     messages: {
                         curp_login : ap+txtcurp+ci,
                         pass_login: ap+txtpass+ci,

                      
                     },
                     debug: true,
                     errorElement: "span",
                     submitHandler: function(form){
                                     $("#message_log").show();
                                     $("#message_log").html("<div class='alert alert-warning' role='alert' align='justify'><strong><i class='fa fa-cog'></i> Procesando: </strong> Espere un momento..</div>");  
                                     
                   $.ajax({
                             type: "post",
                             url:"_include/php/actions/functions_reglog.php",
                             contentType: "application/x-www-form-urlencoded",
                             processData: true,
                             data: $("#form_login").serialize(),
                             success: function(msg){
                                console.log(msg);

                                if (msg == 'not') {

                                    $("#message_log").html("<div class='alert alert-danger-alt' role='alert'><strong><i class='fa fa-remove'></i> Error! </strong>La Matricula o Nombre de usuario ingresado no existe.</div>");
                                       document.getElementById("form_login").reset();
                                       setTimeout(function() {$("#message_log").fadeOut('fast');}, 3000);

                                };
                                if (msg == 'blocked') {
                                  $("#message_log").html("<div class='alert alert-danger-alt' role='alert'><strong><i class='fa fa-remove'></i> Error! </strong>Este usuario esta temporalmente bloqueado, por favor contacte al administrador del sistema.</div>");
                                       document.getElementById("form_login").reset();
                                       setTimeout(function() {$("#message_log").fadeOut('fast');}, 3000);
                                };

                                if (msg == 'failed') {
                                  $("#message_log").html("<div class='alert alert-danger-alt' role='alert'><strong><i class='fa fa-remove'></i> Error! </strong>La contraseña ingresada no es correcta.</div>");
                                    document.getElementById("pass_login").focus();
                                    setTimeout(function() {$("#message_log").fadeOut('fast');}, 3000);
                                };

                                if (msg == 'ok'){

                                    $("#message_log").html("<div class='alert alert-success-alt' role='alert'><strong><i class='fa fa-check'></i> Exito! </strong> Acceso aprobado.</div>");
                                       document.getElementById("form_login").reset();
                                       setTimeout(function() {
                                    $("#message_log").fadeOut('fast');
                                    //url = "";
                                    window.location.href="";
                                    //location.href=url;
                                    }, 2000); 
                                };                  
                             }                       
                         });
                     },
                 });
          });


// mostrar contraseña insertada diferentes inputs

var conteo = 0  //Definimos la Variable

$("#change").click(function() { //Funcion del Click
  if(conteo == 0) { //Si la variable es igual a 0
  conteo = 1; //La cambiamos a 1
  $('#pass_login').removeAttr("type", "password"); //Removemos el atributo de Tipo Contraseña
  $("#pass_login").prop("type", "text"); //Agregamos el atributo de Tipo Texto(Para que se vea la Contraseña escribida)
  $("#changeclass").removeClass("fa fa-eye"); //Removemos una clase (la imagen del ojo por defecto)
  $("#changeclass").addClass("fa fa-eye-slash"); //Agregamos una Nueva Clase (la imagen del ojo nueva)
  }else{ //En caso contrario
  conteo = 0; //La cambiamos a 0
  $('#pass_login').removeAttr("type", "text"); //Removemos el atributo de Tipo Texto
  $("#pass_login").prop("type", "password"); //Agregamos el atributo de Tipo Contraseña
  $("#changeclass").removeClass("fa fa-eye-slash"); //Removemos una clase (la imagen del ojo nueva)
  $("#changeclass").addClass("fa fa-eye"); //Agregamos una Nueva Clase (la imagen del ojo por defecto)
  } //Cierre del Else
}); //Cierre de la funcion Click

var counter = 0;
$("#changer").click(function() { //Funcion del Click
  if(counter == 0) { //Si la variable es igual a 0
  counter = 1; //La cambiamos a 1
  $('#pass_reg').removeAttr("type", "password"); //Removemos el atributo de Tipo Contraseña
  $("#pass_reg").prop("type", "text"); //Agregamos el atributo de Tipo Texto(Para que se vea la Contraseña escribida)
  $("#changerclass").removeClass("fa fa-eye"); //Removemos una clase (la imagen del ojo por defecto)
  $("#changerclass").addClass("fa fa-eye-slash"); //Agregamos una Nueva Clase (la imagen del ojo nueva)
  }else{ //En caso contrario
  counter = 0; //La cambiamos a 0
  $('#pass_reg').removeAttr("type", "text"); //Removemos el atributo de Tipo Texto
  $("#pass_reg").prop("type", "password"); //Agregamos el atributo de Tipo Contraseña
  $("#changerclass").removeClass("fa fa-eye-slash"); //Removemos una clase (la imagen del ojo nueva)
  $("#changerclass").addClass("fa fa-eye"); //Agregamos una Nueva Clase (la imagen del ojo por defecto)
  } //Cierre del Else
}); //Cierre de la funcion Click
