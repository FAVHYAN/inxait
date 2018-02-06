</div>
<footer>

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
   	
			    				<script>
			    					//validaciones del formulario
								$(document).ready(function(){
									$("#register").submit(function(){
										cedula = $("#cedula").val();
										nombre = $("#nombre").val();
										apellido = $("#apellido").val();
										departamento = $("#departamento").val();
										ciudad = $("#ciudad").val();
										celular = $("#celular").val();
										correo = $("#email").val();
										if(cedula == ""){
											$("#cedula").focus();
											return false;
										}else if(nombre == ""){
											$("#nombre").focus();
											return false;
										}else if(apellido == ""){
											$("#apellido").focus();
											return false;
										}else if(departamento == ""){
											$("#departamento").focus();
											return false;
										}else if(ciudad == ""){
											$("#ciudad").focus();
											return false;
										}else if(celular == ""){
											$("#celular").focus();
											return false;
										}else if(correo == ""){
											$("#email").focus();
											return false;
										}else{
											return true;
										}
									});
										$( "#departamento" ).change(function() {
										        var parametro = $( "#departamento" ).val();
										        $.ajax({
										                data:  {parametro:parametro},
										                url:   'ciudad',
										                type:  'post',
										                beforeSend: function () {
										                        $("#resultadoCiudad").html("Procesando, espere por favor...");
										                },
										                success:  function (response) {
										                        $("#resultadoCiudad").html(response);
										                }
										        });
										});
								});
								var app = angular.module('departamentoApp', []);
								app.controller('deptoController', function($scope) {
								    $scope.names = ["<?= $nombre_depto ?>","<?= $nombre_depto_1 ?>","<?= $nombre_depto_2 ?>"];
								});
								</script> 
</footer>			
</body>
</html>