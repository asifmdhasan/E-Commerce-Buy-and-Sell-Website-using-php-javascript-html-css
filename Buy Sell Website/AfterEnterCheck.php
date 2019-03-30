<html>
<body>
	<?php
	// At top:
		if(isset($_COOKIE['abc'])){
	require('header.php'); 
	?> 
	<table>
	<tr border="1">
	<tr>
	<div>	            			
        <table  border="1" width ="100%">
		<tr height="100%" valign="top">
	<td>
	<?php
	error_reporting(0);
	session_start();
	$conn= mysqli_connect('localhost', 'root', '', 'project');
	$account = $_POST['account'];
	$bysend = $_POST['bysend'];
	$id = $_POST['id'];
		$sql="SELECT * FROM original";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		$id=$row['id'];
			echo "</br></br></br></br>
			<table>
			<tr>
			<td>
			My Exchanges </br></br></br></br>
			Your Transection Id : 
			<a href='AfterEnter.php'>".$id."</a>
			</br></br></br></br></br></br></br></br>
			</td>
			</tr>";	
		echo " </table>";
	?>
	</table>
		</div>

	<?php
	// At bottom:
		require('footer.php');
		}
	?>

</body>
</html>
