<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
 
 
<script src="https://cdn.rawgit.com/simonbengtsson/jsPDF/requirejs-fix-dist/dist/jspdf.debug.js"></script>
<script src="https://unpkg.com/jspdf-autotable@2.3.2/dist/jspdf.plugin.autotable.js"></script>

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
  outline: 6px solid #66ccff;
}
body{
	background-color: transparent;
}
</style> 

<div style="min-width: 800px; max-width: 800px; min-height:490px; max-height:490px; margin:0 auto;">
<div class="" style="min-width: 800px; max-width: 800px; min-height:490px; max-height:490px; background: url('s.png'); background-repeat: no repeat; background-size:cover; text-align: center">

<?php
	if((isset($_POST['alegria']))&&(isset($_POST['tristeza']))&&(isset($_POST['sorpresa']))&&(isset($_POST['asco']))&&(isset($_POST['enfado']))&&(isset($_POST['dolor']))&&(isset($_POST['verguenza']))&&(isset($_POST['miedo']))&&(isset($_POST['orgullo']))&&(isset($_POST['pensamiento'])))
	{
		
			$puntuacion=(($_POST['alegria']) +
			  ($_POST['tristeza'])+
			  ($_POST['sorpresa'])+
			  ($_POST['asco'])+
			  ($_POST['enfado'])+
			  ($_POST['dolor'])+
			  ($_POST['verguenza'])+
			  ($_POST['miedo'])+
			  ($_POST['orgullo'])+
			  ($_POST['pensamiento'])
			  );
	?>
	<div id="node">
		<table class="table" id="basic-table">
		
			<tr>
				<td>Reporte</td>
				<td></td>
			</tr>
			<tr>
				<td>Usuario</td>
				<td><?=$_SESSION['name']?> <?=$_SESSION['last']?></td>
			</tr>
			<tr>
				<td>Juego</td>
				<td>Emociones</td>
			</tr>
			<tr>
				<td>Puntuacion</td>
				<td><?=$puntuacion?></td>
			</tr>
		</table>
		<!-- FORMULARIO PARA CAPTURAR DATOS -->
		<form action="<?php echo base_url();?>control/insertarpuntaje" method="post">
			<input type="hidden" name="ID"/>
			<input type="hidden" name="IDUSUARIO" value="<?php echo $_SESSION['id'];?>"/>
			<input type="hidden" name="IDJUEGO" value="1"/>			
			<input type="hidden" name="PUNTUACION" value="<?php echo $puntuacion;?>"/>
			<input type="submit" name="guardar" value="Enviar puntaje"/>		
		</form>
	</div>
	<br>
		<button class="btn btn-block" onclick="javascript:generate()">Generar reporte</button>
	<?php
	}
	else
	{
		echo '<h1>Completa el juego</h1>';
		echo '<a class="btn btn-lg" href="juego">Regresar</a>';
	}
?>
</div>
</div>
<script>

function print(quality = 4) {
	const filename  = 'Reporte.pdf';
	html2canvas(document.querySelector('#node'), {scale: quality}).then(canvas => {
		let pdf = new jsPDF('p', 'mm', 'a4');
		pdf.addImage(canvas.toDataURL('image/png'), 'PNG', 10, 10);
		pdf.save(filename);
	});
}
function generate() {

  var doc = new jsPDF('p', 'pt');

	var res = doc.autoTableHtmlToJson(document.getElementById('basic-table'));
	doc.autoTable(res.columns, res.data, {margin: {top: 80}});

	var header = function(data) {
		doc.setFontSize(9);
		doc.setTextColor(40);
		doc.setFontStyle('normal');
		//doc.addImage(imgData, 'JPEG', data.settings.margin.left, 20, 70, 50);
		doc.text("                                      <?php echo 'Emitido por: '.$_SESSION['name'].' '.$_SESSION['last'];?>                                      <?php echo 'Fecha del reporte: '.date('Y-m-d');?>", data.settings.margin.left, 50);
	};

	var options = {
		beforePageContent: header,
		margin: 
		{
			top: 80
		}
	};
	  doc.autoTable(res.columns, res.data, options);
	  
	  doc.save("Reporte.pdf");
}
</script>