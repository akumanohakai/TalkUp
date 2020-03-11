
<div style="min-width: 30%; max-width: 20%; margin: 15% auto">
	
<form method="post" action="<?php echo base_url();?>">
<div class="panel panel-default" style="box-shadow: 2px 2px 5px #999;">
	<div class="panel-heading">Entrar</div>
	<div class="panel-body">
		<div class="center" style="border-radius: 100">
		</div>
		<span class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
			<label>Usuario</label>
			<input class="form-control" id="inputusuario" style="text-align:center;" type="text" name="USUARIO" value="" required placeholder="Usuario" />
		</span>
		<span class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
			<label>Clave</label>
			<input class="form-control" id="inputclave" style="text-align:center;" type="password" name="CLAVE" value="" required placeholder="Clave" />
		</span>
	</div>
	<div class="panel-footer">
		<input class="btn btn-sm btn-block btn-primary" type="submit" name="guardar" value="Entrar"/>
	</div>
</div>
</form>		