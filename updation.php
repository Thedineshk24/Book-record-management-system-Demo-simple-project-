<?php
	$con = mysqli_connect('localhost','root','','brm_db');
	mysqli_select_db($con,'brm_db');
	
		$q = "UPDATE book SET title='$_POST[title]',price= '$_POST[price]',author='$_POST[author]' WHERE bookid='$_POST[book_id]'";
		//$result=mysqli_query($con,$q);
		
		if(mysqli_query($con,$q))
		{
			echo 'success';
			header('location:view.php');
		}
		else
		{
			echo 'failed';
			//header("location:updateform.php?book=$_POST['book_id']");
		}
		
	mysqli_close($con);
?>