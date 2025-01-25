<?php
session_start();
    define ('GW_UPLOADPATH','images');


$name=$_SESSION['name'];

$screenshot=$_FILES['screenshot']['name'];

if(!empty($name) && !empty($screenshot)){

$target=GW_UPLOADPATH.$screenshot;

if(move_uploaded_file($_FILES['screenshot']['tmp_name'],$target)){


$dbc=mysqli_connect("localhost","root","","wechat");

$query="INSERT into newsfeed values(0,'$name',NOW(),'$screenshot')";
$result=mysqli_query($dbc,$query);





mysqli_close($dbc);

}
}

?>