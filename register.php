<?php

include 'conn.php';
    
if(isset($_POST['register'])) {
    $Fullname = $_POST ["Fullname"];
    $IC_Number = $_POST["IC_Number"];
    $Phone_Number = $_POST["Phone_Number"];
    $email = $_POST["email"]

    $SQL= "INSERT INTO user (Full Name, IC Number, Phone Number, Email)
    VALUES (`".$Fullname."`,`".$IC_Number."`,`".$Phone_Number."`,`".$email."`);";

    echo $SQL;
}

if(isset($_POST['login'])) { 
    $Staff_ID = $_POST["Staff_ID"];
    $Password = $_POST["Password"]
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
                        <li><a href='#'>Our Collections</a></li>
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
                                <input type="text" name="FullName" placeholder="Full name"/>
                                <input type="text" name="IC_Number" placeholder="IC Number"/>
                                <input type="text" name="Phone_Number" placeholder="Phone Number"/>
                                <input type="email" name="email" placeholder="Email"/>
                                <button type="submit" name="register">REGISTER</button>
                                <p class="message">Librarian or Staff member? <a href="#">Log in</a></p>
                            </form>
                            <form class="register-form" method="POST">
                                <center><h1 class="main-heading">Login</h1></center>
                                <input type="text" name="Staff_ID" placeholder="Staff ID"/>
                                <input type="password" name="Password" placeholder="Password"/>
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