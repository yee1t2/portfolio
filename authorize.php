<?php
session_start();

if(!isset($_SESSION['Username'])){ // checks if user is logged in

    header('Location: main.php'); // it redirects the user back to the main page 
    exit();
} 

function checkUsers($allowedRoles) { // a function that checks the user's role.
 if(!in_array($_SESSION['Role'], $allowedRoles)){ // it checks the user's role by the session, from the array of 'allowed roles'.
echo "You do not have any permission to access the page."; // displays if the user is not in the permitted role.
exit();

}
}
?>