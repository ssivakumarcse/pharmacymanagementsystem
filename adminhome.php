<?php
session_start();
include("dbconnect.php");
extract($_POST);

if(isset($_POST['btn']))
{
$max_qry = mysql_query("select max(id) from emp");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
$qry=mysql_query("insert into emp values('$id','$name','$gender','$age','$email','$phone','$quali','$address','$psw')");
if($qry)
{
echo"<script> alert('Entered suceessfully')</script>";
}
else
{
echo"<script> alert('Check Fields')</script>";
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
							<li><a class="active" href="adminhome.php">Admin Home</a></li>
  
										  <li><a href="viewe.php">ViewEmployee</a></li>
										  <li><a href="viewu.php">View Users</a></li>
										  <li><a href="viewo.php">View Ordered</a></li> 
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

<form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="32%" height="515" border="0" align="center">
	<tr>
	<td colspan="2" align="center"><h3>Employee Entry</h3></td>
	</tr>
	<tr>
    <tr>
      <td width="47%" height="37">&nbsp;</td>
      <td width="53%">&nbsp;</td>
    </tr>
	 <tr>
      <td height="54">Employee Name</td>
      <td>
      		<input name="name" type="text">
      </td>
      
    </tr>	
	 
	 <tr>
     <td height="51">Gender</td>
      <td>
      		<input name="gender" type="radio" value="male"> Male
			<input name="gender" type="radio" value="female"> Female
     </td>
      
    </tr>
	
	 <tr>
      
      <td height="44">Age</td>
      <td>
      		<input name="age" type="text">
		
     </td>
      
    </tr>
	
	 <tr>
     <td height="48">Email</td>
      <td>
      		<input name="email" type="text">
		
      </td>
      
    </tr>
	
	
	
	 <tr>
     <td height="35">Phone</td>
      <td>
      		<input name="phone" type="text">
		
     </td>
      
    </tr>
	
	
	
    <tr>
     
      <td height="50">Qualification</td>
      <td>
      		<input name="quali" type="text">
		
      </td>
     
    </tr>
	
	 <tr>
      
      <td height="37">Address</td>
      <td>
      		<input name="address" type="text">
		
    </td>
     
    </tr>
	 
	
	  <tr>
     
      <td height="56">Password</div></td>
      <td>
      		<input name="psw" type="password"></div>
		
      </td>
      </tr>
	 <tr>
     
    	<td height="53">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
</table>
  
</form>


		
<div class="footer">
		
		
		
		<div class="col-md-4 footer-grids">
					
						
					<p align="center"><font size="+1">© 2020 Stone . All rights reserved | Design by Admin</font></p>
				</div>
		
		
		
	</div>
	
  
</body>
</html>