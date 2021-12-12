<?php
session_start();
include("dbconnect.php");
extract($_POST);

if(isset($_POST['btn']))
{
$max_qry = mysql_query("select max(id) from product");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
$qry=mysql_query("insert into product values('$id','$name','$price','$mfd','$exd','$power','$qty','$img','$desc')");
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
					 <li><a class="active" href="emphome.php">Employee Home</a></li>
					  
					  <li><a href="views.php">View Stocks</a></li>
					  
					  <li><a href="orders.php">View Order</a></li>
					   
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
  <table width="37%" height="281" border="0" align="center">
	<tr>
	<td colspan="2 " align="center"><h3>Add Madicine Entry</h3></td>
	</tr>
	<tr>
   <tr>
      <td width="39%">&nbsp;</td>
      <td width="61%">&nbsp;</td>
    </tr>
	 <tr>
       <td>Madicine Name</td>
      <td><label>
      		<input name="name" type="text">
      </label></td>
    </tr>
	
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	 <tr>
      <td>Price </td>
      <td><label>
      		<input name="price" type="text" id="price">
      </label></td>
     
    </tr>
	
	
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	 <tr>
    </tr>
	 <tr>
       <td>Quantiy</td>
      <td><label>
      		<input name="qty" type="text">
		
      </label></td>
      
    </tr>
	
	 <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	<tr>
       <td>Power</td>
      <td><label>
      		<input name="power" type="text">
		
      </label></td>
      
    </tr>
	
	 <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	 <tr>
     
      <td>Image</div></td>
      <td><label>
      		<input name="img" type="file"></div>
      </label></td>
     
    </tr>
	
	 <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	<tr>
     
      <td>Manufacture Date</div></td>
      <td><label>
      		<input name="mfd" type="date"></div>
		
      </label></td>
     
    </tr>
	
	 <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	<tr>
     
      <td>Expiry Date</div></td>
      <td><label>
      		<input name="exd" type="date"></div>
		
      </label></td>
     
    </tr>
	
	 <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td>Description</td>
      <td><label>
      		<input name="desc" type="text">
		
      </label></td>
     
    </tr>
	
	 <tr>
     
      <td>&nbsp;</td>
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