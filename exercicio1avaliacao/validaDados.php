<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<script type="text/javascript" src="../js/bootstrap.min.js"></script> 

<?php
$nome = $_POST['ctx_nome'];
$apelido = $_POST['ctx_apelido'];
$email = $_POST['ctx_email'];
$pass = $_POST['ctx_pass'];
$morada = $_POST['ctx_morada'];
$morada2 = $_POST['ctx_morada2'];
$cidade = $_POST['ctx_cidade'];
$distrito = $_POST['ctx_distrito'];
$codigopostal = $_POST['ctx_cod_postal'];
$datainicio = $_POST['ctx_data_inicio'];
$datafinal = $_POST['ctx_data_final'];
?>
<div style="width: 80%; margin-left: 10%;">
	

<table class="table table-bordered border-primary">														
	<thead >
		<th>Nome</th>
		<th>Apelido</th>
		<th>Email</th>
		<th>Password</th>
		<th>Morada</th>
		<th>Morada2</th>
		<th>Cidade</th>
		<th>Distrito</th>
		<th>Código Postal</th>
		<th>Data Início</th>
		<th>Data Final</th>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $nome;  ?></td>
			<td><?php echo $apelido;  ?></td>
			<td><?php echo $email;  ?></td>
			<td><?php echo $pass;  ?></td>
			<td><?php echo $morada;  ?></td>
			<td><?php echo $morada2;  ?></td>
			<td><?php echo $cidade;  ?></td>
			<td><?php echo $distrito;  ?></td>
			<td><?php echo $datainicio;  ?></td>
			<td><?php echo $datafinal;  ?></td>
		</tr>
	</tbody>
</table>
</div>