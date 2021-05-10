<?php
header("Content-Type:application/json");
require_once("db_check.php");

response ($rows);

function response($response){
$json_response=json_encode($response);
echo $json_response;
}

?> 