<?php
require_once '../db/connect.php';

$sql = $pdo->prepare("DELETE FROM city");

if (!$sql->execute()) {
    if (strpos($sql->errorInfo()[2], "Error") !== false) {
        $_SESSION["error_msg"] = "PROBLEMA INTERNO NO SISTEMA";
    }
}

header('location: ../../index.php');
