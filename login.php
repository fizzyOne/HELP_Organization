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
        }
       .bg{
            /* height: 80vh; */
            background: url('img/banner.jpg') no-repeat center center;
            /* background-size: 100%; */
       }
       form{
           
           margin-top: 50px;
           width: 50vw;
           height: 50%;
           /* float: right; */
           box-shadow: 0 0 5px black;
           margin: 20vh auto;
           background: rgba(255,255,255,0.4);
       }
       
       form *{
           
           display: block;
           padding: 5px 0;
           width: 100%;
           
       }
    </style>

</head>

<body>
    <?php include_once("common/nav.php");?>

    <div class="banner bg">

        <form action="">
            <h2>Login</h2>
            <div style="margin: 0 auto; overflow: visible;">
                <div>
                    <label>Organization Name: </label>
                    <input type="text">
                </div>
                <br>
                <div>
                    <label>Password: </label>
                    <!-- first, list continents in combobox, then country name -->
                    <input type="password">
                </div>
                <div>
                    <label name="alert" hidden="hidden">...</label>
                </div>
                <button>Login</button>
            </div>
            
            <a  style="text-align: center;" href="signup.html">Not a member yet? Sign Up</a>
        </form>

    </div>

    <?php include_once("common/footer.php");?>
    <!-- <script function addStyle(){
        document.getElementById('style').href='css/layout.css';
    }<script> -->
</body>

</html>