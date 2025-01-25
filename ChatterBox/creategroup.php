<html>
<head>
<title>Chatter Box</title>
</head>
<body>
<?php
session_start();

?>

<div class="group">
<form method="POST" action="home1.php" >
<div class="titlename">
<input type="text" name="title" palceholde="Group title"></input>
</div>
<div class="team">
<input type="text" name="teammember" placeholder="Add your Team"></input>
<input type="submit" name="add" value="ADD"></input>
</div>
</form>
<a href="home1.php">Main</a>
</div>
</body>
</html>