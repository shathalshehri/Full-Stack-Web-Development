

    <!--https://www.geeksforgeeks.org/signup-form-using-php-and-mysql-database/----->

    <html>
    <html lang="en">
    		<title>Tanafas.</title>
    		<meta charset="UTF-8">
    			<link rel = "icon" href ="admin/upload/rar.png"
    			 type = "image">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {
      box-sizing: border-box;
    }

    /* Style the body */
    body { /* First bakground*/
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
    	background-color: #fff9c4;

    }
    /* Header/logo Title */
    .header {
          padding: 200px;
    	  	text-align: right;
    	  	background: white;
    			background-image:url('https://prod-wafy-api.s3.eu-central-1.amazonaws.com/images/articles/9b25b9f9af15f2b76a289f51f5c79d53.jpg') ;
    			background-size:100%;
    			height:600px;

    			background-repeat: no-repeat;



    }

    /* Increase the font size of the heading */
    .header h1 {
      font-size: 40px;
    }

    /* Style the top navigation bar */
    .navbar {
      overflow: hidden;
    background-color: #a89181  ;}

    /* Style the navigation bar links */
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

    /* Change color on hover */

    .navbar a:hover {
      color: #eba015 ;
    }
    .med{
    background-color: #bbb4b7a1;

    background-size:  327px  310px;
    background-repeat: no-repeat;
    background-position: 17.9cm 0.2cm;

    }


    /* Main column */
    .main {
      -ms-flex: 70%; /* IE10 */
      flex: 70%;
      background-color: white;
      padding: 20px;
    }

    @import "compass/css3";

    $body-bg: #c1bdba;
    $form-bg: #13232f;
    $white: #ffffff;

    $main: #1ab188;
    $main-light: lighten($main,5%);
    $main-dark: darken($main,5%);

    $gray-light: #a0b3b0;
    $gray: #ddd;

    $thin: 300;
    $normal: 400;
    $bold: 600;
    $br: 4px;

    *, *:before, *:after {
      box-sizing: border-box;
    }

    html {
    	overflow-y: scroll;
    }

    body {/*Second background*/
      background:#E78A61;
      font-family: 'Titillium Web', sans-serif;
    }

    a {
      text-decoration:none;
      color:$main;
      transition:.5s ease;
      &:hover {
        color:$main-dark;
      }
    }

    .form {
      background:rgba($form-bg,.9);
      padding: 40px;
      max-width:600px;
      margin:40px auto;
      border-radius:$br;
      box-shadow:0 4px 10px 4px rgba($form-bg,.3);
    }

    .tab-group {
      list-style:none;
      padding:0;
      margin:0 0 40px 0;
      &:after {
        content: "";
        display: table;
        clear: both;
      }
      li a {
        display:block;
        text-decoration:none;
        padding:15px;
        background:rgba($gray-light,.25);
        color:$gray-light;
        font-size:20px;
        float:left;
        width:50%;
        text-align:center;
        cursor:pointer;
        transition:.5s ease;
        &:hover {
          background:$main-dark;
          color:$white;
        }
      }
      .active a {
        background:$main;
        color:$white;
      }
    }

    .tab-content > div:last-child {
      display:none;
    }


    h1 {

      color:white;
      font-weight:$thin;
      margin-right: 600px;
    	margin-bottom: 400px;
    }

    label {
      position:absolute;
      transform:translateY(6px);
      left:13px;
      color:rgba($white,.5);
      transition:all 0.25s ease;
      -webkit-backface-visibility: hidden;
      pointer-events: none;
      font-size:22px;
      .req {
      	margin:2px;
      	color:$main;
      }
    }

    label.active {
      transform:translateY(50px);
      left:2px;
      font-size:14px;
      .req {
        opacity:0;
      }
    }

    label.highlight {
    	color:$white;
    }

    input, textarea {
      font-size:22px;
      display:block;
      width:100%;
      height:100%;
      padding:5px 10px;
      background:none;
      background-image:none;
      border:1px solid $gray-light;
      color:$white;
      border-radius:0;
      transition:border-color .25s ease, box-shadow .25s ease;
      &:focus {
    		outline:0;
    		border-color:$main;
      }
    }

    textarea {
      border:2px solid $gray-light;
      resize: vertical;
    }

    .field-wrap {
      position:relative;
    	font-family:  "Lucida Console", Courier, monospace;
     color: gray;
      margin-bottom:40px;
    }

    .top-row {
      &:after {
        content: "";
        display: table;
        clear: both;
      }

      > div {
        float:left;
        width:48%;
        margin-right:4%;
        &:last-child {
          margin:0;
        }
      }
    }

    .button {

      border:0;
      outline:none;
      border-radius:0;
      padding:15px 0;
      font-size:2rem;
      font-weight:$bold;
      text-transform:uppercase;
      letter-spacing:.1em;
      background:$main;
      color:$white;
      transition:all.5s ease;
      -webkit-appearance: none;
      &:hover, &:focus {
        background:$main-dark;
      }
    }

    .button-block {
    	position: relative;
      top: center;
    	left: center;
      width:70%;
    }
    #log{
    	position: relative;
      left: 80px;
    }
    .forgot {
      margin-top:-20px;
      text-align:right;
    }
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
    #ho{
    	color: gold;

    }

    #lft{
    	position:relative;
      left: 1010px;
    	bottom: 595px;
    }
    #uup{
    	position:relative;
    	right: auto;
    	bottom: 650px;

    }
    .ccenter{


    	color:#123132;
    	font-size: xxx-large;
    	font-family: impact ;
    	text-align:center;
    	position:relative;
    	right: auto;
    	bottom:600px;
    }

    </style>

    	</head>
    	<body>
    	   <div class="navbar">
        	<a href="Eventsw.php"> Events </a>
          <a href="melisw.php">milestones</a>
          <a href="Resw.php">Resturants</a>
            <a href="Hotelw.php">Hotels</a>


          <a href="SignIn.php" id="Third" class="right"><img src="https://www14.0zz0.com/2022/04/10/21/673676500.png"  alt="Sign In" style="width:20px;height:20px;"> Sign Im </a>
        <a href="SignUp.php " id="second" class="right"><img src="https://www14.0zz0.com/2022/04/10/21/670086324.png"  style=" left:50px;width:20px;height:20px;"> Sign Up</a>
        <a href="HomeW.php" id="first" class="right"><img src="https://www14.0zz0.com/2022/04/10/21/417615836.png"  alt="home" style="width:20px;height:20px;"> Home </a>

        </div>

    <div class="header">

    	<h1 class="font_2" style="font-family: monotype corsiva ;font-size: xx-large; text-align:center;font-size:80px;color:white"> The Saudi Heart  </h1>
      <span style="font-family:raleway,sans-serif; color: gray">ــــ&nbsp;in &nbsp;Saudi Arabia ــــ</span>
    </div>

    <div class="med">

    	<video width="1344" height="1000" autoplay muted>
    	  <source src="https://a.top4top.io/m_1933blq3l2.mp4" type="video/mp4">

    	Your browser does not support the video tag.
    	</video>


    <?php
    include("footer.php");
    ?>
      </body>
    </html>
