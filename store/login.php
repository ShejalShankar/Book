
<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/custom.css" rel="stylesheet">
       <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
                background-color: #eee;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
 <div id="header">
          <div id="menu">
            <?php
              include("includes/menu.inc.php");
            ?>
          </div>
        </div>
       <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
</html>
        
<?php
            require('includes/config.php');
              if(isset($_SESSION['status']))
              {
                echo '<h2>Hello :  '.$_SESSION['unm'].'</h2>';
              }
              else
              {
                echo '<div class="container">
                <form action="process_login.php" method="POST">
                    <center><h2>Login</h2></center>
                      
                      <br><input type="text" name="usernm" class="form-control" placeholder="User Name">
                      
                      
                      
                      
                      <input type="password" name="pwd" placeholder="Password" class="form-control">
                      <br>
                      <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
                         <a class= "a1" href="admin_login.php">Admin Login</a>
						 
                         <br>
                      <button class="btn  btn-primary btn-block" id="x" type="submit">Submit</button>
                    
                    </form>
                    </div>';
              }
            ?>