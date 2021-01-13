<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {
  box-sizing: border-box;
}
body{
	background-image:linear-gradient(90deg, #e56849 0%, #d51f77 100%);
	padding:10px;
	
	}
.content{font-family: 'Libre Franklin',sans-serif;}
.header{
	background-size:auto;
	background-color:rgba(255,255,255,0.1);
	padding:30px;
	text-align:center;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	border-top-left-radius:5px;
	border-top-right-radius:5px;
	color:white;
	}
	
h1{
	font-style:italic;
	font-size:50px;
	text-shadow:1px 1px 5px #aaa;
	color:white;
	-webkit-text-stroke: 1px black;
	}
	
ul {
  list-style-type: none;
  margin:0;
  padding:0;
  overflow: hidden;
  background-color: rgba(0,0,0,0.5);
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.3);
  border-bottom-left-radius:20px;
  border-bottom-right-radius:20px;

}
li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: rgba(1,1,1,0.2);
}




@media screen and (max-width:600px){
	li{
	float:left;
	width:100%;
	text-align:center;
	}
	.dropdown-content{width:92.80%;}
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: rgb(1,1,1,0);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: 2px solid rgb(230,230,230,0.7);
  cursor: pointer;
  width: 100%;
  border-radius:40px;
  outline:none;
}

button:hover {
  opacity: 1;
  background-color:rgb(0,96,255);
  color:white;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  border:2px solid rgb(0,96,255);
  transition:background 0.6s;
  
  
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
  color:white;
  border:none;
  border-radius:3px;
  opacity:0.8;
}
.cancelbtn:hover{opacity:1;background-color:#f44336;border:none;}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
  padding-top: 60px;
}

.modal-content {
  background-color: white;
  margin: 3% auto 65% auto; 
  border: 1px solid #888;
  width: 50%; 
}

.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

.animate {
  -webkit-animation: animatezoom 0.4s;
  animation: animatezoom 0.4s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

@media screen and (max-width: 600px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  .modal-content{width:80%;}
  
}
#mySidenav a {
  position: fixed;
  left: -90px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
  text-align:left;
}

#mySidenav a:hover {
  left: 0;
}

#about {
  top: 55%;
  background-color: #4CAF50;
}

#blog {
  top: 60%;
  background-color: #2196F3;
}

#projects {
  top: 65%;
  background-color: #f44336;
}

#contact {
  top: 70%;
  background-color: #555
}
.modal-login{color:rgb(0,96,255);}
.modal-login:hover{color:white;}
</style>
</head>
<body>

<div class="header">
		<h1>My Website</h1>
		<p>Resize to see the responsive effect</p>
	</div>
	<div id="mySidenav" class="sidenav">
		<a href="#" id="about">About</a>
		<a href="#" id="blog">Blog</a>
		<a href="#" id="projects">Projects</a>
		<a href="#" id="contact">Contact</a>
	</div>
		<ul>
			<li style="background-color:green;"><a href="#">Home</a></li>
			<li><a href="#">Contact</a></li>
			<li style="float:right;"><a href="#">About</a></li>
			</a>

		</ul>
<div class="content">
<h2 style="font-family: 'Libre Franklin', sans-serif;">Login Form</h2>

	<button id="logIN" onclick="document.getElementById('id01').style.display='block'" style="width:250px;font-size:25px;">Login</button>

	<div id="id01" class="modal">
  
	<form class="modal-content animate"  method="post">
		<div class="imgcontainer">
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		<img src="avatar1.jpg" alt="Avatar" class="avatar">
		</div>

		<div class="container">
			<label for="uname"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="uname" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>
        
			<button type="submit" class="modal-login" name="submit_form" style="border:2px solid rgb(0,96,255);">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

		<div class="container" style="background-color:#f1f1f1">
		<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		<span class="psw"><a href="#">Forgot password</a></span>
		</div>
    </form>
    <?php
    require_once "connect.php";
    session_start(['cookie_lifetime' => 86400]);
    $_SESSION["login"]=false;

    if(isset($_POST["submit_form"]))
    {
        $uname=$_POST["uname"];
        $pwd=hash("sha256",$_POST["psw"]);
        $connection=connect();
        $login_verify=mysqli_query($connection,"select LoginId, LoginPwd from ubid2dcv_hospital.Login where LoginId='".$uname."' and  LoginPwd='".$pwd."'");
        if ($details=mysqli_fetch_array($login_verify))
        {
            
            
            
            

            // header("Location: http://$host$uri/$extra",true,301);
            // header("Location:http://www.ubid2ship.com/amishra.com/homepage.php",true,302);
            // $s="Location: http://$host$uri/$extra";
            // echo "<script>console.log('".$s."')</script>";
            // exit;
            echo "<script>window.location='homepage.php?login=1';</script>";
            

        }
        else
        {
            echo "<script>alert('Wrong ID or Password');document.getElementById('logIN').click();</script>";
        }
        

    }
    ?>


	</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
