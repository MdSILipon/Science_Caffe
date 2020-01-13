<!--content area starts-->
		<div id="content">
			
			<div id="form2">
				<form action="" method="post">
				<h2>Sign up here:</h2>
					<table>
						<tr>
							<td align="right">Name:</td>
							<td>
							<input type="text" name="u_name" placeholder="Enter your name" required="required"/>
							
							</td>
						</tr>
						<tr>
							<td align="right">Password:</td>
							<td>
							<input type="password" name="u_pass" placeholder="Enter your password" required="required"/>
							
							</td>
						</tr>
						<tr>
							<td align="right">Email:</td>
							<td>
							<input type="email" name="u_email" placeholder="Enter your email" required="required"/>
							
							</td>
						</tr>
						<tr>
							<td align="right">Country:</td>
							<td>
							<select name="u_country" required="required">
								<option>Select a country</option>
								<option>India</option>
								<option>Bangladesh</option>
								<option>Pakistan</option>
								<option>United states</option>
								<option>UK</option>
								<option>United Arab Emirates</option>
								<option>Australia</option>
							</select>
							
							</td>
						</tr>
						<tr>
							<td align="right">Gender:</td>
							<td>
							<select name="u_gender" required="required">
								<option>Select a gender</option>
								<option>Male</option>
								<option>Female</option>
								
							</select>
							
							</td>
						</tr>
						<tr>
							<td align="right">Birthday:</td>
							<td>
							<input type="date" name="u_birthday" />
							
							</td>
						</tr>
						<tr>
							<td colspan="6">
								<button name="sign_up">Sign up</button>
							</td>
						</tr>
					</table>
				</form>
				<?php 
				include ("user_insert.php");
				?>
			</div>
		
		</div>
		<!--content area ends-->