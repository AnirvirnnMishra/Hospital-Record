<!DOCTYPE html>

<head>
    <title>Home Page</title>
</head>
<!-- ANMOLI THUMHAE LIYE COMMENT PADHNA JAROOR
            uper 2 left right button hongi navigate karne ke liye webpage   
        go back button -> https://www.w3schools.com/jsref/met_his_back.asp
        go forward button-> https://www.w3schools.com/jsref/met_his_forward.asp -->
<body>
    <div>
        <div>
        <form method='POST'>
            <button type="submit" name="logout">Log Out</button>
            </form>
        </div>
        <div>
            <div>
             
                <button type="button" onclick="window.location='search.php';">Search Patient</button>
             
            </div>
            <div>

                <button type="button" onclick="window.location='insert.php';">Insert Patient</button>

            </div>
            <div>
                <button type="button" onclick="window.location='delete.php';">Delete Patient</button>
            </div>

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
    

</body>

</html>