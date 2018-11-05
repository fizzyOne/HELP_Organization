<?php
require_once("common/config.php");
session_start();
$ORG_TBL = "org";
$FEED_TBL = "feed";

if (isset($_GET['page'])){
  switch ($_GET['page']) {
      case "viewTask":
          viewTask($mysqli);
          break;
      case "partReq":
              partReq($mysqli);
              break;
      case "partDen":
              partDen($mysqli);
              break;
      case "feedReq":
              feedReq($mysqli);
              break;
      case "feedDen":
              feedDen($mysqli);
              break;
      case "orgReqAcc":
              taskReq($mysqli,$ORG_TBL,1,$_GET['id']);
              header("location: admin_dashboard.php?page=partReq");
              break;
      case "orgReqRej":
              taskReq($mysqli,$ORG_TBL,2,$_GET['id']);
              header("location: admin_dashboard.php?page=partReq");
              break;
      case "feedReqAcc":
              taskReq($mysqli,$FEED_TBL,1,$_GET['id']);
              header("location: admin_dashboard.php?page=feedReq");
              break;
      case "feedReqRej":
              taskReq($mysqli,$FEED_TBL,2,$_GET['id']);
              header("location: admin_dashboard.php?page=feedReq");
              break;
      default:

  }
}

function taskReq($mysqli, $table, $val, $id){
    $query="UPDATE $table SET status='$val' WHERE id='$id'";

    if($mysqli->query($query) === TRUE) {
      //success
    } else{
      echo "ERROR: " . $query;
    }
    $mysqli->close();

}

function viewTask($mysqli){

    $query="SELECT * FROM task;";
    if($result=mysqli_query($mysqli,$query)){
      //get each rows
      while ($row=mysqli_fetch_array($result)){
          echo "<div class='feed'>";
        	echo "<h3>" . $row['title'] . "</h3>";
        	echo "<p>" . $row['detail'] . "</p>";
          echo "</div>";
      }
      $result->close();
    } else {
        echo "<h3>Could not retrieve tasks.</h3>";
    }
    $mysqli->close();
}

function partReq($mysqli){

  $query="SELECT * FROM org WHERE status='0';";
  if($result=mysqli_query($mysqli,$query)){
    echo "<div style='overflow-x:auto;'><table><tr><th>Name</th><th>Location</th><th>Website</th><th>Accept</th><th>Reject</th></tr>";
    //get each rows
    while ($row=mysqli_fetch_array($result)){

      echo "<tr><td><b>" . $row['name'] . "</b></td>";
      echo "<td>" . $row['location'] . "</td>";
      echo "<td><a href='" . $row['website'] . "'>" . $row['website'] . "</td>";
      echo "<td><a href=\"" . $_SERVER['PHP_SELF'] . "?page=orgReqAcc&id=" . $row['id'] . "\" class='acclnk'>Accept</a></td>";
      echo "<td><a href=\"" . $_SERVER['PHP_SELF'] . "?page=orgReqRej&id=" . $row['id'] . "\" class='rejlnk'>Reject</a></td></tr>";

    }
    echo "</table></div>";
    $result->close();
  }
  $mysqli->close();
}

function partDen($mysqli){
  $query="SELECT * FROM org WHERE status='2';";
  if($result=mysqli_query($mysqli,$query)){
    //get each rows
    while ($row=mysqli_fetch_array($result)){
        echo "<div class='feed'>";
        echo "<h3>" . $row['name'] . "</h3>";
        echo "<p>ID: " . $row['id'] . "</p>";
        echo "<p>Location: " . $row['location'] . "</p>";
        echo "<p>Website: " . $row['website'] . "</p>";
        echo "</div>";
    }
    $result->close();

  } else {
      echo "<h3>Could not retrieve tasks.</h3>";
  }
  $mysqli->close();
}

function feedReq($mysqli){
    $query="SELECT * FROM feed WHERE status='0';";
    if($result=mysqli_query($mysqli,$query)){
      echo "<div style='overflow-x:auto;'><table><tr><th>Title</th><th>Details</th><th>date</th><th>Accept</th><th>Reject</th></tr>";
      //get each rows
      while ($row=mysqli_fetch_array($result)){
        echo "<tr><td><b>" . $row['title'] . "</b></td>";
        echo "<td>" . $row['detail'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td><a href=\"" . $_SERVER['PHP_SELF'] . "?page=feedReqAcc&id=" . $row['id'] . "\" class='acclnk'>Accept</a></td>";
        echo "<td><a href=\"" . $_SERVER['PHP_SELF'] . "?page=feedReqRej&id=" . $row['id'] . "\" class='rejlnk'>Reject</a></td></tr>";
      }
    $result->close();
    echo "</table></div>";
  } else {
    echo "error";
  }
    $mysqli->close();


}

function feedDen($mysqli){
  $query="SELECT * FROM feed WHERE status='2';";
  if($result=mysqli_query($mysqli,$query)){
    //get each rows

    while ($row=mysqli_fetch_array($result)){
      echo "<div class='feed'>";
      echo "<h3>" . $row['title'] . "</h3>";
      // echo "<p>By:" . $row['Name'] . "</p>";
      // if (!empty($row['image'])){echo "<img height="50px" alt="image about update">" . $row['image'] . "</img";}
      // echo "<img height='50px' alt='image about update' src='" . "data:'image/jpg';base64,'" . base64_encode($row['date']) .  ";" . "'>";
      echo "<p>" . $row['detail'] . "</p>";
      echo "<p class='date'>" . $row['date'] . "</p>";
      echo "</div>";
    }
    $result->close();
  } else{
      echo "<h3>Could not retrieve feed.</h3>";
  }
  $mysqli->close();
}

?>
