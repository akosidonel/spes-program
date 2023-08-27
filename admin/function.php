<?php
    // DB credentials.
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','spesdb');
    // Establish database connection.
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
?>