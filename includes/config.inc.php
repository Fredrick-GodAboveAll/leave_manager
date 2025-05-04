<?php
/* 
Database Connection Handler v3.1
Secure PDO Implementation
*/

// Database Configuration
const DB_HOST = 'localhost';
const DB_NAME = 'leave_management';
const DB_USER = 'root';
const DB_PASS = '0716632613';

try {
    
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_EMULATE_PREPARES   => false,
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    error_log("Database Connection Failed: " . $e->getMessage());
    http_response_code(500);
    die("Critical system maintenance in progress. Please try again in 30 minutes.");
}

?>