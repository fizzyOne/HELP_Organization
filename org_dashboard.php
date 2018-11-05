<!DOCTYPE html>
<html>
<head>
    <title>HELP Org - Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/comp.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/layout.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/dashboard.css" />
    <style>
        body{
            min-height:80vh;
        }
        form{
          width:100%;
          margin-top:20px;
        }
        .tasklist{
          min-height: 80vh;
          overflow: scroll;
        }
        .task_i{
          margin: 5px;
        }
    </style>
</head>
<body>
    <?php include_once("common/nav.php");?>
    <!-- FOR TESTING ONLY -->
    <?php session_start(); $_SESSION['userid'] = "Org001"; ?>
    <?php echo $_SESSION['userid'];?>

    <?php
    //if(isset($_SESSION['userid']) && (substri($_SESSION['userid'], 0) == "O")):
    ?>

      <div style="width=100%;display:block;">
        <button id="logout" onclick="location.href='index.php'">Logout</button>
      </div>

      <div class="container">

          <div class="layout">
            <div class="col col-left">
              <strong>Upload Task update:</strong>
              <form action="" method="POST">
                <label> Title: </label>
                <input type="text" name="title">
                <label> Details: </label>
                <input type="text" name="detail">

                <label> Image upload: </label>
                <input type="file" name="img">

                <?php
                  require_once("common/task_list.php")
                ?>
                <input type="submit" name="update" value="Send Update">
              </form>
            </div>
            <div class="col col-right">
              <strong>Tasks</strong>
              <div class="tasklist">
                <?php include_once("common/task_list_sc.php");?>
              </div>
            </div>
          </div>


      </div>

  <?php //endif;
  ?>
</body>
</html>
