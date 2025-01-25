<?php
include('dbh.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cnfpassword=$_POST['cnfpassword'];


$query = "SELECT * FROM signup WHERE Username='$username'";

$result1 = mysqli_query($dbc,$query) or die ("Error querying");    
$count = mysqli_num_rows($result1);

if ($count>0) {
    echo '<script language="javascript">';
    echo 'alert("Username already exists!!!")';
    echo '</script>';
    header("Refresh: 0; url=newuser.php");
} 
else {
    
if($password==$cnfpassword){
    $dbc=mysqli_connect("localhost","root","","wechat");
    $query="INSERT into signup (Username,Email,Password)values('$username','$email','$password')";
    $result=mysqli_query($dbc,$query);
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Password Matching Failed")';
        echo '</script>';
        header('Refresh: 0; url=newuser.php');
    }
    
mysqli_close($dbc);
header('Location:index.php');
}


  
}


?>





