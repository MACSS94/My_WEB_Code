<?php

//variáveis de ligação à BD
$servername = "localhost";
$user = "root";
$passwd = "M+1+g+u+e+l123";
$bd = "tpsipl";

$liga = mysqli_connect($servername, $user, $passwd, $bd);
if(!$liga){
    echo "<script> alert('A Ligação com a base de dads falhou'); </script>";
    echo "Erro: ".mysqli_connect_error();
    echo "<script> window.location.href='../index.html'; </script>";
}







?>