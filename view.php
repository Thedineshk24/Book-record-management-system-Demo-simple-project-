<?php
	$con =  mysqli_connect ('127.0.0.1','root','','');
	mysqli_select_db($con,'brm_db');
	
	$q="SELECT * FROM book";
	$result = mysqli_query($con,$q);
	
	//$num =  mysqli_num_rows($result);
	//mysqli_close($con);
?>


<!DOCTYPE html>
<html>
	<head>
		<title> View Record </title>
		<link rel="stylesheet" href="./css/viewstyle.css" />
	</head>
	<body>
		<h1 align="center"> Book Record Management</h1>
	<center>	
		<table id="view_table">
			<tr>
				<th>Sr. No.</th>
				<th>Title</th>
				<th>Price</th>
				<th>Author</th>
				<th>Update</th>
			</tr>	
				<?php
					$i=1;
					while($row=mysqli_fetch_assoc($result))
					//for($i=1;$i<=$num;$i++)
					{
						//$row = mysqli_fetch_array($result);
				?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row['title'];?></td>
					<td><?php echo $row['price'];?></td>
					<td><?php echo $row['author'];?></td>
					<td><a href="updateform.php?book=<?php echo $row['bookid']; ?>">Edit</a></td>
				</tr>
				<?php	
					$i++;
					}
				?>
			</tr>
		</table>
		</center>
	</body>
	
</html>
		