<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{
$qry=mysql_query("select * from register where uname='$uname' && psw='$password'");
$num=mysql_num_rows($qry);
if($num==1)
{
$qry=mysql_query("select * from register where uname='$uname' && psw='$password'");
$row=mysql_fetch_assoc($qry);
$_SESSION['uid']=$row['id'];
?>
<script>alert('welcome to User home page');
</script>
<?php

header("location:userhome.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";

}
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
							<li class="active"><a href="index.html">Home</a></li>
							
									<li><a  href="admin.php">Admin Login</a></li>
									<li><a href="emp.php">Employee Login</a></li>
									<li><a href="user.php">User Login</a></li>
									<li><a  href="#">Contacts</a></li>
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
<form id="form1" name="form1" method="post" action="">
	   <table width="52%" border="0" align="center">
         <tr>
           <td colspan="2" rowspan="1"><div align="center" class="style1"><strong><font size="+1">User Login</font> </div></td>
		 </tr>
			<tr>
		<td width="36%">&nbsp;</td>
		    <td width="36%">&nbsp;</td>
	  		</tr>
         </tr>
         <tr>
           <td height="31"align="center"><span class="style2"><strong>User Name </strong></span></td>
           <td><label>
             <input name="uname" type="text" id="uname" />
           </label></td>
         </tr>
         <tr>
           <td height="44" align="center"><span class="style2"><strong>Password</strong></span></td>
           <td><label>
             <input name="password" type="password" id="password" />
           </label></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td rowspan="2"><label>
             <input name="btn" type="submit" id="btn" value="Login" />
             <input type="reset" name="Submit2" value="Cancel" />
           </label></td>
         </tr>
		 
		   <tr>
         
           <td width="28%"><a href="register.php">New User Sign Up?</a>          </td>
         </tr>
		 
		 
		 
  </table>
</form>

<br>
		<br>
		<br>
		<br>
<div class="footer">
		<div class="container">
			<div class="footer-row">
				<div class="col-md-6 footer-logo">
					<h5><a href="index.html">PHARMACY MANAGEMENT SYSTEM</a></h5>
				</div>
				
				<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<div class="col-md-4 footer-grids">
					<p>The “MEDICAL MANAGEMENT SYSTEM” contains Company-details, Employee-details, Stock-details, Sales-details, Purchase-details, Distributer-details, and Customer-details.</p>
					
				</div>
				<div class="col-md-4 footer-grids footer-mdl">
					<div class="col-md-6 grid-left">
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 footer-grids">
					
						<h2>Contact Us</h2>
					<br>
					
					<ul>
						<li class="phn"><i class="fa fa-phone"></i>+91 99 88 77 66 55</li>
						<li><a href="mailto:example@mail.com"><i class="fa fa-envelope-o"></i> medicalmgmnt@mail.com</a></li>
					</ul>
					<p>© 2020 Stone . All rights reserved | Design by Admin</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--footer-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>