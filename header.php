<?php
header("Access-Control-Allow-Credentials:true");
header('Content-type:text/json');
header('Access-Control-Allow-Headers:Content-Type');
$allow_origin=array(
    'http://10.30.29.67:63341'
);
$origin=isset($_SERVER['HTTP_ORIGIN'])?$_SERVER['HTTP_ORIGIN']:'';
if(in_array($origin, $allow_origin)) {
    header('Access-Control-Allow-Origin:' . $origin);
};
?>
