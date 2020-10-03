<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Details</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Details</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Vehical Comapny Name/label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Vehical Model</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Last Service Date</label>
  	  <input type="dl" name="dl" value="<?php echo $dl; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Driver Name</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Next Service Date</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Submit</button>
  	</div>
  	<p>
  		Click here to see all vehicle details <a href="display.php">View Detials</a>
  	</p>
  </form>
</body>
</html>