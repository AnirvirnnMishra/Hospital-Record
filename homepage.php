<!DOCTYPE html>

<head>
    <title>Home Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html{scroll-behavior:smooth;}
* {
  box-sizing: border-box;
}
body{
	background-color:white;
	margin:0;
	padding:0;
	
	}
	
fieldset {
  display: block;
  margin-left: 2px;
  margin-right: 2px;
  padding-top: 0.35em;
  padding-bottom: 0.625em;
  padding-left: 0.75em;
  padding-right: 0.75em;
  border: 7px outset rgb(0,96,255);
  border-radius:10px;
}	

	
ul {
  list-style-type: none;
  margin:0;
  padding:16px;
  
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
	#sub{float:left;
	width:100%;}
	
}
#cares{
	margin-left:135px;
	font-weight:bold;
	}
	
#sub{
	border:none;
	outline:none;
	cursor:pointer;
	margin-top:25px;
	background-color:rgba(0,96,255,0);
	color:white;
	font-size:25px;
	padding:18px 20px;
	border-radius:40px;
	}
	
#sub:hover{
	background-color:crimson;
	transition:background 0.4s;
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
.column {
  float: left;
  width: 50%;
  padding: 50px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
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
</style>
</head>
<body>
		
    <div>
        <div>
        <form method='POST'>
		<ul>
			<li id="medwin" style="margin-top:15px;font-size:80px;font-family: 'Libre Franklin',sans-serif;font-weight:bold;color:white;font-style:italic;">MEDWIN</li>
			<li id="cares" style="margin-top:45px;font-size:45px;color:white;padding-left:10px;"><i>CARES</i></li>
			<li><img src="PngItem_4915049.png" style="height:auto;width:120px;margin-left:-20px;"></li>

			<li style="float:right;"><a href="contact.html">Contact</a></li>
			<li style="float:right;"><a href="about.html">About</a></li>
			<li><button type="submit" name="logout" style="float:right;" id="sub">Log Out</button></li>
			</a>
		</ul>
            </form>
        </div>
        <div>
            <div>
             
                
             
            </div>
            <div>

                

            </div>
           <div class="row">
  <div class="column">
    <p><img src="insert1.png" style="height:256px;width:256px;margin-left:50px;"></p>
    <h2><button type="button" onclick="window.location='insert.php';" style="width:250px;font-size:25px;margin-left:50px;">Insert Patient</button></h2>
  </div>
  
 
  
  <div class="column">
    <p><img src="search.png" style="margin-left:50px;"></p>
    <h2><button type="button" onclick="window.location='search.php';" style="width:250px;font-size:25px;margin-left:50px;">Search Patient</button></h2>
  </div>
</div>
    
    <?php
    
     

    
    // die();
    
    

    
    if(isset($_GET["login"]))
    {
        if(isset($_POST["logout"]))
        {
            
            
            
            echo "<script>document.location.replace('index.php');</script>";

        }

    }
    else
    {
        echo "<script>alert('Invalid Authorization');document.location.replace('index.php');</script>";

    }
    
    ?>
    
    
<footer>
			<p id="copyright">Copyright &copy; 2021 by MEDWIN CARES. Questions?
			<a href="mailto:youthnationcoders69@gmail.com.com" style="color:white;">Mail the Webmaster</a></p>
</footer>
</body>

</html>