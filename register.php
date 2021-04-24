<?php

include 'conn.php';
    
if(isset($_POST['register'])) {
    echo "Registered";
}else {
    echo "Failed";
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
                    <a href='index.html'>LALA Library</a>
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
                                <input type="text" placeholder="Full name"/>
                                <input type="text" placeholder="IC Number"/>
                                <input type="email" placeholder="Email"/>
                                <input type="text" placeholder="Phone Number"/>
                                <input type="date" name="Birthday" id="name" placeholder="Birthday">
                                <input type="submit" name="register">REGISTER</input>
                                <p class="message">Librarian or Staff member? <a href="#">Log in</a></p>
                            </form>
                            <form class="register-form">
                                <center><h1 class="main-heading">Login</h1></center>
                                <input type="text"placeholder="Staff ID"/>
                                <input type="password"placeholder="Password"/>
                                <button><a href="index1.php">LOGIN</a></button>
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