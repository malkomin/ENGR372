<?php
require 'db.php';

$variables = $_POST;
if(isset($variables["type"]) && isset($variables["from_value"])  && isset( $variables["to_value"]) && isset($variables["from_unit"]) && isset($variables["to_unit"]))
{
    $type = $variables["type"];
    $fromValue = $variables["from_value"];
    $toValue = $variables["to_value"];
    $fromUnit = $variables["from_unit"];
    $toUnit = $variables["to_unit"];
    insertOperation($type, $fromValue, $toValue, $fromUnit, $toUnit);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}


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
