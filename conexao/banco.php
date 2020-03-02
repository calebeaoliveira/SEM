<?php

$con = mysqli_connect("localhost","root","","db_sec");

if (mysqli_connect_errno())	{
	echo "Falha ao se conectar ao MySQL: " . mysqli_connect_errno(); }
else {
	mysqli_select_db($con,"db_sec");
}
?>