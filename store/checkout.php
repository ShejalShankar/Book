<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
 $total = $_SESSION['total'];

require('includes/config.php'); 	
	//echo $uid;
	if(isset($submit))
	{
	$query="insert into shipping_details(Fnam,lname,address,postal_code,city,state,phone,u_name,t_price) values('$Fnam','$lname','$address','$pc','$city','$state','$phone','$unm','$total')";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	header("location:payment_details.php");
	}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<BR>
				<BR><BR>
				
			<!-- end header -->
			<!------------------------------->
			<font style="font-size:30px;margin-left:420px">Shipping Details</font>	
			<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <div class="clr"></div>
				
            </div><!--/ freshdesignweb top bar -->    
		
      <div  class="form">
    		<form id="contactform" method="post"> 
    			<p class="contact"><label for="name">First Name</label></p> 
    			<input id="fname" name="Fnam" placeholder="First Name" required="" tabindex="1" type="text"> 
    			 
    			 <p class="contact"><label for="name">Last Name</label></p> 
    			<input id="lname" name="lname" placeholder="Last Name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Address</label></p> 
    			<textarea id="address" name="address" placeholder="Address" required="" cols="55" row="10"type="email"> </textarea>
                
                <p class="contact"><label for="username">Postal Code</label></p> 
    			<input id="pc" name="pc" placeholder="560060" required="" tabindex="2" type="text"> 
    			 
                <p class="contact"><label for="city">City</label></p> 
    			<input type="text" id="city" name="city" required="" placeholder="Bangaluru"> 
                <p class="contact"><label for="state">State</label></p> 
    			<input type="text" id="state" name="state" required="" placeholder="Karnataka"> 
            <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="phone" name="phone" placeholder="phone number" required="" type="text"> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Confirm & Proceed" type="submit"> 	 
   </form> 
</div>      
</div>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>