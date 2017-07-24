<?php
	$login = $_POST["login"];;
	$senha = $_POST["senha"];
	session_start();
	$_SESSION["login"] = $login;
	print $login;
	echo "<br>";
	print $senha;
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "scooby";
    $conn = new mysqli($servername, $username, $password,$dbname);
    $x = mysqli_query($conn,"select * from login where senha = '$senha' and login = '$login' ");
    $y= mysqli_num_rows($x);
    $z=mysqli_fetch_assoc($x);
    if ($y == 1 && $z['nv'] == 1) {
    	setcookie($z['nome']);
    	header('Location:bs-twopage/pagusuario.php');
    }else{
    	echo "<script>
				alert('Login ou senha nao conferem!');
				window.location.href = 'login.html';
		</script>";
        
   			}
?>