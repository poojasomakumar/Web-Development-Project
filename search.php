<!DOCTYPE html>   
<html> 
<head>
<meta charset="utf-8">
<title> Register here </title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<br>
<br><br>
<br>
<br>
<br>
<table>
      <tr>
          <th>username </th>
          <th>Email </th>
      </tr><br>
     <?php 
     $con = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($con,'registration');
     if(isset($_POST['search']))
       {
            $username= $_POST['username'];
            $query = "SELECT * FROM usertable where username='$username' ";
           
            $result = mysqli_query($con,$query)or die("Error: " . mysqli_error($con));
            while($row = mysqli_fetch_array($result))
             {
                    ?>
                  <tr>
                     
                    <td><?php echo $row['username']; ?> </td>
                     <td><?php echo $row['Email']; ?> </td>
                  </tr>
              <?php
              }
        }     
      ?>

</table>
</div>

<br>
<div class="b2">
   <header>
       <div class="menu">
            <ul>
               
               <li><a href="registerfront.php">REGISTER</a></li>
               <li><a href="landing.html">LOGOUT</a></li>
                <li><a href="comment.php">GO TO COMMENTS</a></li>
               <li><a href="profile.php">PROFILE</a></li>
            </ul>
</div>
</header>

</body>  
</html> 