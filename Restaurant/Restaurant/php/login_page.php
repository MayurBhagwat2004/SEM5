<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div id="main-div">
    
    <div id="login-main-div">
        <div id="login-img">
            <div class="img-class">
                <img src="../img/Home.png" alt="home image">
            </div>    
        </div>
    </div>

    <div id="login-div">
    <br><br><br><br><br><br>
            <label id="email">Email: </label>
            <br>
            <br>
            <input type="text" id="email-id" placeholder="Enter email">
            <br>
            <br>
            <label id="Password: ">Password: </label>
            <br>
            <br>
            <input type="text" id="password-id" placeholder="Enter password">
            <br>
            <br>
            <input type="button" id="signup-btn" value="sign up" onclick=signup()>
    </div>
    
</div>
<script src="../js/register.js"></script>
</body>
</html>