  <?php include("config.php");?>
  <?php
    $query="SELECT * FROM org";
    if($result=mysqli_query($mysqli,$query)){
      //get each rows
      while ($row=mysqli_fetch_array($result)){
        echo "<div class='partners'>";
        echo "<h3>" . $row['name'] . "</h3>";
        echo "<p>Location:" . $row['location'] . "</p>";
        echo "<p>" . $row['website'] . "</p>";
        echo "</div>";
      }
    } else{
        echo "<h3>Collabtorators not found</h3>";
    }
    // $mysqli_close($mysqli);
  ?>
