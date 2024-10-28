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

 $idactu=$_POST['idactu'];
 $fecha=$_POST['fecha'];
 $fechaEn=$_POST['fechaEn']; 

 $Direcioncli=$_POST['Direcioncli'];
 $DirecionD=$_POST['DirecionD'];
 $Serie=$_POST['Serie']; 
 $Numero=$_POST['Numero'];
 $Licencia=$_POST['Licencia'];
 $Conductor=$_POST['Conductor']; 
 $Placa=$_POST['Placa'];
 $Vehi=$_POST['Vehi'];

 $Dpartida=$_POST['Dpartida'];
  $Dllegada=$_POST['Dllegada'];
 $Trasnspor=$_POST['Trasnspor'];
  $Truc=$_POST['Truc'];
 $Tdirec=$_POST['Tdirec'];
  $Ncontenedor=$_POST['Ncontenedor'];
 $Nprecinto=$_POST['Nprecinto'];
 $Nprecinto2=$_POST['Nprecinto2'];
  $Nprecinto3=$_POST['Nprecinto3'];
 $Nprecinto4=$_POST['Nprecinto4'];
 $Ginter=$_POST['Ginter'];
  $Gruc=$_POST['Gruc'];
  $GDinter=$_POST['GDinter'];


 $NTRAPOR=$_POST['NTRAPOR'];
  $RUCTRAN=$_POST['RUCTRAN'];
   $DIRECTRANS=$_POST['DIRECTRANS'];


  


$inserta_Cabe="[dbo].[FIB_GC_ACTUALIZARCABEZERA_PREGUIA]'$idactu','$fecha','$fechaEn','$Direcioncli','$DirecionD','$Serie','$Numero','$Licencia','$Conductor','$Placa','$Vehi','$NTRAPOR','$RUCTRAN','$DIRECTRANS','$Dpartida','$Dllegada','$Trasnspor','$Truc','$Tdirec','$Ncontenedor','$Nprecinto','$Nprecinto2','$Nprecinto3','$Nprecinto4','$Ginter','$Gruc','$GDinter'";

//echo '<script language="javascript">alert("'.$inserta_Cabe.'");</script>';


 
 $registros2 = sqlsrv_query($cn->getConecta(), $inserta_Cabe);


     if( $registros2 === false ){
  


} else {
  $re2=sqlsrv_fetch_array($registros2) ;

      if($re2[0]=== 1)

{

    
               echo"     <h3 id='valor'>1</h3> ";
} 


   if($re2[0]=== 5)

{
  
          echo"     <h3 id='valor'>5</h3> ";
} 


}


 




?>
