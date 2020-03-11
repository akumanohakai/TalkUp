
<div style="margin-top: 5%; margin-left: 25%; margin-right: 1%">

<div class="row" style="margin-bottom: 3%">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<!-- FORMULARIO PARA BUSQUEDA -->
		<div class="input-group">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
			<input id="searchusuario" class="form-control" width="100%" name="keywords" type="search" placeholder="Buscar" />  
		</div>
	</div>
</div>

<div>
	<div class="panel panel-default">
	<div class="panel-heading"><b>Puntajes</b>	
	</div>
	<?php if(count($usuario)>0):?>
	<table style="font-size: 13px" class="table table-hover">
		<tr>
			<b>
				<th width="22.5%">Juego</th>
				<th width="22.5%">Usuario</th>
				<th width="22.5%">Puntaje</th>
				<?php if($_SESSION['idrol']=="1"):?>
				<th width="10%" colspan="2">Opciones</th>
				<?php endif; ?>
			</b>
		</tr>
		<?php 
		foreach($usuario as $c):?>
		<tr style="background-color: #FBF9F6" class="susuario">
			<td class="IDJUEGO">	
				<?php 
				foreach($selectJuego as $d):
				?>
				<?= $d->ID == $c->IDJUEGO ? $d->DESCRIPCION : "" ?>					
				<?php 
				endforeach; 
				?>
			</td> 	
			<td class="IDUSUARIO">	
				<?php 
				foreach($selectUsuario as $d):
				?>
				<?= $d->ID == $c->IDUSUARIO ? $d->NOMBRE : "" ?>					
				<?php 
				endforeach; 
				?>				
				<?php 
				foreach($selectUsuario as $d):
				?>
				<?= $d->ID == $c->IDUSUARIO ? $d->APELLIDO : "" ?>					
				<?php 
				endforeach; 
				?>
			</td> 			
			<td class="PUNTUACION"><?php echo $c->PUNTUACION;?> puntos</td> 
			<?php if($_SESSION['idrol']=="1"):?>
			<td>
				<a href="<?php echo base_url();?>control/eliminarpuntaje/<?php echo $c->ID; ?>" data-toggle="tooltip" data-placement="top" title="Eliminar">
					<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				</a>			
			</td>
			<?php endif;?>
		</tr>		
		<?php endforeach;?>
		<?php else:?>
			<h2 align="center">
				NO HAY REGISTROS
			</h2>
		<?php endif;?>
	</table>
	</div>
</div>

<div>