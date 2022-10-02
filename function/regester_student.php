
<?php

require_once("db/db.php");

if (isset($_POST['submit'])) {
    
    if (
        !empty(($_POST['fname'])) &&
        !empty(($_POST['lname'])) &&
        !empty(($_POST['series'])) &&
        !empty(($_POST['email'])) &&
        $_POST['pass'] === $_POST['pass2']
    ) {
        try {
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $series = $_POST['series'];
            
            $_inser_stmt = "INSERT INTO sigmen.student(email,first_name,last_name,password,series) values (?,?,?,?,?)";
            
            $pre_inser = $conn->prepare($_inser_stmt);
            
            if($pre_inser->execute([$email,$fname,$lname,$pass,$series])){

            
                if(mail($email,'pass word','you pssword is '.$pass)){
                    echo " mail send";
                    // header("location:../views/admin/add_student.php");
                }else{
                    
                    echo " mail wasnt send";
                }
                // header("location:../views/admin/all_student.php");
            }


        } catch (\Throwable $th) {
            // header("location:../views/admin/add_student.php");
        }
    }
    
    
}else{

    // header("location:../views/admin/add_student.php");
}

?>