<?php
require_once("db/db.php");

$get_post_stmt = "SELECT * FROM sigmen.post_article WHERE view_state = 'viewed' ORDER BY date_post DESC";

$query_stmt = $conn->query($get_post_stmt);

$result_get =  $query_stmt->fetchAll();

// var_dump($result_get);

?>