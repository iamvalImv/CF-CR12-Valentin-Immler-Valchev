<?php
//generate a URl-encoded string from the array
function build_query_string(array $params) {
    $query_string = http_build_query($params);
    //generates URL-encoded for a query string
    return $query_string;
}
//Curl GET request for data transfer over the network
function curl_get($url) { 
    $client = curl_init($url);
    //Sets an option on the given cURL session handle.
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    curl_close($client);
    return $response;
}