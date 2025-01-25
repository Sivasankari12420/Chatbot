<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    define ('GW_UPLOADPATH','images');

    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $score=$_POST['score'];
    $screenshot=$_FILES['screenshot']['name'];

    if(!empty($name)&&!empty($score) && !empty($screenshot)){

    $target=GW_UPLOADPATH.$screenshot;

    if(move_uploaded_file($_FILES['screenshot']['tmp_name'],$target)){


    $dbc=mysqli_connect("localhost","root","","basic");

    $query="INSERT into info values(0,'$name','$score','$screenshot',NOW())";
    $result=mysqli_query($dbc,$query);

    header('location:admin.php');

    $name='';
    $score='';

    mysqli_close($dbc);
  }
}
  else{
    echo 'Please enter all the information';
  }
  }
  ?>
<form  enctype="multipart/form-data" method="POST" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
<input type="hidden" name="MAX_FILE_SIZE" />
<label for="name">Name:</label>
<input type="text"  name="name" id="name" value="<?php if(!empty($name)) echo $name?>"/><br/>
<label for="score">Score:</label>
<input type="tel" name="score" id="score" value="<?php if(!empty($score)) echo $score?>"/><br/>
<label for ="screenshot">Screenshot:</label>
<input type="file" name="screenshot" id="screenshot"/><br/>
<input type="submit" name="submit" value="ADD"/>
</form>


  </body>
</html>
