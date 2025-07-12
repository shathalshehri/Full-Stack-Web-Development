<?php
ob_start(); require_once('admin/dbs/db.php');
include("nav.php");
include("image.php");

?>

<h2 style="text-align:center;border-radius:10px;width:30%; background:pink;color:white;margin-right:35%;">Add Product</h2>

<?php


 	if($_SERVER['REQUEST_METHOD']=="POST")
			{
			
				if(empty($_POST["header"]))
				{
					$error["fname"]="<span class='error'><p>Must be in writing Title</p></span>";
				
				if(empty($_POST["fnews"]))
				{$error["passw"]="<span class= 'error'><p>You fill in the content</p></span>";}
			
		
			
			
		
		
		if(empty($_POST["group"]))
		{$error["email1"]="<span class='error'><p>Group from 1 to 5</p></span>";}
	//echo "query not done";
	
				}
				
				else
					 
				{
					
					$one=$_POST['header'];
					$two=$_POST['fnews'];
					$three=($_FILES['img']['name']);
					$four=$_POST['group'];
					$ss=9;
					
					$sql="insert into products(header,note,image,s_group) values('$one','$two','$three','$four');";
					
					//echo "query done";
					 $q=$con->prepare($sql);
           $q->execute();
    if(!$q){
	echo"<script>alert('Not be the Addition')</script>";
	header("REFRESH:0;URL=indexs.php")	;
	}
	else
		
	
	echo"<script>alert('Uploaded Successfully will review Before Posting')</script>"; 
	header("REFRESH:0;URL=indexs.php")	;
	
					
                    


				}
			} 
			
		
?>










<!DOCTYPE html>
<html>
    <head>
	  <link rel="stylesheet" href="css/bootstrap-rtl.min.css"/>
	<style>
	table{margin-right:30%;}
	form{margin-right:20%;
	}
	#add{margin:10px;}
	span.error p{color:red;	}
	.in,textarea{
	text-align:center;
	border: none;
	border-radius: 10px;
	width: 100%;
	margin-bottom:7px;
	margin-left:50%;
	height: 1px;
	padding: 20px;
	 background-color:#304050;
color: white;
}
h5{
			font-size:20px;
			background:pink;
		}
label{
	color:blue;
	text-align:left;
}
	</style>
	</head>
	<body>
	<table>
	<tr>
	<th>
	<form action="<?php  $_SERVER['PHP_SELF'] ; ?>" method='post' enctype="multipart/form-data">
	  <div> <label for="name">:Title
	<input class='in' type='text' name='header' id='name' >
							<?php 
						if(isset($error["fname"]))
		echo($error["fname"])
	
	?></label>
	</div>
	<div> <label for="news">:Details
	<textarea type='text' name='fnews' id='news' ></textarea>
							<?php 
						if(isset($error["passw"]))
		echo($error["passw"])
	
	?></label>
	</div>
	<div> <label for="photo">:product Image
	<input class='in' type='file' name='img' id='email'>
							<?php 
						if(isset($error["pas"]))
		echo($error["pas"])
	
	?></label>
	</div>
	  <div> <label for="group">:Group Number
	   <h5>1HairStyle 2:MakeUp 3:SkinCare 4:Jewellary 5:Dresses</h5>
	  </label>
	<input class='in' type='text' name='group' id='group' value='4' >
	
							<?php 
						if(isset($error["email1"]))
		echo($error["email1"])
	
	?>
	</div>
	<input style="text-align:center;border-radius:10px;width:90%;height:35px;background:blue;color:white;" type='submit' name='send' id='add' value='Send' >
	<th>
	<tr>
	</form>
	
	</table>
	<?php
	include("footer.php");
	?>
	</body>
	</html>