<!DOCTYPE html>
<html>

<head>
    <title>HELP Org - New tasks</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/comp.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/layout.css" />
    <style>
      body{
      }
      form{
        margin-top: 15px;
      }
      h1{
          color: #007D89;
          font-size: 2em;
          text-align: center;
      }
      h3{
        color: #0097A7;
        font-size: 2em;
      }
      #goBack{

      }
      #goBack:hover{
        background-color: grey;
        cursor: pointer;
      }
      form input[type='submit']{
        margin-top:15px;
      }
    </style>

</head>

<body>
    <nav>
      <img id="goBack" src="img/arrow.svg" style="padding: 5px;" onclick="location.href='admin_dashboard.php'">
    </nav>
    <form action="submit_task.php" method="POST">
        <h1>Add New Task</h1>
        <div>
          <label>Title</label>
          <input type="text" name="title">
        </div>
        <div>
          <label>Details: </label>
          <input type="text" name="detail">
        </div>
        <div>
            <label>Organization</label>
            <select name='org' required>
            <?php
                require_once("common/org_list.php");
            ?>
            </select>
        </div>
        <input type="submit" value="Assign Task">

    </form>
</body>

</html>
