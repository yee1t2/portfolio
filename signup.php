<?php
$insert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
$server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "signup";



$con = mysqli_connect($server, $db_user, $db_pass, $db_name);

if (!$con) {
    die("Connection failed: " .mysqli_connect_error());
}

$Username= isset($_POST["Username"]) ? $_POST["Username"] : "";
$Yearlevel = isset($_POST["Lvl"]) ? $_POST["Lvl"] :0; // set to 0 to indicate the input will be a integer.
$Color = isset($_POST["Favcolor"]) ? $_POST["Favcolor"] : ""; // by pressing submit, POST will assign the values to the variables
$Food = isset($_POST["Favfood"]) ? $_POST["Favfood"] : "";
$Password = isset($_POST["PW"]) ? $_POST["PW"] : "";

// sql injection
$sql = "INSERT INTO users (Username,Yearlevel,Favcolor,FavFood,Password) VALUES (?, ?, ?, ?, ?)"; // this is a query that inserts the data into the "users" table. '?' is a placeholder of the columns 
$stmt = $con->prepare($sql); // it prepares the query to insert data
$stmt->bind_param("sisss", $Username, $Yearlevel, $Color, $Food, $Password); // tells sql what data will be inserted in the table, 's' for string, 'i' for integer.
$stmt->execute(); // inserts the data in 'users' table.
$insert = true;

$stmt->close();
$con->close();  // closes the database connection.
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Sign In Page</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <style>
  @import url('https://fonts.cdnfonts.com/css/barbie');
  </style>
  <audio controls autoplay loop hidden src="I'm Just Ken.mp3">
  </audio>
</head>

<body>

  <h1>Sign Up</h1>
  
  
    <div class="signup">
      <form action="signup.php" method="post"> 
      <div class="input-box">
        <input class="input" type="text" id="Name" placeholder="Username" required name = "Username">
      </div>
      <div class="input-box">
        <input class="input" type="number" id="Lvl" placeholder="Year Level" name = "Lvl" required;
      <div class="input-box">
        <input class="input" type="text" id="Favcolor" placeholder="Favorite Color" required name="Favcolor">
      </div>
      <div class="input-box">
        <input class="input" type="text" id="FavFood" placeholder="Favorite Food" required name= "Favfood">
      </div>
      <div class="input-box">
        <input class="input" type="password" id="PW" placeholder="Password" required name = "PW">
      </div>
      <div class="input-box">
        <input class="input" type="submit" value="Submit">
        </form>
      </div>

      <div class="buttons3">
        <div class="buttons2">
          <div class="buttons">
            <a class="buttons2" href="login.php">Login</a>
          </div>
        </div>
      </div>
      
    </div>
    
  </form>

</body>
</html>

