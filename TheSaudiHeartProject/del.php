<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
<style>
body{ background-color: #AF916D;
background-image: url('https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aG90ZWwlMjByb29tfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60');
height: 800px;
width: auto;
background-repeat: repeat;
}
*{
box-sizing: border-box;
}
input[type=text], select, textarea {
width: 100%;
padding: 10px;
border: 2px solid #AF916D;
border-radius: 4px;
resize: vertical;
}
label{
padding: 12px 12px 12px 0;
display: inline-block;
}
button[type=submit] {
text-decoration: none;
font-family: Serif;
font-size: 20px;
padding: 10px 10px;
border: solid;
border-radius: 4px;
cursor: pointer;
float: right;
background-color: white;
color: #AF916D;
border-bottom: 2px solid #AF916D;
}
button[type=submit]:hover{
text-decoration: none;
background-color: #AF916D;
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
font-family: Serif;
color: white;
border-bottom: 2px solid white;
}
#Fr{
text-align: left;
font-family: Serif;
color: #AF916D;
border-bottom: 2px solid #AF916D;
}
/*Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 4s00px) {
.col-25, .col-75, input[type=submit] {
width: 100%;
margin-top: 0;
}
}
</style>
<title> Rent Room </title>
</head>
<body>
  <?php
include("TryNavigation.php"); ?>
<br>
<br>
<br>
<div id="F"><h2> Room Reservation form </h2>
<p>Please fill in all the information correctly</p>
</div>
<br>
<br>
<br>
<br>
<div class="container">
<br>
<form action="del.php" method="post">
<!------------------------------------------------->
<div class="row">
<div class="col-25">
<div id="Fr"><label for="Rtype">Room Type:</label></div>
</div>
<div class="col-75">
<select id="Fr" name="typeroom">
<option value="">None</option>
<option value="Superior">Superior</option>
<option value="Deluxe">Deluxe</option>
<option value="Family">Family</option>
<option value="Suite">Suite</option>
</select>
</div>
</div>
<!------------------------------------------------->
<?php
 if (isset($_POST['submit'])) {
$typeroom = $_POST["typeroom"];
 if(empty($typeroom)){
 $color = '#ff0000';

echo "<span style=\"color: $color;\"> * Please choose your Room Type . </span>";
 }

 }
?>

<!------------------------------------------------->
<div class="row">
  <div class="col-25">
    <div id="Fr">  <label for="subject">night : </label>   </div>
  </div>
  <div class="col-75">
    <input type="text"  id="Fr" name="night" placeholder="Enter Number of night you want " style="height:50px"></textarea></div>
</div>
<?php
 if (isset($_POST['submit'])) {
$night = $_POST["night"];
 if(empty($night)){
 $color = '#ff0000';

echo "<span style=\"color: $color;\"> * Please Enter the number of the night  . </span>";
 }

 }
?>
<!------------------------------------------------->
<div class="row">
<div class="col-25">
<div id="Fr"><label for="Hotele"> Name of Hotel </label> </div>
</div>
<div class="col-75">
<select id="Fr" name="HotelName">
<option value=""></option>
<option value="Sheraton Makkah">Sheraton Makkah </option>
<option value="shaza Makkah">shaza Makkah</option>
<option value="Makkah Hilton">Makkah Hilton</option>
<option value="Braira Hotel">Braira Hotel</option>
<option value="Al Khozama"> Al Khozama</option>
<option value="DoubleTree by Hilton">DoubleTree by Hilton </option>
<option value="The Galleria Hotel by Elaf">The Galleria Hotel by Elaf</option>
<option value="The Radisson Blu Hotel">The Radisson Blu Hotel</option>
<option value="The Venue Jeddah Corniche">The Venue Jeddah Corniche</option>


</select>
</div>
</div>
<!------------------------------------------------->
<?php
 if (isset($_POST['submit'])) {
$HotelName = $_POST["HotelName"];
 if(empty($HotelName)){


	 	    $color = '#ff0000';

echo "<span style=\"color: $color;\"> * Please Select your hotel . </span>";
 }

 }
?>
<!------------------------------------------------->
<div class="row">
<div class="col-25">
<div id="Fr"><label for="adults">How many adults? </label> </div>
</div>
<div class="col-75">
<select id="Fr" name="Familymember">
<option value="">None</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="More"> More Than 6</option>
</select>
</div>
</div>
<!------------------------------------------------->
<?php
 if (isset($_POST['submit'])) {
$Familymember = $_POST["Familymember"];
 if(empty($Familymember)){


	 	    $color = '#ff0000';

echo "<span style=\"color: $color;\"> * Please choose At least one Adults . </span>";
 }
 else
 {


 }

 }
?>
<!------------------------------------------------->
<div class="row">
<div class="col-25">
<div id="Fr"><label for="child">How many Children? </label> </div>
</div>
<div class="col-75">
<select id="Fr" name="childmember">
<option value="0">None</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
</div>
</div>
<!------------------------------------------------->
<div class="row">
<div class="col-25">
<div id="Fr"><label for="requests">Any special requests?</label></div>
</div>
<div class="col-75">
<textarea id="Fr" name="requests" placeholder="Enter your requests" style="height:50px"></textarea>
</div>
</div>

<div class="row">
 <input type="submit" name="submit" value="submit">  </submit>
</div>
<?php
 if (isset($_POST['submit'])) {
   $typeroom = $_POST['typeroom'];
   $HotelName = $_POST['HotelName'];
   $Familymember = $_POST['Familymember'];
   $childmember = $_POST['childmember'];
  setcookie("roomdata", $typeroom." ".$HotelName." ", time() + (86400 * 30), "/"); // 86400 = 1 day
  echo "Cookie variables are set.";
   $night = $_POST['night'];

   $_SESSION['typeroom'] = $typeroom;
   $_SESSION['HotelName'] = $HotelName;

   $_SESSION['night'] = $night;

 if(!empty($typeroom)  &&!empty($HotelName) &&!empty($Familymember) ){
	  // echo '<meta http-equiv="refresh" content="1; URL=Home.php" />'; // set another page ?
    $servername = "localhost";
    $username1 = "your_username_here";
    $password = "your_password_here";
    //-----------------------------


    // Create connection
    $conn = new mysqli($servername, $username1, $password , 'DB_NAME');

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    else{

    /*  <option value="Superior">Superior</option>
      <option value="Deluxe">Deluxe</option>
      <option value="Family">Family</option>
      <option value="Suite">Suite</option>*/
      if(($_POST['typeroom'])=="Superior" ){
        $Superior = 1670;
        $price = $Superior *($_POST['night']);
        $_SESSION['price'] = $price;
      }
      if(($_POST['typeroom'])=="Deluxe" ){
        $Deluxe = 1360;
        $price = $Deluxe *($_POST['night']);
        $_SESSION['price'] = $price;
      }
      if(($_POST['typeroom'])=="Family" ){
        $Family = 830;
        $price = $Family *($_POST['night']);
        $_SESSION['price'] = $price;
      }
      if(($_POST['typeroom'])=="Suite" ){
        $Suite = 640;
        $price = $Suite *($_POST['night']);
        $_SESSION['price'] = $price;
      }

      $sql = "INSERT INTO rentroom(typeroom, HotelName,Familymember,childmember ,price)
      VALUES ('$typeroom' , '$HotelName ' , '$Familymember','$childmember','$price' )";

      if ($conn->query($sql) === TRUE) {

	   echo '<meta http-equiv="refresh" content="1; URL=pay.php" />'; // set another page ?
      } else {
        echo "Error   " . $conn->error;
      }

    }

 }

 }
?>
</form>
</div>
<!------------------------------------------------->
</body>
</html>
