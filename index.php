<!DOCTYPE html>
<html>
<head><title>Medwin Cares</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {
  box-sizing: border-box;
}
body{
	background-color:#white;
	margin:0;
	padding:0;
	
	}

.content{
	font-family: 'Libre Franklin',sans-serif;
	margin:10px;
	}
.glow{-webkit-animation:colorchange 7s infinite alternate;font-weight:bold;}
@-webkit-keyframes colorchange {
      0% {
        
        color: blue;
      }
      
      10% {
        
        color: #8e44ad;
      }
      
      20% {
        
        color: #1abc9c;
      }
      
      30% {
        
        color: #d35400;
      }
      
      40% {
        
        color: blue;
      }
      
      50% {
        
        color: #34495e;
      }
      
      60% {
        
        color: blue;
      }
      
      70% {
        
        color: #2980b9;
      }
      80% {
     
        color: #f1c40f;
      }
      
      90% {
     
        color: #2980b9;
      }
      
      100% {
        
        color: pink;
      }
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
  padding:16px;
  position:sticky;
  top:0;
  overflow: hidden;
  background-color: rgba(0,96,255,0.8);
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.3);
  

}
li {
  float: left;
  width:200px;
  
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 18px 20px;
  font-size:25px;
  text-decoration: none;
  margin-top:25px;
 
}

li a:hover {
  background-color: #EF820D;
  border-radius:40px;
  transition:background 0.3s;
}

@media screen and (max-width:600px){
	li {
	float:none;
	width:100%;
	text-align:center;
	}
	#cares{display:none;}
	
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  
  border:1px solid #333;
  box-sizing: border-box;
}

button {
  background-color:white;
  color: rgb(0,96,255);
  padding: 14px 20px;
  margin: 8px 0;
  border: 2px solid rgb(0,96,255,0.7);
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
  transition:background 0.3s;
  
  
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
.cancelbtn:hover{
	opacity:1;
	background-color:#f44336;
	border:none;
	}
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

@media screen and (max-width: 800px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  .modal-content{width:80%;}
  .leftcolumn,.rightcolumn{float:none;width:100%;}

  
}

.modal-login{
	color:rgb(0,96,255);
	}
.modal-login:hover{
	color:white;
	}
.Header1 {
	text-align:center;
	padding:2px;
	background-color:#FFFFFF;
	}
.Header1 a{
	text-decoration:none;
	}
.Header1 a:hover{
	color:red;
	text-decoration:underline;
	}
.leftcolumn{
	font-size:50px;
	margin-left:20px;
	margin-top:80px;
	width:70%;
	color:rgb(0,96,255,0.8);
	float:left;
	}
.rightcolumn{
	margin-left:0;
	width:30%;
	float:left;
	margin-top:120px;
	}
#cares{
	margin-left:135px;
	font-weight:bold;
	}
footer{
	position:fixed;
	bottom:0;
	color:white;
	background-color:rgb(0,96,255);
	width:100%;
	margin:0;
	padding:10px;
	text-align:center;
	font-size:12px;
	font-weight:thin;
	}

</style>
</head>
<body>
	<div class="Header1">
	<p class="glow">Important  !!!! : COVID-19 Guidelines and Updates  <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/technical-guidance" target=_blank>Click Here
</a></p>
	</div>
		<ul>
			<li id="medwin" style="margin-top:15px;font-size:80px;font-family: 'Libre Franklin',sans-serif;font-weight:bold;color:white;font-style:italic;">MEDWIN</li>
			<li id="cares" style="margin-top:45px;font-size:45px;color:white;padding-left:10px;"><i>CARES</i></li>
			<li><img src="PngItem_4915049.png" style="height:auto;width:120px;margin-left:-20px;"></li>
			<li style="float:right;"><a href="about.html">About</a></li>
			<li style="float:right;"><a href="contact.html">Contact</a></li>
			</a>
		</ul>
<div class="content">
<div class="leftcolumn">
<h2 style="font-family: 'Libre Franklin', sans-serif;">Known for our expertise. Chosen for our care.
</h2>
	<button id="logIN" onclick="document.getElementById('id01').style.display='block'" style="width:250px;font-size:25px;">Login</button>
</div>
<div class="rightcolumn">
</div>

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
<footer>
			<p id="copyright">Copyright &copy; 2021 by MEDWIN CARES. Questions?
			<a href="mailto:youthnationcoders69@gmail.com.com" style="color:white;">Mail the Webmaster</a></p>
</footer>
<script>
var modal = document.getElementById('id01');


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

</body>
</html>
