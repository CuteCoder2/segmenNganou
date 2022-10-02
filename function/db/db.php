<?php
session_start();
// session_destroy();

try {
    $conn = new PDO("mysql:host=localhost; dbname = sigmen","raims","cute killer");
    // echo "connect succeeded";
} catch (PDOException $eror) {
    throw new Exception("unable to connect to database");
    // echo $eror;
}

?>