<?php


setcookie("carrito","", time() - 1);


header("Location: carrito.php");
exit();

?>