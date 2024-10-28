<?php
session_start();
if($_SESSION['autorizado']<>1){
    header("Location: index.php");
}
error_reporting(0);
require("class_lib/conexion_sis.php");
require('class_lib/funciones.php');

$cn=new Conexion();

//$db->consulta("SET NAMES 'utf8'");



$usuario=($_SESSION['id_sesion']);

$tipouser=($_SESSION['tipouser']);


$sede=($_SESSION['bodega']);


  $nguia2=$_POST['nguia2'];

 // $item=$_POST['id'];
 
  $item= $_POST['id'];

$item2=json_encode($item);
$item3=str_replace("[","",$item2);
$item4=str_replace("]","",$item3);
$item5=str_replace('"','',$item4);
$inserta_Detalle="[dbo].[FIB_MC_UPDATEDET_Packing2]'$nguia2','$item5'";


//echo '<script language="javascript">alert("'.$inserta_Detalle.'");</script>';

 $registros = sqlsrv_query($cn->getConecta(), $inserta_Detalle);
               if( $registros === false ){
         echo " No se encontro datos...";


              }  else {


  } 







//echo $html;

// 
  



?>
