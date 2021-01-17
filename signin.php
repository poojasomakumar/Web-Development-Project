

<?php

    session_start();
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $db = "registration";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $db);
    $Email = $_POST['Email'];
    $password = $_POST['password'];
     $cookie_name = "$Email";
     $cookie_value = "$password";
    setcookie($cookie_name, $cookie_value, time() + (1000), "/");
       $sql = "SELECT * FROM usertable WHERE Email = '$Email' AND password = '$password'";
       $result = mysqli_query($conn,$sql);
       $row = mysqli_fetch_array($result);
      
       

        if(!empty($_POST["remember"])) {
	setcookie ("Email",$_POST["Email"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "Cookies Set Successfuly";
           } else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
           }

       
       if($Email == "" && $password == "") {
        $SESSION['username'] =$_POST['username'];
         header('location:signin.php');
           }
        if($row['Email'] == $Email && $row['password']== $password) {
            echo "<h1><td align=centre>WELCOME $Email <br>You Logged in successfully!!</td></h1>";
            }else{
            echo"<script>alert('Check your credentials')</script>";
            echo "<script>location.replace('loginfront.html')</script>";
          } 
?>

<!DOCTYPE html>   
<html> 
<head>
<meta charset="utf-8">
<title> LOGIN </title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  
<div class="search">
<form action="search.php" method="POST">
<input type="text" name="username" placeholder="search here"> 
<input type="submit" name="search" value="search"/>
</form>
</div>
<div class="b2">
   <header>
       <div class="menu">
            <ul>
               
               <li><a href="registerfront.php">REGISTER</a></li>
               <li><a href="loginfront.php">LOGOUT</a></li>
                <li><a href="comment.php">GO TO COMMENTS</a></li>
               <li><a href="profile.php">PROFILE</a></li>
            </ul>
</div>
</header>

</body>  
</html> 