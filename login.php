<?php
//Setting up connection to the database

// checks if the form submission is set to "POST" 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $server = "localhost";     
    $db_user = "root";       // these are parameters needed to connect to the database.  
    $db_pass = "";
    $db_name = "signup";

    //connection to mysql database. these are the parameters that will connect to it.
    $con = mysqli_connect($server, $db_user, $db_pass, $db_name); 

    // test connection to database
    if (!$con) {
        die("Connection failed: " .mysqli_connect_error()); // it ends the script is connection is failed.
    }

    $Username= isset($_POST["Username"]) ? $_POST["Username"] : ""; // POST gets the data from the HTML form and stores it in the array.
    $Password = isset($_POST["PW"]) ? $_POST["PW"] : ""; //isset checks if variables are declared or it is not empty.   

    $sql = "SELECT * FROM users WHERE Username = '$Username' AND Password = '$Password'"; //A query. it checks if the credentials are in the "users" table
    $result = mysqli_query($con,$sql); // mysqli_query is a function that performs the query to the database.


// data retreival from database
    if(mysqli_num_rows($result) > 0) { // checks if it's a successful login by checking the rows.
        $row = mysqli_fetch_assoc($result); // this gets the array of results

        session_start(); // this stores the information upon login.
        $_SESSION['Name'] = $row['Name'];
        $_SESSION['Username'] = $Username; // when the session is active, this allows the storage of data when visiting multiple page of the website.
        $_SESSION['Role'] = $row['role'];

        mysqli_close($con); // closes the database connection.
        header("Location: main.php"); // this directs the user to the main page
        exit(); // used to prevent codes from executing after they are redirected.

    } else{ // if no data was found in the table
      mysqli_close($con); 
        echo "Login failed. Incorrect Username or Password";
    }
   mysqli_close($con);


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
  <script src="script.js"></script>
  
  <div class="wrapper">
      <h1>Login</h1>

  <div class="login">
    <form action ="login.php" method="post"> <!--this allows for submission of data to the database -->
      <div class="input-box">
        <input class="input" type="text" id="UN" placeholder="Username" required name ="Username">
      </div>
      <div class="input-box">
        <input class="input" type="password" id="PW" placeholder="Password" required name ="PW">
      </div>
      <button class="input" type="submit" class="btn">Login</button>

      <div class="buttons3">
        <div class="buttons2">
          <div class="buttons">
            <a class="buttons2" href="signup.php">Sign-Up</a>
          </div>
        </div>
      </div>
    </form>
  </div>
  
    
</body>
</html>
