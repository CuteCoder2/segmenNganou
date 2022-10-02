<style>
    .btn-file {
    position: relative;
    overflow: hidden;
}


#img-upload{
    width: 20vw;
    border-radius:60%;
    height:30vh;
}
</style>

<div class="container mt5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4">
        <div class="card-body">
            <h1 class="crd-title mb-3 text-center">
                ADD NEW USER
            </h1>
    <div class="row">

    <form action="../../function/posting.php" method="POST" enctype="multipart/form-data" >
        <!-- <div class="input-group"> -->
            
        <div class="form-group">
            <img src="../../pictures/admin.png" class="form-control" id='img-upload'/>
        </div>
        
            <div class="form-group">
                <label>Upload Image</label>
                <input type="file" id="imgInp" name="img" class="form-control col">
            </div>
            <div class="form-group col">
                <label for="email"><strong> head </strong></label>
                <input type="textarea" name="header" id="" class="form-control">
            </div>
                        <div class="form-group col-12">
                            <label for="email"><strong> body </strong></label>
                            <textarea type="text" name="body" id="" class="form-control"></textarea>
                        </div>
                        <div class="form-group mt-3 btn col-sm-6" >
                            <button type="submit" name='submit' id="sub" class="form-control btn-outline-info">submit</button>
                        </div>
        <!-- </div> -->
    </div>
    
</form>
</div>
</div>
</div>

<script>
    let btnsub = document.getElementById('sub');
    btnsub.addEventListener('click',()=>{
            btnsub.value = "submit";
    });
</script>



