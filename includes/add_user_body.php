<div class="container mt5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4">
        <div class="card-body">
            <h1 class="crd-title mb-3 text-center">
                ADD NEW USER
            </h1>
            <form action="../../function/regester_user.php" method="POST" id="add_user">
            <div class="row">
                <div class="form-group col-lg-6">
                        <label for="name"><strong> first name </strong></label>
                            <input type="text" name="fname" id="" class="form-control">
                        </div>

                    <div class="form-group col-lg-6">
                        <label for="email"><strong> last name </strong></label>
                            <input type="text" name="lname" id="" class="form-control">
                        </div>

                    <div class="form-group col-12">
                        <label for="name"> <strong> E-MAIL </strong></label>
                            <input type="email" name="email" id="" class="form-control">
                        </div>

                    <div class="form-group col-lg-6">
                        <label for="name"><strong> password </strong></label>
                            <input type="password" name="pass" id="" class="form-control" minlength="8">
                        </div>

                    <div class="form-group col-lg-6">
                        <label for="name"><strong> Confirm password </strong></label>
                            <input type="password" name="pass2" id="" class="form-control" minlength="8">
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



<script>

    var btn = document.getElementById('submit');
    btn.addEventListener('click',(e)=>{
        btn.value = "submite";
    })
</script>