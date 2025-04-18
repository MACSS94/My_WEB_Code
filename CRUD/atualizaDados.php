<?php

$id = $_GET['id'];

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

$query = "UPDATE user SET nome='$nome', apelido='$apelido', morada1='$morada1', morada2='$morada2', localidade='$localidade', distrito='$distrito', codpostal='$cod_postal', email='$email', telefone='$telef', pass='$pass' WHERE iduser=$id";

if(mysqli_query($liga,$query)){
    echo"<script>alert('Registo atualizado com sucesso!'); </script>";
    echo"<script>window.location.href='mostraDados.php'</script>";
}else{
    echo"<script>alert('Não foi possível inserir o registo!'); </script>";
    echo"Query: ".$query."<br>Erro:".mysqli_error($liga);
    echo"<script>window.location.href='mostraDados.php'</script>";
}

mysqli_close($liga); 

?>