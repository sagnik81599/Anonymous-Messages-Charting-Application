<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 📨 Anonymous Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        #message-box {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        .box {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            margin: 40px auto;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
        }

        textarea {
            resize: none;
        }

        button{
            width: 100%;
            max-width: 150px;
            font-size:1rem;
            background-color: #007bff;
            color: #fff;
            border: none;
            transition: background-color 0.3s ease;

        }

        button:hover {
            background-color: #0056b3;
        }


    
        .scroll-text {
            white-space: nowrap;
            overflow: hidden;
            display: block;
            animation: scroll-left 10s linear infinite;
            color: #fff;
            text-align: left;
            max-width: 100%;
            font-size: 1.2rem;
        }

        @keyframes scroll-left {
            from {
                transform: translateX(10%);
            }
            to {
                transform: translateX(-100%);
            }
        }

        .navbar {
            background-color:rgb(58, 141, 201) !important;
        }

        .navbar-nav a {
            color: #fff !important;
            text-align: center;
        }

        .navbar-nav a:hover {
            color: #ccc !important;
        }

        .nav-link {
            text-decoration: none; /* Removes underline by default */
            transition: text-decoration 0.3s ease-in-out;
        }

        .nav-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        <h5 class="scroll-text">Show all messages please sign up fast 👉</h5>
            <div class="navbar-nav">
                <a class="nav-link mx-5" href="login.php">Log in</a>
                <a class="nav-link mx-5" href="signup.php">Sign up</a>
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
    $sql="INSERT INTO messages(msg, ip, mac) VALUES ('$msg', '$ip', '$mac')";
    $query=mysqli_query($conn, $sql);
    echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
    <strong>Message sent!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
?>

<div class="container mt-5">
    <h1 class="text-center">📬 Messenger</h1>
    <div class="box">
        <form action="chat.php" method="post">
            <div class="mb-3" id="message-box">
                <textarea class="form-control" name="message" rows="4" placeholder="Type your message here..." required></textarea>
            </div>
            <button type="submit" name="send" class="btn btn-outline-info">Send</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
