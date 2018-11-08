<?php
/*session_start();
if(isset($_SESSION['nombreUsuario'])){
    echo "Sesion iniciada";
}*/
?>

<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type= "text/javascript" src= "js_scripts/validacion.js"></script>
    <title>QuickMeal</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        background-repeat: no-repeat;
        background-image: url('images/small.jpg'); 
    }

    @media only screen and (min-width: 400px) {
        body { 
           background-image: url('images/big1.jpg');
           background-attachment: fixed;
        }
    }
  })
});




    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <br><br><br><br><br><br><br><br><br><br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3" ><div class="text-left">
          <div id="indicaciones">
            <h3><FONT COLOR="white">QUIKMEAL</FONT></h3>
          </div>
        </div></div>
        </div>  
      </div>
      <div class="row">
        <div class="col-md-3" ><div class="text-left">
          <div id="formulario">
            <h4><FONT COLOR="white">  Nombre:</FONT><h5>
            <input REQUIRED  type="text"  id= "nombre"  size="26"/><br><br>
            <h4><FONT COLOR="white">  Código Mesero:</FONT><h5>
            <input REQUIRED  type="password"  id="codmesero"  style="-webkit-text-security: square;" size="26"/>
           
            <br><br>  
            <div class="row">
              <div align="center" class="col-md-3" >
                <span style="cursor:pointer" onclick="verifica_usuario()">
                  <img src="images/si.png" class="img-circle" alt="Close" width="50" height="50" border="1" solid="#122235">
                  <figcaption><FONT COLOR="white">Entrar</FONT></figcaption>
                </span>
              </div>
              <div align="center" class="col-md-3" >
                <span style="cursor:pointer">
                  <img src="images/h.png" class="img-circle" alt="Close" width="50" height="50" data-toggle="modal" data-target="#myModal">
                 <figcaption><FONT COLOR="white">Ayuda</FONT></figcaption>
                </span>
              </div>
              <div align="center" class="col-md-6">
              <a href="login_admin.php" align="center">
                <img src="images/addu.png" width="50" height="50" border="1" solid="#122235"><br>
                 <figcaption><FONT COLOR="white">Registrar meseros</FONT></figcaption>
              </a>
            </div>
            </div>
          </div>
        </div></div>
      </div>  
      <div class="row">
        <div class="col-md-3" ><div class="text-left">
          <div id="indicaciones">
            
          </div>
        </div>  
      </div>
    </div>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ayuda de inicio de sesión</h4>
        </div>
        <div class="modal-body">
          <p>En el cuadro correspondiente a nombre se deberá escribir el nombre del trabajador</p> 
          <p>En el siguiente cuadro teclee su código de mesero correspondiente</p>
          <p>finalmente de clic en el botón de a lado (el que tiene la palomita).</p>
          <p>Si usted es administrador de click en la opción de "Registrar Meseros".</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div> 
    </body>
</html>