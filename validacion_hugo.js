/*function keyCode(event) {
    var x = event.keyCode;
    if (x == 13) {
    	validarUsuario();
    }
}
function validarUsuario(){
	var usu=document.getElementById('usuario').value;
	var pass=document.getElementById('pass').value;
    var num = new RegExp("^[0-9]");
	var cantidad= usu.length;
	var continua=true;
	var i;
	for(i=0;i<cantidad;i++){
		var aux=usu.charAt(i);
		if(num.test(aux)===false){
			continua=false;
			break;
	    }
	}
	if (continua===true){
		if (pass!=="" && usu!==""){
			verifica_usuario();
		}else{
			alert("Escriba en los campos porfavor!");
		}
	}else{
		alert(" Usuario incorrecto, inserte solo numeros");
		document.getElementById("usuario").value = "";
		document.getElementById("pass").value = "";
	}
}
*/
function verifica_usuario(){
    var n = document.getElementById('nombre').value;
    var cm = document.getElementById('codmesero').value;
    //console.log(n + " " + cm);
    $.ajax({
	//	url:"scripts/check_user.php",
	    url: "scripts/validarUsuario.php",
		data: {nombrePHP:n, codmeseroPHP:cm},
		type:"POST",
		success:function(data){
			if(data == 1){
				/*if(data['admin']===true){
					window.location.href="control.php";
				}else{
					var id_user=data['id'];
					window.location.href="home.php?id="+id_user;
				}*/
					console.log("Exito");
                   // location.href="http://localhost/practicando/index.php";
                   window.location.href="menu.php";
				
			}else{
			  console.log("Error");
			}
	  	}
    })
}
