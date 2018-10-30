<?php include("common/#config.php");?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <title>HELP Org</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/comp.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/layout.css" />
    <style>
        h2{
          margin:0;
        }
        .centerbtn{
            margin: 0 auto;
        }

    </style>

</head>
<body>
    <?php include_once("common/nav.php");?>

    <div class="banner topban">
        <div class="snap">
            <h1>HELP</h1>
            <p>Help Organization helps charity workers to find ways to help people.</p>
            <button onclick="location.href='signup.php'" type="button">Join Help Community</button>
        </div>

    </div>
    <hr>
    <div class="banner bgfixed" style="background: url('img/post.jpeg') no-repeat center left; background-size:contain;">

    <h2>
    Posts
    </h2>


    </div>

    <div class="banner" style="background: url('img/orgs.png') no-repeat center; background-size:contain;">

    <h2>
    Help People
    </h2>


    </div>

    <div class="banner" style="background: url('img/tasks.svg') no-repeat center left; background-size:contain;">

    <h2>
    Tasks
    </h2>


    </div>

    <button onclick="location.href='signup.html'" type="button" class="centerbtn">Join Us & Help</button>

    <?php include_once("common/footer.php");?>
    <!-- <script function addStyle(){
        document.getElementById('style').href='css/layout.css';
    }<script> -->
</body>
</html>
