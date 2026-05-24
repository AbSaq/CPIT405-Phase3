<?php
// API to fetch products from the database and return as JSON response
include 'db.php';
/* @var $pdo PDO */

header('Content-Type: application/json');

try {
    //TODO: Complete the code to fetch products from the database and return as JSON response.
    // Example of the response: {status: 'success', data: [{id: 1, name: 'Product 1', price: 10.00}, ...]}


} catch (PDOException $e) {
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
}