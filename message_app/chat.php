<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <style>
        #message-box{
            width: 50%;
            /* justify-content:center;
            position: absolute;
            left: 25%;
            top: 25%; */
        }


        .box{
      background-color: #ffffff;
      padding: 20px;
      width: 100%; 
      max-width: 800px;
      border-radius: 8px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      margin: 20px auto; 
    }
      

    </style>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary"  data-bs-theme="dark">
        <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto p-2">
              <a class="nav-link mx-4" href="login.php">Log in</a>
              <a class="nav-link mx-4" href="signup.php">Sign up</a>   
            </div>
          </div>
        </div>
      </nav>

      <?php
include 'db.php';
if(isset($_POST['message'])){ 
  $msg=$_POST['message'];
  
  $ip = $_SERVER['REMOTE_ADDR'];

  $mac=exec('getmac');
 
  $mac=strtok($mac, ' ');  

  $sql=" insert into messages(msg,ip,mac) values ('$msg','$ip','$mac') ";
  $query=mysqli_query($conn, $sql);
  echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Message sent</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>








      <div class="container mt-5">
        <h1 class="text-center"> Messager </h1>

        <div class="box">
        <form action="chat.php" method="post">
            <div class="navbar-nav me-auto mb-3 mb-lg-0 mx-auto p-2" id="message-box">
                <textarea class="form-control" name="message" rows="" placeholder="Type your message here..." required></textarea>
            </div>
            <button type="submit" name="send" class="btn btn-primary navbar-nav me-auto mb-2 mb-lg-0 mx-auto p-2">Send</button><br>
            <!-- <button type="submit" name="send" class="btn btn-primary navbar-nav me-auto mb-2 mb-lg-2 mx-auto p-2">Send</button> -->
        </form>
        </div>
    </div>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>