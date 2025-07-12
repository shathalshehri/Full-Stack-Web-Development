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
  height: 109px;
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
  <form method="post" action="delete.php">
  <div id="F">  Are u sure to want delete your information ?</div>
    <br>
    <button type="submit" name="submit" value="confirm">Confirm </button>
    <?php
if (isset($_POST['submit'])){

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

    $sql = "DELETE  FROM sign_up WHERE username = '{$_SESSION['username']}' ";
    if ($conn->query($sql) === TRUE) {
  echo '<meta http-equiv="refresh" content="1; URL=HomeW.php" />';
  echo "Delete Sucssecfuly";
    } else {
    echo "does not delete ";
    }

}
}
  ?>
  <button type="submit" class="button"  name="cancel" value="cancel"> Cancel </button>
  <?php
if (isset($_POST['cancel'])){
  echo '<meta http-equiv="refresh" content="1; URL=editpage.php" />';
}
     ?>
  </form>
</div>
</body>
</html>
