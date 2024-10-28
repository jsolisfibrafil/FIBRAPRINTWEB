<?php
session_start();
if($_SESSION['autorizado']<>1){
    header("Location: index.php");
}
error_reporting(0);
require("class_lib/conexion_sis.php");
$cn= new Conexion();
require("class_lib/funciones.php");

$usuario=($_SESSION['id_sesion']);
$tipouser=($_SESSION['tipouser']);
$item=$_POST['item'];

if ($tipouser=="1"){
    $cadena2="UPDATE [dbo].[@INCODEMOB_USER]  SET Estado_id='01' WHERE  Code='$item' ";
}else{
    $cadena2="UPDATE [dbo].[@INCODEMOB_USER] SET Estado_id='01' WHERE  Code='$item' ";
}   
echo '<script language="javascript">alert("'.$cadena2.'");</script>';
$exec2=sqlsrv_query($cn->getConecta(), $cadena2); 
?>