<?php

require_once('db/db.php');

if (isset($_GET['val'])) {
    $val = $_GET['val'];

    try {
        
        $del_stmt = "DELETE FROM sigmen.admin WHERE email = ?;";
        $pre_del = $conn->prepare($del_stmt);
        if ($pre_del->execute([$val])) {
            echo "DELETED";
        }
    
    }catch(PDOException $e){
        // echo $e;
        echo "can't delet user";
    }



}



if (isset($_GET['val_student'])) {
    $val = $_GET['val_student'];

    try {
        
        $del_stmt = "DELETE FROM sigmen.student WHERE email = ?;";
        $pre_del = $conn->prepare($del_stmt);
        if ($pre_del->execute([$val])) {
            header('location:../views/admin/all_student.php');
        }
    
    }catch(PDOException $e){
        // echo $e;
        echo "can't delet user";
    }



}


?>