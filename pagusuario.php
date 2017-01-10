<?php
session_start("x");
$_SESSION['login'];
$login = $_SESSION['login'];
if($login == ' ' || $login == null){
	echo "<script>
				alert('Login ou senha nao conferem!');
				window.location.href = 'login.html';
		</script>";
}
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "scooby";
    $conn = new mysqli($servername, $username, $password,$dbname);
    $x = mysqli_query($conn,"select nome from login where login = '$login'");
    $z=mysqli_fetch_assoc($x);
?>
<html>
	<head>
		<title> <?php echo $z['nome'];?> </title>
	</head>
	Bem vindo: <?php print $z['nome'];?>
	<button type="submit" onClick="Nova()">Fluxo de caixa</button>
</html>
<script type="text/javascript">
function Nova()
{
location.href=" fluxo.php";
}
</script>