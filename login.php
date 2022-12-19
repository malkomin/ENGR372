<?php
require "./database/db.php";

$username = $_POST["username"];
$pass = $_POST["passwd"];

echo $username . " : " . $pass;


$sql = "SELECT * FROM users WHERE username='". $username . "' and password='". $pass . "';";

$result = getQuery($sql);
echo count($result);
if (count($result) == 0)
{
    header("Location: connect.php");
}
