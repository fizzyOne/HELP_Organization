<?php include("config.php");?>
<?php
  $orgid = substr($_SESSION['userid'], 4);
  $query="SELECT id, title FROM task WHERE org_id=$orgid;";
  if($result=mysqli_query($mysqli,$query)){
    //get each rows

    echo "<select name='taskid' required>";
    while ($row=mysqli_fetch_array($result)){
      	echo "<option value='" . $row['id'] . "'>" . $row['title'] . "</option>";
    }
    echo "</select>";

  } else {
      echo "<h3>Could not retrieve tasks.</h3>";
  }
  // $mysqli_close($mysqli);
?>
