<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script>
	function playa()
	{
       var audio = document.getElementById('titulo');
       audio.play();
    }
  </script>
<body style="background:  #66ccff;">
<div class="cloud"></div>
<div class="sun">
    <div class="sunflares"></div>
    <div class="face"></div>
</div>
<body>
<nav class="navbar navbar-default" style="background-color: transparent; border: 0px;">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo site_url('control/index');?>" onclick="localStorage.setItem('activeTab', '')"><u>Talk Up!</u></a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><u><?=$_SESSION["name"]; ?> <?=$_SESSION["last"]; ?></u>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<!-- <li><a href="#"><u>Configuracion</u></a></li>
					<li class="divider"></li> -->
					<li><a href="<?php echo site_url('control/salir') ?>" onclick="localStorage.setItem('activeTab', '')"><u>Salir</u></a></li>
				</ul>
			</li>
		</ul>
		
		<?php if(($_SESSION["idrol"] == '1')or($_SESSION["idrol"] == '2')):?>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><u>Administrar</u>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <li id="tabUsuarios"><a class="btn btn-block" href="<?php echo site_url('control/usuario') ?>">Usuarios</a></li>
				  <li id="tabPuntajes"><a class="btn btn-block" href="<?php echo site_url('control/puntaje') ?>">Puntajes</a></li>
				</ul>
			</li>
		</ul>
		<?php endif;?>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><u>Juegos</u>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <li id="tabEmociones"><a class="btn btn-block" onclick="playa();" href="<?php echo site_url('control/juego') ?>" >Emociones</a></li>
				  <audio id="titulo" src="<?php echo base_url();?>/juegos/memoria/audio/titulo.mp3"></audio>
				  <li id="tabMemorias"><a class="btn btn-block" href="<?php echo site_url('control/memo') ?>" >Memoria</a></li>		
				  <li id="tabOvejas"><a class="btn btn-block" href="<?php echo site_url('control/pareja') ?>" >Cada oveja con su pareja</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>