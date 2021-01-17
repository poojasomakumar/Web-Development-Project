
<!DOCTYPE html>   
<html> 
<head>
<meta charset="utf-8">
<title> Login </title>
<link rel="stylesheet" href="style.css">
<body>

<div class="login-box">
<h1>Login</h1>

<form action="signin.php" method="POST">

<div class="textbox">
<input id= text type="text" placeholder="Email" name="Email" value="<?php if(isset($_COOKIE["Email"])) { echo $_COOKIE["Email"]; } ?>">   
</div>

<div class="textbox">
<input id= text type="password" placeholder="password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"> 
</div>
<div class="text">
<input name="login" type="submit" id="Register_btn" value="LOGIN">
<p><input type="checkbox" name="remember" /> Remember me</p>
</form>
</div>
</div>

<br>

<div class="b2">
   <header>
       <div class="menu">
            <ul>
               
               <li><a href="registerfront.php">REGISTER</a></li>
               <li><a href="loginfront.html">LOGIN</a></li>
                <li><a href="landing.html">HOME</a></li>
               
            </ul>
</div>
</header>
</body>
  </html> 


