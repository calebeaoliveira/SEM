<?php
require_once('../../conexao/banco.php');

$id = $_REQUEST['TIP_CODIGO'];
$sql = "delete from TB_TIPO where TIP_CODIGO = '$id'";
mysqli_query($con, $sql) or die ("Erro na sqli");
header("Location: consulta.php");


?>