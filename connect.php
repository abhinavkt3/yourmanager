<?php
$insert = false;
if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "data";

    $con = mysqli_connect($server, $username, $password, $database);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
 
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message');";
    

    if($con->query($sql) == true){

        $insert = true;
    }

    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="/css/contactus.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Sniglet|Raleway:900);


body, html{
	height: 100%;
	padding: 0;
	margin: 0;
	font-family: 'Sniglet', cursive;
}
h1{
	font-weight: normal;
	font-size: 4em;
	font-family: 'Raleway', sans-serif;
	margin: 0 auto;
	margin-top: 30px;
	width: 500px;
	color: #F90;
	text-align: center;

}

/* Animation webkit */
@-webkit-keyframes myfirst
{
	0% {margin-left: -235px}
	90% {margin-left: 100%;}
	100% {margin-left: 100%;}
}

/* Animation */
@keyframes myfirst
{
	0% {margin-left: -235px}
	70% {margin-left: 100%;}
	100% {margin-left: 100%;}
}

.fish{
	background-image: url('http://www.geertjanhendriks.nl/codepen/form/fish.png');
	width: 235px;
	height: 104px;
	margin-left: -235px;
	position: absolute;	
	animation: myfirst 24s;
	-webkit-animation: myfirst 24s;
	animation-iteration-count: infinite;
	-webkit-animation-iteration-count: infinite;
	animation-timing-function: linear;
	-webkit-animation-timing-function: linear;
}

#fish{
	top: 120px;
}

#fish2{
	top: 260px;
	animation-delay: 12s;
	-webkit-animation-delay: 12s;
}


header{
	height: 160px;
	background: url('http://www.geertjanhendriks.nl/codepen/form/golf.png') repeat-x bottom;
}

#form{
	height: 100%;	
	background-color: #98d4f3;
	overflow: hidden;
	position: relative;
	
}
form{
	margin: 0 auto;
	width: 500px;
	padding-top: 40px;
	color: white;
	position: relative;
	
	
}
label, input, textarea{
	display: block;	
}
input, textarea{
	width: 500px;	
	border: none;
	border-radius: 20px;
	outline: none;
	padding: 10px;
	font-family: 'Sniglet', cursive;
	font-size: 1em;
	color: #676767;
	transition: border 0.5s;
	-webkit-transition: border 0.5s;
	-moz-transition: border 0.5s;
	-o-transition: border 0.5s;
	border: solid 3px #98d4f3;	
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
	
}
input:focus, textarea:focus{
	border: solid 3px #77bde0;	
}

textarea{
	height: 100px;	
	resize: none; 
	overflow: auto;
}
input[type="submit"]{
	background-color: #F90;
	color: white;
	height: 50px;
	cursor: pointer;
	margin-top: 30px;
	font-size: 1.29em;
	font-family: 'Sniglet', cursive;
	-webkit-transition: background-color 0.5s;
	-moz-transition: background-color 0.5s;
	-o-transition: background-color 0.5s;
	transition: background-color 0.5s;
}
input[type="submit"]:hover{
	background-color: #e58f0e;
	
}
label{
	font-size: 1.5em;
	margin-top: 20px;
	padding-left: 20px;
}
.formgroup, .formgroup-active, .formgroup-error{
	background-repeat: no-repeat;
	background-position: right bottom;
	background-size: 10.5%;
	transition: background-image 0.7s;
	-webkit-transition: background-image 0.7s;
	-moz-transition: background-image 0.7s;
	-o-transition: background-image 0.7s;
	width: 566px;
	padding-top: 2px;
}

.formgroup{
	background-image: url('http://www.geertjanhendriks.nl/codepen/form/pixel.gif');	
}
.formgroup-active{
	background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo.png');
}
.formgroup-error{
	background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo-error.png');
	color: red;
}
.topnav p{
	text-align: center;
	float: right;
	color: #f2f2f2;
	padding: 14px 16px;
	text-decoration: none;
	font-size: 17px;
	border-bottom: 3px solid transparent;
}

.navbar{
	position: inherit;
	height: 80px;
	width: 100%;
	top: 0;
	left: 0;
	background: rgba(0,0,0,0.4);
}
.navbar .logo{
	width: 120px;
	height: auto;
	padding: 20px 100px;
}
.navbar ul{
	float: right;
	margin-right: 20px;
}
.navbar ul li{
	list-style: none;
	margin: 0 8px;
	display: inline-block;
	line-height: 80px;
}
.navbar ul li a{
	font-size: 25px;
	font-family: 'Roboto', sans-serif;
	color: white;
	padding: 6px 13px;
	text-decoration: none;
	transition: .4s;
}
.navbar ul li a:hover{
	background: red;
	border-radius: 2px;
}

    </style>
</head>
<body>
    <nav class="navbar">
    <!-- <a href="http://127.0.0.1:5500/index.html"><img class="logo" src="" alt="Image"></a>x -->
    <ul>
      <li><a href="http://127.0.0.1:5500/index.html">Home</a></li>
      <li><a href="http://127.0.0.1:5500/index.html">Events</a></li>
      <li><a href="http://127.0.0.1:5500/index.html">Conferences</a></li>
      <li><a href="http://127.0.0.1:5500/index.html">Schedule</a></li>
    </ul>
  </nav>
    <header>
        <h1>Contact us</h1>
    </header>
    
    <div id="form">
    
    <div class="fish" id="fish"></div>
    <div class="fish" id="fish2"></div>
    
    <form id="waterform" method="post" action="connect.php">
    
    <div class="formgroup" id="name-form">
        <label for="name">Your name*</label>
        <input type="text" id="name" name="name" />
    </div>
    
    <div class="formgroup" id="email-form">
        <label for="email">Your e-mail*</label>
        <input type="email" id="email" name="email" />
    </div>
    
    <div class="formgroup" id="message-form">
        <label for="message">Your message</label>
        <textarea id="message" name="message"></textarea>
    </div>
    
        <input type="submit" name="submit" value="Send your message!" />
    </form>
    </div>
    <script src="/js/contactus.js"></script>
</body>
</html>