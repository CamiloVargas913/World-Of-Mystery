<?php 
require_once('Conexion.php');
session_start();
if(isset($_SESSION['ingreso']) && $_SESSION['ingreso']==true){
	$tag = $_POST['cont'];
	if (isset($tag) && $tag !='') {
		if ($tag == 'Contacto') {
			$asunto=$_POST['asunto']; 	 	  	
			$mensaje=$_POST['mensaje'];
			$correo=$_POST['correo'];
			$fecha=date("Y-m-d");
			$idUsuario =$_SESSION['idUsuario'];
			//insercion base de datos
			$conn=new Conexion();
			$llamarMetodo=$conn->Conectar();
			$sql="INSERT INTO mensajes  VALUES (NULL,'$asunto','$mensaje','$correo','$fecha', '$idUsuario')";
			$stmt=$llamarMetodo->prepare($sql);
			$stmt->execute();
				if ($stmt) {
					echo true;
				}else{
					echo false;
				}
		}
	}
}else{
	echo "Iniciar sesion";
}


 ?>
