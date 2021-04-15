<?php

  include_once 'assets/header.php';

?>

<?php

  include_once 'assets/header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Bootstrap Quick Sign up Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #4c535d;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	min-height: 41px;
	box-shadow: none;
	border-color: #e1e4e5;
	font-size: 14px;
}
.form-control, .btn {        
	border-radius: 3px;
}    
.signup-form {
	width: 400px;
	margin: 0 auto;
	padding: 30px 0;
}	
.signup-form form {
	color: #9ba5a8;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form h2 {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}
.signup-form hr {
	margin: 0 -30px 20px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form label {
	font-weight: normal;
	font-size: 13px;
}
.signup-form .btn, .signup-form .btn:active {        
	font-size: 16px;
	font-weight: bold;
	background: #5fcaba !important;
	border: none;
	min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #3fc0ad !important;
}
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5fcaba;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}
</style>
</head>
<body>
<div class="signup-form">
    <form action="includes/signup.inc.php" method="post">
		<h2>User Sign Up</h2>
		<p>It's free and only takes a minute.</p>
		<hr>
        <div class="form-group">
        	<input type="text" class="form-control" name="name" placeholder="Name" required="required">
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="ign" placeholder="In Game Name (IGN)" required="required">
        </div>
        <div class="form-group">
		<select name="gender" id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
    </select>
		 
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="contact" placeholder="Contact Details" required="required">
        </div>
        <div class="form-group">
		<select name="experience" id="experience">
        <option value="silver">Silver</option>
        <option value="gold">Gold</option>
        <option value="diamond">Diamond</option>
    </select>
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pwd" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="conf-pwd" placeholder="Confirm Password" required="required">
        </div>
		<div class="form-group">
            <button type="submit" name='submit-signup' class="btn btn-primary btn-block btn-lg">Sign Up</button>
        </div>
		<p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
    </form>
	<div class="text-center">Already have an account? <a href="../XBID/userlogin.php">Login here</a></div>
</div>
<?php

if (isset($_GET['error'])) {
	if ($_GET['error']== 'emptyinput') {
	 echo "<p> Required All fields to be Filled </p>";
	}
	elseif ($_GET['error']== 'invalidusername') {
	echo "<p> invalid user nametry again </p>";
	}
	elseif ($_GET['error']== 'invalidContact') {
		echo "<p> invalid contact number try again </p>";
		}
	elseif ($_GET['error']== 'invalidemail') {
	echo "<p> Inout valid email id </p>";
	}
	elseif ($_GET['error']== 'passwordmatchInvalid') {
	echo "<p> passwords did'nt match </p>";
	}
	elseif ($_GET['error']== 'stmtFailed1') {
	echo "<p> STMT-1 failed </p>";
	}
	elseif ($_GET['error']== 'stmtFailed2') {
		echo "<p> STMT-2 failed </p>";
		}
	elseif ($_GET['error']== 'IGNExist') {
	echo "<p> userName already taken try diff one </p>";
	}
	elseif ($_GET['error']== 'None') {
	 echo "<p> You signed up successfully </p>";
	}
}

?>




</body>
</html>