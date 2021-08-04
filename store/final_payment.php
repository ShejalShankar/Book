<?php session_start();
require('includes/config.php');
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
				</div><BR><BR>
			<!-- end header -->
			<h1><font color= "green" style="font-size:30px; font-family: 'Cooper Std'; margin-left:260px">SUCCESS !</font><i>
			<?php
				echo $_SESSION['unm'];
				?></i></h1>
<div class="container">			
			<hr style="margin-left:260px;margin-right:260px;"></hr>
			<div style="border-radius:5px 5px 5px 5px;margin-left:160px;margin-right:160px;font-size:20px;"><b><font color = "black">Your order has been placed. The same will be delivered to the specified address between <font color="red">
			<?php 
			$dbhost = "localhost";
			$dbname = "book_store";
			$dbuser = "root";
			$dbpass = "";
			$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

			$sql = 'call date(@level)';
			$stm = $pdo->prepare($sql);
			$stm->execute() or die(mysql_error());
			$stm->setFetchMode(PDO::FETCH_ASSOC);
			$number = "";
			while($r = $stm->fetch()){
				$number = $r['pdate'];
			}	

			echo $number;
			?> <font color="black">and</font>
				<?php 
			$dbhost = "localhost";
			$dbname = "book_store";
			$dbuser = "root";
			$dbpass = "";
			$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

			$sql = 'call date1(@level)';
			$stm = $pdo->prepare($sql);
			$stm->execute() or die(mysql_error());
			$stm->setFetchMode(PDO::FETCH_ASSOC);
			$number = "";
			while($r = $stm->fetch()){
				$number = $r['pdate'];
			}	

			echo $number;
			?>




			</font> .</font></b></div><BR><br>
			<?php
require('includes/config.php');
		
			$query="select t_price from shipping_details";
			$t_price = 0;
			
			$res = mysqli_query($conn,$query) or die("can't Execute...");
			while($row=mysqli_fetch_assoc($res)){
				$t_price = $row['t_price'];

			}
			echo '<h4><B><FONT COLOR:"BLACK"><CENTER>The Amount to be paid is  </FONT>'.$t_price.'</h4></B></CENTER>';


?>
			<form action="index.php">
				<button type="submit" class="btn btn-info" style="float:right;">Continue Shoping</button>
				</form>
			</div></br>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
			

			
			
			