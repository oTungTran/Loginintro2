<?php
$conn_string="host=ec2-52-87-135-240.compute-1.amazonaws.com port=5432
 dbname=da7kglvikenhda
 user=ltrdfejxrzhpck
 password=96601efc1e7f3828e3d4bc283eb6d2394aa1de2728026437c293bac1540801f3
";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}
if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM tblAccount WHERE _user='".$username."' AND _pass'".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if($row==1)
{
	echo "Login success";
}
else
{
	echo "Login Failed";
}
?>
