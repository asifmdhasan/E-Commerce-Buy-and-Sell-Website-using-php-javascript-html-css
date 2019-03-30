<?php
  error_reporting(0);
  
	$conn= mysqli_connect('localhost', 'root', '', 'project');
		$username = $_POST['username'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
			$sql="INSERT into contact values('', '$username','$email','$subject','$message')";
?> 

<html>
<body>
	<?php
	// At top:
	require('header.php'); 
	?> 
<form method="post" action="#">
					<table height="90%" width="100%" border="5">
						<tr>
							<td>
								<center> <h1 style="color:gold;">Contact Us</h1></center>
 
								<center><h2>Your Name: <input type="text"  style="height:50px;width:300px" name="username"></h2> </center>
 
								<center><h2>Your Email: <input type="text"  style="height:50px;width:300px" name="email"></h2></center>
		
								<center><h2>Type Subject: <input type="text"  style="height:80px;width:300px" name="subject"></h2></center>
  
  
								<center><h2>Message:&nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" style="height:80px;width:300px"  name="message"><h2></center>


								<center><input type="submit" name="submit" style="height:50px;width:100px;" value="Submit">
								</center>
							</td>
						</tr>
				</table>
				</form>
	<?php
	// At bottom:
		require('footer.php');
		
	?>

</body>
</html>