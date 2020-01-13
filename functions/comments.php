<?php

			$get_id=$_GET['post_id'];
				
			$get_com="select * from comments where post_id='$get_id'";
			
			$run_com=mysqli_query($con,$get_com);
			
			while($row=mysqli_fetch_array($run_com)){
				
				$com=$row['comment'];
				$com_name=$row['comment_author'];
				$date=$row['date'];
				
				echo"
				<div id='comments' style='background:#F5F5DC;padding:5px;width:600px;border-bottom:2px solid #F0FFF0;'>
				<h3 style='color:brown;'>$com_name</h3><span style='color:blue;'><i>said </i>on $date
				<p style='line-height:20px;font-size:16px;padding:5px;color:black;'>$com</p>
				</div>
				";
			}


?>