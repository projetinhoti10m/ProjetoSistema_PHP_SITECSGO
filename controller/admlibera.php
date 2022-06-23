<?php
session_start();
extract($_REQUEST,EXTR_OVERWRITE);

$senhateste ='senha errada';

$email;
$senha;


if(($email === 'adm@senac.com') & ($senha === '123')) {
    $_SESSION["email"] = $email;
    header("Location:../ViewAdm/AdmTimes.php");
    
}else{
    header("Location:../ViewAdm/ViewAdm.php") ;
}
?>