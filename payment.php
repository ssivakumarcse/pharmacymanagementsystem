<?php
include("dbconnect.php");
session_start();
extract($_POST);
$uid=$_SESSION['uid'];
$id=$_REQUEST['id'];
$sql1 = mysql_query("select sum(amount) from addcart where orderid='$id'");
$row2 = mysql_fetch_array($sql1);
 $k = $row2['sum(amount)'];
 if(isset($_POST['btn']))
{
?>
<script language="javascript">
	alert("Amount Transfer Successfull..");
	window.location.href="userhome.php";
	</script>
<?php
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


<form method="post" action="#">
	  <table width="50%" border="0" align="center">
        <tr>
          <td colspan="2"><span class="style1">Payment Mode.... </span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="image" name="imageField" src="images/payment.png" />
          </label></td>
        </tr>
        <tr>
          <td width="35%" height="55"><span class="style4">Amount</span> </td>
		  <td> <?php echo $k;?></td>
        </tr>
        <tr>
          <td height="45"><span class="style4">Enter Card Number </span></td>
          <td><input name="cno" type="text" id="cno" /></td>
        </tr>
        <tr>
          <td height="41"><span class="style4">CVV Number </span></td>
          <td><input name="cvv" type="password" id="cvv" /></td>
        </tr>
        <tr>
          <td height="44"><span class="style4">Card Name </span></td>
          <td><input name="cname" type="text" id="cname" /></td>
        </tr>
        <tr>
          <td height="57">&nbsp;</td>
          <td><input name="btn" type="submit"value="Pay" /></td>
        </tr>
      </table> 
  </form>
  
  
  <br>
		<br>
		<br>
		<br>
  		
<div class="footer">
		
		
		
		<div class="col-md-4 footer-grids">
					
						
					<p align="center"><font size="+1">© 2020 Stone . All rights reserved | Design by Admin</font></p>
				</div>
		
		
		
	</div>
	
  
</body>
</html>