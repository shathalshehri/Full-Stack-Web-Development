<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>

<style>
#Fr{
text-align: left;
font-family: Serif;
color: #AF916D;
border-bottom: 2px solid #AF916D;
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
  border: 1px solid #ccc;
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
  margin-left: 310px;
  float: center;
  width: 50%;
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
#Fr{

  text-align: left;
  font-family: Cursive;
  color: #a2c4f2;
  border-bottom: 1px solid #a2c4f2;
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
float:left;
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
  <?php
include("TryNavigation.php"); ?>
<br>
<br>
<br>
<div id="F"><h2>  Your information </h2>

  </div>
<br>
<br>
<br>
<br>
<div class="container">
  <br>
  <form method="post" action="editpage.php">
  <div class="row">
    <div class="col-25">

      <div id="Fr">
	<div id="Fr">  <label  name="name" for="fname">user Name</label></div>
	  </div>

    </div>
    <div class="col-75">


      <input type="text"  name="username" placeholder="<?php echo $_SESSION['username']; ?>">

    </div>
  </div>


  <!------------------------------------------------------------->
  <div class="row">
    <div class="col-25">
    <div id="Fr">  <div id="Fr">  <label for="lname">first Name</label></div></div>
    </div>
    <div class="col-75">
      <input type="text"  name="firstname" placeholder="<?php echo $_SESSION['firstname']; ?>">

    </div>
  </div>
  <!------------------------------------------------------------->
  <div class="row">
    <div class="col-25">
  <div id="Fr">    <div id="Fr">  <label for="lname">Last Name</label></div></div>
    </div>
    <div class="col-75">
      <input type="text" name="lastname" placeholder="<?php echo $_SESSION['lastname']; ?>">

    </div>
  </div>
  <div class="row">
    <div class="col-25">
  <div id="Fr">    <div id="Fr">  <label for="Phone"> Phone</label></div></div>
    </div>
    <div class="col-75">
      <input type="text"  name="phone" placeholder="<?php echo $_SESSION['phone']; ?>">

    </div>
  </div>
  <div class="row">
    <div class="col-25">
  <div id="Fr">    <div id="Fr">  <label for="email">email</label></div></div>
    </div>
    <div class="col-75">
      <input type="text" name="email" placeholder="<?php echo $_SESSION['email']; ?>">

    </div>
  </div>


  <!------------------------------------------------------------->

  <div class="row">
    <br>
    <button type="submit" name="submit" value="submit"> Submit  </button>

      <button type="submit" name="delete" value="delete"> Delete </button>
  </div>


  </form>
</div>
<?php
if (isset($_POST['submit'])) {

  $servername = "localhost";
  $username = "your_username_here";
  $password = "your_password_here";

  // Create connection
  $conn = new mysqli($servername, $username, $password , 'DB_NAME');

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
  //$sql = "UPDATE Employee_Table SET commission_pct='0.10'";
$eusername = $_POST['username'];
  $efirstname = $_POST['firstname'];
  $elastname = $_POST['lastname'];
  $eemail = $_POST['email'];
  $ephone = $_POST['phone'];


if(!empty($eusername)){

  $sql = "UPDATE sign_up SET username =  '{$eusername}' WHERE username = '{$_SESSION['username']}'";
  $_SESSION['username'] = $eusername;
  if ($conn->query($sql) === TRUE) {
    echo " Your New User name is :$eusername ";
    $_SESSION['uusername'] = $eusername;
  } else {
    echo " " ;
  }


}
?>
<br>
<?php

 //---------------
 if(!empty($efirstname)){

   $sql = "UPDATE sign_up SET firstname =  '{$efirstname}' WHERE firstname = '{$_SESSION['firstname']}'";
   $_SESSION['firstname'] = $efirstname;
   if ($conn->query($sql) === TRUE) {
     echo "Your New First name is :$efirstname";
   } else {
     echo " " ;
   }


 }
 ?>
 <br>
 <?php
 if(!empty($elastname)){

   $sql = "UPDATE sign_up SET lastname =  '{$elastname}' WHERE lastname = '{$_SESSION['lastname']}'";
   $_SESSION['lastname'] = $elastname;
   if ($conn->query($sql) === TRUE) {
     echo "Your New Last name is :$elastname";
   } else {
     echo " " ;
   }
 }
 ?>
 <br>
 <?php
 if(!empty($ephone)){

   $sql = "UPDATE sign_up SET phone =  '{$ephone}' WHERE phone = '{$_SESSION['phone']}'";
   $_SESSION['phone'] = $ephone;
   if ($conn->query($sql) === TRUE) {
     echo "Your New Phone  is :$ephone";
   } else {
     echo "";
   }
 }
 ?>
 <br>
 <?php
 if(!empty($eemail)){

   $sql = "UPDATE sign_up SET email =  '{$eemail}' WHERE email = '{$_SESSION['email']}'";

   if ($conn->query($sql) === TRUE) {
     echo "Your New Email  is :$eemail";
     echo $_SESSION['email'];
     echo "string";
     $_SESSION['email'] = $eemail;


   } else {
     echo " ";
   }
 }
}
}
if (isset($_POST['delete'])) {
  echo '<meta http-equiv="refresh" content="1; URL=delete.php" />';
}







  //--------------------

//-----------------------


//--------------------
/*$_SESSION["eusername"] = $eusername;
$_SESSION["efirstname"] = $efirstname;
$_SESSION["elastname"] = $elastname;
$_SESSION["ephone"] = $ephone;
$_SESSION["eemail"] = $eemail;*/



  ?>
</body>
</html>
