<?php
session_start();
require_once('common/config.php');

// if(isset($_POST)){
if (!empty($_POST['userid']) && !empty($_POST['password'])) {
    $userid = $_POST["userid"];
    $password = $_POST["password"];

    if ($result = $mysqli->query("SELECT id FROM staff WHERE id='$userid' AND password='$password' LIMIT 1")) {

      /* number of rows of result set */
        $row_cnt = $result->num_rows;


        if ($row_cnt!=0) {
          // match found.. redirect to dashboard
          $_SESSION['userid']= $result->fetch_row()[0];
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
    echo "Please fill the login info";
}
?>
