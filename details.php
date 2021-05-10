<?php

// include the connection to DB
include('config/db_connect.php');

if (isset($_POST['delete'])) {

    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    //delete sequel
    $sql = "DELETE FROM locations WHERE id=$id_to_delete";

    if (mysqli_query($conn, $sql)) {
        //succes
        header('Location:index.php');
    } else {
        //failiure
        echo 'query error:' . mysqli_error($conn);
    }
}
//check GET request id parameter
if (isset($_GET['id'])) {

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    //make sql
    $sql = "SELECT * FROM locations WHERE id = $id";

    //get the query result
    $result = mysqli_query($conn, $sql);

    //fetch result in array format
    $location = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

    // print_r($location);

}

?>
<header>
<script type="text/javascript" src="js/googlemaps.js"></script>
</header>
<html>
<!-- Include the footer of the page -->
<?php include('templates/header.php'); ?>

<div class="container center grey-text">

    <?php if ($location) : ?>

        <h4><?php echo htmlspecialchars($location['destination']); ?></h4>
        <p>Created by: <?php echo htmlspecialchars($location['email']); ?></p>
        <p><?php echo htmlspecialchars($location['created_at']); ?></p>
        <h5>Details:</h5>
        <p>Price in €: <?php echo htmlspecialchars($location['Price']); ?></p>
        <p><?php echo htmlspecialchars($location['details']); ?></p>
        <input type="hidden" id="myLat" value="<?php echo htmlspecialchars($location['lat']); ?>">
        <input type="hidden" id="myLong" value="<?php echo htmlspecialchars($location['lng']); ?>">
        
        <!-- Google maps Location -->
        <div id="map"></div>

        <!-- DELETE FORM -->
        <form action="details.php" method="POST">
            <input type="hidden" name="id_to_delete" value="<?php echo $location['id']; ?>">
            <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
        </form>
    <? else : ?>
        <h5>Ooops! No such destination has been offered</h5>
    <?php endif; ?>
</div>

<!-- Include the footer of the page -->
<?php include('templates/footer.php'); ?>

</html>