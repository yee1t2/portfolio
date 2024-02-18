<?php
include('authorize.php');
session_start();
checkUsers(['admin', 'user']);
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
</head>

<body class="goals">
  <h1>OUR GOALS</h1>
  
<div class="goals2">
  <h2>1. Be Top 1</h2>
  <h2>2. Conquer The World</h2>
  <h2>3. Be Successful</h2>
  <h2>4. Make Money</h2>
  <h2>5. Be A Master Programmer</h2>
  <h2>6. Be The Greatest MTG Player</h2>
  <h2>7. Be The Greatest Gamer</h2>
  <h2>8. Be Legit</h2>
  <h2>9. Sleep On Time</h2>
  <h2>10. Be Healthy</h2>
  
</div>
  
  <p>We shall accomplish these by tomorrow</p>
  <p>*Not in order*</p>

  <p>"Know thy self, know thy enemy. A thousand battles, a thousand victories."
  -Sun Tzu
    <br>Read more at https://www.brainyquote.com/authors/sun-tzu-quotes</p>

  <img class="img" src="ken.gif" alt="ken">
  
   <div class="buttons">
     <a href="main.php" class="buttons">Back</a>
   </div>  
</body>

</html>