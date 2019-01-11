<?php
require "header.php";
session_start();
$username=$_SESSION['name'];
$data=array('userName'=>$username);
echo json_encode($data);
?>