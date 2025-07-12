<?php
session_start();


?>
<html>
<style>
#F{

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
  height: 130px;
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
  <form action="Home.php" method="post">
<div id="info">
  <?php /*         $_SESSION['typeroom'] = $typeroom;
          $_SESSION['HotelName'] = $HotelName;
          $_SESSION['price'] = $price;
          $_SESSION['night'] = $night;  */?>
<div id="F">  Congratulations, dear <?php  echo $_SESSION['firstname']; ?> <br> you've been confirmed to have booked your <?php  echo $_SESSION['Car']; ?> </n>  Car.
</div>
<br>
<button type="submit" name="submit" value="submit" <a href="Home.php" formtarget="_blank" > Back to Home   </button></a>
</form>

</div>


</body>
</html>
