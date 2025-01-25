

<?php
session_start();
include('dbh.php');
if(isset($_POST['submitcomp'])){
    
$msg=$_POST['message'];
$name=$_SESSION['name'];
$query="INSERT INTO posts  VALUES('0','$msg','$name',NOW())";
$result=mysqli_query($dbc,$query);
mysqli_close($dbc);
header('location:home.php'); 
}
 if(isset($_POST['submitmed'])){
    
    $msg=$_POST['message'];
    $name=$_SESSION['name'];
    $query="INSERT INTO medicine  VALUES('0','$msg','$name',NOW())";
    $result=mysqli_query($dbc,$query);
    mysqli_close($dbc);
    header('location:medicine.php')
    ;}
 if(isset($_POST['submitsci'])){
    
        $msg=$_POST['message'];
        $name=$_SESSION['name'];
        $query="INSERT INTO science  VALUES('0','$msg','$name',NOW())";
        $result=mysqli_query($dbc,$query);
        mysqli_close($dbc);
        header('location:science.php')
        ;}
 if(isset($_POST['submitart'])){
    
            $msg=$_POST['message'];
            $name=$_SESSION['name'];
            $query="INSERT INTO art  VALUES('0','$msg','$name',NOW())";
            $result=mysqli_query($dbc,$query);
            mysqli_close($dbc);
            header('location:art.php')
            ;}
  if(isset($_POST['submitfin'])){
    
                $msg=$_POST['message'];
                $name=$_SESSION['name'];
                $query="INSERT INTO finance  VALUES('0','$msg','$name',NOW())";
                $result=mysqli_query($dbc,$query);
                mysqli_close($dbc);
                header('location:finance.php')
                ;}
 if(isset($_POST['submitother'])){
    
                    $msg=$_POST['message'];
                    $name=$_SESSION['name'];
                    $query="INSERT INTO other  VALUES('0','$msg','$name',NOW())";
                    $result=mysqli_query($dbc,$query);
                    mysqli_close($dbc);
                    header('location:other.php')
                    ;}
?>