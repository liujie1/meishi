<?php
	header('Content-type:text/html;charset=UTF-8');

	$conn = new mysqli("localhost", "root", "", "UserCenter");
	mysqli_query($conn, "set character set 'utf8'");
	mysqli_query($conn, 'set names utf8');
	
	$success=0;
	//更改数据
	if($_POST["myid"]!=null && $_POST["zhi"]!=null) {
		
		
		$_POST["zhi"]=$_POST["zhi"]+1;
		
		$ju="update satin set zan= '".$_POST["zhi"]."' where ID = '".$_POST["myid"]."'";
		
		if ($conn->query($ju) == true) {
			$success = 1;
		}
	}
	
	
	echo $success;
?>