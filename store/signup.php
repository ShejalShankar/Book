<!doctype html> 
<?php session_start(); ?>
<html>  
<head>  

		<?php
			include("includes/head.inc.php");
		?>

<style>
body{
  background-image: url('img1.jpg');
}
</style>

</head>  
<body>  
    <div id="header">
		<div id="menu">
		</div>
	</div>
			
     <div class="container">
         <div class="main">
    <h2>User SignUp</h2>
    <h3>Sign-up Form</h3>
<form action="" method="POST" id="form_id">   
First Name: <input type="text" name="firstname" id="firstname"><br />
Last Name: <input type="text" name="lastname" id="lastname"><br />
Username: <input type="text" name="username" id="username"><br />
Gender: <input type="text" name="gender" id="gender"><br />
Contact: <input type="text" name="contact" id="contact"><br />
City: <input type="text" name="city" id="city"><br />
email: <input type="email" name="user_email" id="user_email"><br />    
Password: <input type="password" name="pass" id="password"><br />   
<input type="submit" value="submit" name="submit" id="submit" />  
        
</form> 
</div>
</div> 
<?php  
if(isset($_POST["submit"])){  
if( !empty($_POST['pass']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])&& !empty($_POST['username'])&& !empty($_POST['gender'])&& !empty($_POST['contact'])&& !empty($_POST['city'])&&!empty($_POST['user_email'])) { 
    $fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$uname=$_POST['username'];
	$gen=$_POST['gender'];
	$cont=$_POST['contact'];
	$city=$_POST['city'];
    $useremail=$_POST['user_email']; 
    $pass=$_POST['pass'];  
	
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'book_store') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM user WHERE u_fnm='".$fname."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO user(u_fnm,u_unm,lnm,u_pwd,u_gender,u_email,u_contact,u_city) VALUES ('$fname','$uname','$lname','$pass','$gen','$useremail','$cont','$city')";  
    
    $result=mysqli_query($con,$sql); 
        if($result){  
    echo '<script>alert("Account Successfully Created!")</script>';  
    } else {  
    echo '<script>alert("Failed to create account!")</script>';  
    }  
    } else {  
    echo '<script>alert("Username already exists. Try with a different username.")</script>';  
    }  
  
} else {  
    echo '<script>alert("All Fields are required!")</script>';  
}  
}  
?>  
</body>  
</html>   




