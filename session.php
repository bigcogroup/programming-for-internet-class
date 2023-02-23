

<?php
/*session_start, initiates the generation of session ID, alsohelps in checking if session existed before or not.
Next, a session variable is normally created to store the data about the session. The data is normally stored in a key-value pair.
The session variable that is normally used is $_SESSION ["Name"]=["George"]. This variable stores data as it's a type of associative array


*/
// Set session variables

session_start();
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

if(!isset($_SESSION['visit'])){
    $_SESSION['visit'] = 0;
}else {
    $_SESSION['visit'] = $_SESSION['visit']+1;
}   

$feedback = "You have visited this session". $_SESSION['visit'] . ".<br>";

echo $feedback;
echo "Session variables are set. <br>";

echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
      

?>
