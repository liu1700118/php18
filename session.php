<?php
require "header.php";
session_start();
$message=array('message'=>'success');
if(!isset($_SESSION['name']))
{
    $message['message']='errors';
    echo json_encode($message);
}
else{
    echo json_encode($message);
}
?>
