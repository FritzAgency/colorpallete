<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    //$email = $_POST['email']; 
    
    if (isset($_POST['submit'])){
    	$email = $_POST['email']; 
	$select = mysqli_query($con,"SELECT `email` FROM `users` WHERE `email` = '$email'");
		   	if(mysqli_num_rows($select) >= 1) {
    exit('This email is already being used');
} 

else{
	exit('Not in use'); 
}

 
		/*$username = stripslashes($_POST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_POST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_POST['password']);
		$password = mysqli_real_escape_string($con,$password);*/ 


		//$trn_date = date("Y-m-d H:i:s");
	        //$query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
       // $result = mysqli_query($con,$query);
        /*if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }*/ 
    }
else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
<br /><br />
<a href="http://www.allphptricks.com/simple-user-registration-login-script-in-php-and-mysqli/">Tutorial Link</a> <br /><br />
For More Web Development Tutorials Visit: <a href="http://www.allphptricks.com/">AllPHPTricks.com</a>
</div>
<?php } ?>
</body>
</html>
