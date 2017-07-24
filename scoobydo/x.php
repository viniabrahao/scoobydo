<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "scooby";
    $conn = new mysqli($servername, $username, $password,$dbname);
    $grande = "Grande";
    $tipo = "Simples";
    $x =mysqli_query($conn,"SELECT * FROM lavagens where tipo ='$tipo' AND tamanho = '$grande'");
   	$z= mysqli_fetch_assoc($x);
   	print_r($z['valor']);
   	echo "<br>";
  	$j=$z['valor'] * 10;
  	print $j;	

    $data = date('m');
    echo $data;
    $brut = mysqli_query($conn,"SELECT SUM(valor) as valor_bruto FROM lavagens where MONTH(date) = $data ");
    $bruto = mysqli_fetch_assoc($brut);
    print_r($bruto);
    
?>