
<div style="margin-top: 5%; margin-left: 25%; margin-right: 1%">
<?php
	if(isset($usuario_actualizar))
	{
		$id=$this->uri->segment(3);
		$nick=$usuario_actualizar->NICK;
		$clave=$usuario_actualizar->CLAVE;
		$nombre=$usuario_actualizar->NOMBRE;
		$apellido=$usuario_actualizar->APELLIDO;
		$direccion=$usuario_actualizar->DIRECCION;
		$telefono=$usuario_actualizar->TELEFONO;
		$email=$usuario_actualizar->EMAIL;
		$idrol=$usuario_actualizar->IDROL;
		$idgrupo=$usuario_actualizar->IDGRUPO;
		$accionusuarios='actualizarusuario';
?>
	<script>
		$(document).ready(function(){
			openFormusuario();
		});
	</script>
<?php		
	}
	else
	{
		$id='';
		$nick='';
		$clave='';
		$nombre='';
		$apellido='';
		$direccion='';
		$telefono='';
		$email='';
		$idrol='';
		$idgrupo='';
		$accionusuarios='insertarusuario';
	}
?>
<!-- DESHABILITA EL BACKGROUND DEL POP-UP DEL FORMULARIO -->
<div id="overlayUsuario"></div>
<div class="row" style="margin-bottom: 3%">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<!-- FORMULARIO PARA BUSQUEDA -->
		<div class="input-group">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
			<input id="searchusuario" class="form-control" width="100%" name="keywords" type="search" placeholder="Buscar" />  
		</div>
	</div>
</div>
<!-- FORMULARIO PARA CAPTURAR DATOS -->
<form action="<?php echo base_url();?>control/<?php echo $accionusuarios; ?>" method="post">

	<input type="hidden" name="ID" value="<?php echo $id;?>"/>
	
	<div style="margin-left: 30.5%; margin-right: 30.5%" class="form-popup-usuario animate panel panel-default" id="formUsuario">
	
		<div class="panel-heading">Usuarios</div>
		
		<div class="panel-body">
		
			<span class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
				<label>Nick</label>
				<input class="form-control" id="inputnick" style="text-align:center;" type="text" name="NICK" value="<?php echo $nick;?>"/>
			</span>
			
			<span class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
				<label>Clave</label>
				<input class="form-control" id="inputclave" style="text-align:center;" type="password" name="CLAVE" value="<?php echo $clave;?>"  required />
			</span>
						
			<span class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
				<label>Nombre</label>
				<input class="form-control" id="inputnombre" style="text-align:center;" type="text" name="NOMBRE" value="<?php echo $nombre;?>"   required/>
			</span>
			
			<span class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
				<label>Apellido</label>
				<input class="form-control" id="inputapellido" style="text-align:center;" type="text" name="APELLIDO" value="<?php echo $apellido ?>" required />
			</span>
			
			<span class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
				<label>Direccion</label>
				<input class="form-control" id="inputdirrecion" style="text-align:center;" type="text" name="DIRECCION" value="<?php echo $direccion;?>" required />
			</span>
						
			<span class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
				<label>Telefono</label>
				<input class="form-control" id="inputtelefono" style="text-align:center;" type="number" name="TELEFONO" value="<?php echo $telefono;?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="8" required />
			</span>
			
			<span class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
				<label>E-mail</label>
				<input class="form-control" id="inputemail" style="text-align:center;" type="email" name="EMAIL" value="<?php echo $email ?>" required />
			</span>
						
			<span class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
				<label>Rol</label>
				<select style="width: 100%; margin: 0 auto;" class="form-control" name="IDROL" required>
					<option value="" disabled selected>Seleccione</option>
					<?php foreach($selectRol as $q):?>
					<option type="int" value="<?php echo $q->ID;?>" <?= $q->ID == $idrol ? "selected =''" : "" ?>>
					<?php echo $q->DESCRIPCION?>
					</option>
					<?php endforeach; ?>
				</select>
			</span>
			
			<span class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
				<label>Grupo</label>
				<select style="width: 100%; margin: 0 auto;" class="form-control" name="IDGRUPO" required>
					<option value="" disabled selected>Seleccione</option>
					<?php foreach($selectGrupo as $q):?>
					<option type="int" value="<?php echo $q->ID;?>" <?= $q->ID == $idgrupo ? "selected =''" : "" ?>>
					<?php echo $q->DESCRIPCION?>
					</option>
					<?php endforeach; ?>
				</select>
			</span>
			
		</div>
		
		<div class="panel-footer">
			<input class="btn btn-sm btn-primary" type="submit" name="guardar" value="Guardar"/>
			<a href="<?php echo site_url('control/usuario');?>" class="btn btn-sm btn-default" onclick="closeFormusuario()" >Cancelar</a>
		</div>
		
	</div>	
	
</form>

<div>
	<div class="panel panel-default">
	<div class="panel-heading"><b>Usuarios</b>	
	<?php if($_SESSION['idrol']=="1"):?>
		<a style="float: right" onclick="openFormusuario()">
			<span class="glyphicon glyphicon-plus-sign"></span>&nbsp;
		</a>
	<?php endif; ?>
	</div>
	<?php if(count($usuario)>0):?>
	<table style="font-size: 13px" class="table  table-hover">
		<tr>
			<b>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Direccion</th>
				<th>Email</th>
				<th>Telefono</th>
				<th>Rol</th>
				<th>Grupo</th>
				<?php if($_SESSION['idrol']=="1"):?>
				<th width="10%" colspan="2">Opciones</th>
				<?php endif; ?>
			</b>
		</tr>
		<?php 
		foreach($usuario as $c):?>
		<tr style="background-color: #FBF9F6" class="susuario">
			<td class="NOMBRE">	<?php echo $c->NOMBRE;?></td> 
			<td class="APELLIDO">	<?php echo $c->APELLIDO;?></td> 
			<td class="DIRECCION">	<?php echo $c->DIRECCION;?></td> 
			<td class="EMAIL">	<?php echo $c->EMAIL;?></td> 
			<td class="TELEFONO">	<?php echo $c->TELEFONO;?></td> 
			<td class="IDROL">	
				<?php 
				foreach($selectRol as $d):
				?>
				<?= $d->ID == $c->IDROL ? $d->DESCRIPCION : "" ?>					
				<?php 
				endforeach; 
				?>
			</td> 
			<td class="IDGRUPO">			
				<?php 
				foreach($selectGrupo as $d):
				?>
				<?= $d->ID == $c->IDGRUPO ? $d->DESCRIPCION : "" ?>					
				<?php 
				endforeach; 
				?>
			</td> 
			<?php if($_SESSION['idrol']=="1"):?>
			<!-- CONTROLES PARA EDITAR, ELIMINAR O MOSTRAR MAS DETALLES DE CADA FILA-->
			<td>
				<a href="<?php echo base_url();?>control/traerusuario/<?php echo $c->ID; ?>" data-toggle="tooltip" data-placement="top" title="Modificar">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>			
			</td>
			<td>
				<a href="<?php echo base_url();?>control/eliminarusuario/<?php echo $c->ID; ?>" data-toggle="tooltip" data-placement="top" title="Eliminar">
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