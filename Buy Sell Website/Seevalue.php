<?php
session_start();
  error_reporting(0);
	$conn= mysqli_connect('localhost', 'root', '', 'project');
// Create connection
try {
    // set the PDO error mode to exception

    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>
<select name="name" ID="name" onchange="myFunction()" class="form-control">
<option value="Select">Select</option>
<?php
$qu="Select DISTINCT Cname,Caddress,Ccontact from Client_table";
$res=$conn->query($qu);

while($r=mysqli_fetch_row($res))
{ 
    echo "<option data-add='$r[1]'  data-con='$r[2]'  value='$r[0]'> $r[0] </option>";
}
?> 
</select>
<label>Address</label><input type="text" name="add" id="add"/>
<label>Contact</label><input type="text" name="con" id="con"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>


    function myFunction(){
        var address = $('#name').find(':selected').data('add');
        var contact = $('#name').find(':selected').data('con');
        $('#add').val(address);
        $('#con').val(contact);
    }
</script>