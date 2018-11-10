<?php 
$conexion=mysqli_connect("localhost","id6785909_quickmeal","heal2015","id6785909_quickmeal");
if(!$conexion){
    //echo "Error...";
    echo $conexion->error;
}
else{
    mysqli_query($conexion, "SET NAMES 'utf8'");
    mysqli_set_charset($conexion, "utf8");
}



$nombre= $_POST['nombrePHP'];
$codmesero= $_POST['codmeseroPHP'];


$verifNombre = $conexion->query("SELECT * FROM trabajador WHERE nombre='$nombre'");
$num_rows = $verifNombre->num_rows;

$verifCodmes = $conexion->query("SELECT * FROM mesero WHERE codigoMes='$codmesero'");
$num_rows2 = $verifCodmes->num_rows;

if($num_rows > 0 && $num_rows2 > 0){
    $row = $verifNombre->fetch_array(MYSQLI_ASSOC);
    $row2 = $verifCodmes->fetch_array(MYSQLI_ASSOC);

    if($row['idTrabajador'] == $row2['idTrabajador']){
        session_start();
        $_SESSION['nombreUsuario']=$row['nombre'];
        session_write_close();//cerramos creación de variables de sesión*/
        $result=1;
    }
}
else{
       
    $result=0;
}


echo $result;
?>