<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set. <br>";
echo "My Favourite color is " .  $_SESSION["favcolor"] . "<br>" ;
echo "My Favourite animal is " .  $_SESSION["favanimal"];

session_destroy();

?>

</body>
</html>