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
            text-align: center;
            margin: 0;
        }
        
       .bg{
           padding: 15px;
            /* overflow: visible; */
            min-height: 70vh;
            /* background: url('img/banner.jpg') no-repeat center ; */
            background: url('fav.jpg') no-repeat center ;
            /* background-size: cover; */
            /* background-size: 100%; */
       }

    </style>

</head>

<body>
    <?php include_once("common/nav.php");?>

    <div class="bg">

        <form action="">
            <h2>Join HELP community</h2>
            <div>
                <label>Organization Name: </label>
                <input type="text">
            </div>

            <div>
                <label>Email: </label>
                <input type="mail" name="">
            </div>
            <div>
                <label>Location: </label>
                <?php require_once("common/country_select.php"); ?>
            </div>


            <div>
                <label>Website</label>
                <input type="text">
            </div>

            <button id="register">Request Membership</button>
            <a href="login.php">Already a member? - Login</a>
        </form>
       
    </div>

    <?php include_once("common/footer.php");?>
    <script src="script/registration.js"></script>
    <!-- <script function addStyle(){
        document.getElementById('style').href='css/layout.css';
    }<script> -->
</body>

</html>