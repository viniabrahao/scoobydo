<?php
	session_start("x");
	$_SESSION['login'];
	$login = $_SESSION['login'];
	if($login == ' ' || $login == null){
	echo "<script>
				alert('Não permitido!');
				window.location.href = 'login.html';
		</script>";
}

?>