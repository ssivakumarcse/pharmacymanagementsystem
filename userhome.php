<?php
session_start();
include("dbconnect.php");
extract($_POST);
$uid=$_SESSION['uid'];




if($_REQUEST['act']=="add")
{
$mid=$_REQUEST['id'];
$amnt=$_REQUEST['price'];
$mq=mysql_query("select max(id) from addcart");
$mr=mysql_fetch_array($mq);
$id=$mr['max(id)']+1;
$ins=mysql_query("insert into addcart(id,uid,orderid,bid,price,quantity,amount,status)
values($id,'$uid','0','$mid','0','0','0','0')");
header("location:userhome.php");
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
		<h2 align="center"> Buys Medicines</h2>

<table width="44%" align="center" >
<tr>
<td width="50%">&nbsp;</td>
<td width="50%">&nbsp;</td>

</tr>
<?php
$qry=mysql_query("select * from product");
while($row=mysql_fetch_array($qry))
{
?>
<tr>
<td colspan="2" align="center"><img src="images\<?php echo $row['img'];?>"width="150" height="100"></td>
</tr>
<tr>
<td height="51">Madicine Name</td>
<td><?php echo $row['name'];?></td>
</tr>
<tr>
<td height="30">Price</td>
<td><?php echo $row['price'];?></td>
</tr>

<tr>
<td height="32">Manufacture || Expiry</td>
<td><?php echo $row['mfd'];?> || <?php echo $row['exd'];?></td>
		
  </tr>	


<tr>
<td height="51">Description</td>
<td><?php echo $row['desc'];?></td>
		
  </tr>	
  <tr>
<td height="40" colspan="2" align="center"><a href="userhome.php?act=add&id=<?php echo $row['id'];?>&price=<?php echo $row['price'];?>">Order</a></td>
		
  </tr>	
  <?php
  }
  ?>
</table>


		
<div class="footer">
		
		
		
		<div class="col-md-4 footer-grids">
					
						
					<p align="center"><font size="+1">© 2020 Stone . All rights reserved | Design by Admin</font></p>
				</div>
		
		
		
	</div>
	
  
</body>
</html>