<?php
session_start();
include('dbh.php');

$username=$_POST['username'];
$password=$_POST['password'];
$query="SELECT * FROM signup where Username='$username' and Password='$password'";
$result=mysqli_query($dbc,$query);

($row=mysqli_fetch_array($result));
   if ($row['Username']==$username && $row['Password']==$password){
    $_SESSION['profilepic']==$row['profile_pic'];
   }


mysqli_close($dbc);

if($row['Username']==$username && $row['Password']==$password){

    $_SESSION['name']=$row['Username'];
    
    header('Location:groups.php');

}
else{
    echo '<script language="javascript">';
  echo 'alert("Incorrect Details")';
  echo '</script>';
  header("Refresh: 0; url=index.php");
}
?>