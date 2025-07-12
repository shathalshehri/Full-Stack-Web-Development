<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Welcome</title>
  </head>

  <body>
<?php
 ini_set ('display_errors', 1);
    error_reporting (E_ALL & ~E_NOTICE);

    
    
	  print"1";
if ($fp = fopen ('WR.txt','w')){
	
$data = $_POST['name'];
Fwrite($fp , $data);
/*echo fread($fp,filesize("WR.txt"));*/
$r = file_get_contents('WR.txt');
print " Welcome $r You are sign up succesfully \n ";
?>
<br><br>
<?php
/*--------------------*/
$data = $_POST['email'];
Fwrite($fp , $data);

$r = file_get_contents('WR.txt');
print "  Yor email is $r \n  ";
fclose ($fp);



}
else{
print" couldn't fine your file . ";

}

?> 
</body>
</html>