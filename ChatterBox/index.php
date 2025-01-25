<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
 integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Anton|Itim|Oswald" rel="stylesheet">
<title>Chatter Box</title>
<style>
.main{
padding:20px;margin:0px;border:0px;
background:url('images/pic1.jpg');
background-size:cover;
background-position:center;
width:100%;
height:100%;
overflow:hidden;

}

.login{
   
    padding-top:50px;
    padding-left:50px;
    padding-right:50px; 
}
h1{
    text-align:right;font-family:'Anton',sans-serif;font-size:400%;padding-right:50px;color:#D52E40;
}
h2{
    font-family: 'Itim', cursive;font-size:250%;
}
</style>
</head>
<body>
<div class="main" >

<h1>Chatter Box</h1>
<div class="row" style="float:right">
 <div class="login"  style=""  >
 <div class="row"><h2>Get In</h2></div>
  <form method="POST" action="login.php">
  
   <div class=" row">
   <label for="username" style="font-family: 'Itim', cursive;font-size:120%;">Username:
   <input type="text" name="username" required></input>
   </div>
   <div class="row">
   <label for="password" style="font-family: 'Itim', cursive;font-size:120%;">Password:
   <input type="password" name="password" style="margin-left:5px;" required></input>
   </div>
   <div class="row">
   <input type="submit" name="submit" value="Log In" style="border-radius:5px;background:#D52E40; width: 20em;  height: 2em;"></input>
   </div>
  </form>
  <span style="font-family: 'Itim', cursive;">New to Community? Then <a href="newuser.php">Get Over Here</a></span>

  <div class="row" style="margin-top:60px;">
 <div class="col" style="text-align:center;font-family: 'Itim', cursive;font-size:120%;">
 <span style="font-size:150%;">Get Us Here</span><br/>
<i class="fab fa-facebook-square fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <i class="fab fa-instagram fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <i class="fab fa-github fa-3x"></i>
 </div>
 </div>

 </div>
 </div>
 </div>

 

</body>
</html>