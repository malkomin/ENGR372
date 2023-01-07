<?php
require "./database/db.php";

$type = $_POST["requestType"];
if($type == "login")
{
    $username = $_POST["username"];
    $pass = $_POST["passwd"];
    $sql = "SELECT * FROM users WHERE username='". $username . "' and password='". $pass . "';";
    $result = getQuery($sql);
    if (count($result) == 0)
    {
        $_SESSION["auth"] = false;
        header("Location: login.php");
    }
    else
    {
        session_start();
        session_regenerate_id(true);
        $_SESSION["username"] = $username;
        $_SESSION["auth"] = true;
        $_SESSION["user_id"] = $result[0]->id;
        header("Location: dashboard.php");
    }
}
else if($type == "register")
{
    $username = $_POST["username"];
    $pass = $_POST["passwd"];
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];

    $sql = "INSERT INTO users (username, password, name, surname) VALUES ('". $username. "' , '". $pass ."' , '".$name."' , '".$lastname."')";
    $result = insertQuery($sql);
    if($result)
    {
        header("Location: login.php");
    }
    else
    {
        header("Location: register.php");
    }
}
else if($type == "logout")
{
    session_start();
    session_destroy();
    session_commit();
    header("Location: login.php");
}
