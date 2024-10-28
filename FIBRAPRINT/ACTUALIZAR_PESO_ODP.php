<?php
session_start();
if($_SESSION['autorizado']<>1){
    header("Location: index.php");
}
error_reporting(0);
require('class_lib/conexion_sis.php');
require('class_lib/funciones.php');

$cn= new Conexion;


$id=$_POST['id'];   
$peso=$_POST['peso']; 


$query = "UPDATE OITM set U_FIB_PESO ='$peso' WHERE Itemcode ='$id'
";
echo '<script language="javascript">alert("'.$query.'");</script>';
$registros = sqlsrv_query($cn->getConecta(), $query);
    if( $registros === false ){
         echo "No hay información del producto...";
    }  else {

        

    }
?>