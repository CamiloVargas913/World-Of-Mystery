<?php 
if(isset($_SESSION['ingreso']) && $_SESSION['ingreso']==true){
	echo '<a href="php/game.php">Jugar</a>';
}else{
	echo '<a href="vistaFree.php">Juega Gratis</a>';
}
?>
