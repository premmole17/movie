<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	    <link rel="icon" type="image/x-icon" href="file.png" />

</head>
<body>
	<div class="loginbox">
	<form action="valid.php" method="post" >
	  <div class="imgcontainer">
	    <img src="file.png" alt="Avatar" class="avatar">
	  </div>

	  <div class="container">
	    
	    <input type="text" placeholder="Enter Username" name="email" id="email" required>

	    
	    <input type="password" placeholder="Enter Password" name="password" required>

	    <button type="login">Login</button>
	    
	  </div>
	 
	 
	</form>
<!--  <button class="btn" herf="signup.php" method="post">Signup</button>
 -->	
<form name="signup" class="input-group" method="post" action="signup.php">
				<div class="container">
				<label style="color: #fff;">Create account</label>
				<button type="submit">signup</button>
			</div>
			</form>


</div>


	  	
	
	
</body>
</html>
