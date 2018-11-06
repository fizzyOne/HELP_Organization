<!DOCTYPE html>
<html>

<head>
    <title>HELP Org - Login</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/comp.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/layout.css" />
    <style>
        h2{
            text-align: center;
            margin: 3px;
        }
        body{
            height:100vh;
        }
       .bg{
           padding: 15px;
            /* overflow: visible; */
            position:relative;
            min-height: 80%;
            height:auto;
            background: url('img/helpLogo.png') no-repeat center ;
            background-size: contain;
            /* background-size: 100%; */
       }
       form{
           /* margin-top: 50px; */
           width: 30vw;
           min-height:80%;
           float: right;
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
       .info{
           float:left;
           width:40%;
       }
       @media only screen and (max-width:768px){
           form{
               width: 80vw;
               float: none;
           }
           .info{
              float:none;
              width: 100%;
              text-align: center;
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
    <?php include_once("common/nav.php");if(!isset($_SESSION)){session_start();}?>

    <div class="bg">
        <p class="info">
            We plan to make the world a better place. And we help the people who want to do the same.
        </p>
        <form action="verify_login.php" method="post">
            <h2>Login</h2>
            <div style="margin: 0 auto; overflow: visible;">
                <div>
                    <label>Staff/Organization ID: </label>
                    <input type="text" id="userid" name="userid" onKeyUp="checkInput()" required>
                </div>
                <br>
                <div>
                    <label>Password: </label>
                    <!-- first, list continents in combobox, then country name -->
                    <input type="password" name="password" required>
                </div>

                <?php if(isset($_SESSION['err'])):?>
                 <div class="alert">
                   <span class="closebtn" onclick="this.parentElement.style.display='none';"> &times; </span>
                  <?php echo $_SESSION['err']; unset($_SESSION['err']);?>
                </div>
                <?php endif; ?>
                <br>
                <input type='submit' id="login" name='login' value="Login">
            </div>

            <a  style="text-align: center;" href="signup.php">Not a member yet? Sign Up</a>
        </form>

    </div>

    <?php include_once("common/footer.php");?>

    <script>
      var useridbox = document.getElementById('userid');
      var loginbtn = document.getElementById('login');

      function checkInput() {
        var value = useridbox.value;
        if (value.length > 0 && value.length < 15 && (value.startsWith("Staff") || value.startsWith("Org00"))) {
          useridbox.style.backgroundColor = 'lightgreen';
          loginbtn.disabled = false;
        } else {
          useridbox.style.backgroundColor = 'salmon';
          loginbtn.disabled = true;
        }
      }
    </script>

    <!-- <script function addStyle(){
        document.getElementById('style').href='css/layout.css';
    }<script> -->
</body>

</html>
