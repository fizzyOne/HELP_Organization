
  <?php include("config.php");?>
  <?php
    $query="SELECT * FROM feed WHERE status='1';";
    if($result=mysqli_query($mysqli,$query)){
      //get each rows

      while ($row=mysqli_fetch_array($result)){
        echo "<div class='feed'>";
        echo "<h3>" . $row['title'] . "</h3>";
        // echo "<p>By:" . $row['Name'] . "</p>";
        // if (!empty($row['image'])){echo "<img height="50px" alt="image about update">" . $row['image'] . "</img";}
        echo "<img height='50px' alt='image about update' src='" . "data:'image/jpg';base64,'" . base64_encode($row['date']) .  ";" . "'>";
        echo "<p>" . $row['detail'] . "</p>";
        echo "<p class='date'>" . $row['date'] . "</p>";
        echo "</div>";
      }
    } else{
        echo "<h3>Could not retrieve feed.</h3>";
    }
    // $mysqli_close($mysqli);
  ?>
