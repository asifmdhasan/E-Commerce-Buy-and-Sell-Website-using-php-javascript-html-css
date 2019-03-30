
<?php
session_start();
		if(isset($_COOKIE['abc'])){

$to      = $_SESSION['aaa'];
$subject = 'Thanks for transaction ';
$message = $_SESSION['ttt'] ."\r\n";
$message = $_SESSION['rrr']."\r\n";
//$headers = 'From: email@example.com' . "\r\n" .

$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

    mail($to, $subject, $message, $headers);


?>
<html>
<body>




	<?php
	// At top:
		if(isset($_COOKIE['abc'])){
	require('header.php'); 
	?> 

	<div>
		
		
        <tr height="100%" valign="top">
            <td>			
                <table align="center">
	
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
	

	
	echo "
	
			<table border='0' width='100%'>
			<tr align='middle' bgcolor='#CCCCCC'valign='top'>
			<center>
			<td>
			<h2>			</td>				
			</center>
			</tr>
			</table>
	
		<table border='0' width='100%'>
			<tr align='middle' bgcolor='yellow'valign='top'>
			<center>
		<td>  <font size='10' color='green'/>".$_SESSION['www']."</td>					
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		<td> <font size='10' color='green'/>".$_SESSION['eee']."
		</center>
		</tr>
		</table>
		<table>
		<tr>
			</tr>
</table>	";		
			echo "
			<table border='0' width='100%'>
				<tr   align='left' bgcolor='#99FF33'valign='top'>
				<td>
					Your Exchange ID : ".$id."</br></br>
					Your Email ID : ".$_SESSION['aaa']."</br></br>
					Your Account Id  : ".$_SESSION['qqq']."</br></br>
					Send Account Name: ".$_SESSION['www']."</br></br>
					Receive Account Name :".$_SESSION['eee']."</br></br>
					You Receive Dollar : ".$_SESSION['rrr']."</br></br>
					You Send Money : ".$_SESSION['ttt']."</br></br></br>
					</td>
				</tr>";	
	echo " </table>";
	?>

	</div>				
    </table>
	<?php
	// At bottom:
		require('footer.php');
		}
		}
	?>

</body>
</html>
