<?php
require_once("db/db.php");

if (isset($_POST['submit'])) {
    
    if (
        !empty(($_POST['fname'])) &&
        !empty(($_POST['lname'])) &&
        !empty(($_POST['email'])) &&
        $_POST['pass'] === $_POST['pass2']
    ) {
        try {
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            
            $_inser_stmt = "INSERT INTO sigmen.admin(email,first_name,last_name,password) values (?,?,?,?)";
            
            $pre_inser = $conn->prepare($_inser_stmt);
            
            $pre_inser->execute([$email,$fname,$lname,$pass]);

            header("Location: ../views/admin/all_user.php");

        } catch (\Throwable $th) {
            header("Location: ../views/admin/add_user.php");
        }
    }
    
    
}else{

    header("Location: ../views/admin/add_user.php");
}

?>