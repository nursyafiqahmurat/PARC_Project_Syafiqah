<?php

session_start();
if(isset($_SESSION["key"])) { 
    header('location:index1.php');
}

include 'conn.php';
    
if(isset($_POST['register'])) {
    $Full_Name = $_POST ["Full_Name"];
    $IC_Number = $_POST["IC_Number"];
    $Phone_Number = $_POST["Phone_Number"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    
    $sql= "INSERT INTO user (Full_Name, IC_Number, Phone_Number, Email, Password)
    VALUES ('".$Full_Name."','".$IC_Number."','".$Phone_Number."','".$email."','".$password."');";
    
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "Success";
    }else {
        echo "Failed";
    }
}

if(isset($_POST['login'])) {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    //if email is registered
    $sql = "SELECT * FROM user WHERE email = '".$email."'";    
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        
        //if email and password is correct
        $sql = "SELECT * FROM user WHERE 
            email = '".$email."' AND 
            Password ='".$password."'";
    
        $query = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($query) > 0) {
            //if success
            $row = mysqli_fetch_array($query);
            $_SESSION["key"] = $row["User_ID"];
            header('location:index1.php');
        }else {
                // if failed
                echo "failed";
        }
        
    }else {
        echo "Incorrect email or password ";
    }
    
}

 ?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Membership and Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
    <div class="full-page">
        <div class="sub-page">
            <div class="navigation-bar">
                <div class="logo">
                    <a href='index.php'>LALA Library</a>
                </div>
                <nav>
                    <ul id='MenuItems'>
                        <li><a href='index.php'>Home</a></li>
                        <li><a href='our_coll.php'>Our Collections</a></li>
                        <li><a href='contact.php'>Contact Us</a></li>
                        <li><a href='register.php'>Get Membership!</a></li>                        
                    </ul>
                </nav>
            </div>
            <div class="row">
                <div class="col-1">
                    <div class="form-box">
                        <div class="form">
                            <form class="login-form" method="POST">
                                <center><h1 class="main-heading">Register Today!</h1></center>
                                <input type="text" name="Full_Name" placeholder="Full name"/>
                                <input type="text" name="IC_Number" placeholder="IC Number"/>
                                <input type="text" name="Phone_Number" placeholder="Phone Number"/>
                                <input type="email" name="email" placeholder="Email"/>
                                <input type="password" name="password" placeholder="Password"/>
                                <button type="submit" name="register">REGISTER</button>
                                <p class="message">Librarian or Staff member? <a href="#">Log in</a></p>
                            </form>
                            <form class="register-form" method="POST">
                                <br><br><br>
                                <center><h1 class="main-heading">Login</h1></center>
                                <input type="text" name="email" placeholder="Email"/>
                                <input type="password" name="password" placeholder="Password"/>
                                <button type="submit" name="login">LOGIN</button>
                                <p class="message">Not a member of the LALA Library yet? <a href="#">Create a membership card today!</a>
                                </p>
                            </form>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src='https://code.jquery.com/jquery-3.2.1.min.js'>
    </script>
    <script>
        $('.message a').click(function(){$('form').animate({height: "toggle",opacity: "toggle"},"slow");});
    </script>
</body>
</html>