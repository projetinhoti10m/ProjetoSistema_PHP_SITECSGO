<?php

include_once("../model/conexao.php");
include_once("../model/timemodel.php");

extract($_REQUEST,EXTR_OVERWRITE);



$min = 1;
$max = 1000;
$codigoTime  = rand($min,$max); 



$confirma = inserirtime($conn,$codigoTime,$nometime,$logotime,
$nomejogador,$fonejogador,$emailjogador,
$nomejogador1,$fonejogador1,$emailjogador1,
$nomejogador2,$fonejogador2,$emailjogador2,
$nomejogador3,$fonejogador3,$emailjogador3,
$nomejogador4,$fonejogador4,$emailjogador4);

  if($confirma){
    header("Location:../ViwGenTIme/ViewAguardValid.php");

  }else{
echo("Não foi possível cadastrar seu sdados. Por favor revise seus dados");
  }
?>