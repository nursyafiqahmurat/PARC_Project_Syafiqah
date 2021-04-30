<?php

session_start();
if(!isset($_SESSION["key"])) { 
    header('location:register.php');
}

include 'conn.php';
$sql = "SELECT * FROM user WHERE User_ID = ".$_SESSION["key"];
$query= mysqli_query($conn, $sql);
$user = mysqli_fetch_array($query);

?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
    <div class="full-page">
        <div class="sub-page">
            <div class="navigation-bar">
                <div class="logo">
                    <a href='index1.php'>LALA Library</a>
                </div>
                <nav>
                    <ul id='MenuItems'>
                        <li><a href='index1.php'>Home</a></li>
                        <li><a href='collections.php'>Collections</a></li>
                        <li><a href='logout.php'>Log out</a></li>                                                
                    </ul>
                </nav>
            </div>
        </div>
        <br>
        <br>
        <h1 style="color:white;text-align:center;font-family: 'Poppins', sans-serif;">Hello <?php echo $user['Full_Name'];?></h1>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/Welcome-To-The-Team-Robots-Picture.png" alt="welcome" width="1200" height="400">
    </div>
</body>
</html>