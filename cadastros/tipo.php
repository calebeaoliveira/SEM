<?php
require_once("../conexao/banco.php");


$desc = $_REQUEST['txt_descricao_tipo'];


$sql = "insert into TB_TIPO (TIP_DESCRICAO)
values ('$desc')";

mysqli_query($con, $sql) or die ("Erro na sql!");

header ("Location: ../center.php");
?>