 <?php 
     $con = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($con,'registration');
if(isset($_POST['VIEW']))
       {
     
        $Email = $_POST['Email'];
        
        $query_view = "SELECT * FROM usertable where Email = '$_POST[Email]'";
        $result = mysqli_query($con,$query_view);
          while($row = mysqli_fetch_array($result))
            { 
                    echo $row['username']; ?> <html><br><br><br></html>
                   <?php echo $row['Email']; ?><html><br><br><br></html>
                  <?php  echo $row['password'];?><html><br><br><br></html><?php
          }
        }


    ?>
          
 