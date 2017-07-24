<?php
	$carro = $_POST["carro"];
	$placa = $_POST["placa"];
	$simples = $_POST["lavagens"];
	$tamanho = $_POST["tamanho"];
	print $carro;
	print $placa;
	foreach ($simples as $x) {
		echo $x;
	}
	foreach ($tamanho as $z) {
		echo $z;
	}
	if($x == "simples" && $z=="pequeno"){
		$y ="R$ 30,00";
	}else if($x == "cera" && $z=="pequeno"){
		$y = "R$ 50,00";
	}else if($x == "lpolimento" && $z=="pequeno"){
		$y="R$ 200,00";
	}else if($x == "lcrista" && $z=="pequeno"){
		$y="R$ 200,00";
	}else if($x == "lcristapo" && $z=="pequeno"){
		$y="R$ 300,00";
	}else if($x = "crista" && $z=="pequeno"){
		$y = "R$ 120,00";
	}else if($x = "Polimento" && $z=="pequeno"){
		$y = "R$ 120,00";
	}else if($x == "simples" && $z=="medio"){
		$y ="R$ 30,00";
	}else if($x == "cera" && $z=="medio"){
		$y = "R$ 50,00";
	}else if($x == "lpolimento" && $z=="medio"){
		$y="R$ 200,00";
	}else if($x == "lcrista" && $z=="medio"){
		$y="R$ 200,00";
	}else if($x == "lcristapo" && $z=="medio"){
		$y="R$ 300,00";
	}else if($x = "crista" && $z=="medio"){
		$y = "R$ 120,00";
	}else if($x = "Polimento" && $z=="medio"){
		$y = "R$ 120,00";
	}if($x == "simples" && $z=="grande"){
		$y ="R$ 30,00";
	}else if($x == "cera" && $z=="grande"){
		$y = "R$ 50,00";
	}else if($x == "lpolimento" && $z=="grande"){
		$y="R$ 200,00";
	}else if($x == "lcrista" && $z=="grande"){
		$y="R$ 200,00";
	}else if($x == "lcristapo" && $z=="grande"){
		$y="R$ 300,00";
	}else if($x = "crista" && $z=="grande"){
		$y = "R$ 120,00";
	}else if($x = "Polimento" && $z=="grande"){
		$y = "R$ 120,00";
	}
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lavarapido";
    $conn = new mysqli($servername, $username, $password,$dbname);
    mysqli_query($conn,"insert into lavagem(modelo,placa,preco,tamanho) values('$carro','$placa','$y','$z')");
    
?>
<html>
<body>
	<?php echo $y?>
</body>
</html>