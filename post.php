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
	if (isset($_POST['post'])) {
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$tittle=$_POST['tittle'];

		$qn1="INSERT INTO post(fname,lname,tittle) values('$fname','$lname','$tittle')";
		$qn2="INSERT INTO notifications(tittle,read_n) VALUES ('$tittle','1')";

		$con->query($qn1);
		$con->query($qn2);

	}
	 ?>
<body>
	<br>
  <form action="" method="post" style="width: 30%;text-align: center;margin-left: 20%;">
  	<input type="text" name="fname" class="form-control" placeholder="Enter First Name"><br>
  	<input type="text" name="lname" class="form-control" placeholder="Enter Last Name"><br>
  	<textarea class="form-control" name="tittle" required></textarea><br>
  	<input type="submit" name="post" value="Post" class="btn btn-primary">
  </form>
<script type="text/javascript" href="js/bootstrap-slim-3.1.1.min.js"></script>
<script type="text/javascript" href="js/popper.min.js"></script>
<script type="text/javascript" href="js/bootstrap.min.js"></script>

</body>
</html>