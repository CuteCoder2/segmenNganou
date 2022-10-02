<?php

require_once("db/db.php");

$get_all_admins = "SELECT * FROM SIGMEN.admin WHERE 1";

$execute = $conn->query($get_all_admins);

$all_addmins = $execute->fetchAll();


$get_admins = $execute->rowCount();


$get_all_student = "SELECT * FROM SIGMEN.student WHERE 1";

$query = $conn->query($get_all_student);

$get_num_student = $query->rowCount();


$all_student = $query->fetchAll();


$user = $_SESSION['email'];

$get_all_post = "SELECT * FROM SIGMEN.post_article WHERE 1 and  post_article.email = '".$user."'";

$get_post = $conn->query($get_all_post);

$get_num_post = $get_post->rowCount();






?>