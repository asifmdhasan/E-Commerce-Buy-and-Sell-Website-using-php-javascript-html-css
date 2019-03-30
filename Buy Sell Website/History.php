<html>
<body>
	<?php
	// At top:
	require('header.php'); 
	?> 


<div>

<table border="1"  style="width:100%; float:left" bgcolor="#009910">
<tr>
<td>
 <center>Latest Buy & Sell</center>
 </td>
 </tr>
</table>
<table>
<tr>
<?php
	session_start();
	error_reporting(0);
  
	$conn= mysqli_connect('localhost', 'root', '', 'project');
		$sql="SELECT * FROM original";
		$result=mysqli_query($conn,$sql);
		echo "	
			<table border='2'  width='100%'>
				<tr align='middle' >
				<th>Send Account</th>
				<th>Receive Account</th>
				<th>Transection</th>
				</tr>";
	
				while($row=mysqli_fetch_assoc($result)){
					echo " 
					<tr>
					<td align='middle'>".$row['too']."</td>
					<td align='middle'>".$row['form']."</td>
					<td align='middle'>".$row['send']."</td>
					</tr>";	
				}
				echo " </table>";
?>
		</tr>
		</table>
		</div>
			<?php
	// At bottom:
		require('footer.php');
		
	?>

</body>
</html>