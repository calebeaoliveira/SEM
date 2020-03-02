<?php
require_once("../conexao/banco.php");


$nome = $_REQUEST['txt_nome_prof'];


$sql = "insert into TB_PROFESSOR (PRO_NOME)
values ('$nome')";

mysqli_query($con, $sql) or die ("Erro na sql!");

header ("Location: ../center.php");
?>