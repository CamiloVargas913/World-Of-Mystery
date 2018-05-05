<?php 
if(isset($_SESSION['ingreso']) && $_SESSION['ingreso']==true){
	echo '<a href="php/game.php">Jugar</a>';
}else{
	echo '<a href="php/game1.php">Juega Gratis</a>';
}
?>
