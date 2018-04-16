<?php
Session_start();
?>
<?php 
require_once('Conexion.php');
$nickname=$_POST['nickname'];
$pasword=$_POST['pass'];
$conn=new Conexion();
$llamarMetodo=$conn->Conectar();
$sql="SELECT * FROM  usuario WHERE Nickname='$nickname'";
$stmt=$llamarMetodo->prepare($sql);
$stmt->execute();
//$result=$conexion->query($sql);
if ($stmt->rowCount()>0) {
}	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	if ($pasword==$row['Contrasena']) {
		$_SESSION['ingreso']=true;
		$_SESSION['nickname']=$nickname;
		//session star, session expire
		echo "Bienvenido ".$nickname;
		echo "<br> <a href=game.php?id=$nickname>INGRESE AL JUEGO</a>";

	}else{
		echo "Sus credenciales no existen";
		echo "<br> <a href=../index.html>Vuelva a ingresar</a>";
	}
?>