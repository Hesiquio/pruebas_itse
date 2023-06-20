<?php
if (isset($_GET["serie"]) && $_GET["serie"] == 1) {
	?>
	<div class="col col-md-12">
      <h3>SERIE I</h3>
      <blockquote>
        <div align="justify">
          <p><strong>INSTRUCCIONES:</strong><br>
           Lee cada cuestión y selecciona   la palabra que complete correctamente la oración y da clic sobre el círculo que corresponda a tu respuesta.</p>
        </div>
      </blockquote> 
      <blockquote>
        <p><strong>EJEMPLO:</strong></p>
        <div align="center">
          <img src="assets/bootstrap/images/img_sesiones/sesion_1.PNG" class="img-responsive">
        </div>
      </blockquote>
      <blockquote>
        <p align="center">
          El tiempo para resolver esta serie es de: <br>
          2 minutos para un total de 16 preguntas. <br>
          oprime el siguiente botón <b>Iniciar Serie I</b> cuando te sientas listo.
        </p> 
      </blockquote>   
    </div>
    <div class="col col-md-12" align="right">
      <!-- <button type="button" class="btn btn-warning btn-md" data-dismiss="modal">Cancelar <i class="fa fa-remove"></i></button> -->
      <button type="button" onclick="next_serie(1)" class="btn btn-success btn-md"  >Iniciar Serie I <i class="fa fa-check"></i></button>
    </div>
	<?php

}elseif (isset($_GET["serie"]) && $_GET["serie"] == 2) {
	?>
	<div class="col col-md-12">
      <h3>SERIE II</h3>
      <blockquote>
        <div align="justify">
          <p><strong>INSTRUCCIONES:</strong><br>
           Lee cada cuestión y selecciona  la mejor respuesta tal como lo muestra el ejemplo.</p>
        </div>
      </blockquote> 
      <blockquote>
        <p><strong>EJEMPLO:</strong></p>
        <div align="center">
          <img src="assets/bootstrap/images/img_sesiones/sesion_2.PNG" class="img-responsive">
        </div>
      </blockquote>
      <blockquote>
        <p align="center">
          El tiempo para resolver esta serie es de: <br>
          2 minutos para un total de 11 preguntas. <br>
          oprime el siguiente botón <b>Continuar Serie II</b> cuando te sientas listo.
        </p> 
      </blockquote>   
    </div>
    <div class="col col-md-12" align="right">
      <!-- <button type="button" class="btn btn-warning btn-md" data-dismiss="modal">Cancelar <i class="fa fa-remove"></i></button> -->
      <button type="button" onclick="next_serie(2)" class="btn btn-success btn-md"  >Continuar Serie II <i class="fa fa-check"></i></button>
    </div>
	<?php
}elseif (isset($_GET["serie"]) && $_GET["serie"] == 3) {
	?>
	<div class="col col-md-12">
      <h3>SERIE III</h3>
      <blockquote>
        <div align="justify">
          <p><strong>INSTRUCCIONES:</strong><br>
           Cuando las dos palabras signifiquen  lo mismo, selecciona la palabra <b>IGUAL</b>,cuando signifiquen lo opuesto, selecciona la  palabra <b>OPUESTO</b></p>
        </div>
      </blockquote> 
      <blockquote>
        <p><strong>EJEMPLO:</strong></p>
        <div align="center">
          <img src="assets/bootstrap/images/img_sesiones/sesion_3.PNG" class="img-responsive">
        </div>
      </blockquote>
      <blockquote>
        <p align="center">
          El tiempo para resolver esta serie es de: <br>
          2 minutos para un total de 30 preguntas. <br>
          oprime el siguiente botón <b>Continuar Serie III</b> cuando te sientas listo.
        </p> 
      </blockquote>   
    </div>
    <div class="col col-md-12" align="right">
      <!-- <button type="button" class="btn btn-warning btn-md" data-dismiss="modal">Cancelar <i class="fa fa-remove"></i></button> -->
      <button type="button" onclick="next_serie(3)" class="btn btn-success btn-md"  >Continuar Serie III <i class="fa fa-check"></i></button>
    </div>
	<?php
}elseif (isset($_GET["serie"]) && $_GET["serie"] == 4) {
	?>
	<div class="col col-md-12">
      <h3>SERIE IV</h3>
      <blockquote>
        <div align="justify">
          <p><strong>INSTRUCCIONES:</strong><br>
           Selecciona las  letras correspondientes a las dos palabras que indican algo que siempre tiene  el sujeto,  anota solamente dos para cada cuestión.</p>
        </div>
      </blockquote> 
      <blockquote>
        <p><strong>EJEMPLO:</strong></p>
        <div align="center">
          <img src="assets/bootstrap/images/img_sesiones/sesion_4.PNG" class="img-responsive">
        </div>
      </blockquote>
      <blockquote>
        <p align="center">
          El tiempo para resolver esta serie es de: <br>
          3 minutos para un total de 18 preguntas. <br>
          oprime el siguiente botón <b>Continuar Serie IV</b> cuando te sientas listo.
        </p> 
      </blockquote>   
    </div>
    <div class="col col-md-12" align="right">
      <!-- <button type="button" class="btn btn-warning btn-md" data-dismiss="modal">Cancelar <i class="fa fa-remove"></i></button> -->
      <button type="button" onclick="next_serie(4)" class="btn btn-success btn-md" >Continuar Serie IV <i class="fa fa-check"></i></button>
    </div>
	<?php
}elseif (isset($_GET["serie"]) && $_GET["serie"] == 5) {
	?>
	<div class="col col-md-12">
      <h3>SERIE V</h3>
      <blockquote>
        <div align="justify">
          <p><strong>INSTRUCCIONES:</strong><br>
           Lee cada cuestión y responde lo más pronto posible, escríbelas en los cuadros de texto ubicados al final de cada pregunta.</p>
        </div>
      </blockquote> 
      <blockquote>
        <p align="center">
          El tiempo para resolver esta serie es de: <br>
          5 minutos para un total de 12 preguntas. <br>
          oprime el siguiente botón <b>Continuar Serie V</b> cuando te sientas listo.
        </p> 
      </blockquote>   
    </div>
    <div class="col col-md-12" align="right">
      <!-- <button type="button" class="btn btn-warning btn-md" data-dismiss="modal">Cancelar <i class="fa fa-remove"></i></button> -->
      <button type="button" onclick="next_serie(5)" class="btn btn-success btn-md" >Continuar Serie V <i class="fa fa-check"></i></button>
    </div>
	<?php

}elseif (isset($_GET["serie"]) && $_GET["serie"] == 6) {
?>
	<div class="col col-md-12">
      <h3>SERIE VI</h3>
      <blockquote>
        <div align="justify">
          <p><strong>INSTRUCCIONES:</strong><br>
           Lee cada cuestión y anota la respuesta correcta como se muestra en los siguientes los ejemplos.</p>
        </div>
      </blockquote> 
      <blockquote>
        <p><strong>EJEMPLO:</strong></p>
        <div align="center">
          <img src="assets/bootstrap/images/img_sesiones/sesion_6.PNG" class="img-responsive">
        </div>
      </blockquote>
      <blockquote>
        <p align="center">
          El tiempo para resolver esta serie es de: <br>
          2 minutos para un total de 20 preguntas. <br>
          oprime el siguiente botón <b>Continuar Serie VI</b> cuando te sientas listo.
        </p> 
      </blockquote>   
    </div>
    <div class="col col-md-12" align="right">
      <!-- <button type="button" class="btn btn-warning btn-md" data-dismiss="modal">Cancelar <i class="fa fa-remove"></i></button> -->
      <button type="button" onclick="next_serie(6)" class="btn btn-success btn-md" >Continuar Serie VI <i class="fa fa-check"></i></button>
    </div>
<?php

}elseif (isset($_GET["serie"]) && $_GET["serie"] == 7) {
?>
	<div class="col col-md-12">
      <h3>SERIE VII</h3>
      <blockquote>
        <div align="justify">
          <p><strong>INSTRUCCIONES:</strong><br>
           Lee cada oración, selecciona la respuesta correcta y da clic sobre el circulo que corresponda a tu respuesta, tal como lo muestra el ejemplo:</p>
        </div>
      </blockquote> 
      <blockquote>
        <p><strong>EJEMPLO:</strong></p>
        <div align="center">
          <img src="assets/bootstrap/images/img_sesiones/sesion_7.PNG" class="img-responsive">
        </div>
      </blockquote>
      <blockquote>
        <p align="center">
          El tiempo para resolver esta serie es de: <br>
          2 minutos para un total de 20 preguntas. <br>
          oprime el siguiente botón <b>Continuar Serie VII</b> cuando te sientas listo.
        </p> 
      </blockquote>   
    </div>
    <div class="col col-md-12" align="right">
      <!-- <button type="button" class="btn btn-warning btn-md" data-dismiss="modal">Cancelar <i class="fa fa-remove"></i></button> -->
      <button type="button" onclick="next_serie(7)" class="btn btn-success btn-md" >Continuar Serie VII <i class="fa fa-check"></i></button>
    </div>
<?php

}elseif (isset($_GET["serie"]) && $_GET["serie"] == 8) {
?>
	<div class="col col-md-12">
      <h3>SERIE VIII</h3>
      <blockquote>
        <div align="justify">
          <p><strong>INSTRUCCIONES:</strong><br>
           Las palabras de cada una de las oraciones siguientes están mezcladas ordena mentalmente cada una de las oraciones,  si el significado de la oración es verdadero, haz clic sobre la palabra <b>VERDADERO</b>, si el significado es falso, haz clic sobre la palabra <b>FALSO</b></p>
        </div>
      </blockquote> 
      <blockquote>
        <p><strong>EJEMPLO:</strong></p>
        <div align="center">
          <img src="assets/bootstrap/images/img_sesiones/sesion_8.PNG" class="img-responsive">
        </div>
      </blockquote>
      <blockquote>
        <div align="justify">
          <p><b>Respuesta:</b><br>
            (LOS OIDOS SON PARA OIR) Y (LA POLVORA ES BUENA PARA COMER)
          </p>
        </div>
      </blockquote>
      <blockquote>
        <p align="center">
          El tiempo para resolver esta serie es de: <br>
          3 minutos para un total de 17 preguntas. <br>
          oprime el siguiente botón <b>Continuar Serie VIII</b> cuando te sientas listo.
        </p> 
      </blockquote>   
    </div>
    <div class="col col-md-12" align="right">
      <!-- <button type="button" class="btn btn-warning btn-md" data-dismiss="modal">Cancelar <i class="fa fa-remove"></i></button> -->
      <button type="button" onclick="next_serie(8)" class="btn btn-success btn-md" >Continuar Serie VIII <i class="fa fa-check"></i></button>
    </div>
<?php

}elseif (isset($_GET["serie"]) && $_GET["serie"] == 9) {
?>
	<div class="col col-md-12">
      <h3>SERIE IX</h3>
      <blockquote>
        <div align="justify">
          <p><strong>INSTRUCCIONES:</strong><br>
           selecciona la palabra que no corresponda con las demás del  renglón.</p>
        </div>
      </blockquote> 
      <blockquote>
        <p><strong>EJEMPLO:</strong></p>
        <div align="center">
          <img src="assets/bootstrap/images/img_sesiones/sesion_9.PNG" class="img-responsive">
        </div>
      </blockquote>
      <blockquote>
        <p align="center">
          El tiempo para resolver esta serie es de: <br>
          2 minutos para un total de 18 preguntas. <br>
          oprime el siguiente botón <b>Continuar Serie IX</b> cuando te sientas listo.
        </p> 
      </blockquote>   
    </div>
    <div class="col col-md-12" align="right">
      <!-- <button type="button" class="btn btn-warning btn-md" data-dismiss="modal">Cancelar <i class="fa fa-remove"></i></button> -->
      <button type="button" onclick="next_serie(9)" class="btn btn-success btn-md" >Continuar Serie IX <i class="fa fa-check"></i></button>
    </div>
<?php

}elseif (isset($_GET["serie"]) && $_GET["serie"] == 10) {
?>
	<div class="col col-md-12">
      <h3>SERIE X</h3>
      <blockquote>
        <div align="justify">
          <p><strong>INSTRUCCIONES:</strong><br>
           En cada renglón procura encontrar  como estan hechas las series, despues escribe en los cuadros de texto, los dos números que deban seguir en cada serie.</p>
        </div>
      </blockquote> 
      <blockquote>
        <p><strong>EJEMPLO:</strong></p>
        <div align="center">
          <img src="assets/bootstrap/images/img_sesiones/sesion_10.PNG" class="img-responsive">
        </div>
      </blockquote>
      <blockquote>
        <p align="center">
          El tiempo para resolver esta serie es de: <br>
          4 minutos para un total de 11 preguntas. <br>
          oprime el siguiente botón <b>Continuar Serie X</b> cuando te sientas listo.
        </p> 
      </blockquote>   
    </div>
    <div class="col col-md-12" align="right">
      <!-- <button type="button" class="btn btn-warning btn-md" data-dismiss="modal">Cancelar <i class="fa fa-remove"></i></button> -->
      <button type="button" onclick="next_serie(10)" class="btn btn-success btn-md" >Continuar Serie X <i class="fa fa-check"></i></button>
    </div>
<?php

}
?>