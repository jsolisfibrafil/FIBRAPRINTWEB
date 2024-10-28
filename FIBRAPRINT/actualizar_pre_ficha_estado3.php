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
$observaciones=$_POST['obs_pre_des'];


if ($tipouser=="1"){
    $cadena2="UPDATE [dbo].[@INCODEMOB_PREFICHA]  SET estado='02' , fecha_matprint= '$fecha'  WHERE  num_ficha='$num_ficha'" ;
   
}else{
    $cadena2="UPDATE [dbo].[@INCODEMOB_PREFICHA]  SET estado='02' , fecha_matprint= '$fecha'  WHERE  num_ficha='$num_ficha'" ;
}
echo '<script language="javascript">alert("'.$cadena2.'");</script>';
$exec2=sqlsrv_query($cn->getConecta(), $cadena2); 
if( $exec2 === false ){
    
    echo "no tiene registros..";
}else { 
    $cadena3="[dbo].[FIB_GC_INSERTAPREFICHA_OBSERVACIONES]  '$observaciones','$num_ficha','02','$usuario'";
    $registros3 = sqlsrv_query($cn->getConecta(), $cadena3);
   // echo '<script language="javascript">alert("'.$cadena2.'");</script>';
    if( $registros3 === false ){
        echo "no tiene registros..";
    }else { 

    }
}

/* if ($tipouser=="1"){
    $cadena2="UPDATE [dbo].[@INCODEMOB_PREFICHA]  SET estado='02'  WHERE  num_ficha='$num_ficha'" ;
    $cadena3="UPDATE [dbo].[@INCODEMOB_PREFICHA_PDF]  SET observaciones='$observaciones'  WHERE  num_ficha='$num_ficha'" ;
   
}else{
    $cadena2="UPDATE [dbo].[@INCODEMOB_PREFICHA]  SET estado='02'  WHERE  num_ficha='$num_ficha'" ;
    $cadena3="UPDATE [dbo].[@INCODEMOB_PREFICHA_PDF]  SET observaciones='$observaciones'  WHERE  num_ficha='$num_ficha'" ;
}
/* echo '<script language="javascript">alert("'.$cadena2.'");</script>';
$exec2=sqlsrv_query($cn->getConecta(), $cadena2); 
$exec2=sqlsrv_query($cn->getConecta(), $cadena3); 


echo '<script language="javascript">alert("'.$cadena2.'");</script>';
$exec2=sqlsrv_query($cn->getConecta(), $cadena2); 
if( $exec2 === false ){
    
    echo "no tiene registros..";
}else { 
    $cadena3="[dbo].[FIB_GC_INSERTAPREFICHA_OBSERVACIONES]  '$obsr_arte','$num_ficha','03','$usuario'";
    $registros3 = sqlsrv_query($cn->getConecta(), $cadena3);
   // echo '<script language="javascript">alert("'.$cadena2.'");</script>';
    if( $registros3 === false ){
        echo "no tiene registros..";
    }else { 

    }
} */

?>