

<?php

include_once("../model/conexao.php");
include_once("../model/usuariomodel.php");

extract($_REQUEST,EXTR_OVERWRITE);

  if(inserirUsuario($conn,$nome,$email,$fone,$senha)){
    header("Location:../ViewCadUsu/ViewSucesso.php");

  }else{
echo("Não foi possível cadastrar seu sdados. Por favor revise seus dados");
  }

 
?>