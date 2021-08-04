 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainmenu" aria-expanded="false">
        <span class="sr-only">Toggle-Navagition</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="img/ebookblue.png" class="img-responsive" alt="E Book Idya"></a>
        <a class="navbar-brand" href="index.php"><img src="img/ebooklogo1.png" class="img-responsive" alt="E Book Idya"></a>
    </div><div id="mainmenu" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <?php 
          if(isset($_SESSION['status']))
          {
            
            echo '<li><a href="contact.php"><span class="glyphicon glyphicon-thumbs-up"></span> FeedBack</a></li>';
          }
          else
          {
            echo '<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
          }
      ?>

              <?php 
          if(isset($_SESSION['status']))
          {
            
            echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>';
          }
          else
          {
            echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
          }
      ?>

    </ul>
      <ul class="nav navbar-nav navbar navbar-right">
          <li class="active"><a href="index.php">Home</a></li>
      <li><a href="category.php">Library</a></li>
      <li class="navbar-form navbar-left">
  <span class="input-group input-group-btn" style="width:100%;">
    <form method="GET" action="search_result.php">
    <input type="text" id="s" name="s" value=""  class="form-control" placeholder="Search Book Name..." />
   
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button></form>
          </span>
 <li>
      <li><a href="viewcart.php">See Your Cart</a></li>
      <li><a href="AboutUs.php">About Us</a></li>
    </ul>
  </div></div>
</nav>