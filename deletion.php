<?php
	$size = sizeof($_POST);
	
	$j=1;
	
	for($i=1;$i<=$size;$i++,$j++)
	{
		$index="b".$j;
		
		if(isset($_POST[$index]))
			$b_id[$i]=$_POST[$index];// if u use a code like this ==> $b_id[$i] = $_POST['$index]'; this will cause an Error
		else
			$i--;
	}

	$con = mysqli_connect('localhost','root','','');
	mysqli_select_db($con,'brm_db');
	
	for($k=1;$k<=$size;$k++)
	{
		$q = "DELETE FROM book WHERE bookid=".$b_id[$k];
		mysqli_query($con,$q);
	}
	
	header("location:deleteform.php");
	mysqli_close($con);
?>