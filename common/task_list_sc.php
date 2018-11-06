<?php include_once("config.php");?>
<?php
  $orgid = substr($_SESSION['userid'], 5);
  $query="SELECT * FROM task WHERE org_id=$orgid;";
  if($result=mysqli_query($mysqli,$query)){
    //get each rows
    while ($row=mysqli_fetch_array($result)){
        echo "<div class='task_i'>";
      	echo "<h3>" . $row['title'] . "</h3>";
      	echo "<p>" . $row['detail'] . "</p>";
        echo "</div><hr>";
    }

  } else {
      echo "<h3>Could not retrieve tasks.</h3>";
  }
  // $mysqli_close($mysqli);
?>
