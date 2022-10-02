

 <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card shadow-lg">
                <div class="card-header text-center">
                    ADMINS
                    </div>
                    <div class="card-body">
                    <img class ="card-img-top col-12" src="../../pictures/admin.png" alt="admin image" style="height:50%; width:100%" >
                    <h5 class="card-title">NUMBER OF ADMINS</h5>
                    <p class="card-text text-center text-danger mt-4 h1"><?php
                    echo $get_admins;
                    ?></p>
                </div>
            </div>
    </div>
    
    <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card shadow-lg">
                <div class="card-header text-center">
                    STUDENT
                    </div>
                    <div class="card-body">
                    <img class ="card-img-top col-12" src="../../pictures/users.png" alt="admin image" style="height:50%; width:100%" >
                    <h5 class="card-title">NUMBER OF STUDENT</h5>
                    <p class="card-text text-center text-success mt-4 h1"><?php
                    echo $get_num_student;
                    ?></p>
                </div>
            </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card shadow-lg">
                <div class="card-header text-center">
                    USERS
                    </div>
                    <div class="card-body">
                    <img class ="card-img-top col-12" src="../../pictures/post.svg" alt="admin image" style="height:50%; width:100%" >
                    <h5 class="card-title">TOTAL POST</h5>
                    <p class="card-text text-center text-success mt-4 h1"><?php
                    echo $get_num_post;
                    ?></p>
                </div>
            </div>
    </div>
    
    </div>
