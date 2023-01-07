<?php
require 'db.php';

$variables = $_POST;



function insertOperation($type, $from_value, $to_value, $from_unit, $to_unit)
{
    if(session_status() != PHP_SESSION_ACTIVE)
    {
        session_start();
    }
    $user_id =  $_SESSION["user_id"];
    if($user_id > 0)
    {
        $sql = "INSERT INTO operations (user_id, type, from_value, to_value, from_unit, to_unit) 
        VALUES ('".$user_id."' ,'".$type."' , '".$from_value."' , '".$to_value."', '".$from_unit."', '".$to_unit."')";
        $result = insertQuery($sql);
        return $result;
    }
    return -1;
}

function getOperations()
{
    if(session_status() != PHP_SESSION_ACTIVE)
    {
        session_start();
    }
    $user_id =  $_SESSION["user_id"];
    $sql = "SELECT * FROM operations WHERE user_id = ". $user_id;
    $result = getQuery($sql);
    return $result;
}
