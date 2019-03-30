<?php
	session_start();
	
		if(isset($_GET['status'])){
		$status = $_GET['status'];

		if($status == "invaliduser"){
			echo '<center><span style="color:red;">Name or Password did not match !!!</span>';
		}else if($status == "nullvalue"){
			echo '<center><span style="color:red;">Name/Password not be null !!!</span>';
		}
	}
?>
<html>
<body>
	<?php
	// At top:
	require('header1.php'); 
	?> 
			<tr height="90%"background="1.jpg" valign="top">
				<td>
	<center>
	<table>
		<tr>
			<td>
				<center>
				<h1 style="color:blue;">Login</h1></br></center>
				<center>
				<form method="post" action="CheckAdminLogin.php">
					AdminName : <input type="text"placeholder="Name" name="username"><br/>
					Password &nbsp  &nbsp &nbsp: <input type="password"placeholder="Password" name="password"></br></br>
					<input name="submit" type="submit" style="color:blue;" Value="Login"><br/><br/>
				</form>
				</center>
			</td>
		</tr>
	</table>
</center>
</td>
</tr>

	
	<?php
	// At bottom:
		require('footer.php');
	?>
	
	</body>
</html>
	