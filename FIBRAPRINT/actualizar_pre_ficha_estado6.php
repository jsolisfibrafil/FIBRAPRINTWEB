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
$num_ficha=$_POST['item'];
$observa_filma=$_POST['obs_pre_fil'];
$num_bandas=$_POST['num_bandas'];
$ancho_minimo=$_POST['ancho_minimo'];
$impresora_plani=$_POST['impresora_plani'];
$impresora_plani1=$_POST['impresora_plani1'];

if ($tipouser=="1"){

    $cadena2="UPDATE [dbo].[@INCODEMOB_PREFICHA]  SET estado='06' WHERE  num_ficha='$num_ficha'" ;
    
   
}else{
    $cadena2="UPDATE [dbo].[@INCODEMOB_PREFICHA]  SET estado='06' WHERE  num_ficha='$num_ficha'" ;
    
}
//echo '<script language="javascript">alert("'.$cadena2.'");</script>';
$exec2=sqlsrv_query($cn->getConecta(), $cadena2); 
if( $exec2 === false ){
    
    echo "no tiene registros..";
}else { 
    $cadena3="[dbo].[FIB_GC_INSERTAPREFICHA_OBSERVACIONES]  '$observa_filma','$num_ficha','06','$usuario'";
    $registros3 = sqlsrv_query($cn->getConecta(), $cadena3);
   // echo '<script language="javascript">alert("'.$cadena2.'");</script>';
    if( $registros3 === false ){
        echo "no tiene registros..";
    }else { 

    }
    $cadena4="[dbo].[FIB_GC_INSERTAPREFICHA_PLANI]  '$num_bandas','$impresora_plani','$impresora_plani1','$ancho_minimo','$num_ficha'";
    $registros4 = sqlsrv_query($cn->getConecta(), $cadena4);
    echo '<script language="javascript">alert("'.$cadena4.'");</script>';
    if( $registros4 === false ){
        echo "no tiene registros..";
    }else { 

    }
}

?>

