<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{

$qry=mysql_query("insert into register(name,gender,age,email,phone,location,address,uname,psw) values('$name','$gender','$age','$email','$phone','$address','$address','$uname','$psw')");
	if($qry)
	{
	
	echo "<script>alert('inserted sucessfully')</script>";
	
	}
	else
	{
	
	
		echo "failed";
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



<script>
  function name()
{
  var name=/^[a-zA-Z ]{3,20}$/;
   if(document.f1.name.value.search(name)==-1)
    {
	 alert("enter correct name");
	 document.f1.name.focus();
	 return false;
	 }
	}
	
	
		
	 function age()
{
  var age=/^[0-9]{1,3}$/;
   if(document.f1.age.value.search(age)==-1)
    {
	 alert("enter correct age");
	 document.f1.age.focus();
	 return false;
	 }
	} 
	
	
	
	
	
	 function phone()
{
  var phone=/^[0-9]{10}$/;
   if(document.f1.phone.value.search(phone)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.phone.focus();
	 return false;
	 }
	} 
	
	
	
	
	
	function email()
{
 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
   if(document.f1.email.value.search(email)==-1)
    {
	 alert("enter correct email");
	 document.f1.email.focus();
	 return false;
	 }
	}
	
	
	
	
	
	function address()
{
 	var address=/^[a-zA_Z0-9 ,#]{5,100}$/;
   if(document.f1.address.value.search(address)==-1)
    {
	 alert("enter correct address");
	 document.f1.address.focus();
	 return false;
	 }
	} 
	
	
	
	
	
	 function loc()
{
  var loc=/^[a-zA-Z ]{3,20}$/;  
   if(document.f1.loc.value.search(loc)==-1)
    {
	 alert("enter correct Location");
	 document.f1.loc.focus();
	 return false;
	 }
	} 
	
	
	
	
	  function uname()
{
  var uname=/^[a-zA_Z0-9]{3,100}$/;
   if(document.f1.uname.value.search(uname)==-1)
    {
	 alert("enter correct name");
	 document.f1.uname.focus();
	 return false;
	 }
	}
	
	
	
	
	function psw()
{
 	var psw=/^[a-zA_Z0-9]{5,100}$/;
   if(document.f1.psw.value.search(psw)==-1)
    {
	 alert("enter correct address");
	 document.f1.psw.focus();
	 return false;
	 }
	} 
	 
	function vali()
	{
	var name=/^[a-zA-Z ]{3,20}$/;  
	var age=/^[0-9]{1,3}$/;
	var phone=/^[0-9]{10}$/;
	var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
	var loc=/^[a-zA-Z ]{3,20}$/;
	var address=/^[a-zA_Z0-9 ,#]{5,100}$/;
	var psw=/^[a-zA_Z0-9]{3,100}$/;
	var uname=/^[a-zA_Z0-9]{3,100}$/;
	 //var mesg=/^[a-zA_Z0-9]{10,300}$/;
   if(document.f1.name.value.search(name)==-1)
    {
	 alert("enter correct name");
	 document.f1.name.focus();
	 return false;
	 }
	 
	 
	 
	 
	  else if(document.f1.age.value.search(age)==-1)
    {
	 alert("enter correct Age");
	 document.f1.age.focus();
	 return false;
	 }
	 
	 
	 
	 
	  else if(document.f1.phone.value.search(phone)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.phone.focus();
	 return false;
	 }
	 
	 
	 
	 else if(document.f1.email.value.search(email)==-1)
    {
	 alert("enter correct email");
	 document.f1.email.focus();
	 return false;
	 }
	 
	  
	  else if(document.f1.loc.value.search(loc)==-1)
    {
	 alert("enter correct Location");
	 document.f1.loc.focus();
	 return false;
	 }
	 
	  else if(document.f1.address.value.search(address)==-1)
    {
	 alert("enter correct address");
	 document.f1.address.focus();
	 return false;
	 }
	 
	 
	 
	  if(document.f1.uname.value.search(uname)==-1)
    {
	 alert("enter correct user name");
	 document.f1.uname.focus();
	 return false;
	 }
	 
	 
	 
	 
	  else if(document.f1.psw.value.search(psw)==-1)
    {
	 alert("enter correct password");
	 document.f1.psw.focus();
	 return false;
	 }
	 
	 
	 else
	 
	 {
	 return true;
	 }
	}
	
</script>

<form id="f1" name="f1" method="post" action="#"  onSubmit="return vali()"s>
  <table width="35%" border="0" align="center">

    <tr>
      <td height="42" colspan="2"  align="center" ><h3>New User Registation</h3></td>
    </tr>
   <tr>
     
      <td width="42%" height="41">Name</td>
      <td width="58%"><input name="name" type="text" id="name" onChange="return name ()"/>
      </td>
      
    </tr>
	
    <tr>
     
      <td height="34">Gender</td>
      <td><input name="gender" type="radio" value="male" />
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
     
    </tr>
	
  <tr>
     
      <td height="36">Age</td>
      <td>
        <input name="age" type="text" id="age" onChange="return age ()" />
      </td>
     
    </tr>
	 <tr>
     
      <td height="36">Email Id</td>
      <td><input name="email" type="text" id="email" onChange="return email()" /></td>
      
    </tr>
	  <tr>
      <td height="36">Phone Number </span></td>
      <td><input name="phone" type="text" id="phone" onChange="return phone()" /></td>
      
    </tr>
	   <tr>
      <td height="47">Address</td>
      <td><textarea name="address" id="address"></textarea></td>
       </tr>
	<tr>
    
      <td height="36">Zipcode</td>
      <td><input type="text" name="zip" id="zip"></td>
     
    </tr>
	 <tr>
      <td height="40">User Name</td>
      <td><input name="uname" type="text" id="uname" /></td>
    </tr>

    <tr>
     <td height="39">Passwrod</td>
      <td><input name="psw" type="password" id="psw" /></td>
    </tr>
	<tr>
      <td height="40">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
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