<?php
$dbname = "engr372";
$username = "root";
$password = "";
$host = "localhost";

$conn = mysqli_connect($host, $username, $password, $dbname);

function getQuery($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
    return json_decode(json_encode($json));
}

function insertQuery($query)
{
    global $conn;

}
