<?php
header("Access-Control-Allow-Origin:http://10.30.29.67:63341");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Allow-Headers:content-type,xfilecategory,xfilename,xfilesize");
$data=file_get_contents("php://input");
$data=json_decode($data);
$message=array('message'=>"success");
if ($data->username==123 && $data->password==123){
    echo json_encode($message);
}else{
    $message['message']='error';
    echo json_encode($message);
}

?>