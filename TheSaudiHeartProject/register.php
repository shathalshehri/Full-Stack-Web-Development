<?php
require_once('admin/dbs/db.php');
include('admin/validation.php');
?>

<html>
	<head>
	<style>
	body{
	  background-image: url('https://s3-eu-west-2.amazonaws.com/ultravilla-cdn-1/wp-content/uploads/2016/01/06111225/Grace-Bay-Turks-and-Caicos-Copy-2.jpg');
	/*https://3.bp.blogspot.com/-nvfpcO4d1V4/UuTJeplxBMI/AAAAAAAAUhc/XCq7yhEBJe4/s1600/%25D8%25B4%25D8%25B1%25D9%2588%25D9%2582%252C%25D8%25A7%25D9%2584%25D8%25B4%25D9%2585%25D8%25B3%252C%25D9%2585%25D9%2586%25D8%25B8%25D8%25B1+%25D8%25B7%25D8%25A8%25D9%258A%25D8%25B9%25D9%2589+%25288%2529.jpg*/
	  background-repeat: no-repeat;
	background-size: 100%;
	height: auto;
	width: auto;
	background-attachment: fixed;}
.field-wrap {
  position:relative;
  font-family:  "Lucida Console", Courier, monospace;
  color: black;
  width:50%;
  //background-color:#E6E6EC;
  margin-bottom:20px;
  height:40px;
}
	center{

	}

span.error p{
			color:red;
		}
h2,h3{
	text-align:center;
	color:black;
	font-size:30px;
	font-family: monotype corsiva;
}
input,textarea {
  font-size:22px;
  display:block;
  text-align:left;
  color:black;

  &:focus {
		outline:0;
		border-color:#a0b3b0;
  }
}


#add{margin:10px;}
	span.error p{
	color:red;
	}


body{
background-color:#c1bdba;
}
form1{
	background-color:#13232f;
}
.form {
  background:rgba(#13232f,.9);
  padding: 40px;
  max-width:600px;
  margin:40px auto;
  border-radius:$br;
  box-shadow:0 4px 10px 4px rgba(#13232f,.3);
}
.forgot {
  margin-top:-10px;
  text-align:right;
}
	</style>
	</head>
	<body style='background-color:#bbb4b7a1;'>




<!-- content -->
<center>
<div  class="container">
<div class="main">
<div class="">
<br>
		<h2 >Log In !</h2>
		 <div class="registration_form">
		 <!-- Form -->
			<form id="registration_form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post"  enctype="multipart/form-data">
					  <div class="field-wrap">
						<input style='background-color:#E0FFFF;border:1px solid black;' placeholder="User Name" type="text" name='userlogin' tabindex="3" >
											<?php
						if(isset($error["lname"]))
		echo($error["lname"])

	?>
				</div>
					  <div class="field-wrap">

						<input style='background-color:#E0FFFF;border:1px solid black;' placeholder="password" type="password" name='userpassword' tabindex="4" >
																<?php
						if(isset($error["lpass"]))
		echo($error["lpass"])

	?>

				</div>
				<div style='width:50%;'>
		<p class="forgot"><b><a href="#">?Forgot Password</a></b></p>
				</div><br>
					<input style ='width:30%;text-align:center;color:black;background-color:#E6E6FA;font-size:30px;  font-weight:600;text-transform:uppercase;' type="submit" value="LOG IN" id="register-submit" name='login'>




			</form>
			<!-- /Form -->
			</div>
	</div>
	<!-- start registration -->
	<div class="registration">
		<div>
		<h3 style='color:black;'><b>! New ? Join to us </b></h3>


		 <div class="registration_form">
		 <!-- Form -->
			<form  id="registration_form" action="<?php echo($_SERVER['PHP_SELF'] ) ?>" method="post">
				  <div class="field-wrap">

						<input   style='background-color:#E0FFFF;border:1px solid black;' placeholder="Name" type="text" tabindex="1" name='fname' >
						<?php
						if(isset($error["fname"]))
		echo($error["fname"])

	?>
				</div>



	      <div class="field-wrap">

						<input   style='background-color:#E0FFFF;border:1px solid black;' placeholder="Password" type="text" name='passw' tabindex="4" >
											<?php
						if(isset($error["passw"]))
		echo($error["passw"])

	?>

				</div>
				  <div class="field-wrap">

						<input   style='background-color:#E0FFFF;border:1px solid black;' placeholder="Confirm Password" type="text" name='pas' tabindex="4" >
																<?php
						if(isset($error["pas"]))
		echo($error["pas"])

	?>
		</div>
			  <div class="field-wrap1">
	<input style='background-color:white;text-align:center;width:50%;border:1px solid black;' placeholder="Image" type='file' name='img' tabindex="5" id='email'>

							<?php
						if(isset($error["img"]))
		echo($error["img"])

	?>
	</div>
 <div>

	<input style='background-color:white;text-align:center;width:50%;border:1px solid black;' placeholder="Date of Birth" type="date" tabindex="6" name='birth' >
											<?php
						if(isset($error["birth"]))
		echo($error["birth"])
	?></div>

				  <div class="field-wrap">

						<input   style='background-color:#E0FFFF;border:1px solid black;' style='width:100%;' placeholder="Email" type="email" tabindex="3" name='email1' >
											<?php
						if(isset($error["email1"]))
		echo($error["email1"])

	?>

				</div>
				</div>
				<div>
					<br>
					<input style ='width:30%;text-align:center;color:black;background-color:#DOC4DE;height:65px;font-size:30px;' type="submit" value="Get Started" id="register-submit" name="send">

				</div>

			</form>
			<!-- /Form -->
		</div>
	</div>

	<div class="clearfix"></div>
	</div>
	<!-- end registration -->
</div>
</div>
</center>
<?php
include("footer.php");
?>
</body>
</html>
