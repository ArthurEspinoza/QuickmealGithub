<?php 
session_start(); 
?>
<html>
<head>
<title>MENU</title>
</head>
<body>

<h1>MESERO: </h1>
<h2>
<?php 
if(isset($_SESSION['nombreUsuario'])){ 

    print_r( $_SESSION['nombreUsuario'] );
?>

<a href="https://quickmeal.000webhostapp.com/scripts/logout.php"ALIGN=RIGHT>Cerrar Sesion</a>
<?php 
}
?>
</h2>
<p>This is a paragraph.</p>

</body>
</html>