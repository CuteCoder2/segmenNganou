<?php

require_once('db/db.php');


if (isset($_GET['val1'])
&& isset($_GET['val2'])
&& isset($_GET['val3'])
) {
     $val1 = $_GET['val1'];
     $val2 = $_GET['val2'];
     $val3 = $_GET['val3'];

    $update_stmt = "UPDATE sigmen.admin SET first_name  = ? , last_name = ? WHERE email = ?;";

    $pre_update_stmt = $conn->prepare($update_stmt);

    $pre_update_stmt->execute([$val1,$val2,$val3]);
    header("Location: ../views/admin/all_user.php");
    

}



if (isset($_GET['stud1'])
&& isset($_GET['stud2'])
&& isset($_GET['stud3'])
) {
     $val1 = $_GET['stud1'];
     $val2 = $_GET['stud2'];
     $val3 = $_GET['stud3'];

    $update_stmt = "UPDATE sigmen.student SET first_name  = ? , last_name = ? WHERE email = ?;";

    $pre_update_stmt = $conn->prepare($update_stmt);

    if ($pre_update_stmt->execute([$val1,$val2,$val3])){

        header('location:../views/admin/all_student.php');
    }
    

}



?>