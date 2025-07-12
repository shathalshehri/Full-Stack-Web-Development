<?php
session_start();


?>
<html>
<style>
#F{

  text-align: left;
  font-family: Cursive;
  color:#66B2BB;

}
#F2{

  text-align: center;
  font-family: Cursive;
  color:#66B2BB;

}

button[type=submit] {

font-family: Cursive;
font-size: 16px;
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
body { /* First bakground*/
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  	background-image:url('https://i0.wp.com/www.agoda.com/wp-content/uploads/2019/05/Jeddah-landmarks-Corniche-Jeddah.jpg');
  background-size:100%;
	background-color: #fff9c4;

}
#info{ /*البداية اول ما اخش */

text-align: center;
  float:left;
  height: 430px;
  width: 300px;
  border:1px #ccc solid;
  border-radius: 10px;
  background:#f4f4f4;
  padding:10px;
  margin-top:150px;
margin-left:500px;
margin-right:600px;
}
</style>
<body>
<div id="info">
  <form method="post" action="cpay.php">
  <div id="F">   Your booking information</div>
  <div id="F"> <br> Your name : <?php echo $_SESSION['firstname'] . $_SESSION['lastname']; ?></div>
  <div id="F">  <br> Your Number : <?php echo $_SESSION['phone']; ?></div>
  <div id="F">  <br> Booking date: <?php echo  date("d/m/y")  ?></div>
  <div id="F">  <br> The Type of your Car : <?php echo $_SESSION['Car'] ;?></div>
  <div id="F">  <br> The days you wanted : <?php echo $_SESSION['cnight']; ?></div>
  <div id="F">  <br> Your Price  : <?php echo $_SESSION['cprice']; ?></div>
  <br><br><br>
<button type="submit" name="submit" value="submit"> Go to Pay Now !  </submit>
<button type="submit" name="Cancel" value="Cancel"> Cancel  </submit>
  <?php
 if(isset($_POST['submit'])){
   echo '<meta http-equiv="refresh" content="1; URL=cpayp.php" />';
 }
 if(isset($_POST['Cancel'])){
   echo '<meta http-equiv="refresh" content="1; URL=car.php" />';
 }
 ?>
</div>

    <br>
  </form>
</body>
</html>
