<?php

  include_once 'assets/header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Admin Login | XBID</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background-color: #f8f9d2;
    background-image: linear-gradient(315deg, #f8f9d2 0%, #e8dbfc 74%); 
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
    border-radius: 15px;
}
</style>
</head>
<body>
<div class="login-form">
    <form action="includes/adminlogin.inc.php" method="post">
        <h2 class="text-center">Welcome Admin! i am all yours xD!</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Email Sir" name = "Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Your Password Sir" name = "Pwd" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="submit-login-admin" class="btn btn-primary btn-block">Log in</button>
        </div>

        <?php

if (isset($_GET['error'])) {
	if ($_GET['error']== 'InvalidEmail') {
	 echo "<p style = 'color:red;'>Invalid Email ID</p>";
	}
	elseif ($_GET['error']== 'WrongPassword') {
	echo "<p style = 'color:red;'>Wrong password. Try again </p>";
	}
}
    ?>

        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox">Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>  


    </form>
    
</body>
</html>
<?php

  include_once 'assets/footer.php';

?>