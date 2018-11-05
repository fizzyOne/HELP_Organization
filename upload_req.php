<?php
session_start();
require_once('common/config.php');


if (!empty($_POST['orgName']) && !empty($_POST['email'])) {
    $orgName = $_POST['orgName'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $website = $_POST['website'];
    $password = $_POST['password'];
    //Check if email and Organization exists...
    $query = "SELECT * FROM org WHERE name='$orgName' AND email='$email'";
    $_SESSION['msgDetail'] = $query;
    if ($result = $mysqli->query($query)) {
      /* number of rows of result set */
        $row_cnt = $result->num_rows;

        if($row_cnt===0){
          $query = "INSERT INTO org VALUES(
            null,
            '$orgName',
            '$email',
            '$country',
            '$website',
            '0',
            '$password'
          )";
          echo $query;
          if ($mysqli->query($query)) {
            $_SESSION['msgTitle'] = "Submitted";
            $_SESSION['msgDetail'] = "Your Request has been submitted. Please be patient while our staff accept it.";
            header("Location: message.php");
          } else {
            $_SESSION['msgTitle'] = "Request Failed";
            $_SESSION['msgDetail'] = "Your request was unsuccessfull. Please try again and feel free to contact us.";
            // echo $_SESSION['msgTitle'] . "   " .   $_SESSION['msgDetail'];

            header("Location: message.php");
          }
        } else {
          $_SESSION['msgTitle'] = "Already Exist";
          $_SESSION['msgDetail'] = "Your Organization information exist. Please try logging in and feel free to contact us.";
          header("Location: message.php");
        }
    } else {
      $_SESSION['msgTitle'] = "Request Failed";
      $_SESSION['msgDetail'] = "Your request was unsuccessfull. Please try again and feel free to contact us.";
      header("Location: message.php");
    }
    // echo "ALL DONE";
        /* close result set */
        $result->close();
        $mysqli->close();
} else {
    $_SESSION['err'] = "No Field Left Empty...";
    header("Location: signup.php");
}
?>
