<?php
session_start();

// check if logged in or not
if(!isset($_SESSION['Username'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Group Portfolio</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <style>
    @import url('https://fonts.cdnfonts.com/css/barbie');
  </style>
  <audio controls autoplay loop hidden src="I'm Just Ken.mp3"></audio>
</head>

<body>
  <h1>Our Groups Portfolio</h1>
  <h4>Welcome!</h4>

  <div class="buttons">
    <div class="buttons2">
      <a href="member.html">Members!</a>
    </div>

    <div class="buttons2">
      <a href="goals.html">Goals!</a>
    </div>

    <div class="buttons2">
      <a href="resumes.php">Resume</a>
    </div>

    <div class="buttons2">
      <a href="logout.php">Logout</a>
    </div>
  </div>

</body>

</html>
