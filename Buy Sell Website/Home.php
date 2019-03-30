<?php
session_start();
  error_reporting(0);
	$conn= mysqli_connect('localhost', 'root', '', 'project');
	//if(isset($_SESSION['abc'])) {
	//echo "Your session is running " . $_SESSION['abc'];
	//}
	$erraccount = $erremail = $errsendmoney = $errreceivemoney = "" ;
	if(isset($_POST['submit']))
	{
		$account = $_POST['account'];
		$bysend = $_POST['bysend'];
		$sendmoney = $_POST['sendmoney'];
		$byreceive = $_POST['byreceive'];
		$receivemoney = $_POST['receivemoney'];
		$email = $_POST['email'];

		if (empty($_POST['account'])) 
		//if (empty($_POST["username"])) 
		{
			$erraccount = "Account is required";
		}
        elseif(strlen($account)<2)
		{
            $erraccount = "Too short";
        }
        elseif(!(($account[0]>='a' && $account[0]<='z') || ($account[0]>='A' && $account[0]<='Z'))){
            $erraccount = "Not allow";
        } 
		
		if (empty($_POST['sendmoney'])) 
		{
			$errsendmoney = "sendmoney is required";
		}		
		if (empty($_POST['receivemoney'])) 
		{
			$errreceivemoney = "receivemoney is required";
		}
		if (empty($_POST["email"])) 
		{
			$erremail = "email is required";
		}
		
		if($_POST["email"]) 
		{
			$arr = explode("@",$email);
			if(count($arr)>=2)
			{
				$lastindex = $arr[count($arr)-1];
				$arr = explode(".",$lastindex);
				if(count($arr)>=2)
				{
					if($arr[0]=="")
					{
						$erremail = "'@' and '.' do not sit beside";
					}
					elseif($arr[count($arr)-1]=="")
					{
						$erremail = "'.' can not be last word";
					}
					else
					{
						$email;
						$erremail ="";
					}
				}
				else
				{
					$erremail ="There has no (.)";
				}
			}
			else
			{
				$erremail = "There has no (@)";
			}
		}
		if($receivemoney<20)
		{
			$errreceivemoney = "Minimum input 20 dollar";
		}
		
		if(empty($erraccount) && empty($errsendmoney) && empty($errreceivemoney) && empty($erremail))
		{
			$sql="INSERT into original values('', '$account','$email','$bysend','$byreceive','$receivemoney','$sendmoney')";
			//echo $account;
			if(mysqli_query($conn, $sql))
			{
								setcookie('abc','valid',time()+3600,'/');
				header("location:AfterEnterCheck.php");
				$_SESSION['qqq']= "$account";
				$_SESSION['aaa']= "$email";
				$_SESSION['www']= "$bysend";
				$_SESSION['eee']= "$byreceive";
				$_SESSION['rrr']= "$receivemoney";
				$_SESSION['ttt']= "$sendmoney";
				//echo "Your session is running " . $_SESSION['abc'];
				$_SESSION['abc']= "$username";
			}
			else
			{
				echo "Not insert";		
			}
		}
		else
		{
			echo "please Fillup Properly";
			header("location:Home.php");
		}
	}
?> 
<html>
<body>
	<?php
	// At top:
	require('header1.php'); 
	?>        
    <center>
		<table border="0">
			<tr>
				<td align="center">
					<a href="Home.php"><img valign="top" src="3.jpg" height="65%" width="1000px"></a>
				</td>      
			</tr>
		</table>
	</center>
	
	<form method="post" action="#">
		</br>
		<div>
			<table border="0"  style="width:70%; float:left"  bgcolor="#66FF00">
				<tr>
				<tr>
					<td>
		
						<?php

						session_start();
						error_reporting(0);
						$conn= mysqli_connect('localhost', 'root', '', 'project');
						$sql="SELECT * FROM test1";
						$result=mysqli_query($conn,$sql);
						$result1=mysqli_query($conn,$sql);
						?>
						</br>
							<h4 style="color:black;">Type your valid Account :
							<input type="text" name="account" style="height:25px;width:180px" /></h4>
							<h4 style="color:black;">Type your valid Email :&nbsp &nbsp
							<input type="text" name="email" style="height:25px;width:180px"/></h4><?php echo $email?> 
					</td>
				</tr>
				<tr>
	
					<td width="50%">
					<center>
					<h3>Send :</h3>	
				
					<select name="bysend" ID="name1" onchange="myFunction()" class="form-control"style="height:30px;width:150px">
					<option value="Select">Select</option>
					<?php
						$qu="Select DISTINCT too,send from test6";
						//$qu="Select DISTINCT fromm,receive from test4";
						$res=$conn->query($qu);

						while($r=mysqli_fetch_row($res))
						{ 
							//echo "<option data-add='$r[1]'  value='$r[0]'> $r[0] </option>";
							echo "<option data-add='$r[1]'value='$r[0]'> $r[0] </option>";
						}
					?> 
					</select>
		
					</br><input type="text" name="sendmoney" id="add" style="height:30px;width:150px " onkeyup="calculate();"/>
					</center>
		</td>		
		<td align="0%">
			<h3>Receive :</h3>
		
				<select name="byreceive" ID="name2" onchange="myFunction()" class="form-control"style="height:30px;width:150px">
					<option value="Select">Select</option>
					<?php
		
						$qu1="Select DISTINCT form,receive from test7";
						$res1=$conn->query($qu1);
						while($r=mysqli_fetch_row($res1))
						{ 
							echo "<option data-con='$r[1]'  value='$r[0]'> $r[0] </option>";
						}
					?> 
				</select>
				</br><input type="text"style="height:30px;width:150px" id="con" onkeyup="calculate();" disabled />
		</td>
	</tr>

	<tr>
	<td>
	 </br><center>Your Convert Amount : <input name="receivemoney" placeholder="Minimum 20"id="result1"  readonly="readonly" style="height:30px;width:150px"onkeyup="test()"/>
	</td>
	</tr>
	<tr>
		<td>
			<center></br>
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			<input type="submit"name="submit"style="height:40px;width:100px"value="Exchange"></br></center>	
		</td>
	</tr>
	</tr>
</table>
</div>
</form>

<div>
<table border="1" style="width:30%; float:right" align="top" bgcolor="#FFFFDD">
	<tr>
		<td align="middle">
			<h3>Our Service</h3>
			Neteller USD</br>
			740.95 USD</br></br>

			PM USD</br>
			0.52 USD</br></br>

			Payoneer USD</br>
			9 USD</br></br>

			Paypal USD</br>
			00 USD</br></br>

			Skrilll. USD</br>
			20 USD</br></br>

			Payeer. USD</br>
			9 USD</br></br>

			Webmoney. USD</br>
			00 USD</br></br>

			Coinbase BTC USD</br>
			9 USD</br></br>

			Coinbase ETH USD</br>
			9 USD</br></br>

			bKash Agent BDT</br>
			1000 BDT</br></br>

			bKash Personal BDT</br>
			44984 BDT</br></br>

			Rocket Agent BDT</br>
			1000 BDT</br></br>

			Rocket Personal BDT</br>
			41244 BDT</br></br>

			DBBL BDT</br>
			50000 BDT</br>

		</td>
	</tr>
</table> 
</div>

<div>
	<table border="1"style="width:50%; float:left"  bgcolor="#B5D3E7">	
		<tr>
			</br><h2 style="color:#069">Awesome Testimonials</h2>
			<td align="middle">
			<h5>
			This site is,
			unbelievable,Really
			first,I think this 
			is the best site
			for buy/sell.
			Thank you, thank
			you very much,,
			You are working as
			a machine really
 			best you are,,,</h5>
 			<h6>asif hasan</h6>
			</td>
			<td align="middle">
			<h5>
			I personally recommend BSD
			services to others.
			They provide quick 
			services than others.</h5>
			<h6>Farheen</h6>
			</td>
	
			<td align="middle">
			<h5>
			my transection proceeds
			within 3 minute.
			Go ahead BSD we are with you</h5>
			<h6>Tabin Mohammad</h6>
			</td>
    </tr>
  </table>
</div>
</br></br></br></br></br></br></br></br></br>
<div>

<table border="1"  style="width:70%; float:left" bgcolor="#009910">
<tr>
<td>
 Latest Buy & Sell
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
			<table border='2'  width='70%'>
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			function myFunction()
			{
				var address = $('#name1').find(':selected').data('add');
				var contact = $('#name2').find(':selected').data('con');
				$('#add').val(address);
				$('#con').val(contact);
			}
		</script>
		<script>
		
		function calculate() 
		{
			var myBox1 = document.getElementById('add').value; 
			var myBox2 = document.getElementById('con').value;
			var result1 = document.getElementById('result1'); 
			var myResult = myBox1 * myBox2;
			result1.value = myResult;
		}
			
	</script>
	<script>
	function test() 
	{
	if (document.getElementById.value =<20)
    {
      alert("Minimum 20");
      return false;
    }
	}
	
	
	</script>
	
	<?php
	// At bottom:
		require('footer.php');
	?>
	
	</body>
</html>







