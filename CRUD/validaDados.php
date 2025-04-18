<?php

//obter dados do formulário
$nome = $_POST['ctx_nome'];
$apelido = $_POST['ctx_apelido'];
$morada1 = $_POST['ctx_morada1'];
$morada2 = $_POST['ctx_morada2'];
$localidade = $_POST['ctx_localidade'];
$distrito = $_POST['ctx_distrito'];
$codpostal = $_POST['ctx_cod_postal'];
$email = $_POST['ctx_email'];
$telef = $_POST['ctx_telef'];
$pass = $_POST['ctx_pass'];
$repass = $_POST['ctx_repass'];

include 'ligaBD.php';

$query = "INSERT INTO user(nome, apelido, morada1, morada2, localidade, distrito, codpostal, email, telefone, pass) VALUES ('$nome', '$apelido', '$morada1', '$morada2', '$localidade', '$distrito', '$codpostal', '$email', $telef, '$pass')";

if(mysqli_query($liga,$query)){
    echo"<script>alert('Registo inserido com sucesso!'); </script>";
    echo"<script>window.location.href='../index.html'</script>";
}else{
    echo"<script>alert('Não foi possível abrir o registo!'); </script>";
    echo"Query: ".$query."<br>Erro:".mysqli_error($liga);
    echo"<script>window.location.href='../index.html'</script>";
}

 


?>