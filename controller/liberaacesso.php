<?php
session_start();
include_once("../model/conexao.php");
include_once("../model/timemodel.php");
?>

<?php
extract($_REQUEST,EXTR_OVERWRITE);

$email = $_POST["email"];
//$senha = $_POST["senha"];

$acesso = verificaAcesso($conn,$email);

if($acesso === $email){
    header("Location:../ViwGenTime/ViewGen.php");
}else{
   header("Location:../ViewCadUsu/ViewSucesso.php"); 
}

//if($acesso === $email){
    //header("Location:../indexacesso.php");

//}else{
    //header("Location:../indexcad.php");
//}
?>        
