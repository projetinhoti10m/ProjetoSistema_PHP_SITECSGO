<?php
function buscatime($conn,$codigotime){
    $query = "select * from tb_time where idtime ='{$codigotime}'";
    $resultado =mysqli_query($conn, $query);
    $resultado = mysqli_fetch_array($resultado);
    return $resultado;
}

?>