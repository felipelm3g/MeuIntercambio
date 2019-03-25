<?php
session_start();
if (!isset($_SESSION['user'])) {
    session_destroy();
    header('Location: ../../posto.php');
    exit;
} else {
    if (isset($_GET['del'])) {
        $sql = "DELETE WHERE";
        header('Location: ../../posto.php');
        exit;
    } else {
        header('Location: ../../index.php');
        exit;
    }
}
?>

