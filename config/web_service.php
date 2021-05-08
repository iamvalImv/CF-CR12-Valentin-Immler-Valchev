<?php

/****************************************
*######## RESTful WEB SERVICE ##########*
*                                       *
* Client process the request VIA URL    *
* http://address.com/webservice.php?id=1*
* and gets the JSON result.             *
****************************************/
// Set Content-Type header to application/json

header("Content-Type:application/json");

//
   // Require db_check.php file (check the id in the database and get the name and the price)
   require_once("db_check.php");

//    // If the name and the price are empty - id doesn't exist - car not found
//    if(empty($location) && empty($price)){
//        response(200, "location not found", NULL, NULL);
//    }
//    // If the name and the price aren't empty - id exists - car found
//    else{
//        response(200, "location found" , $location, $price);
//    }


// Function for delivering a JSON response
// function response($status,$status_message,$location_name,$data){
     
//    // $response array
//    $response['status']=$status;
//    $response['status_message']=$status_message;
//    $response['location_name']=$location_name;
//    $response['price']=$data;

//    //Generating JSON from the $response array
//    $json_response=json_encode($response);

//    // Outputting JSON to the client
//    echo $json_response;
// }

 // Function for delivering a JSON response, can have any name
 function response($status, $data){
    $response['status']=$status;
    $response['data']=$data;

    //Generating JSON from the $response array
    $json_response = json_encode($response);
    // Outputting JSON to the client
    echo $json_response;
}

?>