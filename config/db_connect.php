<?php 

//Connect to DB
$conn = mysqli_connect('localhost', 'root', '', 'mount_everest_travel');
//Test DB Connection
if (!$conn) {
    echo 'Connection error:' . mysqli_connect_error();
}

?>