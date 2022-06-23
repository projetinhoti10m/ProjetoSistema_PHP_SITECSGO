<?php
session_start();

function inserirtime($conn,$codigoTime,$nometime,$logotime,
$nomejogador,$fonejogador,$emailjogador,
$nomejogador1,$fonejogador1,$emailjogador1,
$nomejogador2,$fonejogador2,$emailjogador2,
$nomejogador3,$fonejogador3,$emailjogador3,
$nomejogador4,$fonejogador4,$emailjogador4){

    $query = "INSERT INTO `tbTime` (`codigoTimes`,`nomeTime`, `logoTime`,`validaTimekg`)
    VALUES ('{$codigoTime}','{$nometime}','{$logotime}',0);";

$dados = mysqli_query($conn,$query);

    $query = "INSERT INTO `tbjogador` (`nomejogador`, `fonejogador`, `emailjogador`,`validaEmail`,`codigoTimes`)
     VALUES ('{$nomejogador}','{$fonejogador}','{$emailjogador}',0,{$codigoTime}),    
     ('{$nomejogador1}','{$fonejogador1}','{$emailjogador1}',0,{$codigoTime}),
     ('{$nomejogador2}','{$fonejogador2}','{$emailjogador2}',0,{$codigoTime}),
     ('{$nomejogador3}','{$fonejogador3}','{$emailjogador3}',0,{$codigoTime}),
     ('{$nomejogador4}','{$fonejogador4}','{$emailjogador4}',0,{$codigoTime});";

$dados += mysqli_query($conn,$query);
return $dados;
}
function buscatimek($conn,$nomeTime){
    $query = "select * from tbTime where nomeTime like '%{$nomeTime}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}

function alterarkg ($conn,$codigoTimes,$validaTimekg){
    $query = "update tbtime set
    validaTimekg ='{$validaTimekg}'
     where codigoTimes ='{$codigoTimes}'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}
function verificaAcesso($conn,$email){
    $query = "select * from tbjogador where emailJogador = '{$email}'";
    $resultado = mysqli_query($conn, $query);
    $row =mysqli_fetch_assoc($resultado);
    
    if(mysqli_num_rows($resultado) > 0){

    if($row["validaEmail"]== 1){
        $_SESSION["email"] = $row["emailJogador"];
        $_SESSION["time"] = $row["codigoTimes"];
        
        return $row ["emailJogador"];
    }else{
        $_SESSION["acesso"] = "Valide seu e-mail. Verifique na sua caixa de e-mail do senac. <a href='https://login.microsoftonline.com'> Acessar E-mail </a>";
        
        return "Não1";
    }
}else{
        $_SESSION["acesso"] = "Faça o cadastro do Time na página principal <a href='../index.php'> Acessar E-mail </a>";

    return "Não2";
    }
}

function buscaTimeCodigo($conn,$codigoTime){
    $query = "select * from tbTime where codigoTimes={$codigoTime}";
    $resultado = mysqli_query($conn, $query); 
    $row =mysqli_fetch_assoc($resultado);
    return $row;
}

// somente jogadores

function buscaJogadoresTimeCodigo($conn,$codigoTime){
    $query = "select * from tbjogador where codigoTimes={$codigoTime}";
    $resultado = mysqli_query($conn, $query); 
    return $resultado;
}

function sairTime(){
   return session_destroy();
}

function UsarAcesso(){
    $email = isset($_SESSION["email"]);
    if(!$email){
        $_SESSION["msg"] = "<div class='alert alert-danger'
        role='alert'> Faça login para ter acesso so sistema.</div>";
        header("Location:../index.php");
        die();
    }
// ---------------------------------------//
}


?>