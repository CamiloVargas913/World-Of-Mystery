<?php 
require_once('Conexion.php');
session_start();
if(isset($_SESSION['ingreso']) && $_SESSION['ingreso']==true){
	  $user =$_SESSION['idUsuario'];
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$pasword=$_POST['pass'];
		$pasword1=$_POST['pass1'];
		$avatar=$_FILES['avatar']['name'];
		$indicador=rand(0,10000);
		$dia=date('z'); 
		$avatar=str_replace(' ', '', $avatar);
		$ruta="../FotosAvatar/".$indicador.$dia.$avatar;
		//insercion base de datos
		$conn=new Conexion();
		$llamarMetodo=$conn->Conectar();
		$res2=validarContraseña($pasword,$pasword1);
		if ($res2) {
			eliminarFoto($llamarMetodo,$user);
			$sql="UPDATE usuario SET Nombre='$nombre',Apellido='$apellido',Avatar='$ruta',Contrasena='$pasword1' WHERE IdNickname = '$user'";
			$stmt=$llamarMetodo->prepare($sql);
			$stmt->execute();
				if ($stmt) {
					$carga = @move_uploaded_file($_FILES['avatar']['tmp_name'],$ruta);
					echo "<section class='alert2'>Usuario Modificado</section>";
				}else{
					echo "<section class='alert'>Error al modificar usuario</section>";
				}	
		}else{
			echo false;
			echo "<section class='alert'>Las contraseñas no coinciden</section>";
		}
}
			function validarContraseña($pasword,$pasword1){
				if ($pasword==$pasword1) {
					return true;
				}else{
					return false;
				}
			}
		 function eliminarFoto($llamarMetodo,$idusuario){
		 	$sql="SELECT * FROM usuario WHERE IdNickname= '$idusuario'";
				$stmt=$llamarMetodo->prepare($sql);
				$stmt->execute();
					if ($stmt->rowCount()>0) {
					$row=$stmt->fetch(PDO::FETCH_ASSOC);	
  				$avatar=$row['Avatar'];
						unlink($avatar);
			}
		}
 ?>
