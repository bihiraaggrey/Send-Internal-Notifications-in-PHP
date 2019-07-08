<?php 
require 'server/connectDB.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Notifications | Home</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
  <?php 
  $data=$con->query("select * from notifications");
  $data=$con->query("select * from post");

  $count=$data->rowCount();


   ?>
<body>
    <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fa fa-envelope">Notifications</i>
                      <!-- Counter - Messages -->
                      <span class="badge badge-danger badge-counter"><?php if ($count > 0) {echo $count;} ?></span>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-list dropdown-menu dropdown-menu shadow animated--grow-in" aria-labelledby="messagesDropdown">
                      <h6 class="dropdown-header">
                        Message Center
                      </h6>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="font-weight-bold">
                          <?php foreach ($data as $value) { ?>
                          <div class="text-truncate"><strong style="color:#3d8cbd;"><?php echo $value['fname']; ?> &nbsp;&nbsp;<?php echo $value['lname']; ?></strong><br><?php echo $value['tittle']; ?></div>
                          <div class="small text-gray-500"><?php echo date("Y/m/d"); ?>&nbsp; <?php date_default_timezone_set("Africa/Nairobi"); echo date("h:i:sa"); ?></div>
                          <?php } ?>
                        </div>
                        
                      </a>
                      
                    </div>
                  </li>
<script type="text/javascript" href="js/bootstrap-slim-3.1.1.min.js"></script>
<script type="text/javascript" href="js/popper.min.js"></script>
<script type="text/javascript" href="js/bootstrap.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

          <!-- Core plugin JavaScript-->
          <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

          <!-- Custom scripts for all pages-->
          <script src="js/sb-admin-2.min.js"></script>

</body>
</html>