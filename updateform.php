<?php
	$con = mysqli_connect('127.0.0.1','root','','brm_db');
	mysqli_select_db($con,'brm_db');
	
	$q = "SELECT * FROM book WHERE bookid='$_GET[book]'";
	$result = mysqli_query($con,$q);
	
	$row = mysqli_fetch_array($result);
	
	mysqli_close($con);
?>


<!DOCTYPE html>
<html>
	<head>
		<title> Update Record </title>
		<link rel="stylesheet" href="./css/viewstyle.css" />
	</head>
	<body>
		<h1 align="center"> Book Record Management</h1>
	<center>
		<form action="updation.php" method="post">
		<table id="view_table">
			<tr>
				<th>Title</th>
				<th>Price</th>
				<th>Author</th>
			</tr>
			
			<tr>
				<input type="hidden" name="book_id" value="<?php echo $row['bookid'];?>" />
				
				<td><input type="text" name="title" value="<?php echo $row['title'];?>" /></td>
				<td><input type="text" name="price" value="<?php echo $row['price'];?>" /></td>
				<td><input type="text" name="author" value="<?php echo $row['author'];?>" /></td>
			</tr>
			
			</table>
			<input type="submit" value="Update" style="background-color:lightgreen;width:100px;" />
			</form>
		</center>
	</body>
	
</html>	
			