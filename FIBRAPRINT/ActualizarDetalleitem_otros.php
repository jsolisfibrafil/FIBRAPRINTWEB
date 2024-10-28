<?php
session_start();

error_reporting(0);
require("class_lib/conexion_sis.php");
require('class_lib/funciones.php');

//$db->consulta("SET NAMES 'utf8'");
$cp = new Conexion();

$max_doc2 =0;

$id=($_POST['id']);

$CodProducto=($_POST['CodProducto']);
$DESCRIP=($_POST['DESCRIP']);
$UMD=($_POST['UMD']);
$CANITIDAD=($_POST['CANITIDAD']);
$usuario=($_SESSION['id_sesion']);

$cadena5="EXEC [dbo].[IMOB_Actualizar_Guias_Sunat_DET_Otros] $id,'$CodProducto','$DESCRIP','$UMD','$CANITIDAD' "; 
 //echo '<script language="javascript">alert("'.$cadena5.'");</script>';

$registros2 = sqlsrv_query($cp->getConecta(),$cadena5);
if( $registros2 === false ){
    //echo " Selecione ...";
}  else {

    }




?>




