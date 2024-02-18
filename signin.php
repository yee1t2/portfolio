<?php
if(isset($_POST['submit'])){
$Username = "Username";
$Yearlvl = "YearLevel";
$Color = "FavoriteColor";
$Food = "FavoriteFood";
$Password = "Password";
}

//
$db_server = "localhost";
$db_user = "root"; 
$db_pass = "";
$db_name = "signup";
$conn = "";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
  die("Connection failed"). mysqli_connect_error();
}

$sql = "INSERT INTO users(Username,Yearlevel,FavColor,FavFood,Password) VALUES (0,'$Username','$Yearlvl','$Color','$Food','$Password')";

$rs = mysqli_query($con,$sql);
if($rs){
  echo "added stuff";
}

mysqli_close($con);

?>