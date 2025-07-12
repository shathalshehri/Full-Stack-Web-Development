<?php
session_start();
 if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['logout']))
{
unset($_SESSION['username']);
	
$_SESSION['state'] =2;
setcookie('user',$_POST['userlogin'], time() - (86400 * 30), "/");

	header("Location:register.php");
}
if(isset($_COOKIE['user']) )
 {
	$_SESSION['username']= $_COOKIE['user'];
	$_SESSION['state'] =1;
 }
ob_start();
 require_once('admin/dbs/db.php');
 
?>


<!DOCTYPE html>
<html lan="ar">
<style>



.header h1 {
  font-size: 40px;
}

.navbar {
  overflow: hidden;
background-color: #450c18  ;
}

.navbar a {
	font-family: monotype corsiva;
  float: left;
  display: block;
  color: white;
	font-size: large;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}
.navbar a.right:hover {
background-color: #bbb4b7a1;
}


.navbar a:hover {
  color: #bbb4b7a1 ;
}

.id1{
	 font-family: monotype corsiva;
	 text-align:left;
}

</style>

<head>
  <title>THE_QUEEN</title>
   <link rel = "icon" href ="admin/upload/rar.png" type = "image/x-icon">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap-rtl.min.css"/>
  <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>

<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
<link href="css/styles.css" rel='stylesheet' />
<link href="js/bootstrap.min.js" rel='stylesheet'>
<link href="js/jquery.min.js" rel='stylesheet'>
<link href="css/form.css" rel='stylesheet' />

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<!-- </div> -->
<nav style=' background-color:#450c18;' class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <div class="container-fluid text-center">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
	
	<a href="favorite.php" id="first" class="right"><img src="admin/upload/1haert.png"  alt="favorite" style="width:20px;height:20px;"></a>
    <a href="register.php " id="second" class="right"><img src="admin/upload/person.png"  alt="sing in" style="width:20px;height:20px;"></a>
    <a href="Home.php" id="first" class="right"><img src="admin/upload/home.png"  alt="home" style="width:20px;height:20px;"></a>

   
    </div>
    <div>
	  
      <div>
	
        <ul class="nav navbar-nav navbar-left" >
		<li>
	 <?php
		
		if(isset($_SESSION['username']))
		{
			$name=$_SESSION['username'];
   $sql="SELECT state,usertype  FROM users WHERE name='$name';";
   $q=$con->prepare($sql);
   $q->execute();
   $row=$q->fetchall();
   
   
   foreach( $row as $value)
   {
	   $stat=$value['state'];
	   $utype=$value['usertype'];
	   
   }
  
			if( $stat==1 and $utype==0 )
			{
				 
	echo'<li><a style="color:blue;" href="addnews.php">Add Product</a></li> ';
	
	echo '<li><a style="color:blue;" href="#">Member</a></li>';
	$sql="SELECT id,image FROM users WHERE name='$name'";
   $q=$con->prepare($sql);
   $q->execute();
   $row=$q->fetchall();
  // $name1=$value['name'] ;
 foreach( $row as $value){
	 $id=$value['id'];
	   echo '<img src=admin/upload/'.$value["image"].' height="40px" width="40px" alt="">';
			}
      echo"<i><a href='update.php?action=edit&id=$id'"."<i class='fa fa-edit'>edit</i></a>";	
			}
else if($stat==1 and $utype==1)
			{
				echo '<li><a style="color:blue;" href="admin/panel.php">Admin</a></li>';
				$sql="SELECT id,image FROM users WHERE name='$name'";
      $q=$con->prepare($sql);
      $q->execute();
      $row=$q->fetchall();
 foreach( $row as $value){
	  $id=$value['id'];
	   echo '<img src=admin/upload/'.$value["image"].' height="40px" width="40px" alt="">';
			}
       echo"<i><a style='color:blue;' href='update.php?action=edit&id=$id'"."<i class='fa fa-edit'>edit</i></a>";
			}
else 
			{
				
		echo '<li><a style="color:blue;" href="#">User</a></li>';
		$sql="SELECT id,image FROM users WHERE name='$name'";
        $q=$con->prepare($sql);
        $q->execute();
        $row=$q->fetchall();
 foreach( $row as $value){
	   $id=$value['id'];
	   echo '<img src=admin/upload/'.$value["image"].' height="40px" width="40px" alt="">';
			}
      echo"<li><a style='color:blue;' href='update.php?action=edit&id=$id'".">edit</a></li>";
			}
		}
else  
		{
       // echo '<li><img style="float:right;" src=images/39b5ab190962df13a7cf69e2c354dcd7.png' .'  height="30%" width="25%" alt=""></li>';
		//echo'<li><a style="color:blue;" href="#">Visitor</a></li>';
		}
              ?>
		</li>
        <!--   <li ><a  style='color:white;' href="favorite.php">Favorite</a>  -->
		    <ul class="dropdown-menu">
            </ul>
          </li>
	
	  <li><a  href="dresses.php">Dresses</a></li>
	  <li><a href="jewellary.php">Jewellery</a></li>
	  <li><a href="skincare.php">Skin care</a></li>
	  <li><a href="makeup.php">Makeup</a></li>
	  <li><a href="indexs.php">Hairstyle</a></li>
	
		<li>
	 <?php
		if(isset($_SESSION['username']))
		{
			
	echo' <form class="navbar-form" action="" method="post">
	<button style="color:red; background-color:gray;" type="submit" class="btn btn-default" name="logout">Logout</button>
	
				  </form>';
		}
		?>
	</li>	 
            </ul>
		

		
		
      </div>
	
    </div>
  </div>
</nav>    


</body>


</html>
