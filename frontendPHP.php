<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter your First Name: <input type="text" name="fname">
  Enter your Password:  <input type="text" password="password">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
elizabethrussman@Elizabeths-MacBook-Pro ~ % pwd
/Users/elizabethrussman    // collect value of input field
    $name = $_POST['fname'];
    $age = $_POST['password'];
    echo "<br>";
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo "Hello $name! ";
    }
    if (empty($password)) {
"frontendPHP.php" 34L, 794C







