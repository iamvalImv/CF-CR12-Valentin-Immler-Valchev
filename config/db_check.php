<?php


// Require conn.php (DB connection) file
require_once("db_connect.php");

// This query will check do we have car_id in the table car
// for the provided $id
$sql = "SELECT * FROM locations";

// Perform a query on the DB
$result = mysqli_query($conn, $sql);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Close the DB connection
mysqli_close($conn);
