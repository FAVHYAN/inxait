<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Inxait - Registrar</title>
	<?php include SRC_PATH."header.php";

	if(isset($resgitroSuccess)){
		echo '<div class="col-xs-12 alert alert-success text-center" id="registroCreado" >'.$resgitroSuccess.'</div>';
	}
	 ?> 
	<div class="col-xs-6  col-md-offset-3" >
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
			    			<div class="row">	

			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group"><label>Habeas Data (“Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de datos personales”.</label><button type="button" class="center-block btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Haga clic aqui</button><span style="color:red;float: right;">*</span>
			    				<input type="checkbox" name="HD" id="HD" class="form-control input-sm" >
			    				<!-- Modal -->
										<div id="myModal" class="modal fade" role="dialog">
										  <div class="modal-dialog">

										    <!-- Modal content-->
										    <div class="modal-content">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal">&times;</button>
										        <h4 class="modal-title">Habeas Data</h4>
										      </div>
										      <div class="modal-body">
										        <p><iframe src="http://www.robertexto.com/archivo9/habeas_data.htm" style="width:100%"></iframe></p>
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										      </div>
										    </div>

										  </div>
										</div>
									</div>
			    				</div>
			    			</div>
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		</form>
			    	</div>
				</div>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>						
<?php include SRC_PATH."footer.php"; ?>
