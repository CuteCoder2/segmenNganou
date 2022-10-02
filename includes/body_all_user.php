<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form  id='delete'>
        <div class="modal-body">
            <h3 id='user_email'>

            </h3>
            <input type="text" id="del_val" hidden>
          </div>
          <div class="modal-footer">
            <button type="button"  class="btn   btn-danger" data-bs-dismiss="modal">COUNCIL</button>
            <button type="submit" class="btn btn-primary"  id="btn_hide" >CONFIRM</button>
          </div>
        </div>
      </div>
    </div>
  </form>

  



<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modify</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form name="update" action='../../function/update.php' method="GET">
      <div class="modal-body">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Lirst Name</label>
            <input type="text" class="form-control" name="val1">
          </div>
        
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Last Name</label>
            <input type="text" class="form-control" name="val2">
          </div>
        
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" readonly>E-mail Name</label>
            <input type="text" class="form-control" name="val3">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>
</form>


<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>

      <th class="th-sm">first Name

      </th>
      <th class="th-sm">last Name

      </th>

      <th class="th-sm">email
      </th>
    
      <th class="th-sm">action
      </th>
    </tr>

  </thead>
  <tbody>
   <?php

   foreach($all_addmins as $row){
     echo"<tr>
     <td>".$row['first_name']."</td>
     <td>".$row['last_name']."</td>
     <td>".$row['email']."</td>
     <td><img  src='../../pictures/delete.png' onclick=\"deleted('".$row['email']."')\" class='delete_btn' data-bs-toggle=\"modal\" data-bs-target=\"#delete\" data-bs-whatever=\"@mdo\"style='height:20px;width:50px'>
     <img src='../../pictures/edit.png' onclick=\"update_form('".$row['first_name']."','".$row['last_name']."','".$row['email']."')\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal1\" data-bs-whatever=\"@fat\" style='height:20px;width:50px' ></td>
     
     </tr>";
    }


    ?>
  </tbody>
</table>
<?php
    
?>