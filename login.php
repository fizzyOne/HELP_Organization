<?php include("common/#config.php");?>
<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: admin_bashboard.php");
    exit;
}

// Include config file
require_once "common/config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["userid"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["userid"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, name, password FROM staff WHERE name = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>
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
       .bg p{
           flaot:left;
           width:40%;
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
        <p>
            We plan to make the world a better place. And we help the people who want to do the same.
        </p>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <h2>Login</h2>
            <div style="margin: 0 auto; overflow: visible;">
                <div>
                    <label>Staff/Organization ID: </label>
                    <input type="text" name="userid">
                </div>
                <br>
                <div>
                    <label>Password: </label>
                    <!-- first, list continents in combobox, then country name -->
                    <input type="password" name="password">
                </div>
                 <div class="alert">
                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                  This is an alert box.
                </div>
                <input type="submit" value="Submit">Login</input>
            </div>

            <a  style="text-align: center;" href="signup.php">Not a member yet? Sign Up</a>
        </form>

    </div>

    <?php include_once("common/footer.php");?>
    <!-- <script function addStyle(){
        document.getElementById('style').href='css/layout.css';
    }<script> -->
</body>

</html>
