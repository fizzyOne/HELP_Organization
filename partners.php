<!DOCTYPE html>
<html>

<head>
    <title>HELP Org - Collaborators</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/comp.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/layout.css" />
    <style>
        body{
            /* background: url("img/banner.jpg") center center; */

            /* background-size: cover; */
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
        .org{
          margin:15px;
        }
    </style>

</head>

<body>
    <?php include_once("common/nav.php");?>

    <div>
        <h1>Collaborators</h1>

        <div>
            <!-- php to get tasks -->
            <!-- sample:: -->
            <?php
                include("common/partners.php");
            ?>
        </div>

    </div>

    <?php include_once("common/footer.php");?>
    <!-- <script function addStyle(){
        document.getElementById('style').href='css/layout.css';
    }<script> -->
</body>

</html>
