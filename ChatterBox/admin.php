<html>
<body>
  <a href="add.php"> Add ur team members</a>
  <?php

      define ('GW_UPLOADPATH','images');

 $dbc=mysqli_connect('localhost','root','','basic');

 $query="SELECT * FROM info order by score desc,date asc";
 $result=mysqli_query($dbc,$query);

echo '<table>';
 while($row=mysqli_fetch_array($result)){

   echo '<p>'.$row['name'].'</p>';
   echo '<p>'.$row['score'].'</p>';
   echo '<p>'.$row['date'].'</p>';
  
 }
 echo '</table>';

 mysqli_close($dbc);
   ?>
</body>
</html>
