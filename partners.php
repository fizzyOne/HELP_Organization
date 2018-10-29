<?php include("common/#config.php");?>
<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <title>HELP Org</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/comp.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/layout.css" />
    <style>
        body{
            /* background: url("img/banner.jpg") center center; */
            
            
            /* background-size: cover; */
        }
        h1{
            color: black;
            text-align: center;
        }
    </style>

</head>

<body>
    <?php include_once("common/nav.php");?>

    <div>
        <h1>Collaborators</h1>
        <div>

            <!-- php to get buttons -->

        </div>
        <div>
            <!-- php to get tasks -->
            <!-- sample:: -->
            <?php for($x = 0; $x <= 10; $x++){
                include("common/partners.php");
            }?>
        </div>

    </div>

    <?php include_once("common/footer.php");?>
    <!-- <script function addStyle(){
        document.getElementById('style').href='css/layout.css';
    }<script> -->
</body>

</html>