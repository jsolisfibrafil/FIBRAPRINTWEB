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



 $card2=$_POST['card']; 
 $doce=$_POST['docen'];
  $nguia2=$_POST['nguia'];
 $item2=$_POST['item'];

 $cliente2=implode($card2,"','");
$masivo=implode($doce,",");
$item2=implode($item2,"','");


if ($tipouser=="1"){
$cadena="UPDATE [dbo].[@INCODEMOB_LECTURA] set Num_Preguia='$nguia2', Status='02' where DocEntry  in($masivo) and CardCode in ('$cliente2') and Itemcode in('$item2') and Status='01' ";



 

}else{
$cadena="UPDATE [dbo].[@INCODEMOB_LECTURA] set Num_Preguia='$nguia2', Status='02' where DocEntry  in($masivo) and CardCode in ('$cliente2') and Itemcode in('$item2') and Status='01'";
}
//echo '<script language="javascript">alert("'.$cadena.'");</script>';
 $registros = sqlsrv_query($cn->getConecta(), $cadena);
               if( $registros === false ){
         echo " Seleccione un Pedido...";


              }  else {
     echo "UPD...";

      


 

  } 







//echo $html;

// 
  



?>
