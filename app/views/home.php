<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Inxait</title>
<?php include SRC_PATH."header.php"; ?> 

<div class="container-fluid">

	<div class="text-center">
		<h1>Este aplicacivo se realiza con el correspondiente fin de almacenar datos de los usuarios de automotores</h1>
		
		<h3>Ultimos concursantes ganadores</h3>
		<p>
			<?= $resgitroTabla ?>	
		</p>
		<a href="descargar" class="btn btn-primary">Descargar</a>
	</div>
</div>


<?php include SRC_PATH."footer.php"; ?>