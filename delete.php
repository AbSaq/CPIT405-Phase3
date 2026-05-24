<?php
include 'db.php';
/* @var $pdo PDO */

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = :id");
    $stmt->execute(['id' => $id]);
}

header("Location: index.php");
exit();