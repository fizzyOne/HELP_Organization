<!DOCTYPE html>
<html>
<head>
    <title>HELP Org - Home</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/comp.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/layout.css" />
    <style>
        h2{
          margin:0;
          color: #0097A7;

        }
        body{
          background-color: lightgrey;
        }
    </style>

</head>
<body>
    <?php include_once("common/nav.php");?>

    <div class="banner topban">
        <div class="snap">
            <br>
            <h1 style="text-align: center;">HELP Organization</h1>
            <p>Help Organization helps charity workers to find ways to help people.</p>
            <p>Here, we gather everyone and unite to help the needy.</p>
            <p>Charity, Food, Fund raising events and much more.</p>
            <button onclick="location.href='signup.php'" type="button" class="centerbtn" >Join Help Community</button>
        </div>

    </div>
    <hr>


    <div class="banner" style="background: white url('img/orgs.png') no-repeat center; background-size:contain;margin:9px 0;padding:20px">
<div class="snap">
    <h2>
    Helping People
    </h2>
    <p>People from around the globe can connect and help the needy from anywhere</p>
    <p>Help organization is world wide. Collaborators are from different places.</p>

      </div>
    </div>

    <div class="banner" style="background: white url('img/tasks.png') no-repeat center; background-size:contain;margin:9px 0;padding:20px">
<div class="snap">
    <h2>
    Tasks
    </h2>
    <p>Each Organization or personnel will be assigned tasks</p>
    <p>Nearest Location would be preffered</p>


      </div>
    </div>

    <div class="banner" style="background: white url('img/post.jpeg') no-repeat center left; background-size:contain;margin:9px 0;padding:20px">
      <div class="snap">
        <h2>
        Posts
        </h2>
        <p>Charity organizations sends updates about their tasks. Chosen ones will be published to this website.</p>
        <button onclick="location.href='updates.php'" type="button" class="centerbtn" >View Feed</button>

      </div>
    </div>

    <div style="height:6em;">
      <button onclick="location.href='signup.php'" type="button" class="centerbtn" style="font-size:1.7em;">Join Us & Help</button>
    </div>

    <br>

<?php include_once("common/footer.php");?>
    <!-- <script function addStyle(){
        document.getElementById('style').href='css/layout.css';
    }<script> -->
</body>
</html>
