<?php

$email = $_POST["email"];
$senha = $_POST["senha"];

if ($email == "natashow@gmail.com") {
    if ($senha == "12345") {
        echo json_encode(0);
    } else {
        echo json_encode(2);
    }
} else {
    echo json_encode(1);
}
?>

