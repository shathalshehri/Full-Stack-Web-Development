<!DOCTYPE HTML>
<html lan="ar" >
<head>


<!-- jQuery (necessary JavaScript plugins) -->

<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/bootstrap-rtl.min.css"/>
<!-- Custom Theme files -->
<!--//theme-style-->

<style>
/* Footer */
.footer {
  padding: 70px;
  text-align: center;
	color: white;
	font-family:  "Lucida Console", Courier, monospace;
  background: #123132;
}
.footer a{
  color: gray;
}
</style>
<script language="JavaScript">

function showClickTime(){
    var Digital=new Date()
  var hours=Digital.getHours()
  var minutes=Digital.getMinutes()
  var seconds=Digital.getSeconds()
  var clockd="AM"


  if (hours>12){
   clockd="PM"
   hours=hours-12
  }
  if (hours==0)
   hours=12
  if (minutes<=9)
   minutes="0"+minutes
  if (seconds<=9)
   seconds="0"+seconds
   var clocktime=hours+":"+minutes+":"+seconds+" "+clockd

   clockSpan.innerHTML="<b style='font-size:12;color:black;font-family: Locida Console;'>"+clocktime+"</b>"
   setTimeout("showClickTime()",1000)
}
 window.onload=showClickTime;
</script>
</head>
<body  >

	<div class="footer">
	  <h2>CONCAT US!</h2>
		<a href="mailto:CSStudent@gmail.com">CSStudeent@gmail.com </a>
		<h2 id= "ho">__</h2>

	</div>

	<p class="font_9" style="text-align:center;font-size:14px">©️ 2022 by Ghosson Banjar&amp; Shatha alShehri &amp; Eman Almalki &amp; Shatha alSyeami &amp; Afnan Alameri  <br> created with <img src="https://i.ibb.co/WvMFd2S/FB68-AFEF-265-E-40-EC-895-C-2671-C294-A3-B0.png" alt=" html="" tutorial"="" style="width:20px;height:20px;"></p>
	<!--------------------------------------------->
	<span id=clockSpan></span>
	<?php
	$counter_name = "counter.txt";
	if (!file_exists($counter_name))
	{
	    $f = fopen($counter_name, "w");
	    fwrite($f,"0"); fclose($f);
	}
	$f = fopen($counter_name,"r");
	$counterVal = fread($f, filesize($counter_name));
	fclose($f);
	$counterVal++;
	$f = fopen($counter_name, "w");
	fwrite($f, $counterVal);
	fclose($f);
	echo " <br> &nbsp; Our web site is visit  $counterVal time .<br>";
	?>
	<!------------------------------------------------->
	</div>
</body>
</html>
