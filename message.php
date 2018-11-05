<?php include("common/#config.php");?>
<!DOCTYPE html>
<html>

<head>
    <title>HELP Org - Message</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/comp.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/layout.css" />
    <style>
        h2{
            text-align: center;
            margin: 0;
        }

       .bg{
           padding: 15px;
            /* overflow: visible; */
            min-height: 70vh;
            /* background: url('img/banner.jpg') no-repeat center ; */
            background: url('img/helpLogo.png') no-repeat center ;
            background-size: contain;
            /* background-size: 100%; */
       }
       .msg{
         width: 50%;
         height: 80%;
         background-color: rgba(255,255,255,0.5);
         text-align: center;
         margin: 15px auto;
       }
    </style>

</head>

<body>
    <?php include_once("common/nav.php");?>

    <div class="bg">
      <div class="msg">
        <?php session_start();if(isset($_SESSION['msgTitle'])):?>
         <h2><?php echo $_SESSION['msgTitle'];unset($_SESSION['msgTitle']);?></h2>
         <p><?php echo $_SESSION['msgDetail'];unset($_SESSION['msgDetail']);?></p>

       <?php endif; ?>
    </div>


    </div>
    <?php include_once("common/footer.php");?>

</body>

</html>
