<?php
Session_start();
?>
<?php 
require_once('Conexion.php');
	$tag = $_POST['log'];
 if (isset($tag) && $tag !='') {
 			if ($tag == 'login') {
				$nickname=$_POST['nickname'];
				$pasword=$_POST['pass'];
				$conn=new Conexion();
				$llamarMetodo=$conn->Conectar();
				$sql="SELECT * FROM  usuario WHERE Nickname='$nickname' AND Contrasena='$pasword' ";
				$stmt=$llamarMetodo->prepare($sql);
				$stmt->execute();
				if ($stmt->rowCount()>0) {
					$row=$stmt->fetch(PDO::FETCH_ASSOC);	
					$_SESSION['ingreso']=true; 
    			$_SESSION['idUsuario']=$row['IdNickname'];
					echo true;
				}else{
					echo false;
				}
 		}
	}
?>