<?php
require_once("../conexao/banco.php");


$desc = $_REQUEST['txt_descricao_mat'];
$tip = $_REQUEST['sel_tipo_mat'];


$sql = "insert into TB_MATERIAL (MAT_DESCRICAO,TIP_CODIGO)
values ('$desc','$tip')";

mysqli_query($con, $sql) or die ("Erro na sql!");

header ("Location: ../center.php");
?>