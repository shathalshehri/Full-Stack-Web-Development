<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
<style>
body{  background-color: #a89181;

background-image: url('https://www.ngmisr.com/wp-content/uploads/2019/09/%D8%B1%D8%B3%D9%88%D9%85-%D8%A7%D9%84%D8%AA%D8%A3%D8%B4%D9%8A%D8%B1%D8%A9-%D8%A7%D9%84%D8%B3%D9%8A%D8%A7%D8%AD%D9%8A%D8%A9-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9.jpg');
background-size:100%;
width: auto;

background-repeat: no-repeat;
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
  color: #a89181;
  border-bottom: 2px solid #a89181;
}


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 4s00px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
  <?php
include("TryNavigation.php"); ?>
<br>
<br>
<br>
<div id="F"><h2> Car rental form</h2>
<p>Please fill in all the information correctly</p>
  </div>
<br>
<br>
<br>
<br>
<div class="container">
  <br>
  <form method="post" action="car.php">



  <!------------------------------------------------------------->

  <!------------------------------------------------------------->
  <div class="row">
    <div class="col-25">
      <div id="Fr">  <label for="country">Type of the car</label> </div>
    </div>
	<!------------------------------------------------------------->
    <div class="col-75">
      <select id="Car" name="Car">
	  <option value=""> </option>
	  <option value="BMW">BMW</option>
	  <option value="Bentle">Bentle</option>
	  <option value="Mazda">Mazda</option>
        <option value="altema">altema</option>
        <option value="Camrey">Camrey</option>
        <option value="Doug">Doug</option>
        <option value="Ford">Ford</option>
            <option value="Nissan">Nissan</option>
            <option value="Chevrolet">Chevrolet</option>
            <option value="Shanjan">Shanjan</option>
      </select>
	  <?php
 if (isset($_POST['submit'])) {
$Car = $_POST["Car"];
 if(empty($Car)){
 $color = '#ff0000';

echo "<span style=\"color: $color;\"> * Please choose your Car Type  . </span>";
 }

 }
?>
    </div>
  </div>
  <!------------------------------------------------------------->
  <div class="row">
    <div class="col-25">
      <div id="Fr">  <label for="country">How many passengers </label> </div>
    </div>
    <div class="col-75">
      <select id="Family" name="Family">
		<option value=""> </option>
        <option value=" 4 or less">less than 4</option>
        <option value="More Than 4">more than 4</option>
        <option value="More than 8">8 or more</option>
      </select>
	  	  <?php
 if (isset($_POST['submit'])) {
$Family = $_POST["Family"];
 if(empty($Family)){
 $color = '#ff0000';

echo "<span style=\"color: $color;\"> * Please choose At least one . </span>";
 }

 }
?>
    </div>
  </div>
  <!------------------------------------------------------------->
  <div class="row">
    <div class="col-25">
      <div id="Fr">  <label for="subject">night : </label>   </div>
    </div>
    <div class="col-75">
      <textarea type="text"  id="Fr" name="cnight" placeholder="Enter Number of night you want " style="height:50px"></textarea></div>
  </div>
  <?php
   if (isset($_POST['submit'])) {
  $cnight = $_POST["cnight"];
   if(empty($cnight)){
   $color = '#ff0000';

  echo "<span style=\"color: $color;\"> * Please Enter the number of the night  . </span>";
   }
   else{
     $_SESSION['cnighto'] = $cnight ;
   }

   }
  ?>
  <!------------------------------------------------------------->
  <div class="row">
    <div class="col-25">
      <div id="Fr">  <label for="subject">National ID  </label> </div>
    </div>
    <div class="col-75">
      <textarea id="subject" name="ID" placeholder="Enter your national ID.." style="height:50px"></textarea>
	 <?php
	 if (isset($_POST['submit'])) {
$ID = $_POST["ID"];
 if(empty($ID)){
 $color = '#ff0000';

echo "<span style=\"color: $color;\"> * Please Enter your National ID  . </span>";
 }

 }
?>
    </div>
  </div>
  <!------------------------------------------------------------->
  <div class="row">
    <input type="submit" name="submit" value="submit">
  </div>

  </form>
  </div>
  <?php
 if(isset($_POST['submit'])) {
$Car = $_POST["Car"];
$Family = $_POST["Family"];
$ID = $_POST["ID"];
 if( !empty($Car) &&!empty($Family)&&!empty($ID) ){

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
     if(($_POST['Car'])=="Bentle" ){
       $Bentle = 2950;

       $cprice = $Bentle *( $_SESSION['cnighto']);
       $_SESSION['cprice'] = $cprice;
     }
     if(($_POST['Car'])=="BMW" ){
       $BMW = 2570;
       $cprice = $BMW *($_SESSION['cnighto']);
       $_SESSION['cprice'] = $cprice;
     }

     /*$sql = "CREATE TABLE rentcar (
     Car VARCHAR(30) NOT NULL,
     Family VARCHAR(30) NOT NULL,
     ID INT NOT NULL   ,
     cnight VARCHAR(50) NOT NULL ,
     cprice INT NOT NULL
     )";*/
     $Car = $_POST['Car'];
     $Family = $_POST['Family'];
     $ID = $_POST['ID'];
     $cnight = $_POST['cnight'];
     $cprice = $cprice;
     $sql = "INSERT INTO rentCar(Car, Family,ID,cnight ,cprice)
     VALUES ('$Car' , '$Family ' , '$ID','$cnight','$cprice' )";
      $_SESSION['Car'] = $Car;
      $_SESSION['cnight'] = $cnight;
     if ($conn->query($sql) === TRUE) {

     echo '<meta http-equiv="refresh" content="1; URL=cpay.php" />'; // set another page ?
     } else {
     echo "Error   " . $conn->error;
     }
     }
   }

 }

?>


</body>
</html>
