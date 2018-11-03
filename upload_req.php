<?php
session_start();
require_once('common/config.php');


if (!empty($_POST['orgName']) && !empty($_POST['email']) && !empty($_POST['country'])) {
    $orgName = $_POST['orgName'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $website = $_POST['website'];

    $query = "";
    if ($mysqli->query($query)) {

      /* number of rows of result set */
        $row_cnt = $result->num_rows;


        if ($row_cnt!=0) {
          // match found.. redirect to dashboard
            header("Location: admin_dashboard.php");
        } else {
            // echo "<script>alert('Could not login... ');</script>";
            $_SESSION['err'] = "Could not Login....";
            header("Location: login.php");
        }
        /* close result set */
        $result->close();
    }

    /* close connection */
    $mysqli->close();
} else {
    $_SESSION['err'] = "No Field Left Empty...";
}
?>
