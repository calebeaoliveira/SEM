<?PHP

session_start();

require_once("conexao/banco.php");

$usuario = $_SESSION["usuario"];
$senha   = $_SESSION["senha"];

$sql = "select  
			LOG_USUARIO, 
			LOG_SENHA 
		from TB_LOGIN 
		where LOG_USUARIO = '$usuario' 
		and LOG_SENHA = '$senha'";
		
$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;

$total = mysqli_num_rows($sql);

if ($total == 0) {
	header("Location: acesso_negado.php");
} 


?>




