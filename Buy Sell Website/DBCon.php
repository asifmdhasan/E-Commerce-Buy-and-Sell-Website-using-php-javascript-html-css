<?php

	function DBconnection(){
		$conn= mysqli_connect('localhost', 'root', '', 'project');

		return $conn;
	}
?>