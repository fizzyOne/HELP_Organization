<?php
if(!isset($_SESSION)){session_start();}
require_once('common/config.php');

// if(isset($_POST)){
if (!empty($_POST['userid']) && !empty($_POST['password'])) {
    $userid = $_POST["userid"];
    $password = $_POST["password"];

    if (strpos($userid, 'Org00') ===0) {
        $oid = substr($userid, 5, strlen($userid)-5);

        //check org for //
        if ($result = $mysqli->query("SELECT id FROM org WHERE id='$oid' AND password='$password' LIMIT 1")) {

            /* number of rows of result set */
            $row_cnt = $result->num_rows;


            if ($row_cnt!=0) {
                // match found.. redirect to dashboard
                // $id = $result->fetch_row()[0]
                $_SESSION['userid']= $userid;
                header("Location: org_dashboard.php");
            } else {
                // echo "<script>alert('Could not login... ');</script>";
                $_SESSION['err'] =  "Could not Login....";
                header("Location: login.php");
            }

            /* close result set */
            $result->close();
        }

        /* close connection */
        $mysqli->close();
    } else {


      //check staff for id...
        if ($result = $mysqli->query("SELECT id FROM staff WHERE id='$userid' AND password='$password' LIMIT 1")) {

        /* number of rows of result set */
            $row_cnt = $result->num_rows;


            if ($row_cnt!=0) {
                // match found.. redirect to dashboard
                // $id = $result->fetch_row()[0]
                $_SESSION['userid']= $userid;
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
    }
} else {
    echo "Please fill the login info";
}
