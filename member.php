<?php
include('authorize.php');
checkUsers(['admin', 'user']); // this users are the only ones that can access this page.
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
  <audio controls autoplay loop hidden src="I'm Just Ken.mp3">
  </audio>
</head>

<body>
  <h1>Member Page</h1>
  
    <div class="members">
      <img class="img" src = "gerrard.jpg" alt="gerrard">
      <h2>Gerrard Ortega</h2>
        <p>October 8, 2006 <br> 
          17 <br> 
          Basketball, Gamer
        </p>
    </div>
     <div class="members">
       <img class="img" src = "kyle.jpg" alt="kyle">
       <h2>Kyle Torres</h2>
         <p>March 31, 2007 <br> 
           16 <br> 
           Reading, Gamer
         </p>
     </div>
     <div class="members">
       <img class="img" src = "eric.jpg" alt="eric">
       <h2>Eric De Guzman</h2>
         <p>September 5, 2006 <br> 
           17 <br> 
           Guitarist, Gamer
         </p>
     </div>
  </div>



  <div class="buttons">
  <a href="main.php" class="buttons">Back</a>
  </div>
</body>

</html>