<?php
require_once('../../conexao/banco.php');

$id = $_REQUEST['TEC_CODIGO'];
$sql = "delete from TB_TECNICOS where TEC_CODIGO = '$id'";
mysqli_query($con, $sql) or die ("Erro na sqli");
header("Location: consulta.php");


?>