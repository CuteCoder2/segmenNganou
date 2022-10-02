<?php

require_once("db/db.php");


if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['pass']) == isset($_POST['pass2'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pass = $_POST['pass'];

    $update_stmt = "UPDATE sigmen.student SET first_name = ? ,last_name = ?,password = ?";

    $pre_update = $conn->prepare($update_stmt);

    if($pre_update->execute([$fname,$lname,$pass])){
        Header('location:../views/client/profile.php');
    }
}else{
    Header('location:../views/client/profile.php');

}










try {

    $smt = "SELECT * FROM sigmen.student WHERE email = '".$_SESSION['email']."'";

    $query = $conn->query($smt);

    $result = $query->fetchAll();

    foreach($result as $row){
        $_SESSION["email"] = $row['email'];    
        $_SESSION["fname"] = $row['first_name'];
        $_SESSION["lname"] = $row['last_name'];
        
    }

    echo json_encode($result);

} catch (\Throwable $th) {
    

}


?>