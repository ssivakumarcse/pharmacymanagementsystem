<?php
include("dbconnect.php");
session_start();
extract($_POST);
$uid=$_SESSION['uid'];
if(isset($btn))
{
$amount=0;
	$mq2=mysql_query("select max(orderid) from addcart");
$mr2=mysql_fetch_array($mq2);
$order=$mr2['max(orderid)']+1;
	for($i=0;$i<count($gid);$i++)
	{
	$amt=$price[$i]*$qty[$i];
	$amount+=$amt;
	mysql_query("update addcart set price=$price[$i],quantity=$qty[$i],amount=$amt,status=1,orderid=$order where id=$gid[$i]");
	}

header("location:payment.php?id=".$order);
}
if($_REQUEST['act']=="del")
{
$did=$_REQUEST['did'];
mysql_query("delete from addcart where id=$did");
//header("location:cart.php");
}
?>


<!DOCTYPE html>
<html>
<head>
<title>medical management</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Stone Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		<br>

			});
		});
</script>
<!--//end-smooth-scrolling-->	
</head>
<body>
	<!--banner-->
	<div class="banner">
		<div class="header"><!--header-->
			<div class="container">		
				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1 class="navbar-brand"><a  href="index.html">PHARMACY MANAGEMENT SYSTEM</a></h1>
					</div>
					
					<!--navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right cl-effect-4">
							 <li><a class="active" href="userhome.php">User Home</a></li>
								  <li><a href="addcart.php">Add Cart</a></li>
								  <li><a href="view.php">View Buy Details</a></li>
								   <li><a href="index.html">LogOut</a></li>
								</ul>
						<div class="clearfix"> </div>	
					</div>
				</nav>
			</div>
		</div>
		<!--//header-->
		<!--banner-text-->
		
		<!--//banner-text-->
	</div>
	<!--//banner-->
	<!--banner-bottom-->
	<!--//banner-bottom-->
	<!--welcome-->
		
		<br>
		<br>
		<br>
		<br>
 <form name="form1" method="post" action="">
			
			<table width="801" border="1" align="center" cellpadding="5">
      <tr>
        <th width="81" scope="col">Image</th>
        <th width="81" scope="col">Madicine</th>
        <th width="128" scope="col">Price</th>
        <th width="171" scope="col">Quantity</th>
        <th width="171" scope="col">Action</th>
      </tr>
      <?php
	$q1=mysql_query("select * from addcart where uid='$uid' && status=0");
  $num=mysql_num_rows($q1);
  if($num>0)
  {  
	while($r1=mysql_fetch_array($q1))
	{
	$q3=mysql_query("select * from product where id=".$r1['bid']."");
	$r3=mysql_fetch_array($q3);

	?>
      <tr>
        <td align="left"><img src="images/<?php echo $r3['img']; ?>" width="80" height="80" /></td>
        <td align="left"><?php echo $r3['name']; ?></td>
        <td align="left"><?php echo $r3['price']; ?></td>
        <td align="left"><input type="text" name="qty[]" />
            <input type="hidden" name="gid[]" value="<?php echo $r1['id']; ?>" />
            <input type="hidden" name="bid[]" value="<?php echo $r1['bid']; ?>" />
            <input type="hidden" name="price[]" value="<?php echo $r3['price']; ?>" />
        </td>
		<td align="left"><a href="addcart.php?act=del&did=<?php echo $r1['id'];?>">Remove</a></td>
      </tr>
      <?php
	}
	?>
	<p align="center">
 <tr>
 <td colspan="6" align="center"><input type="submit" name="btn" value="Order" /></td>
 </tr>
  </p> <?php
  }
  else
  {
  echo "Order is Empty!";
  }
  ?>
  
  </table>

		</form>
<div class="footer">
		
		
		
		<div class="col-md-4 footer-grids">
					
						
					<p align="center"><font size="+1">© 2020 Stone . All rights reserved | Design by Admin</font></p>
				</div>
		
		
		
	</div>
	
  
</body>
</html>