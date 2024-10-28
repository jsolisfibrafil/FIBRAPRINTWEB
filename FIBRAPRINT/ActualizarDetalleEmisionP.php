<?php
session_start();
if ($_SESSION['autorizado'] <> 1) {
    header("Location: index.php");
}
error_reporting(0);
require("class_lib/conexion_sis.php");
require('class_lib/funciones.php');

$cn = new Conexion();


$usuario = ($_SESSION['id_sesion']);

$tipouser = ($_SESSION['tipouser']);


$sede = ($_SESSION['bodega']);


$docentry = $_POST['docentry'];
$almacen = $_POST['almacen'];
$stock = $_POST['stock'];
$cantidad = $_POST['cantidad'];

$inserta_Cabe = "[dbo].[IMOB_ACTUALIZAR_EMISION_DET] '$docentry','$almacen','$stock','$cantidad','$usuario'";

$registros2 = sqlsrv_query($cn->getConecta(), $inserta_Cabe);

//echo '<script language="javascript">alert("'.$inserta_Cabe.'");</script>';