<?php 
require_once('Conexion.php');

$nickname=$_POST['nickname'];
$pasword=$_POST['psw'];
$avatar=$_FILES['avatar']['name'];
//echo $nickname;
//numeros aleatorios
$indicador=rand(0,10000);
$dia=date('z');
$ruta="../FotosAvatar/".$indicador.$dia.$avatar;
$carga = @move_uploaded_file($_FILES['avatar']['tmp_name'], $ruta);
//insercion base de datos
$conn=new Conexion();
$llamarMetodo=$conn->Conectar();
$sql="INSERT INTO  usuarios VALUES ('$nickname','$pasword','$ruta')";
$stmt=$llamarMetodo->prepare($sql);
$stmt->execute();
if ($stmt) {
echo "datos insertados";
}else{
	echo "datos no insertados";
 }


 ?>
