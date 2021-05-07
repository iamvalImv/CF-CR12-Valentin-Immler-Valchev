<?php

//connect to DB
include('config/db_connect.php');

#Defining the variables
$email = $destination = $details = '';

//Storing the errors in an associative array
$errors = array('email' => '', 'destination' => '', 'details' => '');


//Check if data has been sent to page
if (isset($_POST['submit'])) {
    // echo htmlspecialchars($_POST['email']);
    // echo htmlspecialchars($_POST['destination']);
    // echo htmlspecialchars($_POST['details']);

    //VALIDATION FORM
    //check email
    if (empty($_POST['email'])) {
        $errors['email'] = 'An email is required <br />';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'email must be a valid email address';
        }
    }

    //check destination
    if (empty($_POST['destination'])) {
        $errors['destination'] = 'A destination is required <br />';
    } else {
        $destination = $_POST['destination'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $destination)) {
            $errors['destination'] = 'Destination must be letters and spaces only';
        }
    }

    //check details
    if (empty($_POST['details'])) {
        $errors['details'] = 'At least one detail is required <br />';
    } else {
        $details = $_POST['details'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $details)) {
            $errors['details'] = 'Details must be a coma separated list';
        }
    }
    //Checking for form errors method, returning
    //false->No errors here
    //true->The form is valid
    if (array_filter($errors)) {
        //echo 'errors in the form';
    } else {
         
        $email=mysqli_real_escape_string($conn, $_POST['email']);
        $destination=mysqli_real_escape_string($conn, $_POST['destination']);
        $details=mysqli_real_escape_string($conn, $_POST['details']);

        //create sql for data insertion
        $sql= "INSERT INTO locations(destination, email, details) VALUES('$destination', '$email', '$details')";

        if(mysqli_query($conn, $sql)){
        //succes
        header('Location:index.php');
        } else { 
        //false
        echo 'query error' . mysqli_error($conn);
        }
    };
}  //end of the post check


?>

<!DOCTYPE html>
<html lang="en">

<head>


    <!-- Include the header of the page -->
    <?php include('templates/header.php'); ?>


    <section class="container grey-text">
        <h4 class="center">Add a Destination</h4>
        <form class="white" action="add.php" method="POST">
            <label>Your Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>
            <label>Destination:</label>
            <input type="text" name="destination" value="<?php echo htmlspecialchars($destination) ?>">
            <div class="red-text"><?php echo $errors['destination']; ?></div>
            <label>Details (comma separated):</label>
            <input type="text" name="details" value="<?php echo htmlspecialchars($details) ?>">
            <div class="red-text"><?php echo $errors['details']; ?></div>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <!-- Include the footer of the page -->
    <?php include('templates/footer.php'); ?>


</html>