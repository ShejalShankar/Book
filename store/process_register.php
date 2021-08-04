<?php
	require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['fnm']) ||empty($_POST['lnm']) || empty($_POST['unm']) || empty($_POST['gender']) || empty($_POST['pwd']) || empty($_POST['cpwd']) ||empty($_POST['city']))
		{
			$msg.="<li>Please full fill all requirement";
		}
		
		if($_POST['pwd']!=$_POST['cpwd'])
		{
			$msg.="<li>Please Enter your Password Again.....";
		}
		
		
		
		
		if(strlen($_POST['pwd'])>10)
		{
			$msg.="<li>Please Enter Your Password in limited Format....";
		}
		
		if(is_numeric($_POST['fnm']))
		{
			$msg.="<li>Name must be in String Format...";
		}

		if(is_numeric($_POST['lnm']))
		{
			$msg.="<li>Name must be in String Format...";
		}
		
		if(strlen($_POST['contact'])<10 || strlen($_POST['contact'])>10)
		{
			$msg.="<li>Please enter valid 10 digit Conatct no.";
		}

		if($msg!="")
		{
			header("location:register.php?error=".$msg);
		}
		else
		{
			$fnm=$_POST['fnm'];
			$lnm=$_POST['lnm'];
			$unm=$_POST['unm'];
			$pwd=$_POST['pwd'];
			$gender=$_POST['gender'];
			$contact=$_POST['contact'];
			$city=$_POST['city'];
			
			
		
			
			
			$query="insert into user(u_fnm,lnm,u_unm,u_pwd,u_gender,u_contact,u_city)
			values('$fnm','$lnm','$unm','$pwd','$gender','$contact','$city')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location:register.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>