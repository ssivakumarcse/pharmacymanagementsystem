<?php
include("dbconnect.php");
session_start();
extract($_POST);
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
<table width="89%" align="center">
	<tr>
		<td colspan="10" align="center"><h3>Employee Details</h3></td>
  </tr>
	<tr>
		<td colspan="10">&nbsp;</td>
  </tr>
		    <tr>
          <td width="2%">&nbsp;</td>
          <td width="9%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		  <td width="16%"><div align="center" class="style6"><strong>Name</strong> </div></td>
		  <td width="13%"><div align="center" class="style6"><strong>Age</strong> </div></td>
		   <td width="15%"><div align="center" class="style6"><strong>Email</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong>Phone</strong> </div></td>
		    <td width="15%"><div align="center" class="style6"><strong>Qualification</strong> </div></td>
			 <td width="19%"><div align="center" class="style6"><strong>Address</strong> </div></td>
        </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from emp");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		?>
        <tr>
		 <td width="2%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
			  <td><div align="center"><?php echo $row['name'];?></div></td>
		   <td><div align="center"><?php echo $row['age'];?></div></td>
			  <td><div align="center"><?php echo $row['email'];?></div></td>
			 <td><div align="center"><?php echo $row['phone'];?></div></td>
			   <td><div align="center"><?php echo $row['quali'];?></div></td>
			     <td><div align="center"><?php echo $row['address'];?></div></td>
  </tr>

		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
				<td width="15%">&nbsp;</td>
		
		</tr>
		
        <?php
		$i++;
		}
?>
				<tr>
		<td colspan="10" align="center">&nbsp;</td>
		</tr>
		
</table>



		
<div class="footer">
		
		
		
		<div class="col-md-4 footer-grids">
					
						
					<p align="center"><font size="+1">� 2020 Stone . All rights reserved | Design by Admin</font></p>
				</div>
		
		
		
	</div>
	
  
</body>
</html>