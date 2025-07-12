<html>

<head>
<title> login page and registration  </title>
   

</head>
<style>
**{
    margin: 0;
    padding: 0;
}

.e{
    height: 100%;
    width:100%;
    background-image: linear-gradient(rgna(0,0,0,0.4),rgba(0,0,0,0.4)),url();
    background-position:center;
    background-size: cover;
    position: absolute;
}
.from-box{

width:380px;
height:480px;
position:relative;
margin:6% auto;
background: rgb(200, 218, 215);
padding:5px;
overflow:hidden;


}
.bouttin-box{
    width:220px;
    margin:50px auto;
    position: relative;
box-shadow: 0 0 20px 30px #c1a3ca1f;
border-radius:30px ;
}
.toggle-btn{

padding:10px 10px;
cursor: pointer;
background: transparent;
border:0;
outline: none;
position: relative;
}
#btn{
    top:0;
    left:0;
    position: absolute;
    width: 110px;
    height: 100%;
    background: linear-gradient(to right,#82bd8e,#46ca8c);
    border-radius: 30px;
    transition: .5s;
}
.input-group{
top:180px;
position: absolute;
width: 280;
transition: .5s;
}
.input-field{

width: 100%;
padding: 10px 0;
margin: 5px;
border-left: 0;
border-top: 0;
border-right: 0;
border-bottom: 1px solid rgb(147, 181, 182);
outline: none;
background: transparent;
}
.submit-btn{

width: 85%;
padding: 10px 30px;
cursor: pointer;
display: block;
margin:auto;
background: linear-gradient(to right,#82bd8e,#46ca8c);
border:0;
outline: none;
border-radius:30px ;
}
.chech-box{
   margin: 30px 10px 30px 0;

}
.span{
color:#6a746ed5;
font-size:12px;
bottom:68px;
position: absolute;

}
#login{
  left: 50px; 
}
#Register{
  left:450px;  
}
</style>
<body>
   

<div class="e">
  <div class="from-box">
    <div class="bouttin-box">
        <div id="btn"></div>
<button type="button"class="toggle-btn"onclick="Login()"> Log In</button>
<button type="button"class="toggle-btn"onclick="Register()"> Register</button>
    </div>

    <form action="Home.php" method="post" id ="Login" class="input-group" >
        <input type="text" class="input-field" name="name" placeholder="user Name" required>
        <input type="text" class="input-field" placeholder="Enter password" required>
        <input type="checkbox" class="chech-box" ><span >Remember Password</span>
        <button type="submit" class="submit-btn">Log In</button>
  
    </form>


<?php
// define variables and set to empty values
$name = $email =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  $psw = test_input($_POST["psw"]);
  $psw1 = test_input($_POST["psw1"]);
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> 
    <form action='' id ="Register"class="input-group" >
      <input type="text"  class="input-field" placeholder="Name" required>
      <input type="email"   class="input-field" placeholder="Email" required>
         <input type="password" class="input-field" placeholder="Confirm password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> 
      <input type="password" class="input-field"name="psw1" placeholder="Confirm password" required>
		<?php
  if (isset ($_POST['submit'])) { 
	if($psw != $psw1){
		print"namee";
	}

}
	
?>

      <input type="submit" name="submit" />

 
  <?php 
		if (isset ($_POST['submit'])) {  // Check Submit
print "<p>Your total Cost will be   $<b></b></p>";
		}
		else{
			
			Print"ddd";
		}
		
		
		?>
		
	
</div>

  </div>

  <script>
    var x= document.getElementById("Login");
    var y= document.getElementById("Register");
    var z= document.getElementById("btn");

function Register(){
       x.style.left="-400px";
       y.style.left="50px";
       z.style.left="110px";
     }


     function Login(){
       x.style.left="50px";
       y.style.left="450px";
       z.style.left="0px";
     }
	
			

    </script>

</div>

</body>

</html>