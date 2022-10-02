<?php

require_once('db/db.php');


if ( isset($_POST['submit'])){

    $img = $_FILES['img'];
// var_dump($img);
  $imgName = $img['name'];
  $imgtempLoca = $img['tmp_name'];
  $imgError = $img['error'];

    $pulingExtension = explode('.',$imgName);

    $imgExtension = end($pulingExtension);
      
    $date = new DateTime();
    
    $now = $date->getTimestamp();

    $accepted_extension = ['jpg','jpeg','png','mp3','mp4','pdf','mkv','webm'];

    if(in_array($imgExtension,$accepted_extension)){
      
        $file_new_location = "../img/IMG-".$now.".".$imgExtension;

        if (move_uploaded_file($imgtempLoca,$file_new_location)) {
            echo $header = $_POST['header'];
            echo $body = $_POST['body'];

            $inser_stmt = "INSERT INTO sigmen.post_article(heading,body,media,email) values(?,?,?,?);";
            
            $pre_insertion = $conn->prepare($inser_stmt);

           if( $pre_insertion->execute([$header,$body,$file_new_location,$_SESSION["email"],])){
             Header("location:../views/admin/home.php");
            }
          }
          
        }else{
          header("location:../views/admin/post_article.php");
        }


  
    
        }

?>