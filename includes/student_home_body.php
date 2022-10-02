


<div class="row justify-content-center">
    
    <?PHP
        foreach($result_get as $row){
            $img = $row['media'];
            $media = explode('.',$img);
            $exten = end($media);
            $exten;
            if($exten == 'jpeg' || $exten == 'png' || $exten == 'jpg'){
               
                
                    echo'<div class="col-7 my-5">
                    <div class="card">
                <div class="card-header text-center text-uppercase"><h1>'.$row['heading'].'</h1></div>
                <img src="../'.$row['media'].'" style="height:20rem" alt="" class="card-img-top">
                <div class="card-body">
                </div>
                <h3 class="card-title px-3">by : '.$row['email'].'</h3>
                <p class="card-title px-3">on the '.$row['date_post'].'</p>
                <p class="card-text px-3">'.$row['body'].'</p>
            
                    </div>
                </div>';
            
            }elseif($exten == 'pdf'){
                echo'<div class="col-7 my-5">
                <div class="card">
            <div class="card-header text-center text-uppercase"><h1>'.$row['heading'].'</h1></div>
            <a href="../../Cahier de charges.pdf" ><img class="card-img-top" src="../../pictures/pdff.png" alt="" srcset="" style="height:20rem;" ></a>
            <div class="card-body">
            </div>
            <h3 class="card-title px-3">by : '.$row['email'].'</h3>
            <p class="card-title px-3">on the '.$row['date_post'].'</p>
            <p class="card-text px-3">'.$row['body'].'</p>
        
                </div>
            </div>';
            }elseif($exten == 'mp4' || $exten == 'mkv' || $exten == 'webm' ){

                echo'<div class="col-7 my-5">
                <div class="card">
            <div class="card-header text-center text-uppercase"><h1>'.$row['heading'].'</h1></div>
            <video controls src="../'.$row['media'].'"></video>
            <div class="card-body">
            </div>
            <h3 class="card-title px-3">by : '.$row['email'].'</h3>
            <p class="card-title px-3">on the '.$row['date_post'].'</p>
            <p class="card-text px-3">'.$row['body'].'</p>
        
                </div>
            </div>';


            }


        }

        
?>
