<html>
<head></head>
<body>
<?php
session_start();
define ('GW_UPLOADPATH','images');
include('dbh.php');
$username=$_SESSION['name'];
$query="SELECT * FROM signup where Username='$username'";
  $result=mysqli_query($dbc,$query);
  while($row=mysqli_fetch_array($result)){
         
    if($row['profile_pic']==1){
      
       echo '<img src="profilepic/profile'.$row['Username'].'.'.'jpg" style="height:200px;width:200px;
       border-radius:50%;"/>';
       
    }
    else{
       echo  '<img src="profilepic/default.png" style="height:50px;width:50px;border-radius:50%;"/>';
    }

    $email=$row['Email'];
    $password=$row['Password'];

  }
?>
<form method="POST" action="upload.php" form attribute enctype="multipart/form-data">
   
        <input type="file" name="profilepic" id="profilepic" style=""/>
        <input type="submit" name="submit" value="Upload" style="border-radius:5px;background:#D52E40;"></input>
        
</form>
<?php
  echo '<form method="POST" action="echo '.$_SERVER['PHP_SELF'].'">';
  echo '<input type="text" name="name" placeholder="'.$username.'"></input><br/>';
  echo '<input type="text" name="email" placeholder="'.$email.'"></input><br/>';
  echo '<input type="text" name="email" placeholder="'.$password.'"></input><br/>';
  echo '<input type="text" name="email" placeholder="'.$password.'"></input><br/>';
  echo '<input type="submit" name="submit" value="Update"></input>';

  echo '</form>';

  if(isset($_POST['submit'])){
          
  }
?>
</body>