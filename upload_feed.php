<?php
require_once("common/config.php");

$upload_image=$_FILES['imgUpload']['name'];
$folder="uploads/";
$target_file = $folder . basename($upload_image);
$extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$isUploadOk = 1;
$title = $_POST['title'];
$detail = $_POST['detail'];
$task = $_POST['taskid'];
$newName='';

//generate random name
function randomName(){
  $keys = array_merge(range(0,9), range('a','z'));
  $key = '';
  for ($x =0; $x < 10; $x++){
    $key .= $keys[array_rand($keys)];
  }
  return $key;
}

if(isset($_POST["update"])){

          //check if image
          $check = getimagesize($_FILES["imgUpload"]["tmp_name"]);

          if($check===FALSE){
            $isUploadOk = 0;
            echo "not an image<br>";
          }

          //check size
          if($_FILES['imgUpload']['size'] > 5000000){
            $isUploadOk = 0;
            echo "image larger than 5mb<br>";
          }


            //if upload is ok to proceed...
            if($isUploadOk==1){

                  //generating name
                  do {
                    $newName = randomName();
                  } while (file_exists($target_file=$folder . $newName . "." . $extension));


                  try{
                          if (move_uploaded_file($_FILES['imgUpload']['tmp_name'], $target_file)){

                            echo "file uploaded<br>";
                            //update to database...
                            $query = "INSERT INTO feed VALUES (NULL, CURDATE(), '0', '$title', '$detail', '$target_file', '$task')";
                            if($result = $mysqli->query($query)){
                              echo "Post uploaded.. Redirecting Now..";
                              header("refresh:3; url=org_dashboard.php");
                            }

                          }
                  } catch (Exception $e) {
                  }

          } else {
            echo "Error Occured while uploading image.. Make sure it is an image file (smaller than 5mb)";
          }

    }

 ?>
