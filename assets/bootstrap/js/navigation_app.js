  // ************************* NAVEGACION DE LA APP ****************************//

  $(document).ready(function(){
            $("#app1").click(function(){  
         $.ajax({
                 type: "POST",
                 url: "_include/modules/app1.php",
              }).done(function( data ) {
                  $('#content_app').html(data);
              });  
        }); 

        $("#app2").click(function(){  
         $.ajax({
                 type: "POST",
                 url: "_include/modules/app2.php",
              }).done(function( data ) {
                  $('#content_app').html(data);
              });  
        });

        $("#app3").click(function(){  
         $.ajax({
                 type: "POST",
                 url: "_include/modules/app3.php",
              }).done(function( data ) {
                  $('#content_app').html(data);
              });  
        });

       $("#app01").click(function(){  
         $.ajax({
                 type: "POST",
                 url: "_include/modules/app1.php",
              }).done(function( data ) {
                  $('#content_app').html(data);
              });  
        });
        $("#app02").click(function(){  
         $.ajax({
                 type: "POST",
                 url: "_include/modules/app2.php",
              }).done(function( data ) {
                  $('#content_app').html(data);
              });  
        });
        $("#app03").click(function(){  
         $.ajax({
                 type: "POST",
                 url: "_include/modules/app3.php",
              }).done(function( data ) {
                  $('#content_app').html(data);
              });  
        });
        ///  ROOT

        $("#app_a1").click(function(){  
         $.ajax({
                 type: "POST",
                 url: "_include/modules/app1_admin.php",
              }).done(function( data ) {
                  $('#content_app').html(data);
              });  
        }); 

        $("#app_a2").click(function(){  
         $.ajax({
                 type: "POST",
                 url: "_include/modules/app2_admin.php",
              }).done(function( data ) {
                  $('#content_app').html(data);
              });  
        });

        $("#app_a3").click(function(){
         $.ajax({
                 type: "POST",
                 url: '_include/modules/app3_admin.php'
              }).done(function( data ) {
                  $('#content_app').html(data);
              });
        });

        $('#mod_add').click(function(){
         $.ajax({
                 type: 'POST',

                 url: '_include/modules/app3_admin.php'
              }).done(function( data ) {
                  $('#content_app').html(data);
              });
        });


      });
  $('#mod_reg').click(function(){
      $.ajax({
          type: 'POST',

          url: '_include/modules/registros.php'
      }).done(function( data ) {
          $('#content_app').html(data);
      });


  });



  function mod_perfil(us){
         $.ajax({
                 type: 'POST',
                 url: '_include/modules/config_perfil.php?profile='+us
              }).done(function( data ) {
                  $('#content_app').html(data);
              });  
      }
      

    /// navegacion o paginacion de las series
     function next_serie(page){
        $.ajax({
            type: "POST",
            url: "_include/modules/app1_serie"+page+".php",
         }).done(function( data ) {
            $('#content_app').html(data);

            }); 
    }

    function instruccion(inst){
        $.ajax({
            type: "POST",
            url: "_include/modules/instrucciones.php?serie="+inst,
         }).done(function( data ) {
            $("#session").html('<h2>Instrucciones <small>Sistema de pruebas Psicométricas</small></h2><div class="clearfix"></div>');
            $("#message").hide();
            $(".reloj").hide();
            $('#instruccion').html(data);

            }); 
    }

    function resultado_iq(id,modal){
        $.ajax({
            type: "POST",
            url: "_include/modules/app1_resultado/IQ.php?alu="+id+".php",
         }).done(function( data ) {
          if (modal=="true") {
            $('#res_alumno').html(data);
          }else{
            $("#session").html('<h2>Resultado <small>Sistema de pruebas Psicométricas Terman Merril</small></h2><div class="clearfix"></div>');
            $("#message").hide();
            $(".reloj").hide();
            $('#instruccion').html(data);
          }
            

            }); 
    }

   function show_resultado_app3() {
        $.ajax({
                 type: "POST",
                 url: "_include/php/actions/action_app3.php?success=result",
              }).done(function( data ) {
                  $('#instruccion').html(data);
              });
    }