<?php
require_once '../class/User.php';
$user = new User($_POST["email"],$_POST["senha"]);
$return = $user->logar();
echo json_encode($return);
?>

