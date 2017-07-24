<?php

session_start("x");
$_SESSION['login'];
$login = $_SESSION['login'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
if($login == ' ' || $login == null){
    echo "<script>
                alert('Não permitido!');
                window.location.href = '../login.html';
        </script>";
}
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "scooby";
    $conn = new mysqli($servername, $username, $password,$dbname);
    $date = date('Y-m-d H:i');
    $x = mysqli_query($conn,"INSERT INTO fluxo(data,valor,DespVariavel) values('$date','$valor','$tipo')");
    if($x == true){
        echo "<script>
                alert('Dados Cadastrados com sucesso!');
                window.location.href = './despesas.php';
        </script>";
    }

?>