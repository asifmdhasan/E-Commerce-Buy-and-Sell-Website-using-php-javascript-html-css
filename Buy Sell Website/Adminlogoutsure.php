<?php
	if(isset($_COOKIE['abc'])){
?>

<body>
    <table align="center" border="1px" height="100%" width="100%">
			<tr height="20px" background="5.jpg">
				<td>
					<a href="Adminpanel.php"><img valign="top" src="aes1.png" height="47px" width="150px"></a>
					&nbsp;&nbsp;<font size="6" color="black">AES</font><font size="3px" color="black">ShoppingCenter</font>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp
					&nbsp &nbsp &nbsp 
					
					<a href="Adminpanel.php"><font size="5" color="yellow">Home</font></a> |					
					<a href="Adminprofile.php"><font size="5" color="yellow">Profile</font></a>  |
					<a href="AdminLogout.php"><font size="5" color="yellow">Logout</font></a>
				</td>
			</tr>
			
			<tr height="70%"background="99.jpg" valign="top">
				<td>
				</br>
		<center>
			<ul id='menu'>
			<li><a href = 'Viewproduct.php'>View Product</a></li>
			<li><a href = 'Productentry.php'>Product Entry</a></li>
			<li><a href = 'Viewcustomer.php'>View Customer</a></li>
			<li><a href = 'Adminlogoutsure.php'>Logout</a></li>
			</ul> 
			</center>
			<center>
			<h1  style="color:blue;">Are you sure??</h1>
			<h2><a style="color:red;" href = "AdminLogout.php">Logout!!</a><h2>
			</center>
	<style>
	ul#menu {
		padding:0;
	}
	ul#menu li {
		display:inline;
	}
	ul#menu li a {
		background-color:blue;
		color:white;
		padding: 10px 20px;
		text-decoration:none;
		border-radius: 4px 4px 0 0;
	}
	ul#menu li a:hover{
		background-color:orange
	}
	</style>

	</td>
	</tr>
	</table>

				<table border="1" align="center"  width="100%">
		<tr>
			<td align="middle">Copyright@abc.com</td>
		</tr>
</table>
<?php
	}
	?>
</body>
