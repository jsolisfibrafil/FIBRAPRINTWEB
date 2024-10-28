<?php
session_start();
if($_SESSION['autorizado']<>1){
    header("Location: index.php");
}
error_reporting(0);
require('class_lib/conexion_sis.php');
require('class_lib/funciones.php');
$cn=new Conexion();

$usuario=$_POST['usuario'];

$cadena="[dbo].[FIB_MC_PERMISOS]'$usuario'"; 
    $registro= sqlsrv_query($cn->getConecta(), $cadena);
  echo '<script language="javascript">alert("'.$cadena.'");</script>';
    if( $registro === false ){
        echo" No hay registros";
      }else {
                 
      }




?>