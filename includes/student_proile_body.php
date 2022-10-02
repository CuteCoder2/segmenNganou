<div class="container mt5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4">
        <div class="card-body">
            <h1 class="crd-title mb-3 text-center">
                Edit Profile
            </h1>
            <form action="../../function/get_stud_info.php" method="POST" id="add_user">
            <div class="row">
            <div class="form-group col-12">
                        <label for="name"> <strong> E-MAIL </strong></label>
                            <input type="email" value="<?php 
                            echo $_SESSION['email']
                            ?>"  name="email" id="" readonly class="form-control">
                    </div>

                <div class="form-group col-lg-6">
                        <label for="name"><strong> first name </strong></label>
                            <input type="text" name="fname" id="fname" class="form-control">
                        </div>

                    <div class="form-group col-lg-6">
                        <label for="email"><strong> last name </strong></label>
                            <input type="text" name="lname" id="lname" class="form-control">
                        </div>

                    <div class="form-group col-lg-6">
                        <label for="name"><strong>last password </strong></label>
                            <input type="password" name="pass" id="pass" class="form-control" minlength="8">
                        </div>

                    <div class="form-group col-lg-6">
                        <label for="name"><strong>new password </strong></label>
                            <input type="password" name="pass2" id="pass2" class="form-control" minlength="8">
                        </div>


                        <div class="col">
                    </div>

                    <div class="form-group col-4 mt-2">
                            <button type="submit"   name="submit" id="submit" class="btn btn-primary form-control col-6">submit</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
