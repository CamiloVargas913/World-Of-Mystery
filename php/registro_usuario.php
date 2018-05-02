<?php 
require_once('Conexion.php');
		$pais=$_POST['pais'];
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$nickname=$_POST['nickname'];
		$pasword=$_POST['pass'];
		$avatar=$_FILES['avatar']['name'];
		$nivel=1;
		$indicador=rand(0,10000);
		$dia=date('z');
		$ruta="../FotosAvatar/".$indicador.$dia.$avatar;
		//insercion base de datos
		$conn=new Conexion();
		$llamarMetodo=$conn->Conectar();
		$res=validarUsuario($llamarMetodo,$nickname);
		if ($res) {	
		$sql="INSERT INTO usuario  VALUES (NULL, '$nickname', '$ruta', '$nombre', '$apellido', '$pais', '$pasword', '$nivel')";
		$stmt=$llamarMetodo->prepare($sql);
		$stmt->execute();
			if ($stmt) {
				$carga = @move_uploaded_file($_FILES['avatar']['tmp_name'], $ruta);
				echo "<section class='alert2'>Usuario Registrado</section>";
			}else{
				echo "<section class='alert'>Error al registrar usuario</section>";
			}
		}else{
			echo false;
			echo "<section class='alert'>El nickname ya exite</section>";
		}
		function validarUsuario($llamarMetodo,$a){
				$sql="SELECT * FROM usuario WHERE Nickname= '$a'";
				$stmt=$llamarMetodo->prepare($sql);
				$stmt->execute();
					if ($stmt->rowCount()>0) {
						return false;
					}else{
						return true;
					}
				}
 ?>
