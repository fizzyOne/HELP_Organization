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
           padding: 15px;
            /* overflow: visible; */
            min-height: 70vh;
            background: url('img/banner.jpg') no-repeat center ;
            background-size: cover;
            /* background-size: 100%; */
       }
       form{
           /* margin-top: 50px; */
           width: 30vw;
           /* float: right; */
           box-shadow: 0 0 5px black;
           /* float: right; */
           margin: auto;
           /* position: absolute;
           top:40%;
           left: 50%;
           transform: translate(-50%,-50%); */
           background: rgba(255,255,255,0.6);
       }
       @media only screen and (max-width:768px){
           form{
               width: 80vw;
           }
       }
       
       form *{
           display: block;
           padding: 7px 0;
           width: 100%;
           
       }
       form input,form button{
           
        min-height:2.5rem;
           padding: 5px;
       }
    </style>

</head>

<body>
    <?php include_once("common/nav.php");?>

    <div class="bg">

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