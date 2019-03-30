<?php
	session_start();


		setcookie ('abc','valid',time()-1,'/');
		header("location:AdminLogin.php");
	
	session_destroy();
?>

<body>
    <table align="center" border="1px" height="100%" width="100%">
			<tr height="90%"background="1.jpg" valign="top">
				<td>
	<center>
	<table>
		<tr>
			<td>
				<center>
				<h1 style="color:green;">Login</h1></br></center>
				<center>

				
				
				</center>
			</td>
		</tr>
	</table>
</center>
</td>
</tr>
<tr>
<td>
<table align="center">
	<tr>
		<td>Copyright@abc.com</td>
	</tr>
</table>
</td>
</tr>
</table>
</body>