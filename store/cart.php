<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html>
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
        
      <!-- end header -->
      <!-- start page -->

        <div id="page">
          <!-- start content -->
          <div id="content">
            <div class="post">
              <h1 class="title">Viewcart</h1>
              <div class="entry">
            
              <pre><?php
              //  print_r($_SESSION);
              ?></pre>
            
              <form action="process_cart.php" method="POST">
              <table width="100%" border="0">
                <tr >
                  <Td> <b>No
                  <td> <b>Category
                  <td> <b>Product
                  <td> <b>Qty
                  <td> <b>Rate
                  <td> <b>Price
                  <td> <b>Delete
                </tr>
                <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
              
                <?php
                  $tot = 0;
                  $i = 1;
                  if(isset($_SESSION['cart']))
                  {

                  foreach($_SESSION['cart'] as $id=>$x)
                  { 
                    echo '
                      <tr>
                      <Td> '.$i.'
                      <td> '.$x['cat'].'
                      <td> '.$x['nm'].'
                      <td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
                      <td> '.$x['rate'].'
                      <td> '.($x['qty']*$x['rate']).'
                      <td> <a href="process_cart.php?id='.$id.'">Delete</a>
                    </tr>
                    ';
                    
                    $tot = $tot + ($x['qty']*$x['rate']);
                    $i++;
                  }
                  }
                
                ?>
              <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
                
              <tr>
              <td colspan="6" align="right">
              <h4>Total:</h4>
              
              </td>
              <td> <h4><?php echo $tot; ?> </h4></td>
              </tr>
              <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
              
              <Br>
                </table>            

                <br><br>
              <center>
              <input type="submit" value=" Re-Calculate " > 
              <a href="checkout.php">CONFIRM & PROCEED<a/>
              </center>
              </form>
              </div>
              
            </div>
            
          </div>
          <!-- end content -->
          <li>
        <h2>Categories</h2>
        <ul>
          
          
          <!--
          <li><a href="#">Economics</a></li>
          <li><a href="#">Fiction</a></li>
          <li><a href="#">Forestry & WildLife</a></li>
          <li><a href="#">Health & Physics</a></li>
          <li><a href="#">Historical</a></li>
          <li><a href="#">Social</a></li>
          <li><a href="#">Sports & Physical Education</a></li>
          <li><a href="#">Terrorism</a></li>
          <li><a href="#">Tourism</a></li>
          <li><a href="#">Tracking </a></li>
          <li><a href="#">Yoga</a></li>
          -->
                <?php
                    
      
                    $query="select * from category ";
      
                    $res=mysqli_query($conn,$query);
                      
                    while($row=mysqli_fetch_assoc($res))
                      {
                        echo '<li><a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
                        //pass catid not catnm
                      }
      
                      mysqli_close($conn);
                ?>
        </ul>
      </li>
        <div style="clear: both;">&nbsp;</div>
      </div>
      <!-- end page -->
      
      <!-- start footer -->
      <div id="footer">
            <?php
              include("includes/footer.inc.php");
            ?>
      </div>
      <!-- end footer -->
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
</html>
