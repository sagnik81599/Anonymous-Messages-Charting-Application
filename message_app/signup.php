<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">

<title>Sign Up</title>

</head>
<body>
   

  <!-- Navbar -->
  <!-- <div class="navbar">
    <a href="index.php">Home</a>
  </div> -->
  <?php
  // inserting data in table
include 'db.php';
if(isset($_POST['create'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];

  // password hasing
  $hash=password_hash($pass,PASSWORD_DEFAULT);
  try {
    $sql=" insert into user (name,email,pass) values ('$name','$email','$hash') ";
    $query=mysqli_query($conn, $sql);
    echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <center><strong>Account created successfully</strong></center>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  } catch (Exception $e) {
    echo' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Email already exist</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }

}

?>

  <!-- Sign-Up Form -->
  <div class="container">
  <div class="box form-box">
  <header>Sign Up</header>
            <form action="signup.php" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="name" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="pass" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="create"  value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="login.php">Sign In</a>
                </div>
            </form>
        </div>
      </div>


</body>
</html>
