<?php 
require_once('Conexion.php');
if (isset($_POST['consulta'])) {
	$nickname=$_POST['consulta'];
	$conn=new Conexion();
	$llamarMetodo=$conn->Conectar();
	$sql="SELECT Avatar FROM  usuario WHERE Nickname='$nickname'";
	$stmt=$llamarMetodo->prepare($sql);
	$stmt->execute();
		if ($stmt->rowCount()>0) {
				$row=$stmt->fetch(PDO::FETCH_ASSOC);	
  			$avatar=$row['Avatar'];
  			$avatar=str_replace('../','', $avatar);
				echo "<img src='".$avatar."' alt='Avatar' class='avatar'>";
		}else{
			echo "<img src='imagenes/loading.gif' alt='Avatar' class='avatar'>";
		}
}else{
			echo "<img src='imagenes/1.png' alt='Avatar' class='avatar'>";
}
?>