<?php
require "header.php";
$message=array('message'=>'success');
echo json_encode($message);
session_start();
session_destroy();
?>