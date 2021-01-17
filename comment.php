<html><h2>Comments</h2></html>


 <?php 
     $con = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($con,'registration');
if(isset($_POST['comment']))
       {
     
        $Name = $_POST['Name'];
        
        $query_view = "SELECT * FROM comment where Name = '$_POST[Name]'";
        $result = mysqli_query($con,$query_view);
          while($row = mysqli_fetch_array($result))
            { 
                    echo $row['Name']; ?> <html><br><br><br></html>
                   <?php echo $row['Comment']; ?><html><br><br><br></html>
                 <?php
          }
        }


    ?>
<!DOCTYPE html>   
<html> 
<head>
<meta charset="utf-8">
<title> Register here </title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="comment">
<h2>Comment here!!</h2>
<form class="form" action="comment.php" method= "POST">
<input type="text" name="Name" placeholder="Enter your name" required>   
<br> <br><textarea name="comment" cols="60" rows="2" placeholder="Enter your comment" required ></textarea>
<input name="submit_btn" type="submit" id="Register_btn" value="Comment"/>
</form></div> 


<br>
<div class="b2">
   <header>
       <div class="menu">
            <ul>
               
                
                 <li><a href="landing.html">LOGOUT</a></li>
               <li><a href="profile.php">PROFILE</a></li>
            </ul>
</header>
</div>

</body>  
</html> 
