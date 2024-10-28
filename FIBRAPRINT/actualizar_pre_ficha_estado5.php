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
$orden_compra=$_POST['orden_compra'];
$observa_filma=$_POST['obs_pre_fil'];

if ($tipouser=="1"){

   // $cadena2="UPDATE [dbo].[@INCODEMOB_PREFICHA]  SET estado='07', orden_compra='$orden_compra'  WHERE  num_ficha='$num_ficha'" ;
    $cadena2="UPDATE [dbo].[@INCODEMOB_PREFICHA]  SET estado='07'  WHERE  num_ficha='$num_ficha'" ;
    
   
}else{
   // $cadena2="UPDATE [dbo].[@INCODEMOB_PREFICHA]  SET estado='07',orden_compra='$orden_compra'   WHERE  num_ficha='$num_ficha'" ;
   $cadena2="UPDATE [dbo].[@INCODEMOB_PREFICHA]  SET estado='07'   WHERE  num_ficha='$num_ficha'" ;
}
echo '<script language="javascript">alert("'.$cadena2.'");</script>';
$exec2=sqlsrv_query($cn->getConecta(), $cadena2); 
if( $exec2 === false ){
    
    echo "no tiene registros..";
}else { 
    $cadena3="[dbo].[FIB_GC_INSERTAPREFICHA_OBSERVACIONES]  '$observa_filma','$num_ficha','07','$usuario'";
    $registros3 = sqlsrv_query($cn->getConecta(), $cadena3);
   // echo '<script language="javascript">alert("'.$cadena2.'");</script>';
    if( $registros3 === false ){
        echo "no tiene registros..";
    }else { 

    }
}

?>
