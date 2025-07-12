<?php
// Start the session
session_start();

?>

<!DOCTYPE HTML>
<html>
<head>
<style>
body{
  text-align: center;
}
.field{
  margin-bottom: 20px;
}
#Fr{
text-align: right;
font-family: Serif;
color: #a2c4f2;
padding-top: 10px;
}
body{
background-image:url('https://i0.wp.com/www.agoda.com/wp-content/uploads/2019/05/Jeddah-landmarks-Corniche-Jeddah.jpg');
background-size:100%;
width: auto;

}
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #a2c4f2;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

button[type=submit] {
text-decoration: none;
font-family: Cursive;
font-size: 16px;

padding: 10px 18px;
border: none;
border-radius: 4px;
cursor: pointer;
float: right;
background-color: white;
color: black;
border-bottom: 2px solid #a89181;

}
button[type=submit]:hover{
  text-decoration: none;
background-color: #66B2BB;
color: white;
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

}
.container {

  margin-top: 20px;
  margin-left: 480px;
  float: center;
  width:400px;
  height: 370px;
  border-radius: 5px;
  background-color: white;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  margin-left: 29px;
}

.col-75 {
  float:left;
  width: 50%;
  margin-right: 6px;
  margin-left: 29px;

}

/* Clear floats after the columns */

#F{

  text-align: center;
  font-family: Cursive;
  color: white;
  border-bottom: 2px solid white;
}

#Frs{

  text-align: left;
  font-family: Cursive;
  color: #a2c4f2;
  border-bottom: 1px solid #a2c4f2;
  padding-top: 20px;

}


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 4s00px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
    margin-left: 20px;


  }
}
button[type=submit] {

font-family: Cursive;
font-size: 16px;
float:center;
margin-right: 35px;
margin-bottom: 20px;
padding: 10px 18px;
border: none;
border-radius: 4px;
cursor: pointer;

background-color: white;
color: #66B2BB;
border-bottom: 2px solid #66B2BB;

}
button[type=submit]:hover{
  text-decoration: none;
background-color: #66B2BB;
color: white;
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

}


</style>

</head>
<body>

<?php
$servername = "localhost";
$password = "your_password_here";
// Create connection
  $conn = new mysqli($servername, 'your_username_here', $password , 'Tanafs');
// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  ?>




<div id="F"> <h2> Sign In</h2></div>
<div class="container">
<form method="post" action="SignIn.php">
<!--------------------------------------------------------->
<div class="row">
<div class="col-25">

<div id="Frs">User Name:</div></div>
<div class="col-75">
  <!-- cookies here -->
  <!--will save username data in cookies if remember box is checked. If remember box is not checked, cookies will be cleared/deleted. You can check login page again to verify if cookies are saved or not.-->
 <div id="Fr"> <input type="text" class ="field" name="username" placeholder="user Name" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" required> </div> </div>
</div>
<br><br><br><br>
<!--validate USERNAME--><?php
if (isset($_POST['submit'])) {
$Name = $_POST["username"];
 if(empty($Name)){
$color = '#ff0000';
echo "<span style=\"color: $color;\"> * Please fill your name . </span>";
 }

 }

?><!----------------------------------------------------------------------------->
<br><br>

<div class="row">
  <div class="col-25">
 <div id="Frs">  password: </div></div>
<div class="col-75">
  <!-- cookies here -->
  <!--will save password data in cookies if remember box is checked. If remember box is not checked, cookies will be cleared/deleted. You can check login page again to verify if cookies are saved or not.-->
<div id="Fr"> <input type="text"class ="field" name="password"placeholder=" Password" value="<?php if(isset($_COOKIE["password"]))  echo $_COOKIE["password"]; ?>" required></div> </div>
</div>
<br><br><br><br>
<!--validate PASSWORD--><?php
 if (isset($_POST['submit'])) {
$password = $_POST["password"];
if(empty($password)){
$color = '#ff0000';
echo "<span style=\"color: $color;\"> * Please fill your Password </span>";
 }
/*elseif(!empty($Name) && !empty($psw)){ echo '<meta http-equiv="refresh" content="1; URL=Home.php" />'; // set another page ?}}*/
 }
?> <!----------------------------------------------------------------------------->

<!--SESSION FOR PASSWORD & PASSWORD-->
<?php
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
$sql = "SELECT username FROM sign_up  WHERE username  = '{$username}'";

//----
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
$sql = "SELECT Password FROM sign_up  WHERE password  = '{$password}'";
$result = $conn->query($sql);
//Save username/password in cookies if remember me is selected
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600); //for hour
	setcookie ("password",$_POST["password"],time()+ 3600); //for hour

} else {
	setcookie("username","");
	setcookie("password","");

}
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

    echo '<meta http-equiv="refresh" content="1; URL=Home.php" />';


   }
 }
 else{
   echo "Your password is wrong Try again .";
 }

}
  else {
    echo " <br><br>You are not Sign Up please try again";
  }

}
if(isset($_POST['g'])){
  echo '<meta http-equiv="refresh" content="1; URL=HomeW.php" />'; //as a guest
}
 ?><!----------------------------------------------------------------------------->

</p>
<!-- remember me مهم-->
<p><input type="checkbox" name="remember" /> Remember me
	</p>


<button type="submit"class ="field"  name="submit" value="submit"> Log In </button>
<button type="submit"class ="field"  name="g" value="g"> Continue as a guest   </button>

</form>
</div>
</body>
</html>
 <!-----------------------------cookies ------------------------------>
 <?php /*
 session_start();

 if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $_SESSION["username"] = $username;
  $_SESSION["password"] = $password;

//Save username/password in cookies if remember me is selected
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["name"],time()+ 3600);
	setcookie ("password",$_POST["pwd"],time()+ 3600);

} else {
	setcookie("username","");
	setcookie("password","");

}
 }*/
?>
<!-----------------------------cookies ------------------------------>
