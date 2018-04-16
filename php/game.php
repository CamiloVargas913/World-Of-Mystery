<?php
require_once('Conexion.php');
session_start();
if(isset($_SESSION['ingreso']) && $_SESSION['ingreso']==true){

}else{
	echo "no toene permisos para ingresar <br>";
	echo "<br> <a href=../index.html>Vuelva a ingresar</a>";
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1>Bienvenido al juego</h1>
	<?php 
		$a = $_GET['id'];
		$conn=new Conexion();
		$llamarMetodo=$conn->Conectar(); 
		$sql="SELECT Avatar FROM usuario WHERE Nickname= '$a'  ";
		$stmt=$llamarMetodo->prepare($sql);
		$stmt->execute();
		while ($fila = $stmt->fetch()) {
			echo '<img src='.$fila['Avatar'].' alt="" width="30%">';
		}
	 ?>
	<section>Aca va el juego</section>
	<br> 
	<br>
	<a href="cerrar_sesion.php">Cerrar sesion</a>
</body>
</html>