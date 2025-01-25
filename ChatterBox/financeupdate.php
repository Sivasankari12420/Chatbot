<html>
<head>
<style>
#message{
    background:#D52E40;
    display:inline;
    padding:5px;
    padding-right:20px;
    border-radius:10px;
    white-space: -moz-pre-wrap !important;
         white-space: -pre-wrap;
         white-space: -o-pre-wrap;
         white-space: pre-wrap;
         word-wrap: break-word;
         word-break: break-all;
         white-space: normal;
        }
</style>
</head>
<body>
<?php 
session_start();
$sessionname=$_SESSION['name'];

define ('GW_UPLOADPATH','images');
include('dbh.php');
$query="SELECT * FROM finance order by date desc";
$result=mysqli_query($dbc,$query);
while($row=mysqli_fetch_array($result)){
    $username=$row['name'];
   $queryimg="SELECT * FROM signup where Username='$username'";
  $resultimg=mysqli_query($dbc,$queryimg);
  while($rowimg=mysqli_fetch_array($resultimg)){
         
    if($rowimg['profile_pic']==1){
      
       echo '<img src="profilepic/profile'.$row['name'].'.'.'jpg" style="height:50px;width:50px;
       border-radius:50%;"/>';
       
    }
    else{
       echo  '<img src="profilepic/default.png" style="height:50px;width:50px;border-radius:50%;"/>';
    }

  }
  echo '<div id="message" style="margin-left:5px;">';
  echo '<span style="color:#02283D;font-size:120%;">'.$row['name'].':</span>';
  echo '<span style="font-size:110%;">'.$row['message'].'</span>';
  echo '<span style="font-size:70%;padding-left:15px;">'.$row['date'].'</span>';
  echo '</div>';
  echo '<p></p>';

}

?>
</body>
