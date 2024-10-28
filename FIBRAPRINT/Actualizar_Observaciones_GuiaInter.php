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



//  $card2=$_POST['card']; 
 $doce=$_POST['docen'];




if ($tipouser=="1"){
$cadena="exec [dbo].[FIB_MC_UPDATE_Comm_Preguia_CAB]'$doce'";



 

}else{
$cadena="exec [dbo].[FIB_MC_UPDATE_Comm_Preguia_CAB]'$doce'";
}
///echo '<script language="javascript">alert("'.$cadena.'");</script>';
 $registros = sqlsrv_query($cn->getConecta(), $cadena);
               if( $registros === false ){
         echo " Seleccione un Pedido...";


              }  else {
     echo "UPD...";

      


 

  } 







//echo $html;

// 
  



?>
