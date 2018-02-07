<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Inxait - <?= $nombre ?> 	<?= $apellido ?></title>
	<?php include SRC_PATH."header.php"; ?>
		<h1 class="text-center">Datos del usuario Ganador!!!</h1>
			<div class="col-xs-6  col-md-offset-3" >
				<div class="form-group">
					<label>Fecha de registro: </label>
					<?= $fecha ?>
				</div>
				<div class="form-group">
					<label>Cedula: </label>
					<?= $cedula ?>
				</div>
				<div class="form-group">
					<label>Nombre: </label>
					<?= $nombre ?> 	<?= $apellido ?>
				</div>
				<div class="form-group">
					<label>Departamento: </label>
					<?= $departamento ?>
				</div>
				<div class="form-group">
					<label>Ciudad: </label>
					<?= $ciudad ?>
				</div>
				<div class="form-group">
					<label>Celular: </label>
					<?= $celular ?>
				</div>
				<div class="form-group">
					<label>Correo: </label>
					<?= $correo ?>
				</div>
						<div class="col-xs-12 text-center">
							<a href="../descargarUsuario/<?= $cedula ?>" class="btn btn-primary">Descargar</a>
						</div>
			</div>

<?php include SRC_PATH."footer.php"; ?>