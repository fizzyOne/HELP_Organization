<?php if (!isset($_SESSION)) {session_start();}
if ((isset($_SESSION['userid']) || !empty($_SESSION['userid'])) && (strpos($_SESSION['userid'], 'Staff') === 0)) : ?>
<!DOCTYPE html>
<html>
<head>
    <title>HELP Org - Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/comp.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/layout.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/dashboard.css" />
    <style>
        body{
            min-height:80vh;
        }
        table{
          margin: 15px auto;
          border: 1px solid black;
          width: 80%;

        }
        th{
          color:white;
          background-color: #0097A7;
        }
        th, td {
          text-align: left;
          padding: 9px;
          vertical-align:middle;
        }
        tr:hover{
          background-color: #bbb;

        }
        a.acclnk{
          color: green;

        }
        a.rejlnk{
          color:red;
        }
        h1{
          text-align: center;
        }
    </style>
</head>
<body>

<?php include_once("common/nav.php");?>

    <div id="content">
        <aside id="sidemenu">
          <img src="fav2.jpg" alt="logo" width='72px'>
            <div>
                <h3>Tasks</h3>
                <ul>
                    <a href="addTask.php?"><li>+ New Task</li></a>
                    <a href="admin_dashboard.php?page=viewTask"><li>* View Tasks</li></a>
                </ul>
            </div>
            <div>
                <h3>Collaborators</h3>
                <ul>
                    <a href="admin_dashboard.php?page=partReq"><li>+ Requests</li></a>
                    <a href="admin_dashboard.php?page=partDen"><li>- Denied</li></a>
                </ul>
            </div>
            <div>
                <h3>Feed</h3>
                <ul>
                    <a href="admin_dashboard.php?page=feedReq"><li>+ Requests</li></a>
                    <a href="admin_dashboard.php?page=feedDen"><li>- Denied</li></a>
                </ul>
            </div>
            <section style="width=100%;display:block;">
              <button id="logout" style="float:left !important;" onclick="location.href='common/logout.php'">Logout</button>
            </section>
        </aside>

        <section id="main">

          <div>
            <?php
            if (isset($_GET['page'])) {
                switch ($_GET['page']) {
                  case "viewTask":
                      $_GET['page'] = "viewTask";
                      break;
                  case "partReq":
                      $_GET['page'] = "partReq";
                      break;
                  case "partDen":
                      $_GET['page'] = "partDen";
                      break;
                  case "feedReq":
                      $_GET['page'] = "feedReq";
                      break;
                  case "feedDen":
                      $_GET['page'] = "feedDen";
                      break;
                  default:
                }
            } else {
                $_GET['page'] = "main";
            }
              include_once("common/admin_com.php");

            ?>
          </div>
        </section>
    </div>

</body>
</html>
<?php endif;?>
