<?php 

session_start();
$errors = [];
$email = "";
// connect to database
$db = mysqli_connect('localhost', 'root', '', 'bookingroom');

/*
  Accept email of user whose password is to be reset
  Send email to user to reset their password
*/
if (isset($_POST['reset-password'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  // ensure that the user exists on our system
  $query = "SELECT email FROM tb_user WHERE email='$email'";
  $results = mysqli_query($db, $query);

  if (empty($email)) {
    array_push($errors, "Your email is required");
  }else if(mysqli_num_rows($results) <= 0) {
    array_push($errors, "Sorry, no user exists on our system with that email");
  }
  // generate a unique random token of length 100
  $token = bin2hex(random_bytes(50));

  if (count($errors) == 0) {
    // store token in the password-reset database table against the user's email
    $sql = "INSERT INTO password_reset(email, token) VALUES ('$email', '$token')";
    $results = mysqli_query($db, $sql);

    // Send email to user with the token in a link they can click on
    $to = $email;
    $subject = "Reset your password on Mahidol Library";
    $msg = "Hi there, click on this: <a href=https://localhost/bookaroom/login/forgotpass/new_pass.php?token=" . $token . ">link</a> to reset your password on our site";
    $msg = wordwrap($msg,70);
    $headers = "From: piyawat.chu@mahidol.ac.th". "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    mail($to, $subject, $msg, $headers);
    header('location: pending.php?email=' . $email);
    
  }
}

// ENTER A NEW PASSWORD
echo Test;
if (isset($_POST['new_password'])) {
  $new_pass = mysqli_real_escape_string($db, $_POST['new_pass']);
  $new_pass_c = mysqli_real_escape_string($db, $_POST['new_pass_c']);

  // Grab to token that came from the email link
  $token = $_SESSION['token'];
  if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
  if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
  if (count($errors) == 0) {
    // select email address of user from the password_reset table 
    $sql = "SELECT email FROM password_reset WHERE token='$token' LIMIT 1";
    $results = mysqli_query($db, $sql);
    
    $emailResult = mysqli_fetch_assoc($results)['email'];
    var_dump($emailResult);
    if ($email) {
      $new_pass = md5($new_pass);
      $sql = "UPDATE tb_user SET password='$new_pass' WHERE email='$email'";
      $updatePasswordResult = mysqli_query($db, $sql);
    }
  }
}
?>