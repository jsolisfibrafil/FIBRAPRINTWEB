<?php
session_start();
if($_SESSION['autorizado']<>1){
    header("Location: index.php");
}
error_reporting(0);
require("class_lib/conexion_sis.php");
require('class_lib/funciones.php');

$cn=new Conexion();

$usuario=($_SESSION['id_sesion']);

$tipouser=($_SESSION['tipouser']);

$num_ficha=($_POST['num_ficha']);
$asignacion=($_POST['asignacion']);
$obser_estado=($_POST['obser_estado']);
$estado = '02';
//echo '<script language="javascript">alert("'.$elaborado.'");</script>';

$inserta_preficha="UPDATE [dbo].[@INCODEMOB_PREFICHA]
SET  estado='02',asignado= '$asignacion'
WHERE num_ficha='$num_ficha'";
//echo '<script language="javascript">alert("'.$inserta_preficha.'");</script>';
$registros2 = sqlsrv_query($cn->getConecta(), $inserta_preficha);

//echo '<script language="javascript">alert("'.$re2.'");</script>';
if( $registros2 === false ){
    
    echo "no tiene registros..";
}else { 
    $re2=sqlsrv_fetch_array($registros2) ;
    $cadena2="[dbo].[FIB_GC_INSERTAPREFICHA_OBSERVACIONES]  '$obser_estado','$num_ficha','$estado','$usuario'";
    $registros3 = sqlsrv_query($cn->getConecta(), $cadena2);
   // echo '<script language="javascript">alert("'.$cadena2.'");</script>';
    if( $registros3 === false ){
        echo "no tiene registros..";
    }else { 

    }

    
}
