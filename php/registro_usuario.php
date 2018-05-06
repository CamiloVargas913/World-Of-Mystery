<?php 
require_once('Conexion.php');
		$pais=$_POST['pais'];
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$correo=$_POST['correo'];
		$nickname=$_POST['nickname'];
		$pasword=$_POST['pass'];
		$pasword1=$_POST['pass1'];
		$avatar=$_FILES['avatar']['name'];
		$nivel=1;
		$indicador=rand(0,10000);
		$dia=date('z'); 
		$avatar=str_replace(' ', '', $avatar);
		$ruta="../FotosAvatar/".$indicador.$dia.$avatar;
		//insercion base de datos
		$conn=new Conexion();
		$llamarMetodo=$conn->Conectar();
		$res2=validarContraseña($pasword,$pasword1);
		$res=validarUsuario($llamarMetodo,$nickname,$correo);
		if ($res2) {
			if ($res) {	
			$sql="INSERT INTO usuario  VALUES (NULL, '$nickname', '$ruta', '$nombre', '$apellido', '$correo','$pais', '$pasword', '$nivel')";
			$stmt=$llamarMetodo->prepare($sql);
			$stmt->execute();
				if ($stmt) {
					$carga = @move_uploaded_file($_FILES['avatar']['tmp_name'],$ruta);
					echo "<section class='alert2'>Usuario Registrado</section>";
				}else{
					echo "<section class='alert'>Error al registrar usuario</section>";
				}
			}else{
				echo false;
				echo "<section class='alert'>El nickname ya existe</section>";
			}
		}else{
			echo false;
			echo "<section class='alert'>Las contraseñas no coinciden</section>";
		}
		function validarUsuario($llamarMetodo,$a,$correo){
				$sql="SELECT * FROM usuario WHERE Nickname= '$a'";
				$stmt=$llamarMetodo->prepare($sql);
				$stmt->execute();
					if ($stmt->rowCount()>0) {
						return false;
					}else{
						return true;
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
