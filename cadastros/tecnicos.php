<?php
require_once("../conexao/banco.php");


$nome = $_REQUEST['txt_nome_tec'];


$sql = "insert into TB_TECNICOS (TEC_NOME)
values ('$nome')";

mysqli_query($con, $sql) or die ("Erro na sql!");

header ("Location: ../center.php");
?>