<?php
require_once('db/db.php');



    $user_type = $_POST['user_type'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    

if($user_type == "admin") {
   
                $get_user = "SELECT * FROM sigmen.admin  where email = ? AND password = ?";
    
                $prepar_get_stmt = $conn->prepare($get_user);
                
                $prepar_get_stmt->execute([$email,$pass]);
                    $get_all = $prepar_get_stmt->fetchAll();
                    
                    if ( $prepar_get_stmt->rowCount() > 0) {
                        foreach($get_all as $row){
                            $_SESSION["email"] = $row['email'];    
                            $_SESSION["fname"] = $row['first_name'];
                            $_SESSION["lname"] = $row['last_name'];
                            
                        }
                        header("Location:../views/admin/home.php");
                    }else{
                        header("Location:../");
                        
                    }
                
                
            }else{
            
            $get_student = "SELECT * FROM sigmen.student  where email = ? AND password = ?";
            
            $prepar_get_student_stmt = $conn->prepare($get_student);
            
                $prepar_get_student_stmt->execute([$email,$pass]);
                    $get_all_student = $prepar_get_student_stmt->fetchAll();
            
                    if ( $prepar_get_student_stmt->rowCount() > 0) {
                        foreach($get_all_student as $row){
                            $_SESSION["email"] = $row['email'];
                            $_SESSION["fname"] = $row['first_name'];
                             $_SESSION["lname"] = $row['last_name'];
                             
                            }
                            
                            // var_dump($get_all_student);
                            header("Location:../views/client/home.php");
                }else{
                    header("Location:../");
                    
                }   
            }








?>