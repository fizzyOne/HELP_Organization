<?php include("config.php");?>
<?php
  $query="SELECT id, name FROM org WHERE status='1';";
  if($result=mysqli_query($mysqli,$query)){
    //get each rows

    while ($row=mysqli_fetch_array($result)){
      	echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
    }
    $result->close();

  } else {
      echo "<h3>Could not retrieve feed.</h3>";
  }
  $mysqli->close();
?>
