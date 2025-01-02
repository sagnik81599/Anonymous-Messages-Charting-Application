<?php

session_start();
if (!isset($_SESSION['name'])){
  header('location: login.php');
}
include 'db.php';
$row=0;
$user=$_SESSION['name'];
$msg="";
$mtime="";
$sql=" select * from messages";
$query=mysqli_query($conn,$sql);
$row=mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inbox</title>
  <style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f9;
}

.inbox-container {
  max-width: 600px;
  margin: 50px auto;
  background-color: #fff;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  overflow-x: scroll;
}

.inbox-header {
  background-color:green;
  color: #fff;
  padding: 20px;
  text-align: center;
}

.messages {
  padding: 20px;
}

.message {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px;
  margin-bottom: 10px;
  background-color: #f9f9f9;
  border-radius: 6px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  transition: transform 0.2s, box-shadow 0.2s;
}
.message-info {
  flex-grow: 1;
}

.sender {
  margin: 0;
  font-size: 16px;
  font-weight: bold;
  color: #333;
}

.message-preview {
  margin: 5px 0 0;
  font-size: 14px;
  color: #555;
}

.timestamp {
  font-size: 12px;
  color: #999;
  margin-left: 20px;
}

a{
  text-decoration: none;
  color: white;
  margin: 0 1em;
  font-weight: bold;
}
a:hover {
      color: #d3b5ff; 
    }

  </style>
</head>
<body>
  <div class="inbox-container">
    <header class="inbox-header">
    <div class="navbar">
    <a href="chat.php">Dashbord</a>
    <!-- <a href="inbox.php"><?=$user?></a> -->
    <a href="logout.php">Log Out</a>
  </div>
      <h1>Inbox (<?=$row?>)</h1>
    </header>

    
    <?php
while ($row>0) {
  $data=mysqli_fetch_assoc($query);
  $msg=$data['msg'];
  $mtime=$data['time'];
  echo '
      <div class="messages">
      <div class="message">
        <div class="message-info">
          <p class="message-preview">'.$msg.'</p>
        </div>
        <span class="timestamp">'.$mtime.'</span>
      </div>
    </div>
  ';
  $row--;
}
?>
 </div>
</body>
</html>
