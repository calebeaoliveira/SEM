<?PHP

session_start();

require_once("conexao/banco.php");

$usuario = $_REQUEST['user'];
$senha   = $_REQUEST['pass'];

$sql2 = "select  
LOG_NOME 
from TB_LOGIN
where LOG_USUARIO = '$usuario' 
and LOG_SENHA = '$senha'";

$sql2 = mysqli_query($con, $sql2) or die ("Erro na sql2!") ;
$sql2=mysqli_fetch_array($sql2);
$nome = print_r($sql2, true);

$sql = "select  
			LOG_USUARIO, 
			LOG_SENHA 
		from TB_LOGIN
		where LOG_USUARIO = '$usuario' 
		and LOG_SENHA = '$senha'";


$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;

$total = mysqli_num_rows($sql);

if ($total == 1) {

	$_SESSION["usuario"] = $usuario;
	$_SESSION["senha"] = $senha;
	$_SESSION["nome"] = $nome;
	header("Location: center.php");
	
} else {
	header("Location: acesso_negado.php");
}

?>




