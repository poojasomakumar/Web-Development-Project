


<!DOCTYPE html>   
<html> 
<head>
<meta charset="utf-8">
<title> PROFILE</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="Registration">
<h1>UPDATE PROFILE</h1>
<form class="form" action="profile.php" method="POST">
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
<input name="UPDATE" type="submit" id="Register_btn" value="update"/>

</form>

</div>
<br> 
<header>

      <div class="menu">
            <ul>
               <li><a href="profile.php">REFRESH</a></li>
               <li><a href="loginfront.php">LOGOUT</a></li>
            </ul><br></div>
<br>
</body>  
</html> 


<!DOCTYPE html>   
<html> 
<head>
<meta charset="utf-8">
<title> PROFILE</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="search">
<h1>VIEW PROFILE</h1>
<form class="form" action="view.php" method="POST">
<input type="email" name="Email" placeholder="Email" required>   
</div>

<input name="VIEW" type="submit" id="Register_btn" value="view"/>
</form>
</div>

</body>  
</html>
<?php 
     $con = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($con,'registration');
     if(isset($_POST['update']))
       {
        
        $Email = $_POST['Email'];
       
        $query = "UPDATE usertable SET username = '$_POST[username]', password= '$_POST[username]' where Email = '$_POST[Email]'";
        $query_run = mysqli_query($con,$query);
        if($query_run)
         {
           echo "<h1>UPDATED</h1>";
          }
          else
           {
           echo " not updated";
          }
        }
?>
