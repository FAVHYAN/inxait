</div>
<footer>

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

			    				<script>

										    $("#cedula").keypress(function (){
										        this.value = (this.value + '').replace(/[^0-9]/g, '');
										      });
										    $("#celular").keypress(function (){
										        this.value = (this.value + '').replace(/[^0-9]/g, '');
										      });
											$('#correo').change(function (e) {
											    var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
											    var EmailId = this.value;
											    if (emailRegex.test(EmailId))
											        this.style.backgroundColor = "";
											    else
											        this.style.backgroundColor = "LightPink";
											});
										$("#nombre").keypress(function (key) {
									            window.console.log(key.charCode)
									            if ((key.charCode < 97 || key.charCode > 122)//letras mayusculas
									                && (key.charCode < 65 || key.charCode > 90) //letras minusculas
									                && (key.charCode != 45) //retroceso
									                && (key.charCode != 241) //ñ
									                 && (key.charCode != 209) //Ñ
									                 && (key.charCode != 32) //espacio
									                 && (key.charCode != 225) //á
									                 && (key.charCode != 233) //é
									                 && (key.charCode != 237) //í
									                 && (key.charCode != 243) //ó
									                 && (key.charCode != 250) //ú
									                 && (key.charCode != 193) //Á
									                 && (key.charCode != 201) //É
									                 && (key.charCode != 205) //Í
									                 && (key.charCode != 211) //Ó
									                 && (key.charCode != 218) //Ú
									 
									                )
									                return false;
									        });
										$("#apellido").keypress(function (key) {
									            window.console.log(key.charCode)
									            if ((key.charCode < 97 || key.charCode > 122)//letras mayusculas
									                && (key.charCode < 65 || key.charCode > 90) //letras minusculas
									                && (key.charCode != 45) //retroceso
									                && (key.charCode != 241) //ñ
									                 && (key.charCode != 209) //Ñ
									                 && (key.charCode != 32) //espacio
									                 && (key.charCode != 225) //á
									                 && (key.charCode != 233) //é
									                 && (key.charCode != 237) //í
									                 && (key.charCode != 243) //ó
									                 && (key.charCode != 250) //ú
									                 && (key.charCode != 193) //Á
									                 && (key.charCode != 201) //É
									                 && (key.charCode != 205) //Í
									                 && (key.charCode != 211) //Ó
									                 && (key.charCode != 218) //Ú
									 
									                )
									                return false;
									        });
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
										}else if($("#HD").is(":checked") == false){
											$("#HD").focus();
											return false;
										        }else{
											return true;
										}
									});

									// llamado del dropdown ciudad por medio del departamento
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
								// llamado del dropdown departamento
								var app = angular.module('departamentoApp', []);
								app.controller('deptoController', function($scope) {
								    $scope.names = ["<?= $nombre_depto ?>","<?= $nombre_depto_1 ?>","<?= $nombre_depto_2 ?>"];
								});
								
								// eliminar combo de alerta
								 	setTimeout(function(){
								 		$("#registroCreado").fadeOut(500, function(){ $(this).remove();});;
									}, 3000);
							</script> 
</footer>			
</body>
</html>