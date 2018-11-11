<?php 
session_start(); 
?>
<html>
<head>
<title>MENU</title>
</head>
<body>

<h1>Administrador: </h1>
<h2>
<?php 
if(isset($_SESSION['nombreUsuario'])){ 

    print_r( $_SESSION['nombreUsuario'] );
}
?>
</h2>
<p>This is a paragraph.</p>

</body>
</html>