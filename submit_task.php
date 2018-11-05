<?php
session_start();
require_once('common/config.php');


  if(!empty($_POST['title']) && !empty($_POST['detail'])) {
    $title = $_POST['title'];
    $detail = $_POST['detail'];
    $org = $_POST['org'];
    $query = "INSERT INTO task(title,detail,org_id,date)
    VALUES ('$title', '$detail', '$org','CURDATE()');";
    if ($mysqli->query($query)) {
      echo "Task Assigned! Redirecting to dashboard...";
      header("refresh:3; url=admin_dashboard.php");
    } else {
      echo "Error Updating record." . $mysqli->error;
    }
    $mysqli->close();
  }

?>
