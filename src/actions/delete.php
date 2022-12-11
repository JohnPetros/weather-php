<?php
require_once '../db/connect.php';

$id = $_POST['delete-id'];

$sql = $pdo->prepare("DELETE FROM city WHERE id = ?");

if (!$sql->execute(array($id))) {
    print_r($sql->errorInfo());
}

header('location: ../../index.php');
