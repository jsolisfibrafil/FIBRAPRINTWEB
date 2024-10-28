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
$cod = $_POST['iddevolu'];
$descripcion_art = $_POST['descripcion_art'];
$almacenOrigen = $_POST['almacenOrigen'];
$stock = $_POST['stock'];
$itemcode = $_POST['itemcode'];
$almacenDestino = $_POST['almacenDestino'];
$umd = $_POST['um'];
$cantidad = $_POST['cantidad'];

$peso = $_POST['peso'];

$inserta_Detalle = "EXEC [dbo].[IMOB_updatedetalle_solcitud_devolucion]'$docentry',$cod,'$almacenOrigen','$almacenDestino','$itemcode','$descripcion_art',$stock,$peso,$cantidad";




echo '<script language="javascript">alert("'.$inserta_Detalle.'");</script>';

$registros = sqlsrv_query($cn->getConecta(), $inserta_Detalle);
if ($registros === false) {
  echo " No se encontro datos...";
} else {
} 


