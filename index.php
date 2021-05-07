<?php

//connect to DB
include('config/db_connect.php');

//Write query for all locations
$sql = 'SELECT destination, details, id FROM locations ORDER BY created_at';

//make query & get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
$locations = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

//print array 
// print_r($locations);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Include the header of the page -->
    <?php include('templates/header.php'); ?>

    <!-- Main Page Header -->
    <h4 class="center grey-text">Our Destinations!</h4>

    <div class="container">
        <div class="row">
            <?php foreach ($locations as $location) {  ?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                    <img src="img/photo6.svg" class="vacay">
                        <div class="class-content center">
                            <h6><?php echo htmlspecialchars($location['destination']); ?></h6>
                            <div><?php echo htmlspecialchars($location['details']); ?></div>
                            <div class="card-action right-align">
                                <a href="details.php?id=<?php echo $location['id']; ?>" 
                                class="brand-text">more info</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (count($locations) >= 3) : ?>
                <p>there are two or more destinations</p>
            <?php else : ?>
                <p>there are less than 2 destinations</p>
            <?php endif; ?>

        </div>
    </div>


    <!-- Include the footer of the page -->
    <?php include('templates/footer.php'); ?>


</html>