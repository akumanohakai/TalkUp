<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script>
	function play(parametro)
	{
       var audio = document.getElementById(parametro);
       audio.play();
    }
  </script>
  <script>
	function stop(parametro)
	{
       var audio = document.getElementById(parametro);
       audio.pause();
	   audio.currentTime = 0;
    }
  </script>
<style>
[type=radio] { 
  position: relative;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + img {
  outline: 6px solid Green;
}
body{
	background-color: transparent;
}
</style> 
<body>
<div style="min-width: 800px; max-width: 800px; min-height:490px; max-height:490px; margin:0 auto;">
<div class="" style="min-width: 800px; max-width: 800px; min-height:490px; max-height:490px; background: url('bsase.png'); background-repeat: no repeat; background-size:cover; text-align: center">
	<form id="regiration_form" novalidate action="action"  method="post">
	
		<!- EMPEZAR ->
		<fieldset style="margin: 0; padding: 0; text-align: center">
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/imgprincipal.png">
			</div>
			<!- BIEN ->
			<input style="position: absolute; bottom: 25%; left: 46%;" type="button" onclick="play('quesonlasemociones')" class="next btn" value="Empezar">
			<audio id="titulo" src="<?php echo base_url();?>/juegos/memoria/audio/titulo.mp3" ></audio>
			<audio id="quesonlasemociones" src="<?php echo base_url();?>/juegos/memoria/audio/intro.mp3" ></audio>
		</fieldset>
		
		<!- QUE SON LAS EMOCIONES ->
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/step2.png">
			</div>
			<input style="position:  absolute; bottom: 20%; left: 15.5%;" onclick="play('titulo'); stop('quesonlasemociones');"class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('tehasfijadoalgunavez'); stop('quesonlasemociones');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="tehasfijadoalgunavez" src="<?php echo base_url();?>/juegos/memoria/audio/step2.mp3" ></audio>
		</fieldset>
		
		<!- TE HAS FIJADO ALGUNA VEZ ->
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/step3.png">
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('quesonlasemociones'); stop('tehasfijadoalgunavez');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('lasemocionesdiferentes'); stop('tehasfijadoalgunavez');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="lasemocionesdiferentes" src="<?php echo base_url();?>/juegos/memoria/audio/step3.mp3" ></audio>
		</fieldset>
				
		<!- LAS EMOCIONES DIFERENTES ->
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/step4.png">
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('tehasfijadoalgunavez'); stop('lasemocionesdiferentes');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('introalegria'); stop('lasemocionesdiferentes');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="introalegria" src="<?php echo base_url();?>/juegos/memoria/audio/alegriaintro.mp3" ></audio>
		</fieldset>
		
		<!- INTRO ALEGRIA ->
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/step5.png">
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('lasemocionesdiferentes'); stop('introalegria');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('alegria'); stop('introalegria');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="alegria" src="<?php echo base_url();?>/juegos/memoria/audio/alegria.mp3" ></audio>
		</fieldset>
		
		<!- ALEGRIA ->
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/step6.png">
			</div>
			<div class="form-group">
				<label>
				  <input type="radio" name="alegria" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/alegria1.png">
				</label>
				<label>
				  <input type="radio" name="alegria" value="1">
				  <img src="<?php echo base_url();?>/juegos/memoria/alegria2.png">
				</label>
				<label>
				  <input type="radio" name="alegria" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/alegria3.png">
				</label>
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('introalegria'); stop('alegria');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('introtristeza'); stop('alegria');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="introtristeza" src="<?php echo base_url();?>/juegos/memoria/audio/tristezaintro.mp3" ></audio>
		</fieldset>
		
		<!- INTRO TRISTEZA ->		
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/step8.png">
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('alegria'); stop('introtristeza');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('tristeza'); stop('introtristeza');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="tristeza" src="<?php echo base_url();?>/juegos/memoria/audio/tristeza.mp3" ></audio>
		</fieldset>
		
		
		<!- TRISTEZA ->
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/tristeza.png">
			</div>
			<div class="form-group">
				<label>
				  <input type="radio" name="tristeza" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/tristeza1.png">
				</label>
				<label>
				  <input type="radio" name="tristeza" value="1">
				  <img src="<?php echo base_url();?>/juegos/memoria/tristeza2.png">
				</label>
				<label>
				  <input type="radio" name="tristeza" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/tristeza3.png">
				</label>
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('introtristeza'); stop('tristeza');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('introsorpresa'); stop('tristeza');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="introsorpresa" src="<?php echo base_url();?>/juegos/memoria/audio/sorpresaintro.mp3" ></audio>
		</fieldset>		
		
		<!- INTRO SORPRESA ->	
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/step11.png">
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('tristeza'); stop('introsorpresa');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('sorpresa'); stop('introsorpresa');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="sorpresa" src="<?php echo base_url();?>/juegos/memoria/audio/sorpresa.mp3" ></audio>			
		</fieldset>
		
		<!- SORPRESA ->	
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/sorpresa.png">
			</div>
			<div class="form-group">
				<label>
				  <input type="radio" name="sorpresa" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/sorpresa1.png">
				</label>
				<label>
				  <input type="radio" name="sorpresa" value="1">
				  <img src="<?php echo base_url();?>/juegos/memoria/sorpresa2.png">
				</label>
				<label>
				  <input type="radio" name="sorpresa" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/sorpresa3.png">
				</label>
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('introsorpresa'); stop('sorpresa');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('introasco'); stop('sorpresa');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="introasco" src="<?php echo base_url();?>/juegos/memoria/audio/ascointro.mp3" ></audio>			
		</fieldset>
		
		<!- INTRO ASCO ->			
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/step14.png">
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('sorpresa'); stop('introasco');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('asco'); stop('introasco');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="asco" src="<?php echo base_url();?>/juegos/memoria/audio/asco.mp3" ></audio>			
		</fieldset>
		
		<!- ASCO ->		
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/asco.png">
			</div>
			<div class="form-group">
				<label>
				  <input type="radio" name="asco" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/asco1.png">
				</label>
				<label>
				  <input type="radio" name="asco" value="1">
				  <img src="<?php echo base_url();?>/juegos/memoria/asco2.png">
				</label>
				<label>
				  <input type="radio" name="asco" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/asco3.png">
				</label>
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('introasco'); stop('asco');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('introenfado'); stop('asco');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="introenfado" src="<?php echo base_url();?>/juegos/memoria/audio/enfadointro.mp3" ></audio>			
		</fieldset>
		
		<!- INTRO ENFADO ->			
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/step17.png">
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('asco'); stop('introenfado');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('enfado'); stop('introenfado');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="enfado" src="<?php echo base_url();?>/juegos/memoria/audio/enfado.mp3" ></audio>			
		</fieldset>
		
		<!- ENFADO ->		
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/enfado.png">
			</div>
			<div class="form-group">
				<label>
				  <input type="radio" name="enfado" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/enfado1.png">
				</label>
				<label>
				  <input type="radio" name="enfado" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/enfado2.png">
				</label>
				<label>
				  <input type="radio" name="enfado" value="1">
				  <img src="<?php echo base_url();?>/juegos/memoria/enfado3.png">
				</label>
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('introenfado'); stop('enfado');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('introdolor'); stop('enfado');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="introdolor" src="<?php echo base_url();?>/juegos/memoria/audio/dolorintro.mp3" ></audio>			
		</fieldset>		
		
		<!- INTRO DOLOR ->		
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/step20.png">
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('enfado'); stop('introdolor');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('dolor'); stop('introdolor');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="dolor" src="<?php echo base_url();?>/juegos/memoria/audio/dolor.mp3" ></audio>			
		</fieldset>
		
		<!- DOLOR ->	
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/dolor.png">
			</div>
			<div class="form-group">
				<label>
				  <input type="radio" name="dolor" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/dolor1.png">
				</label>
				<label>
				  <input type="radio" name="dolor" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/dolor2.png">
				</label>
				<label>
				  <input type="radio" name="dolor" value="1">
				  <img src="<?php echo base_url();?>/juegos/memoria/dolor3.png">
				</label>
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('introdolor'); stop('dolor');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('introverguenza'); stop('dolor');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="introverguenza" src="<?php echo base_url();?>/juegos/memoria/audio/verguenzaintro.mp3" ></audio>			
		</fieldset>		
		
		<!- INTRO VERGUENZA ->	
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/step23.png">
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('dolor'); stop('introverguenza');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('verguenza'); stop('introverguenza');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="verguenza" src="<?php echo base_url();?>/juegos/memoria/audio/verguenza.mp3" ></audio>			
		</fieldset>
		
		<!- VERGUENZA ->	
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/verguenza.png">
			</div>
			<div class="form-group">
				<label>
				  <input type="radio" name="verguenza" value="1">
				  <img src="<?php echo base_url();?>/juegos/memoria/verguenza1.png">
				</label>
				<label>
				  <input type="radio" name="verguenza" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/verguenza2.png">
				</label>
				<label>
				  <input type="radio" name="verguenza" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/verguenza3.png">
				</label>
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('introverguenza'); stop('verguenza');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('intromiedo'); stop('verguenza');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="intromiedo" src="<?php echo base_url();?>/juegos/memoria/audio/miedointro.mp3" ></audio>			
		</fieldset>
		
		<!- INTRO MIEDO ->	
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/step26.png">
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('verguenza'); stop('intromiedo');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('miedo'); stop('intromiedo');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="miedo" src="<?php echo base_url();?>/juegos/memoria/audio/miedo.mp3" ></audio>			
		</fieldset>
		
		<!- MIEDO ->	
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/miedo.png">
			</div>
			<div class="form-group">
				<label>
				  <input type="radio" name="miedo" value="1">
				  <img src="<?php echo base_url();?>/juegos/memoria/miedo1.png">
				</label>
				<label>
				  <input type="radio" name="miedo" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/miedo2.png">
				</label>
				<label>
				  <input type="radio" name="miedo" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/miedo3.png">
				</label>
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('intromiedo'); stop('miedo');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('introorgullo'); stop('miedo');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="introorgullo" src="<?php echo base_url();?>/juegos/memoria/audio/orgullointro.mp3" ></audio>			
		</fieldset>		
		
		<!- INTRO ORGULLO ->	
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/step29.png">
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('miedo'); stop('introorgullo');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('orgullo'); stop('introorgullo');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="orgullo" src="<?php echo base_url();?>/juegos/memoria/audio/orgullo.mp3" ></audio>	
		</fieldset>
		
		<!- ORGULLO ->	
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/orgullo.png">
			</div>
			<div class="form-group">
				<label>
				  <input type="radio" name="orgullo" value="1">
				  <img src="<?php echo base_url();?>/juegos/memoria/orgullo1.png">
				</label>
				<label>
				  <input type="radio" name="orgullo" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/orgullo2.png">
				</label>
				<label>
				  <input type="radio" name="orgullo" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/orgullo3.png">
				</label>
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('introorgullo'); stop('orgullo');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('intropensamiento'); stop('orgullo');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="intropensamiento" src="<?php echo base_url();?>/juegos/memoria/audio/pensamientointro.mp3" ></audio>	
		</fieldset>		
		
		<!- INTRO PENSAMIENTO ->	
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/step32.png">
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('orgullo'); stop('intropensamiento');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="play('pensamiento'); stop('intropensamiento');" class="next btn btn-sm btn-info" value="Siguiente" />
			<audio id="pensamiento" src="<?php echo base_url();?>/juegos/memoria/audio/pensamiento.mp3" ></audio>	
		</fieldset>
		
		<!- PENSAMIENTO ->	
		<fieldset style="margin: 0; padding: 0; text-align: center" >
			<div class="form-group">
				<img src="<?php echo base_url();?>/juegos/memoria/pensamiento.png">
			</div>
			<div class="form-group">
				<label>
				  <input type="radio" name="pensamiento" value="1">
				  <img src="<?php echo base_url();?>/juegos/memoria/pensamiento1.png">
				</label>
				<label>
				  <input type="radio" name="pensamiento" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/pensamiento2.png">
				</label>
				<label>
				  <input type="radio" name="pensamiento" value="0">
				  <img src="<?php echo base_url();?>/juegos/memoria/pensamiento3.png">
				  </label>
			</div>
			<input style="position: absolute; bottom: 20%; left: 15.5%;" onclick="play('intropensamiento'); stop('pensamiento');" class="previous btn btn-sm btn-default" value="Anterior" />
			<input style="position: absolute; bottom: 20%; right: 15.5%;" onclick="stop('pensamiento');" type="submit" name="submit" class="next btn btn-sm btn-info" value="Finalizar" />
			
		</fieldset>
		
	</form>
</div>
</div>

<div class="progress" style="position: absolute; bottom: 11%; left: 15.5%; width: 69%;">
	<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</body>
<style type="text/css">
  #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }
  </style>
  <script>
  $(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  }
});
  </script>