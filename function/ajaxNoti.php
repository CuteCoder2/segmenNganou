<?php

require_once('db/db.php');

$get_noti = "SELECT * FROM sigmen.post_article WHERE view_state = 'not view' ORDER BY date_post DESC";
$execute_query = $conn->query($get_noti);

$return_not_view_post = $execute_query->fetchAll();

 echo $num = $execute_query->rowCount();
?>