<?php 
session_start(); 
?>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type= "text/javascript" src= "js_scripts/validacionRegistro.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title> Crea Tu Cuenta </title>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
				background-color: #fffdef;
    		color: #5a5a5a;
				background-repeat: no-repeat;
        background-image: url('images/s.jpg'); 
        background-position: top left; 
		}
		.headImg img{
			margin:0 37% 0 37%;
		}
		.col-md-5{
			border: 10px solid #c50000;
			margin: 0 30% 0 30%;
		}
		@media only screen and (min-width: 400px) {
        body { 
           background-repeat: no-repeat;
           background-image: url('images/b.jpg');
           background-position: top left; 
        }
    }
    </style>
</head>
<body>
	  <div class="row">
		  <div class="text-center"><h1>Registro de Mesero    </h1></div>
			<div class="headImg"><img src="images/logoHead-1.png" alt="logo" width="300px" height="300px"></div>
	  </div>

<form>
<div class="col-md-5">
	<br><br>
	<div class="col-md-2">Nombre:</div> <div class="col-md-8"><input REQUIRED type="text" id="nombre"/></div>
	<br></br>
	<br>
	<div class="col-md-2">Apellido Paterno:</div> <div class="col-md-8"><input REQUIRED type="text" id="apellidoP"/></div>
	<br></br>
	<br>
	<div class="col-md-2">Apellido Materno:</div> <div class="col-md-8"><input REQUIRED type="text" id="apellidoM"/></div>
	<br></br>
	<br>
	<div class="col-md-2">Hora de Entrada:</div> <div class="col-md-8"><input REQUIRED type="number" id="horaEntrada" min="1" max="24"/> horas</div>
	<br></br>
	<br>
	<div class="col-md-2">Hora de Salida:</div> <div class="col-md-8"><input REQUIRED type="number" id="horaSalida" min="1" max="24"/> horas</div>
	<br></br>
	<br>
	<div class="col-md-2">Sueldo:</div> <div class="col-md-8"><input REQUIRED type="text" id="sueldo"/></div>
	<br></br>
	<br>
	<div class="col-md-2">Codigo de Mesero:</div> <div class="col-md-8"><input REQUIRED type="password" id="codigoMesero_uno"/></div>
	<br></br>
	<br>
	<div class="col-md-2">Confirma Codigo de Mesero:</div> <div class="col-md-8"><input REQUIRED type="password"  id="codigoMesero_dos"/></div>
	<br></br><br></br>
	<div class="row">
	  <div align="center" class="col-md-3" >
		<span style="cursor:pointer" onclick="validarRegistro()">
		  <img src="images/createu.png" class="img-circle" alt="Close" width="50" height="50" border="1" solid="#122235">
		  <figcaption><FONT COLOR="navy">Registrar</FONT></figcaption>
		</span>
		</div>
		<div align="center" class="col-md-3" >
		<span style="cursor:pointer">
		  <img src="images/h.png" class="img-circle" alt="Close" width="50" height="50" data-toggle="modal" data-target="#myModal">
		 <figcaption><FONT COLOR="navy">Ayuda</FONT></figcaption>
		</span>
	  </div>
	</div>
</div>
<!--script>
function keyCode(event) {
    var x = event.keyCode;
    if (x == 13) {
    	validarRegistro();
    }
}
function validarRegistro(){
	var nombre = document.getElementById('nombre').value;
	var apellidoP= document.getElementById('apellidoP').value;
	var apellidoM= document.getElementById('apellidoM').value;
	var horaEntrada= document.getElementById('horaEntrada').value;
	var horaSalida= document.getElementById('horaSalida').value;
	var sueldo= document.getElementById('sueldo').value;
	var codigoMesero_uno= document.getElementById('codigoMesero_uno').value;
	var codigoMesero_dos= document.getElementById('codigoMesero_dos').value;
	
	var sigue=false;
	var longitud1=codigoMesero_uno.length;
	var longitud2=codigoMesero_dos.length;
	
	
	for(int i=0; i<longitud1; i++){
	    var aux1=codigoMesero_uno.charAt(i);
	    var aux2=codigoMesero_dos.charAt(i);
	    if(aux1 != aux2){
	        alert(" La confirmación del código es incorrecta");
	    }
	}
	
	if(longitud1 != longitud2){
		alert("Confirmación de código erronea");					
	}else{
		sigue=true;
	}
	if (sigue===true){
		$.ajax({
			url:"scripts/create_user.php",
			data: {nombre:nombre,apellidoP:apellidoP,apellidoM:apellidoM,horaEntrada:horaEntrada,horaSalida:horaSalida,sueldo:sueldo,codigoMesero_uno:codigoMesero_uno},
			type:"POST",
			success:function(data){
				if(data===true){
					alert("Has quedado Registrado en QuickMeal! ");
					window.location.href="home.php";
				}else{
				  	alert("Ocurrio un error al registrar sus datos");
				}
		  	}
	    })
	}
}
</script-->

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ayuda para el Resgistro</h4>
        </div>
        <div class="modal-body">
          <p>Completa el formulario ingresando los datos correspondientes al mesero que se desea registrar.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</form>
	
</body>
</html>