﻿<html>
<head><title> Efetuando Edição...</title>
<meta charset="utf-8">
<meta http-equiv = "refresh" content = "3; url = ../index.php" />
<style>
.content {
	margin: auto;
	width:30%;
	border: 3px solid green;
	padding-top: 30px;
	padding-bottom: 30px;
	padding-left: 70px;
	padding-right: 90px;
	background:lightgreen;
	text-align:center;
	font-family: "Lucida Console", "Arial";
	border-radius: 6px;
}

</style></head>
<body bgcolor="#EEE8AA"><div class="content">
<?php
$connect = pg_connect("host=localhost port=5432 dbname=locadora user=postgres password=admin") or die(pg_error());

$id = $_POST['ident'];
$nome = $_POST['nome'];
$rua= $_POST['rua'];
$cep= $_POST['cep'];
$cidade= $_POST['cidade'];
$estado= $_POST['estado'];
$cpf= $_POST['cpf'];

$sql = pg_query($connect, "UPDATE cliente SET nome = '$nome',rua = '$rua', cep = '$cep', cidade = '$cidade', cpf='$cpf', estado='$estado'  WHERE cliente.id = '$id'");

pg_close($connect);
?>
<p> Redirecionando para o inicio em 3 segundos </p></div>
</body>