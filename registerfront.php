
<!DOCTYPE html>   
<html> 
<head>
<meta charset="utf-8">
<title> Register here </title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="Registration">
<h1>Registration form</h1>
<form class="form" action="registerfront.php" method="POST">
<div class="textbox">
<input type="text" name="username" placeholder="Username" required>  
</div>
<div class="textbox">
<input type="email" name="Email" placeholder="Email" required>   
</div>
<div class="textbox">
<input type="Password" name="password" placeholder="Password" required>  
</div>

<div class="textbox">
<input type="password" name="cpassword" placeholder="Confirm Password" required> 
</div>
<input name="submit_btn" type="submit" id="Register_btn" value="Register"/>
</form>

</div>
<br> 
<header>
 
<?php
   require_once('conregister.php');
   if(isset($_POST['submit_btn']))
   {
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $Email = mysqli_real_escape_string($con,$_POST['Email']);
      $password = mysqli_real_escape_string($con,$_POST['password']);
      $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);
      if(empty($username) || empty($Email) || empty($password) || empty($cpassword))
      {
          echo 'Please fill all the credentials';
      }
      if ($password!=$cpassword)
      { 
       echo 'Password mismatch found';
       }
       else
       {
       $sql = "insert into usertable (username,Email,password) values('$username','$Email','$password')";
       $result = mysqli_query($con,$sql);
        if($result)
         {
            echo 'Your credentials are saved';
            
         }
         else
          {
              echo 'Please check your query';
           }
}
}
?>
      <div class="menu">
            <ul>
                <li><a href="landing.html">HOME</a></li>
               <li><a href="registerfront.php">REGISTER</a></li>
               <li><a href="loginfront.php">LOGIN HERE</a></li>
            </ul><br></div>
<br>
</body>  
</html> 