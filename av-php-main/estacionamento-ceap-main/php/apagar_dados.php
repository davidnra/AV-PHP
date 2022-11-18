<?php

#banco de dados
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "estacionamento_sam";

$conn = new mysqli($server, $user, $pass, $dbname);

if ($conn -> connect_error){
	echo "Erro na conexão";
}

mysqli_select_db($conn, $dbname);

$sql = "DELETE FROM proprietario";
$sql1 = "DELETE FROM veiculo";
$sql2 = "ALTER TABLE proprietario AUTO_INCREMENT = 0";
$sql3 = "ALTER TABLE veiculo AUTO_INCREMENT = 0";

$result = $conn -> query($sql);
$result0 = $conn -> query($sql1);
$result1 = $conn -> query($sql2);
$result2 = $conn -> query($sql3);



$conn -> close();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="0; acessar_dados.php">
</head>
<body>

</body>
</html>
