<html>
	<body>
	<form action="deleteuser.php" method="POST">
	<center><br><br>
	ENTER USERid:&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="text" name="userid" placeholder="USERID">
	<br><br>
	
	<input type="submit" value="Delete" name="btn">
	</center> 
	
	</form>
	</body>
</html>

deleteuser.php

<html>
<body>
<form action="home1.php" method="POST">
<center>
	<?php
	include 'conn.php';
	
	
	$id1=$_POST['userid'];
	$sql_3="DELETE FROM user WHERE id='$id1'";
	$result_3=mysqli_query($conn,$sql_3);
	if(!$result_3)
	{
$msg="Error !!!".mysqli_error($conn);
	}
	else
	{
	echo "Deletion Success!!!";
	}
	mysqli_close($conn);
	
	?>
<br><br>	
<input type="submit" value="Home Page" name="btn">
</form>
</body>
</html>
