<?php
session_start();
header('Access-Control-Allow-Origin: *');
?>
<?php
require_once('Conexion.php');
if(isset($_SESSION['ingreso']) && $_SESSION['ingreso'] ==true){}
$Score = $_POST['Score'];
$muertes = 1; /*$_POST['Score'];*/
$idusuario = 3;
$conn = new Conexion();
$llamarMetodo = $conn->Conectar();
$sql = "SELECT * FROM ranking WHERE Usuario_IdNickname= '$idusuario'";
$stmt = $llamarMetodo->prepare($sql);
$stmt->execute();
$contar = $stmt->rowCount();
if ($contar > 0) {
	$sql="UPDATE ranking SET Puntaje=Puntaje+'$Score' WHERE Usuario_IdNickname = '$idusuario'";
	$stmt = $llamarMetodo->prepare($sql);
	$stmt->execute();
}else{
	$sqlInsert="INSERT INTO ranking VALUES (NULL, $Score, $muertes,CURDATE(),$idusuario)";
	$stmt2 = $llamarMetodo->prepare($sqlInsert);
	$stmt2->execute();
}

//"http://localhost/juego2/php/game2.php"
//"Score="& Score & "&jugador="& jugador.text
   
?>