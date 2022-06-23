<?php 
include_once("../model/conexao.php");
include_once("../model/timemodel.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(alterarkg ($conn,$codigoTimes,$vldemail)){
 /*   echo("Dado alterado");
}else{
   echo("Dados não aterado"); 
}*/

header("Location:../ViewAdm/AdmTimes.php");
}else{
   header("Location:../ViewAdm/AdmTimes.php"); 
}

?>