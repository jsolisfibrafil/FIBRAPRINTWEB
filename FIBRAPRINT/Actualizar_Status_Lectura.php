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

//echo '<script language="javascript">alert("'.$sede.'");</script>';


$codba=$_POST['codb'];







$inserta_temp="[dbo].[FIB_MC_Liberara_Code_Seg]'$codba'";

//echo '<script language="javascript">alert("'.$inserta_temp.'");</script>';



  $registros2 = sqlsrv_query($cn->getConecta(), $inserta_temp);
     if( $registros2 === false ){
         echo "no tiene registros..";


} else {
  $re2=sqlsrv_fetch_array($registros2) ;

      if($re2[0]=== 1)

{

    
               echo"     <h3 id='valor'><span> 1 </span></h3> ";
} 


   
   if($re2[0]=== 2)

{
  
          echo"     <h3 id='valor'><span> 2 </span></h3> ";
} 

 if($re2[0]=== 6)

{
  
          echo"     <h3 id='valor'><span>6 </span></h3> ";
}    


 
} 




?>
