<?php

require_once('../../function/notification.php')

?>

<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">header

      </th>
      <th class="th-sm">autor

      </th>
      <th class="th-sm">containe

      </th>
      
      </th>
      <th class="th-sm">date post
      </th>
      
    </tr>
  </thead>
  <tbody>
   <?php

   foreach($return_not_view_post as $row){
     echo"<tr>
     <td>".$row['heading']."</td>
     <td>".$row['email']."</td>
     <td>".$row['body']."</td>
     <td>".$row['date_post']."</td>
   </tr>";
   }
   ?>
  </tbody>
</table>


<?php
    $upadte_stmt = "UPDATE sigmen.post_article SET view_state = 'viewed' WHERE view_state = 'not view'";

    $conn->query($upadte_stmt);


?>