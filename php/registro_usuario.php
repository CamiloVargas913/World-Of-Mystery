<?php 
require_once('Conexion.php');
$pais=$_POST['pais'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$nickname=$_POST['nickname'];
$pasword=$_POST['pass'];
$avatar=$_FILES['avatar']['name'];
$nivel=1;
//echo $nickname;
//numeros aleatorios
$indicador=rand(0,10000);
$dia=date('z');
$ruta="../FotosAvatar/".$indicador.$dia.$avatar;
//insercion base de datos
$conn=new Conexion();
$llamarMetodo=$conn->Conectar();
$sql="INSERT INTO usuario  VALUES (NULL, '$nickname', '$ruta', '$nombre', '$apellido', '$pais', '$pasword', '$nivel')";
$stmt=$llamarMetodo->prepare($sql);
$stmt->execute();
if ($stmt) {
	$carga = @move_uploaded_file($_FILES['avatar']['tmp_name'], $ruta);
echo "datos insertados";
}else{
	echo "datos no insertados";
 }
  ?>
