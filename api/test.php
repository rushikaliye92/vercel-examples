<?php 

echo "Helllo" ; die ();

$servername = "localhost";
$username = "id16918211_recipe_user";
$password = "b8*db8&K(m|OrF3(";
$db = "id16918211_php_auth_api";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>
