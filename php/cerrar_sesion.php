<?php
session_start();
unset($_SESSION['nickmame']);
session_destroy();
header('Location: ../index.html');

?>