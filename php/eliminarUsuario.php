<?php 
require_once('Conexion.php');
session_start();
if(isset($_SESSION['ingreso']) && $_SESSION['ingreso']==true){
	$a =$_SESSION['idUsuario'];
	$nickname=$_POST['nickname'];
	$correo=$_POST['correo'];
	$pasword=$_POST['pass'];
	$pasword1=$_POST['pass1'];
	$val=validarContraseña($pasword,$pasword1);
	if ($val) {
		$conn=new Conexion();
		$llamarMetodo=$conn->Conectar(); 
		$sql="SELECT * FROM usuario WHERE IdNickname='$a'AND Nickname='$nickname' AND Correo='$correo' AND Contrasena='$pasword1'";
		$stmt=$llamarMetodo->prepare($sql);
		$stmt->execute();
		if ($stmt->rowCount()>0) {
			$row=$stmt->fetch(PDO::FETCH_ASSOC);	
  		$avatar=$row['Avatar'];
  		/*borra datos de usuario de tabla ranking*/
  		$sql2="DELETE FROM `ranking` WHERE  Usuario_IdNickname='$a'";
			$stmt2=$llamarMetodo->prepare($sql2);
			$stmt2->execute();
			/*borra datos de usuario de tabla mensajes*/
			$sql3="DELETE FROM `mensajes` WHERE  Usuario_IdNickname='$a'";
			$stmt3=$llamarMetodo->prepare($sql3);
			$stmt3->execute();
			/*borra datos de usuario*/
			$sql1="DELETE FROM `usuario` WHERE  IdNickname='$a'";
			$stmt1=$llamarMetodo->prepare($sql1);
			$stmt1->execute();
			if ($stmt1) {
				unlink($avatar);
				unset($_SESSION['idUsuario']);
				session_destroy();
				echo "<section class='alert2'>Usuario Eliminado</section>";
			}
		}else{
			echo "<section class='alert'>Datos Incorrectos</section>";
		}
	}else{
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
 ?>