<?php
	
if ($_SERVER['REQUEST_METHOD']=="POST" ) {


	$filename=$_FILES['img']['name'];
	$filetype=$_FILES['img']['type'];
	$filesize=$_FILES['img']['size'];
	$filetmpname=$_FILES['img']['tmp_name'];
	$fileerror=$_FILES['img']['error'];

	
	$mytypes=array('jpg','png','jpeg','gif','mp4');
$mysize=20000000;//2M
$mydes="admin/upload/";
	$fileExt=explode(".", $filename);
	$typet=end($fileExt);

	if (in_array(strtolower($typet),$mytypes)) {
echo "type done <br>";
if($mysize>=$filesize)
{
	
	$mydes=$mydes.basename($filename);
echo "size done <br>";
	move_uploaded_file($filetmpname,$mydes);
	
	echo "Done";
}
else
{
	echo "<br>";
	echo "error size";
}


	}
	else
	{
		echo "error you can't add";
	}

}
else{
	echo "unnkown error";
	
}

?>