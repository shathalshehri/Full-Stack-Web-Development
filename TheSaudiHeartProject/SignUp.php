<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>

<style>
#Fr{
text-align: left;
font-family: Serif;
color: #66B2BB;
border-bottom: 2px solid #66B2BB;
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
  border: 1px solid #66B2BB;
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
  margin-left: 340px;
  float: center;
  width: 50%;
  height: 730px;
  border-radius: 5px;
  background-color: white;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
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

  }
}
button[type=submit] {

font-family: Cursive;
font-size: 16px;
margin-right: 125px;
padding: 10px 18px;
border: none;
border-radius: 4px;
cursor: pointer;
float: center;
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

  <!-- cookies -->

  <?php

  	setcookie("username","");


  if(!empty($_POST["remeber"])) {
  	setcookie ("username",$_POST["username"],time()+  (86400 * 30), "/"); // 86400 = 1 day
  	setcookie ("Email",$_POST["email"],time()+ (86400 * 30), "/"); // 86400 = 1 day

  }
  ?>

 <div id="F"> <h2> Sign Up</h2></div>
 <div class="container">
<form method="post" action="SignUp.php">
  <div class="row">
    <div class="col-25">
   <div id="Frs"> user Name:</div></div>
   <div class="col-75">
    <div id="Fr">   <input type="text" name="username" value="<?php if(isset($_COOKIE["Name"])) { echo $_COOKIE["Name"]; }?>"  placeholder="user Name" >

     </div> </div>
</div>
<?php
if(isset($_POST['submit'])){
if(empty($_POST['username'])){
   $color = '#ff0000';
  echo "<span style=\"color: $color;\">    *Please Enter your name ";
}
else{
  $usee = $_POST['username'];

$number    = preg_match('@[0-9]@', $usee);


if(!$number  || strlen($usee) < 8) {
$color = '#ff0000';
echo '<span style=\"color: $color;\">  Your User name Should have at least 8 character and one number ';
}
}
}

?>

<br><br>

<div class="row">
  <div class="col-25">
<div id="Frs"> first name:</div></div>
<div class="col-75">
<div id="Fr">  <input type="text" name="firstname" placeholder="first name" > </div> </div>
</div>
<?php
if(isset($_POST['submit'])){
if(empty($_POST['firstname'])){
   $color = '#ff0000';
  echo "<span style=\"color: $color;\">    *Please Enter your First name  ";
}}

?>

<br><br>

<div class="row">
  <div class="col-25">
<div id="Frs"> last Name: </div></div>
<div class="col-75">
<div id="Fr"> <input type="text" name="lastname" placeholder="lastname" ></div> </div>
</div>
<?php
if(isset($_POST['submit'])){
if(empty($_POST['lastname'])){
   $color = '#ff0000';
  echo "<span style=\"color: $color;\">    *Please Enter your Last name  ";
}}

?>
<br><br>
<div class="row">
  <div class="col-25">
<div id="Frs"> E-mail:  </div></div>
<div class="col-75">
<div id="Fr"><input type="text" name="email" value="<?php if(isset($_COOKIE["Email"])) { echo $_COOKIE["Email"]; }?>" placeholder=" enter your email "  > </div> </div>
</div>
<?php
if(isset($_POST['submit'])){
if(empty($_POST['email'])){
   $color = '#ff0000';
  echo "<span style=\"color: $color;\">    *Please Enter your email   ";
}
else{
  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo " ";
    }
    else {
        echo " Please Enter A valid Email .";
    }
}}

?>
<br><br>
<div class="row">
  <div class="col-25">
<div id="Frs"> Phone :  </div></div>
<div class="col-75">
<div id="Fr"> <input type="text" name="phone"placeholder=" enter your phone "  >
</div> </div>
</div>
  <?php
  if(isset($_POST['submit'])){

  if(empty($_POST['phone'])){
     $color = '#ff0000';
    echo "<span style=\"color: $color;\">    *Please Enter your phone   ";
  }
  else{
    $phoneee = $_POST['phone'];
$t =preg_match('/^[0-9]{10}+$/', $phoneee);

if( strlen($phoneee) < 10 || strlen($phoneee) > 10  || !$t) {
$color = '#ff0000';
echo '<span style=\"color: $color;\">  Enter correct Number  ';
}

  }
}

  ?>


<br><br>
<div class="row">
  <div class="col-25">
<div id="Frs"> password:  </div></div>
<div class="col-75">
<div id="Fr"> <input type="text" name="psw"placeholder=" Password " >
</div> </div>
</div>
<?php
if(isset($_POST['submit'])){

if(empty($_POST['psw'])){

   $color = '#ff0000';
  echo "<span style=\"color: $color;\">    *Please Enter your password ";
}
else{
    $Ppassword = $_POST['psw'];
    $uppercase = preg_match('@[A-Z]@', $Ppassword);
$number    = preg_match('@[0-9]@', $Ppassword);

if(!$uppercase || !$number || strlen($_POST['psw']) < 8) {
$color = '#ff0000';
echo '<span style=\"color: $color;\">  Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
}
else{
  echo "";
}
}
}

?>
<br><br>
<div class="row">
  <div class="col-25">
<div id="Frs"> confirm password:  </div></div>
<div class="col-75">
<div id="Fr"> <input type="text"  name="psw1"placeholder="Confirm password "   >
</div> </div>
</div>



<?php
if (isset($_POST['submit'])) {
$Pas = $_POST["psw"];
$Pas1 = $_POST["psw1"];

 if($Pas != $Pas1  ){


echo "<span style=\"color: $color;\">    * Your Password Doesn't Match please try again </span>";

 }
 else{
   $username = $_POST['username'];
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $psw = $_POST['psw'];
   if( !empty($username) && !empty($firstname) && !empty($lastname) &&!empty($email)&& !empty($phone) && !empty($psw)){

?>
<?php
$servername = "localhost";
$username1 = "your_username_here";
$password = "your_password_here";
//-----------------------------
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$psw = $_POST['psw'];

// Create connection
$conn = new mysqli($servername, $username1, $password , 'DB_NAME');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


/*
// Create database
$sql = "CREATE DATABASE DB_NAME";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
*/
//----------------------------------------------------------
// sql to create table
/*$sql = "CREATE TABLE sign_up (
username VARCHAR(30) NOT NULL PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
phone INT NOT NULL  ,
email VARCHAR(50) NOT NULL ,
password VARCHAR(50) NOT NULL
)";*/
//----------------------------------------------------------
/*$sql = "CREATE TABLE rentCar (
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
phone INT NOT NULL PRIMARY KEY  ,
TypeCar VARCHAR(50) NOT NULL ,
Familymember VARCHAR(50) NOT NULL ,
price INT NOT NULL
)";*/
//------------------------------------------------------------
/*$sql = "CREATE TABLE rentroom (
TypeRoom VARCHAR(50) NOT NULL ,
checkin VARCHAR(50) NOT NULL ,
checkout VARCHAR(50) NOT NULL ,
HotelName VARCHAR(50) NOT NULL ,
Familymember VARCHAR(50) NOT NULL ,
childmember VARCHAR(50)  ,
price INT NOT NULL
)";*/

//-------------------------------------------------------------
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$psw = $_POST['psw'];
$sql = "INSERT INTO sign_up(username,firstname, lastname, phone,email,password)
VALUES ('$username' , '$firstname' , '$lastname' , '$phone','$email ' , '$psw')";
$_SESSION["firstname"] = $firstname;
$_SESSION["lastname"] = $lastname;
$_SESSION["phone"] = $phone;
$_SESSION["email"] = $email;

if ($conn->query($sql) === TRUE) {
  echo " You are Sign Up successfully <br> Now you can"; ?>
  <a href="SignIn.php">Sign in </a>
<?php
} else {
  echo "Error   " . $conn->error;
}
$conn->close();




 }
}
 }

?>

		<br><br>
  <button type="submit" name="submit" value="submit"> Sign Up </button>
</form>
<button type="submit"class="button"> <a href="HomeW.php" fromtarget="_blank"> Continue as a guest !   </button></a><br>


</div>


</body>
</html>
