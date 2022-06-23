<?php
function inserirUsuario($conn,$nome,$email,$fone,$senha){
   
    $salto = ['cost'=>8];
    
    $senhaCrip = password_hash($senha,PASSWORD_BCRYPT,$salto );

    $query = "INSERT INTO `tbusu`(`idusu`,`nomeusu`,`foneusu`, `emailusu`, 
    `senhausu`) VALUES (NULL,'{$nome}','{$fone}','{$email}','{$senhaCrip}');";
$dados = mysqli_query($conn,$query);
return $dados;
}


   /* if(mysqli_num_rows($resultado) > 0){
        $row =mysqli_fetch_assoc($resultado);
        if(password_verify($validaEmail,$row["senhausu"])){
            $_SESSION["email"] = $row["emailusu"];
            $_SESSION["nome"] = $row["nomeusu"];
            
            return $row ["emailusu"];
        }else{
            return "Acesso negado1";
        }
    }else{
        return"Acesso negado2";
    }
    return "Acesso negado3";*/


function verificaiscriçãotime($conn,$email,$nome){
    $query = "select * from tbusu where email = '{$email}'";
    $resultado = mysqli_query($conn,$query);
    if(mysqli_num_rows($resultado) > 0){
        $row =mysqli_fetch_assoc($resultado);
        if(password_verify($nome,$row["nome"])){
            $_SESSION["email"] = $row["email"];
            $_SESSION["nome"] = $row["nome"];
            
            return $row ["email"];
        }else{
            return "Acesso negado1";
        }
    }else{
        return"Acesso negado2";
    }
    return "Acesso negado3";
}
?>