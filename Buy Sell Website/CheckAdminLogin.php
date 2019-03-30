<?php
error_reporting(0);
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username=="" || $password==""){
		header("location:AdminLogin.php?status=nullvalue");
	}
	else{
		if($username=="alam@gmail.com" && $password=="alam@@alam00")
		{
			setcookie('abc','valid',time()+3600,'/');
			$isvalid = "validuser";
		}
		if($isvalid == "validuser")
		{
			echo $_COOKIE['abc'];
			$_SESSION['abc']= "123";
			header("location:Viewcustomer.php");
		}
		else
		{
			header("location:AdminLogin.php?status=invaliduser");
		} 
		
	}
}

?>