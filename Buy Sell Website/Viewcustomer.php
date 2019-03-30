<?php
	if(isset($_COOKIE['abc'])){
?>
<html>
<body>
	<?php
	// At top:
	require('header2.php'); 
	?> 

    <table align="center" border="1px" height="100%" width="100%">

			
		<tr height="90%"background="7.jpg" valign="top">
			<td>
			</br>
				<center>
				</br>

<?php
	error_reporting(0);
	require "DBCon.php";
	$conn= DBconnection();

		$sql="SELECT * FROM original";
		$result=mysqli_query($conn,$sql);
			
		echo "	
			<body method='post' align='center'>
				
			<table border='1'  width='100%'>
			<tr align='middle' >
			<th>ID</th>
			<th>Account Name</th>
			<th>Email</th>
			<th>BD Bank Account</th>
			<th>Dollar Account</th>
			<th>Send Money</th>
			<th>Recieve Dollar</th>
			</tr>";
				
		while($row=mysqli_fetch_assoc($result)){
			echo " 
			<tr>
				<td align='middle'>".$row['id']."</td>
				<td align='middle'>".$row['account']."</td>
				<td align='middle'>".$row['email']."</td>
				<td align='middle'>".$row['too']."</td>
				<td align='middle'>".$row['form']."</td>
				<td align='middle'>".$row['send']."</td>
				<td align='middle'>".$row['rate']."</td>				
			</tr>";	
				}
				echo " </table>";
			
		
	
?>
</td>
		</tr>

</table>
	
	<?php
	// At bottom:
		require('footer.php');
	}
	else
	{
		header("location:AdminLogin.php?status=invaliduser");
	}
	?>
	
	</body>
</html>


	