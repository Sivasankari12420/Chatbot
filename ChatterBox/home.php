<?php
session_start();
$_SESSION['name'];

?>
<html>
<head>
<title>Chatter Box</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
 integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Anton|Itim|Oswald" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="emoji/lib/css/emoji.css" rel="stylesheet">
<script></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#chatbox').load('update.php').fadeIn('slow');
}, 4000); // refresh every 10000 milliseconds </script>
<style>
body{
    overflow-x:hidden;
}
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
         font-family: 'Itim', cursive; }
         h1{
    font-family:'Anton',sans-serif;font-size:400%;color:#D52E40;
}
#logout{
    background:#D52E40;font-family:'Oswald',sans-serif;border-radius:5px;
}
#logout:hover{
    background:white;
}
.head{
  box-shadow: 2px 0px 8px 10px #888888;
}
@media (min-width: 1281px) {
  .send{
    padding-left:375px;
  }
}
@media (min-width: 481px) and (max-width: 767px) {
      .send{
    padding-left:0px;
  }
}
@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
    .send{
    padding-left:200px;
  } 
}
@media (min-width: 320px) and (max-width: 480px) {
  .send{
    padding-left:10px;
  } 
}
@media (min-width: 1025px) and (max-width: 1280px) {
    .send{
    padding-left:200px;
  } 
}
a:link{
  text-decoration:none;
}
a:visited{
  text-decoration:none;
}
</style>


</head>
<body>
<div class="main">
  <div class="row head">
    <div class="col-md-5 " style="padding-left:20px;">
    <a href="groups.php"><h1>Chatter Box</h1></a>
    </div>
    <div class="col-md-7" style="text-align:right; font-family: 'Itim', cursive;font-size:150%;padding-right:30px;padding-top:10px;">
   
    <?php
    
    if(isset($_SESSION['name'])){
      $sessionname=$_SESSION['name'];
      include('dbh.php');
       $sql="SELECT * FROM signup where Username='$sessionname'";
       $result=mysqli_query($dbc,$sql);

       while($row=mysqli_fetch_array($result)){
         
         if($row['profile_pic']==1){
           
            echo '<img src="profilepic/profile'.$sessionname.'.'.'jpg" style="height:50px;width:50px;
            border-radius:50%;"/>';
            

         }
         else{
            echo  '<img src="profilepic/default.png" style="height:50px;width:50pxborder-radius:50%;;"/>';
         }

       }

        echo 'Hello'.$_SESSION['name'].'&nbsp;&nbsp;&nbsp';
        echo '<a href="profile.php" >Profile</a>
        <form method="POST" action="logout.php" style="float:right;padding-left:10px;">
        <button type="submit"  name="logout" id="logout" href="logout.php" style="">Log out<i class="fas fa-sign-out-alt"></i></button>
        </form>';  


    }
    
    ?>
   
    
   </div>
  </div>
<div class="container">
<div id="chatbox" style="height:430px;width:100%;margin-bottom:20px;padding-top:10px;
overflow:scroll;box-shadow: 0px 10px 8px #888888;padding-left:10px;">
<?php 

define ('GW_UPLOADPATH','images');
include('dbh.php');
$query="SELECT * FROM posts order by date desc";
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
mysqli_close($dbc);
?>
</div>
</div>

<div class="messagebox">
<form method="POST" action="send.php">
 <div class="row send" style="">
      <input class="form-control mr-sm-2"style="width:500px;border:1px solid black;" type="search" name="message" placeholder="Type message">
      <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name='submitcomp' value="Send Message"></input>
 </div>
</form>

</div>
</div>

</body>
</html>