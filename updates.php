<?php include("common/#config.php");?>
<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <title>HELP Org - Feed</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/comp.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/layout.css" />
    <style>
      body{
      }
      h1{
          color: #007D89;
          font-size: 3em;
          text-align: center;
      }
      h3{
        color: #0097A7;
        font-size: 2em;
      }
      .stat{
        margin: 5px;
      }
    </style>

</head>

<body>
    <?php include_once("common/nav.php");?>

    <div>
        <h1>Updates</h1>

        <div>
            <!-- php to get tasks -->
            <?php
                include("common/feed.php");
            ?>
        </div>

    </div>

    <?php include_once("common/footer.php");?>
    <!-- <script function addStyle(){
        document.getElementById('style').href='css/layout.css';
    }<script> -->
</body>

</html>
