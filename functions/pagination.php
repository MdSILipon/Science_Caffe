<?php

	$query="select * from posts";
	$result=mysqli_query($con,$query);
	//count total records
	$total_records=mysqli_num_rows($result);
	//using ceil to divide total records per page
	$total_pages=ceil($total_records/$per_page);
	//going to first page
	echo"
		<center>
		<div id='pagination'>
		<a href='home.php?page=1'>First page</a>
	";
	for($i=1;$i<=$total_pages;$i++){
		echo"<a herf='home.php?page=$i'>$i</a>";
	}
	//going to the last page
	echo"<a href='home.php?page=$total_pages'>Last page</a></center></div>";


?>