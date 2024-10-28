<?php
session_start();

error_reporting(0);
require("class_lib/conexion_sis.php");
require('class_lib/funciones.php');
if($_SESSION['autorizado']<>1){  
  header("Location: index.php"); 
 }

 $tipouse=($_SESSION['tipouser']);
//$db->consulta("SET NAMES 'utf8'");
$usuario=($_SESSION['id_sesion']);

$cp = new Conexion();


$max_doc2 =0;

$serie_gre=($_POST['serie_gre']);

$correlativo_gre=($_POST['correlativo_gre']);
$ruc_prove=($_POST['ruc_prove']);
$nombre_prove=($_POST['nombre_prove']);
$mod_tras_gre=($_POST['mod_tras_gre']);
$mot_tras_gre=($_POST['mot_tras_gre']);
$femi_gre=($_POST['femi_gre']);
$fi_gre=($_POST['fi_gre']);
$fentre_gre=($_POST['fentre_gre']);

$peso_total=($_POST['peso_total']);
$dire_partida_gre=($_POST['dire_partida_gre']);
$dire_partida_ubi=($_POST['dire_partida_ubi']);
$dire_llegada_gre=($_POST['dire_llegada_gre']);
$dire_llegada_ubi=($_POST['dire_llegada_ubi']);

$ruc_trans_gre=($_POST['ruc_trans_gre']);
$nombre_trans_gre=($_POST['nombre_trans_gre']);
$direccion_trans_gre=($_POST['direccion_trans_gre']);

$dni_conduc_gre=($_POST['dni_conduc_gre']);
$licencia_conduc_gre=($_POST['licencia_conduc_gre']);
$nombre_conduc_gre=($_POST['nombre_conduc_gre']);
$apellido_conduc_gre=($_POST['apellido_conduc_gre']);

$lista_placa_tracto=($_POST['lista_placa_tracto']);
//$lista_placa_remolque=($_POST['lista_placa_remolque']);
$marca_vehi_gre=($_POST['marca_vehi_gre']);
$nromtc_vehi_gre=($_POST['nromtc_vehi_gre']);
$observacion_gre=($_POST['observacion_gre']);
$num_bultos=($_POST['num_bultos']);
$descripcion_motivo_otros=($_POST['descripcion_motivo_otros']);
$unidad_medida_general=($_POST['UNIMEDIDAGENERAL']);
$lista_placa_tracto=($_POST['lista_placa_tracto']);
$nombre_destinatario=($_POST['nombre_destinatario']);
$ruc_destinatario=($_POST['ruc_destinatario']);

$docentry=($_POST['docentry']);
$nro_tuc01=($_POST['nro_tuc01']);

$cadena5="EXEC [dbo].[ActualizarGre_Cab] $docentry,'$correlativo_gre','$ruc_prove','$nombre_prove','$mod_tras_gre','$femi_gre','$fi_gre','$fentre_gre',
$peso_total,'$dire_partida_gre','$dire_partida_ubi','$dire_llegada_gre','$dire_llegada_ubi','$ruc_trans_gre','$nombre_trans_gre','$direccion_trans_gre',
'$dni_conduc_gre','$nombre_conduc_gre','$apellido_conduc_gre','$licencia_conduc_gre','$lista_placa_tracto','$marca_vehi_gre','$nromtc_vehi_gre','$observacion_gre',$num_bultos,'$descripcion_motivo_otros','$unidad_medida_general','$nombre_destinatario','$ruc_destinatario','OT','$nro_tuc01'"; 
//echo '<script language="javascript">alert("'.$cadena5.'");</script>';

$registros2 = sqlsrv_query($cp->getConecta(),$cadena5);
if( $registros2 === false ){
    //echo " Selecione ...";
}  else {
 
}

?>





