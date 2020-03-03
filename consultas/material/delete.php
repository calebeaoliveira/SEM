<?php
require_once('../../conexao/banco.php');

$id = $_REQUEST['MAT_CODIGO'];
$sql = "delete from TB_MATERIAL where MAT_CODIGO = '$id'";
mysqli_query($con, $sql) or die ("Erro na sqli");
header("Location: consulta.php");


?>