<?php
session_start();
if($_SESSION['autorizado']<>1){
    header("Location: index.php");
}
error_reporting(0);
require("class_lib/conexion_sis.php");
require('class_lib/funciones.php');  

$cn=new Conexion();
$usuario=($_SESSION['id_sesion']);   

$tipouser=($_SESSION['tipouser']);


$sede=($_SESSION['bodega']);
$cai=$_POST['cai'];
$item=$_POST['item'];
$usuario=($_SESSION['id_sesion']);
$query="UPDATE [dbo].[@INCODEMOB_LECTURA_PACKING] SET Status='01',CodUser='$usuario' WHERE CodeBar='$cai' AND DocEntry='$item'";
echo '<script language="javascript">console.log("Query:", "'.$query.'");</script>';

$registros = sqlsrv_query($cn->getConecta(), $query);
if( $registros === false ){
    echo "error al insertar ..";
} else {
}
?>


