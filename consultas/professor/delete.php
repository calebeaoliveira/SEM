<?php
require_once('../../conexao/banco.php');

$id = $_REQUEST['PRO_CODIGO'];
$sql = "delete from TB_PROFESSOR where PRO_CODIGO = '$id'";
mysqli_query($con, $sql) or die ("Erro na sqli");
header("Location: consulta.php");


?>