<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Inxait - Registrar</title>
	<?php include SRC_PATH."header.php";

	if(isset($resgitroSuccess)){
		echo '<div class="col-xs-12 alert alert-success" >'.$resgitroSuccess.'</div>';
	}
	 ?> 
	
	<div class="col-xs-6" >
		<div class="panel-body">
			    		<form role="form" method="POST" action="registro" id="register">
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
					    			<div class="form-group"><label>Cedula</label><span style="color:red;float: right;">*</span>
					    				<input type="number" name="cedula" id="cedula" class="form-control input-sm" placeholder="cedula" required>
					    			</div>
				    			</div>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group"><label>Nombre</label><span style="color:red;float: right;">*</span>
			                <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombres" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group"><label>Apellidos</label><span style="color:red;float: right;">*</span>
			    						<input type="text" name="apellido" id="apellido" class="form-control input-sm" placeholder="Apellidos" required>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group" ng-app="departamentoApp" ng-controller="deptoController"><label>Departamento</label><span style="color:red;float: right;">*</span>
			    						<select ng-model="selectedName" ng-options="item for item in names" name="departamento" id="departamento" class="form-control input-sm" required style="color:#949494!important"><option value="" >Seleccione un departamento</option> </select>
			    					</div>
			    				</div>
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<div id="resultadoCiudad"></div>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group"><label>Celular</label><span style="color:red;float: right;">*</span>
			    				<input type="number" name="celular" id="celular" class="form-control input-sm" placeholder="Celular" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group"><label>Correo Electrónico</label><span style="color:red;float: right;">*</span>
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Correo Electrónico" required>
			    					</div>
			    				</div>
			    			</div>
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		</form>
			    	</div>
	</div>
<?php include SRC_PATH."footer.php"; ?>