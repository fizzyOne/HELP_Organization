<!DOCTYPE html>
<html>

<head>
    <title>HELP Org - Sign up</title>
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

    </style>

</head>

<body>
    <?php include_once("common/nav.php");?>

    <div class="bg">

        <form action="upload_req.php" method="POST">
            <h2>Join HELP community</h2>
            <div>
                <label>Organization Name: </label>
                <input type="text" name="orgName" required>
            </div>

            <div>
                <label>Email: </label>
                <input type="mail" name="email" required>
            </div>
            <div>
                <label>Location: </label>
                <?php require_once("common/country_select.php"); ?>
            </div>


            <div>
                <label>Website:</label>
                <input type="text" name="website">
            </div>

            <div>
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>


              <?php if(isset($_SESSION['err'])):?>
               <div class="alert">
                 <span class="closebtn" onclick="this.parentElement.style.display='none';"> &times; </span>
                <?php echo $_SESSION['err']; unset($_SESSION['err']);?>
              </div>
              <?php endif; ?>

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
