<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<?php
require('../connect.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($conn,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn,$email);
	$password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn,$password);
        $cardnumber = stripslashes($_REQUEST['cardnumber']);
        $cardnumber = mysqli_real_escape_string($conn,$cardnumber); 
        $faculty = stripslashes($_REQUEST['faculty']);
        $tel = stripslashes($_REQUEST['tel']);
	//$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `tb_user` (username, password, email, cardnumber, faculty, telno)
VALUES ('$username', '".md5($password)."', '$email', '$cardnumber', '$faculty', '$tel' )";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="text" name="cardnumber" placeholder="5588xx" required />
<input type="text" name="faculty" placeholder="faculty" required />
<input type="text" name="tel" placeholder="tel.no" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>