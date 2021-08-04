<?php session_start();?>
<?php 
$conn=mysqli_connect("localhost","root","","book_store")or die("Can't Connect...");
  
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
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
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
       <![endif]-->
       <div id="header">
          <div id="menu">
            <?php
              include("includes/menu.inc.php");
            ?>
          </div>
        </div>
        <div class="container">
            <u><h1>About Us</h1></u>
            <p>
            <center><h2> LOVE TO READ? </h2>
                <br>
                <b>eBookIdya</b> is an online website specifically made for book lovers where you can buy books pertaining to any 
semester and branch in Engineering.<br>
You can buy browse and talk about the books that you like to read and understand. <br>
The user will have an option to select the books prescribed by various universities across India.<br>
ebookidya provides you 2 ways to get use of a book that you want to read one is either you can read the book whenever you need by loging into<br>
our website with the valid user ids and passwords given to you.<br>
the other way is to book it and get delivered . Yes if you book,the selected copy will be delivered to your address that you<br>
have been given to us while registering.<br>
The books available in ebookidya have been registred and verified by the top colleges and universities.<br>
So join us in buy sell and review BOOKS in eBookIdya.<br>
<br>
eBookIdya is designed and developed by <b>Gowtham Bhatta K</b> persuing 5th semester BE in Information Science , SJB INSTITUTE OF TECHNOLOGY<br>
affiliated to Visveswaraya Technological University , Belagavi. <br>
<br>
Feedback & Suggestions are welcome contact : <b>ebookidya@gmail.com</b><br>
<br>
                              Thanks one and All.<br>
                              <b>Team eBookIdya</b>
                                  <br></center>
            </p>
        
        
        
        
           </li>
        <div style="clear: both;">&nbsp;</div>
      </div> 
        </div>
         <div id="footer">
              <?php
                include("includes/footer.inc.php");
              ?>
        </div>
        </body>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
        </html>