<?php
// checking session
session_start();
$vpas=FALSE;
if (isset($_SESSION['name'])) {
  header('location: inbox.php');
}
else {
  include 'db.php';
if(isset($_POST['login'])){
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  //hasing data
  $hsql=" select pass from user where email='$email' ";
  $query=mysqli_query($conn,$hsql);
  $hash_data=mysqli_fetch_assoc($query); //Retrieves the result as an associative array using mysqli_fetch_assoc(), storing it in $hash_data.
  if ($hash_data!=NULL) {
    //verify password
    $vpas=password_verify($pass,$hash_data['pass']);
  }
  if ($vpas) {
    $sql=" select name from user where email='$email' ";
    $query=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($query);
    $_SESSION['name']=$data['name'];
    header('location: inbox.php');
}
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>



<?php
if (isset($_POST['login']) && $vpas==FALSE ) {
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Email or password is incorrect</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
<div class="container">
        <div class="box form-box">
       
            <header>Login</header>
            <form action="login.php" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="pass" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="login" value="Login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="signup.php">Sign Up Now</a>
                </div>
            </form>
        </div>
      </div>
</body>
</html>